<?php
  session_start();

  if (isset($_SESSION["user_email"])){
    if(isset($_POST['button-main'])) {
      $bg = $_POST['user-blood-group'];
      $dob = $_POST['user-dob'];
      $address = trim($_POST['user-address']);
      $city = trim($_POST['user-city']);
      $emName = trim($_POST['user-em-name']);
      $emRelation = trim($_POST['user-em-relation']);
      $emPhone = $_POST['user-em-phone'];

     
      if($bg == "Select" || $dob == "" || $address == "" || $city == "") {
        echo "<script>alert('Please Fill all the fields!');
          window.location.href = '../../View/User Authentication/detailed_signup.php';
          </script>";
          exit;
      }

     
      for($i = 0; $i < strlen($city); $i++){
        if(($city[$i] < 'A' || $city[$i] > 'Z') && ($city[$i] < 'a' || $city[$i] > 'z') && $city[$i] != '.' && $city[$i] != '-' && $city[$i] != ' ' ){
          echo "<script>alert('Invalid City');
            window.location.href = '../../View/User Authentication/detailed_signup.php';
            </script>";
            exit;
        }
      }

    
      for($i = 0; $i < strlen($emName); $i++){
        if(($emName[$i] < 'A' || $emName[$i] > 'Z') && ($emName[$i] < 'a' || $emName[$i] > 'z') && $emName[$i] != '.' && $emName[$i] != '-' && $emName[$i] != ' ' ){
          echo "<script>alert('Invalid Name');
            window.location.href = '../../View/User Authentication/detailed_signup.php';
            </script>";
            exit;
        }
      }

      
      for($i = 0; $i < strlen($emRelation); $i++){
        if(($emRelation[$i] < 'A' || $emRelation[$i] > 'Z') && ($emRelation[$i] < 'a' || $emRelation[$i] > 'z') && $emRelation[$i] != '.' && $emRelation[$i] != '-' && $emRelation[$i] != ' ' ){
          echo "<script>alert('Invalid Relation');
            window.location.href = '../../View/User Authentication/detailed_signup.php';
            </script>";
            exit;
        }
      }


     
      if(($emPhone[0] == '+' && strlen($emPhone) != 14) || ($emPhone[0] != '+' && strlen($emPhone) != 11)){
        echo "<script>alert('Invalid Phone Number');
            window.location.href = '../../View/User Authentication/detailed_signup.php';
            </script>";
            exit;
      }

      for( $i = 0; $i < strlen($emPhone); $i++ ){
        if($i == 0 && $emPhone[$i] == '+'){
          continue;
        }

        if($emPhone[$i] < '0' || $emPhone[$i] > '9'){
          echo "<script>alert('Invalid Phone Number');
            window.location.href = '../../View/User Authentication/detailed_signup.php';
            </script>";
            exit;
        }
      }



      $_SESSION['user_blood_group'] = $bg;
      $_SESSION['user_dob'] = $dob;
      $_SESSION['user_address'] = $address;
      $_SESSION['user_city'] = $city;
      $_SESSION['user_em_name'] = $emName;
      $_SESSION['user_em_relation'] = $emRelation;
      $_SESSION['user_em_phone'] = $emPhone;
      header("Location: ../../View/User Authentication/medical_history.php");

    }else{
      echo "<script>alert('Invalid Request...');
            window.location.href = '../../View/Landing Page/index.html';
            </script>";
            exit;
    }
  }else{
    header("Location: ../../View/Landing Page/index.html");
  }
?>