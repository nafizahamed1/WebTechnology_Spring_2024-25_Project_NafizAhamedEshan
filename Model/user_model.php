<?php
    require_once('db.php');

    // add a user 
    function addUser($user){
        $con = getConnection();
        $sql = "insert into users values(null, '{$user['email']}', '{$user['hash']}', '{$user['role']}')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        } 
    }
    
    // email already exists in the database 
    function checkExistingUser($email){
        $con = getConnection();
        $sql = "select * from users where email = '{$email}'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            return true;
        }
        return false;
    }

    function checkExistingPass($user){
        $con = getConnection();
        $sql = "select hash from users where email = '{$user['email']}'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($user['pass'], $row['hash'])){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    function login($user){
        $con = getConnection();
        $sql = "select hash from users where email = '{$user['email']}'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            
            if(password_verify($user['pass'], $row['hash'])){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    function retrieveUserID($email){
        $con = getConnection();
        $sql = "select user_id from users where email='{$email}'";
        $result = mysqli_query( $con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['user_id'];
    }

    function retrieveProPic($userID){
        $con = getConnection();
        $sql = "select profile_picture from patients where user_id='{$userID}'";
        $result = mysqli_query( $con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['profile_picture'];
    }

    function retrieveRole($email){
        $con = getConnection();
        $sql = "select role from users where email='{$email}'";
        $result = mysqli_query( $con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['role'];
    }
    function addPatient($patient){
        $con = getConnection();
        $sql = "insert into patients values(null, '{$patient['name']}', '{$patient['dob']}', '{$patient['phone']}',
         '{$patient['pp']}', '{$patient['ds']}', '{$patient['bg']}', '{$patient['address']}', '{$patient['city']}', 
         '{$patient['em_n']}', '{$patient['em_r']}', '{$patient['em_p']}', '{$patient['user_id']}')";
         if($result = mysqli_query($con, $sql)){
            return true;
         }
        return false;
    }  

    function addMedicalHistory($user){
        $con = getConnection();
        $sql = "insert into medical_histories values(null, '{$user['userHistory']}', 
        '{$user['familyHistory']}', '{$user['currentDrug']}', '{$user['previousDrug']}', '{$user['weeklyActivity']}', 
        '{$user['user_id']}')";
        if($result = mysqli_query($con, $sql)){
            return true;
        }
        return false;
    }

    function updatePass($user){
        $con = getConnection();
        $sql = "UPDATE users SET hash='{$user['hash']}' WHERE email='{$user['email']}'";

        if(mysqli_query( $con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getUserInfo($id, $role){
        $con = getConnection();
        $sql = "";
        if($role == 'patient'){
            $sql = "SELECT patients.*, users.email, users.role FROM patients JOIN users ON users.user_id = patients.user_id WHERE patients.user_id = {$id}";
        }
        else if($role == 'staff'){
            $sql = "select staffs.*, users.email from patients JOIN patients on users.user_id = patients.user_id where patients.user_id = {$id}";
        } else if($role == 'receptionist'){
            $sql = "select receptionists.*, users.email from patients JOIN patients on users.user_id = patients.user_id where patients.user_id = {$id}";
        }
        $result = mysqli_query( $con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
?> 