<?php 
include('connection/LoginSession.php');
require_once "connection/ApiController.php";
$portCont = new appController();

$userSession = $portCont->getUserDetails($session_id);
$code = $userSession[0]['code'];
$myCompany = $portCont->getCompanyDetails($code);
$checkProfilePicture = $portCont->getProfilePicture($code);
$userDetails = $portCont->getUserCompleteDetails($code);
$clientBookingDetails =  $portCont->myTotalBookings($code);
$clientBookingDetailsToday = $portCont->myBookingsToday($code);
$OwnerBookingDetails = $portCont->myOwnerTotalBookings($code);
$OwnerBookingDetailsCompleted = $portCont->myOwnerTotalBookingsCompleted($code);
$OwnerBookingDetailsToday = $portCont->myOwnerTotalBookingsToday($code);
$OwnerServiceCount = $portCont->myServiceList($code);
$OwnerPromoCount = $portCont->myPromoListList($code);
$OwnerEmployeeCount = $portCont->myEmployeeList($code);
$checkifpaymentwasmadethismonth = $portCont->checkPaymentForthisMonth($code);


$myRentalSetting = $portCont->myRentPaymentSetting();
// $clientBookingDetailsList = myBookingsTodayList($code)
if(!empty($_GET['bid'])){
    $bid = $_GET['bid'];
    $clientBookingDetailsToday = $portCont->myBookingsListSpecific($bid);
}


if(!empty($_GET['tracking'])){
    $tracking = $_GET['tracking'];
    if($userSession[0]['designation'] == 3) {
    $checkInfoDetails = $portCont->myBookingsListSpecificForMessageClient($tracking);
    } else {
    $checkInfoDetailsPartner = $portCont->myBookingsListSpecificForMessageParter($tracking);    
    }
}

  if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {

        case "security": 
            if(isset($_POST['verify'])){
                $email = $userSession[0]['email']; 
                $personal_code = $userSession[0]['code']; 
                $code = $_POST['code'];
                if(!empty($email) && !empty($code))
                {
                   $validation = $portCont->userValidatesEmail($email, $code);
                   if(!empty($validation))
                   {
                       $portCont->userhasBeenValidated($email, $code); 

                       if($userSession[0]['designation'] == 2){
                            $steps = [
                                'INFORMATION' => $portCont->userInformation($personal_code),
                                'SERVICE' => $portCont->userStore($personal_code),
                                'IDENTITY' => $portCont->userIdentity($personal_code),
                                'MYIMAGE' => $portCont->userVerification($personal_code),
                            ];
                            
                            foreach ($steps as $view => $stepResult) {
                                if (empty($stepResult)) {
                                    header("Location: home.php?view=$view");
                                    exit; // Stop further processing after the first redirect
                                }
                            }
                       }else{
                            $steps = [
                                'INFORMATION' => $portCont->userInformation($personal_code),
                                'IDENTITY' => $portCont->userIdentity($personal_code),
                                'MYIMAGE' => $portCont->userVerification($personal_code),
                            ];
                            
                            foreach ($steps as $view => $stepResult) {
                                if (empty($stepResult)) {
                                    header("Location: home.php?view=$view");
                                    exit; // Stop further processing after the first redirect
                                }
                            }
                       }
                       
                       // If all steps are complete, redirect to the home page
                       header('Location: home.php');
                   }
                }
              }
           break;

           case "fullyRegisterAccount":
            if(isset($_POST['proceed'])){
              $code = $userSession[0]['code']; 
              $fname = $_POST['fname'];
              $mname = $_POST['mname'];
              $lname = $_POST['lname'];
              $region = $_POST['region_text'];
              $province = $_POST['province_text'];
              $city = $_POST['city_text'];
              $barangay = $_POST['barangay_text'];
              $address = $_POST['address'];
  
              if(!empty($code) && !empty($fname) && !empty($mname) && !empty($lname) && !empty($region) && !empty($province) && !empty($city) && !empty($barangay) && !empty($address))
               {
                  $portCont->fullyUse($code, $fname, $mname, $lname, $region, $province, $city, $barangay, $address);
                  if($userSession[0]['designation'] == 2){
                  header('Location: home.php?view=SERVICE');
                  }else{
                  header('Location: home.php?view=IDENTITY');  
                  }
               }
              
            }
          break;

          case "fullyRegisterAccountService": 
            if(isset($_POST['proceed'])){

                $code = $userSession[0]['code']; 
                $company = $_POST['company'];
                $region_text = $_POST['region_text'];
                $province_text = $_POST['province_text'];
                $city_text = $_POST['city_text'];
                $barangay_text = $_POST['barangay_text'];
                $address = $_POST['address'];

                if(!empty($code) && !empty($company) && !empty($region_text) && !empty($province_text) && !empty($city_text) && !empty($barangay_text) && !empty($address))
                {
                   $portCont->fullyUseService($code, $company, $region_text, $province_text, $city_text, $barangay_text, $address);
                   header('Location: home.php?view=IDENTITY');
                }
               
            }
        break;

        case "fullyRegisterAccountIdentification": 
            if(isset($_POST['proceed'])){

                $code = $userSession[0]['code'];
                $identification = $_POST['identification'];
                $identification_number = $_POST['identification_number'];
                $photoName = $_FILES['photo']['name'];
                $photoTmpName = $_FILES['photo']['tmp_name'];

                if(!empty($code) && !empty($identification) && !empty($identification_number) && !empty($photoName))
                {
                    $uploadDir = 'UserDetails/' . strtolower($category); // Use '.' for string concatenation in PHP

                    if (!file_exists($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
                    
                    $photoPath = $uploadDir . '/' . $photoName;
                    
                    // Move the uploaded file to the directory
                    move_uploaded_file($photoTmpName, $photoPath);

                    $portCont->fullyUseIdentification($code, $identification, $identification_number, $photoPath);
                    header('Location: home.php?view=MYIMAGE');
                }

                
            }
            break;

            case "uploadmycompanyphoto":
                if(isset($_POST['proceed'])){
                    $company_code = $code;
                    $photoName = $_FILES['photo']['name'];
                    $photoTmpName = $_FILES['photo']['tmp_name'];

                    
                    if(!empty($photoName) && !empty($company_code)){
                        $checkifThisHasImage = $portCont->checkCompanyLogo($company_code);

                        if(!empty($checkifThisHasImage)){
                            $uploadDir = 'companyDetails' . strtolower($category); // Use '.' for string concatenation in PHP

                            if (!file_exists($uploadDir)) {
                                mkdir($uploadDir, 0777, true);
                            }
                            
                            $photoPath = $uploadDir . '/' . $photoName;
                            
                            // Move the uploaded file to the directory
                            move_uploaded_file($photoTmpName, $photoPath);
        
                            $portCont->updateCompanyLogo($company_code, $photoPath);
                            header('Location: home.php?view=MYCOMPANY');
                        }else{
                            $uploadDir = 'companyDetails' . strtolower($category); // Use '.' for string concatenation in PHP

                            if (!file_exists($uploadDir)) {
                                mkdir($uploadDir, 0777, true);
                            }
                            
                            $photoPath = $uploadDir . '/' . $photoName;
                            
                            // Move the uploaded file to the directory
                            move_uploaded_file($photoTmpName, $photoPath);
        
                            $portCont->uploadCompanyLogo($company_code, $photoPath);
                            header('Location: home.php?view=MYCOMPANY');
                        }
                    }
                }
                break;

            case "uploadmyprofilepicture":
                if(isset($_POST['proceed'])){
                    $user_code = $code;
                    $photoName = $_FILES['photo']['name'];
                    $photoTmpName = $_FILES['photo']['tmp_name'];

                    if(!empty($photoName) && !empty($user_code)){
                        $checkifThisHasImage = $portCont->checkProfilePicture($user_code);

                        if(!empty($checkifThisHasImage)){
                            $uploadDir = 'uploads' . strtolower($category); // Use '.' for string concatenation in PHP

                            if (!file_exists($uploadDir)) {
                                mkdir($uploadDir, 0777, true);
                            }
                            
                            $photoPath = $uploadDir . '/' . $photoName;
                            
                            // Move the uploaded file to the directory
                            move_uploaded_file($photoTmpName, $photoPath);
        
                            $portCont->updateProfilePicture($user_code, $photoPath);
                            header('Location: home.php?view=SETTING');
                        }else{
                            $uploadDir = 'uploads' . strtolower($category); // Use '.' for string concatenation in PHP

                            if (!file_exists($uploadDir)) {
                                mkdir($uploadDir, 0777, true);
                            }
                            
                            $photoPath = $uploadDir . '/' . $photoName;
                            
                            // Move the uploaded file to the directory
                            move_uploaded_file($photoTmpName, $photoPath);
        
                            $portCont->uploadProfilePicture($user_code, $photoPath);
                            header('Location: home.php?view=SETTING');
                        }
                    }
                }
                break;


            case "fullyRegisterAccountImage":
                
            
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['captured_image'])) {
                        $code = $userSession[0]['code'];
                        $imageData = $_POST["captured_image"];
            
                        // Save the image to the upload folder
                        $target_dir = "uploads/";
                        
                        if (!file_exists($target_dir)) {
                            mkdir($target_dir, 0777, true);
                        }
                        $timestamp = time();
                        $new_filename = $timestamp . '_' . $code . '.jpg'; // You can adjust the file name as needed
                        $target_file = $target_dir . $new_filename;
            
                        if (file_put_contents($target_file, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData)))) {
                            // Successfully saved the image to the upload folder
                            // Now, save the file path to the database
                            $result = $portCont->fullyUseImage($code, $target_file);
            
                            if ($result) {
                                header('Location: home.php?view=HOME');
                            } else {
                                 // Error uploading image
                                header('Location: home.php?view=HOME');
                            }
                        } else {
                             // Error uploading image
                              header('Location: home.php?view=ERROR1');
                        }
                    } else {
                        // File already exists
                        header('Location: home.php?view=ERROR2');
                    }
                } else {
                    // Invalid request method or no image file received
                    header('Location: home.php?view=ERROR');
                }
                break;


                case "addServices":
                    if(isset($_POST['service'])){
                        

                        $code = $userSession[0]['code'];
                        $category = $_POST['category'];
                        $servicename = $_POST['servicename'];
                        $photoName = $_FILES['photo']['name'];
                        $photoTmpName = $_FILES['photo']['tmp_name'];
        
                        if(!empty($code) && !empty($servicename)  && !empty($category) && !empty($photoName))
                        {
                            $uploadDir = 'UserCompanyDetails/' . strtolower($code); // Use '.' for string concatenation in PHP
        
                            if (!file_exists($uploadDir)) {
                                mkdir($uploadDir, 0777, true);
                            }
                            
                            $photoPath = $uploadDir . '/' . $photoName;
                            
                            // Move the uploaded file to the directory
                            move_uploaded_file($photoTmpName, $photoPath);
        
                            $portCont->addCompanyService($code, $category, $servicename, $photoPath);
                            header('Location: home.php?view=HOME&message=sucessfullyAddedServices');
                        }
        

                    }
                    break;


                    case "updateServices":
                        if(isset($_POST['updateService'])){
                            
    
                            $code = $userSession[0]['code'];
                            $sid = $_POST['sid'];
                            $category = $_POST['category'];
                            $servicename = $_POST['servicename'];
                            $photoName = $_FILES['photo']['name'];
                            $photoTmpName = $_FILES['photo']['tmp_name'];
            
                            if(!empty($code) && !empty($servicename)  && !empty($category) && !empty($photoName))
                            {
                                $uploadDir = 'UserCompanyDetails/' . strtolower($code); // Use '.' for string concatenation in PHP
            
                                if (!file_exists($uploadDir)) {
                                    mkdir($uploadDir, 0777, true);
                                }
                                
                                $photoPath = $uploadDir . '/' . $photoName;
                                
                                // Move the uploaded file to the directory
                                move_uploaded_file($photoTmpName, $photoPath);
            
                                $portCont->updateCompanyService($sid, $code, $category, $servicename, $photoPath);
                                header('Location: home.php?view=SPECIFICSERVICE&service_id='.$sid.'&message=sucessfullyUpdatedService');
                            }
            
    
                        }
                        break;


                        case "addPromo":
                            
                            $code = $userSession[0]['code'];
                            $servicepromo = $_POST['servicepromo'];
                            $promo_name = $_POST['promo_name'];
                            $percentage = $_POST['percentage'];
                            $available_date = $_POST['available_date'];
                            $expiration_date = $_POST['expiration_date'];
                          
                            if(!empty($code) && !empty($servicepromo) && !empty($promo_name) && !empty($percentage) && !empty($available_date) && !empty($expiration_date)){
                                    date_default_timezone_set('Asia/Manila');
                                    $dateToday = date('Y-m-d'); 
                                    $dateAvailable = $available_date; 

                                    $dateToCompareToday = new DateTime($dateToday); 
                                    $dateTobeAvailable = new DateTime($dateAvailable);
                                   
                                    if ($dateToCompareToday < $dateTobeAvailable) {
                                        $status = 'SOON'; 
                                        $date_created = date('Y-m-d');
                                        $portCont->addCompanyPromo($code,$servicepromo,$promo_name,$percentage,$available_date,$expiration_date,$date_created,$status);
                                    } elseif ($dateToCompareToday > $dateTobeAvailable) {
                                        $status = 'END';
                                        $date_created = date('Y-m-d');
                                        $portCont->addCompanyPromo($code,$servicepromo,$promo_name,$percentage,$available_date,$expiration_date,$date_created,$status);
                                    } else {
                                        $status = 'AVAILABLE';
                                        $date_created = date('Y-m-d');
                                        $portCont->addCompanyPromo($code,$servicepromo,$promo_name,$percentage,$available_date,$expiration_date,$date_created,$status);
                                    }
                                    header('Location: home.php?view=HOME&message=sucessfullyAddedPromo');

                            }
                            break;

                            case "updatePromo":
                                if(isset($_POST['updatePromo'])){
                                    $pid = $_POST['pid'];
                                    $promo_name = $_POST['promo_name'];
                                    $percentage = $_POST['percentage'];
                                    $available_date = $_POST['available_date'];
                                    $expiration_date = $_POST['expiration_date'];

                                    if(!empty($pid) && !empty($promo_name) && !empty($percentage) && !empty($available_date) && !empty($expiration_date)){
                                        date_default_timezone_set('Asia/Manila');
                                        $dateToday = date('Y-m-d'); 
                                        $dateAvailable = $available_date; 

                                        $dateToCompareToday = new DateTime($dateToday); 
                                        $dateTobeAvailable = new DateTime($dateAvailable);
                                    
                                        if ($dateToCompareToday < $dateTobeAvailable) {
                                            $status = 'SOON'; 
                                            // $date_created = date('Y-m-d');
                                            $portCont->updateCompanyPromo($pid,$promo_name,$percentage,$available_date,$expiration_date,$status);
                                        } elseif ($dateToCompareToday > $dateTobeAvailable) {
                                            $status = 'END';
                                            // $date_created = date('Y-m-d');
                                            $portCont->updateCompanyPromo($pid,$promo_name,$percentage,$available_date,$expiration_date,$status);
                                        } else {
                                            $status = 'AVAILABLE';
                                            // $date_created = date('Y-m-d');
                                            $portCont->updateCompanyPromo($pid,$promo_name,$percentage,$available_date,$expiration_date,$status);
                                        }
                                        header('Location: home.php?view=SPECIFICPROMO&promo_id='.$pid.'&message=sucessfullyAddedPromo');
                                    }
                                }
                                break;

                                case "bookNow":
                                    if (isset($_POST['book'])) {
                                        $sid = $_POST['sid'];
                                        $ccode = $_POST['ccode'];
                                        $price = $_POST['price'];
                                        $booked_by = $userSession[0]['code'];
                                        $car_model = $_POST['car_model'];
                                        $car_brand = $_POST['car_brand'];
                                        $date_appointment = $_POST['date_appointment'];
                                        $time_appointment = $_POST['time_appointment'];
                                        $photoName = $_FILES['photo']['name'];
                                        $photoTmpName = $_FILES['photo']['tmp_name'];
                                        $promo_code = $_POST['promo_code'];
                                
                                        if (!empty($sid) && !empty($booked_by) && !empty($price) && !empty($car_model)  && !empty($car_brand) && !empty($date_appointment) && !empty($time_appointment) && !empty($photoName)) {
                                
                                            $uploadDir = 'UserClientCarDetails/' . strtolower($booked_by);
                                
                                            if (!file_exists($uploadDir)) {
                                                mkdir($uploadDir, 0777, true);
                                            }
                                
                                            $photoPath = $uploadDir . '/' . $photoName;
                                
                                            if (move_uploaded_file($photoTmpName, $photoPath)) {
                                                
                                                if (!empty($promo_code)) {
                                                    $promo = $portCont->checkPromoCode($promo_code);
                                                    $newpromoCode = (!empty($promo)) ? $promo_code : 'NOT AVAILED';
                                                } else {
                                                    $newpromoCode = 'NOT AVAILABLE';
                                                }
                                                    $tracking = rand(6666,9999).'-'.date('Ymd');
                                                    $portCont->insertBookingCreatedByUser($sid, $tracking, $booked_by, $car_model, $car_brand, $price, $date_appointment, $time_appointment, $photoPath, $newpromoCode);
                                                    $portCont->insertBookingHistory($tracking);
                                                    header('Location: home.php?view=SPECIFICSTORE&ccode='.$ccode);
                                                   
                                            } else {
                                                // Handle file upload error
                                                // Redirect or display an error message
                                            }
                                        }
                                    }
                                    break;


                                    case "addEmployee":
                                        if (isset($_POST['addEmployee'])) {
                                        $company_code = $code;
                                        $emp_id = $_POST['emp_id']; 
                                        $emp_name = $_POST['emp_name'];
                                        $emp_designation = $_POST['emp_designation'];   
                                          if(!empty($company_code) && !empty($emp_id) && !empty($emp_name) && !empty($emp_designation)){
                                            $portCont->insertEmployee($company_code, $emp_id, $emp_name, $emp_designation);
                                            header('Location: home.php?view=HOME&message=ADDED');
                                         }
                                        
                                        }
                                    break;


                                    case "updateEmployee":
                                        if (isset($_POST['updateEmployee'])) {
                                        $emp_id = $_POST['emp_id']; 
                                        $emp_name = $_POST['emp_name'];
                                        $emp_designation = $_POST['emp_designation'];   
                                          if(!empty($emp_id) && !empty($emp_name) && !empty($emp_designation)){
                                            $portCont->updateEmployee($emp_id, $emp_name, $emp_designation);
                                            header('Location: home.php?view=SPECIFICEEMPLOYEE&employee_id='.$emp_id.'&message=success');
                                         }
                                        
                                        }
                                    break;


                                    case "serviceAcceptance":
                                        if(isset($_POST['serviceAcceptance'])){
                                            $bid = $_POST['bid']; 
                                            $tracking = $_POST['tracking'];
                                            $status = $_POST['status']; 

                                            if(!empty($bid) && !empty($status) && !empty($tracking)){
                                                $portCont->updateAppointmentSetOwner($bid, $status);
                                                $portCont->addTrackingHistory($tracking, $status);
                                                header('Location: home.php?view=MYAPPOINTMENT&message=success');
                                            }
                                        }
                                    break;
                                
                                    case "serviceConfirmation": 
                                        if(isset($_POST['serviceConfirmation'])){

                                            $bid = $_POST['bid']; 
                                            $emp_id = $_POST['emp_id'];
                                            $status = $_POST['status']; 
                                            $tracking = $_POST['tracking'];
                                            $estimated_minutes = $_POST['estimated_minutes'];

                                            if(!empty($bid) && !empty($emp_id) && !empty($status) && !empty($estimated_minutes) && !empty($tracking))
                                            {   
                                                $checker = $portCont->checkConfirmation($bid);
                                                if(!empty($checker)){
                                                    if($status == 'COMPLETED'){
                                                        $stat = 'AVAIL';
                                                        $portCont->updateEmployeeAfterCompletion($emp_id, $stat);
                                                        $portCont->updateAppointmentSetOwner($bid, $status);   
                                                        $portCont->addTrackingHistory($tracking, $status);
                                                        header('Location: home.php?view=MYAPPOINTMENT&message=completed');  
                                                    }else{
                                                        $stat = 'OCCUPIED';
                                                        $portCont->updateEmployeeAfterCompletion($emp_id, $stat);
                                                        $portCont->updateAppointmentSetOwnerAfterConfirmation($bid, $estimated_minutes);
                                                        $portCont->updateAppointmentSetOwner($bid, $status);
                                                        $portCont->addTrackingHistory($tracking, $status);
                                                        header('Location: home.php?view=MYAPPOINTMENT&message=inprogalready');  
                                                    }
                                                }else{
                                                    $stat = 'OCCUPIED';
                                                    $portCont->updateEmployeeAfterCompletion($emp_id, $stat);
                                                    $portCont->updateAppointmentSetOwner($bid, $status);
                                                    $portCont->addAppointmentSetOwnerAfterConfirmation($bid, $emp_id, $estimated_minutes);
                                                    $portCont->addTrackingHistory($tracking, $status);
                                                    header('Location: home.php?view=MYAPPOINTMENT&message=success');
                                                }
                                            }

                                        }
                                    break;

                                    case "chatServiceBookSpecific":
                                        if(isset($_POST['submit'])){
                                            $tracking = $_POST['tracking'];
                                            $sid = $_POST['sid'];
                                            $message_by = $_POST['message_by'];
                                            $role = $_POST['role'];
                                            $message = $_POST['message'];

                                            if(!empty($tracking) && !empty($sid)  && !empty($message_by) && !empty($role) && !empty($message)){
                                                $portCont->addClientMessage($tracking, $sid, $message_by, $role, $message);
                                                header('Location: home.php?view=CHAT&tracking='.$tracking.'&message=success');
                                            }else{
                                                header('Location: home.php?view=CHAT&tracking='.$tracking.'&message=error');
                                            }
                                        }
                                        break;


                                    case "addrating":
                                        if(isset($_POST['ratesubmit'])){
                                            $tracking = $_POST['tracking'];
                                            $sid = $_POST['sid'];
                                            $rate_by = $_POST['rate_by'];
                                            $rate = $_POST['rate'];
                                            $comment = $_POST['comment'];   

                                            if(!empty($tracking) && !empty($sid) && !empty($rate_by) && !empty($rate) && !empty($comment))
                                            {
                                                $portCont->addClientRating($tracking, $sid, $rate_by, $rate, $comment);
                                                header('Location: home.php?view=RATE&tracking='.$tracking.'&message=success');
                                            }
                                            else
                                            {
                                                header('Location: home.php?view=RATE&tracking='.$tracking.'&message=error');
                                            }

                                        }
                                        break;

                                    case "addPaymentService":
                                        if(isset($_POST['addServiceAmount'])){
                                            $vehicle_type = $_POST['vehicle_type'];
                                            $price = $_POST['price'];
                                            $service_id = $_POST['service_id'];

                                            if(!empty($vehicle_type) && !empty($price) && !empty($service_id))
                                            {
                                                $portCont->addServiceAmountPricing($vehicle_type, $price, $service_id);
                                                header('Location: home.php?view=SPECIFICSERVICE&service_id='.$service_id.'&message=success');
                                            }
                                            
                                        }
                                        break;

                                    case "paypalTrans":
                                        if(isset($_GET['success'])){
                                            $status = $_GET['success'];
                                            $code = $_GET['code'];
                                            $amount = $_GET['amount'];
                                            $transaction_id = $_GET['transaction_id'];
                                            $portCont->paypalPayment($status,$code,$amount,$transaction_id);
                                            header('Location: home.php?view=MYCOMPANY&message=success');
                                        }
                                        break;

                                    case "logout":
                                        header('Location: home.php?message=logout');
                                        break;




       

    }
  }




?>