<?php 
session_start();
require_once "../connection/ApiController.php";
$portCont = new appController();

if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        
        case "validate": 
            if(isset($_POST['login'])){
            
                $email = $_POST['email'];
                $password = md5($_POST['password']);
               
                if(!empty($email) && !empty($password))
                {
                 
                 
                 $userCredentials = $portCont->userLogin($password, $email);
                 if(!empty($userCredentials))
                 {
                    $email = $userCredentials[0]["email"];
                    // $code = rand(6666,9999);
                    // $portCont->userMailValidation($email, $code);
                    // require "mail/security.php";
    
                    if($userCredentials[0]["designation"] == 1)
                    {
                        $_SESSION['user_id'] = $userCredentials[0]["user_id"];
                        $user_id = $_SESSION['user_id'];
                        
                        if (isset($_POST['remember_me'])) {
                            function generateRandomToken($length = 32) {
                                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                $token = '';
                            
                                for ($i = 0; $i < $length; $i++) {
                                    $token .= $characters[mt_rand(0, strlen($characters) - 1)];
                                }
                            
                                return $token;
                            }
                            
                            $token = generateRandomToken();
                            $portCont->saveTokenToDatabase($user_id, $token);
                            setcookie('remember_me_cookie', $token, time() + (30 * 24 * 60 * 60)); // Cookie expires in 30 days
                        }
                        
                        header('Location: ../ADMIN/home.php');
                        exit;
                    }
                }else{
    
                }
              }
            }
            break;   


            case "register":
                if(isset($_POST['register'])){

                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    $phone = $_POST['phone'];
                    $designation = $_POST['designation'];
               
                    if(!empty($email) && !empty($password) && !empty($phone) && !empty($designation))
                    {
                        $existingUser = $portCont->userExisting($email, $phone);

                        if(!empty($existingUser))
                        {
                            header('Location: index.php?view=REGISTER&message=FAILED');
                        }else{
                            $code = rand(6666,9999);
                            $status = 'UNVERIFIED';
                            $date_created = date('Y-m-d');
                            require "mail/verification.php";
                            $portCont->registerUser($email, $phone, $password, $designation, $code, $status, $date_created);
                            header('Location: index.php?view=VERIFICATION&email='.$email.'&message=SUCCESS');
                        }
                    }
                }
            break;

            case "approvestatus":
                if(isset($_POST['verify'])){
                      $email = $_POST['email']; 
                      $code = $_POST['code'];

                      if(!empty($email) && !empty($code))
                      {
                         $approveUser = $portCont->userCodeExisting($email, $code);
                         if(!empty($approveUser)){
                            require "mail/verification_confirmation.php";
                            $portCont->userAccountVerified($code);
                            header('Location: index.php');
                         }else{
                            header('Location: index.php?view=VERIFICATION&email='.$email.'&message=FAILED'); 
                         }
                      }
                }
            break;

            case "forgot":
                if(isset($_POST['recover'])){
                    $email = $_POST['email']; 
                    if(!empty($email))
                    {
                       $forgotUser = $portCont->forgotUser($email); 
                       if(!empty($forgotUser))
                       {
                          require "mail/forgot_user.php";   
                          header('Location: index.php?view=PASSWORD&email='.$email);
                       }else {
                          header('Location: index.php?view=FORGOT&message=NONEXISTENTUSER');
                       }                    
                    }
                }
            break;

            case "newpass": 
                if(isset($_POST['update'])){
                    $email = $_POST['email']; 
                    $password = $_POST['password']; 
                    $upass = md5($password);

                    if(!empty($email) && !empty($password))
                    {
                        require "mail/password_change_succesfull.php";
                        header('Location: index.php');
                    }else{
                        header('Location: index.php?view=PASSWORD&email='.$email);
                    }
                }
            break;
    }
}

?>