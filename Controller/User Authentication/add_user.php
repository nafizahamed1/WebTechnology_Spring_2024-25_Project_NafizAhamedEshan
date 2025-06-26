<?php

  require_once("../../Model/user_model.php");
  session_start();

  if(!isset($_SESSION["user_email"])){
    header("Location: ../../View/Landing Page/index.html");
    exit;
  }

    if(isset($_POST['button-main'])) {

      
      $patientMedicalHistory = "";
      for($i = 0; $i < 16; $i++){
        if(isset($_POST["patient-medical-history-".$i])){
          $patientMedicalHistory = $patientMedicalHistory . $_POST["patient-medical-history-" . $i] . ",";
        }  
      }
      
      if(isset($_POST["patient-medical-history-others"])) {
        $patientMedicalHistory = $patientMedicalHistory . $_POST["patient-medical-history-others"];
      }
      else{
        if($patientMedicalHistory != ""){
          $patientMedicalHistory = substr($patientMedicalHistory,0,-1);
        }
      }

      
      
      

      $familyMedicalHistory = "";
      for($i = 0; $i < 16; $i++){
        if(isset($_POST["family-medical-history-".$i])){
          $familyMedicalHistory = $familyMedicalHistory . $_POST["family-medical-history-" . $i] . ",";
        }  
      }

      if(isset($_POST["family-medical-history-others"])) {
        $familyMedicalHistory = $familyMedicalHistory . $_POST["family-medical-history-others"];
      }
      else{
        if($familyMedicalHistory != ""){
          $familyMedicalHistory = substr($familyMedicalHistory,0,-1);
        }
      } 

      $currentDrug = $_POST[''];
      $previousDrug = $_POST[''];
      $pmOthers = $_POST['patient-medical-history-others'];
      $fmOthers = $_POST['family-medical-history-others'];
      $weeklyActivity = $_POST['weekly-activity-level'];

      for($i = 0; $i < strlen($pmOthers); $i++){
      if(($pmOthers[$i] < 'A' || $pmOthers[$i] > 'Z') && ($pmOthers[$i] < 'a' || $pmOthers[$i] > 'z') && $pmOthers[$i] != '.' && $pmOthers[$i] != '-' && $pmOthers[$i] != ' ' ){
        echo "<script>alert('Invalid Patient Other Medical History');
          window.location.href = '../../View/User Authentication/signup.php';
          </script>";
          exit;
        }
      }

     
      for($i = 0; $i < strlen($fmOthers); $i++){
      if(($fmOthers[$i] < 'A' || $fmOthers[$i] > 'Z') && ($fmOthers[$i] < 'a' || $fmOthers[$i] > 'z') && $fmOthers[$i] != '.' && $fmOthers[$i] != '-' && $fmOthers[$i] != ' ' ){
        echo "<script>alert('Invalid Patient Other Medical History');
          window.location.href = '../../View/User Authentication/signup.php';
          </script>";
          exit;
        }
      }

    
      for($i = 0; $i < strlen($currentDrug); $i++){
      if(($currentDrug[$i] < 'A' || $currentDrug[$i] > 'Z') && ($currentDrug[$i] < 'a' || $currentDrug[$i] > 'z') && $currentDrug[$i] != '.' && $currentDrug[$i] != '-' && $currentDrug[$i] != ' ' ){
        echo "<script>alert('Invalid Current Drug Names');
          window.location.href = '../../View/User Authentication/signup.php';
          </script>";
          exit;
        }
      }


      for($i = 0; $i < strlen($previousDrug); $i++){
      if(($previousDrug[$i] < 'A' || $previousDrug[$i] > 'Z') && ($previousDrug[$i] < 'a' || $previousDrug[$i] > 'z') && $previousDrug[$i] != '.' && $previousDrug[$i] != '-' && $previousDrug[$i] != ' ' ){
        echo "<script>alert('Invalid Previous Drug Names');
          window.location.href = '../../View/User Authentication/signup.php';
          </script>";
          exit;
        }
      }


      if(!isset($weeklyActivity)){
        echo "<script>alert('Please select weekly activity level!');
          window.location.href = '../../View/User Authentication/signup.php';
          </script>";
          exit;
        }


      $_SESSION["user_family_medical_history"] = $familyMedicalHistory;
      $_SESSION["user_medical_history"] = $patientMedicalHistory;
      $_SESSION['user_current_drug'] = $_POST['user-current-drug'];
      $_SESSION['user_previous_drug'] = $_POST['user-previous-drug'];
      $_SESSION['user_weekly_activity_level'] = $_POST['weekly-activity-level'];


  
      $user = ['email' => $_SESSION['user_email'], 'hash' => $_SESSION['user_pass'], 'role' => $_SESSION['user_role']];

      if(addUser($user)){
      }


      $_SESSION['user_id'] = retrieveUserID($_SESSION['user_email']);
      

      
      $distinctUserInfo = ['name' => $_SESSION['user_name'], 'dob' => $_SESSION['user_dob'],
      'phone' => $_SESSION['user_phone'], 'email' => $_SESSION['user_email'], 'pp' => $_SESSION['user_profile_picture'],
      'ds' => $_SESSION['user_digital_signature'], 'bg' => $_SESSION['user_blood_group'], 'address' => $_SESSION['user_address'],
      'city' => $_SESSION['user_city'], 'em_n' => $_SESSION['user_em_name'], 'em_r' => $_SESSION['user_em_relation'],
      'em_p' => $_SESSION['user_em_phone'], 'user_id' => $_SESSION['user_id']];

      if($_SESSION['user_role'] == "patient"){
        if(addPatient($distinctUserInfo)){
          $userMedicalHistory = ['userHistory' => $_SESSION['user_medical_history'],
                            'familyHistory' => $_SESSION['user_family_medical_history'],
                            'currentDrug' => $_SESSION['user_current_drug'],
                            'previousDrug' => $_SESSION['user_previous_drug'],
                            'weeklyActivity' => $_SESSION['user_weekly_activity_level'],
                            'user_id' => $_SESSION['user_id']];
          if(addMedicalHistory($userMedicalHistory)){
            echo "<script>alert('Signup Successful. Please use the email and password to login!');
            window.location.href = '../../View/User Authentication/login.php';
            </script>";
            exit;
          }
        }
        else{
          echo "<script>alert('An Error Occurred!');
            window.location.href = '../../View/User Authentication/signup.php';
            </script>";
            exit;
        }
      }
  } else{
    echo "<script>alert('Invalid Request!');
          window.location.href = '../../View/Landing Page/index.html';
          </script>";
          exit;
  }
?>