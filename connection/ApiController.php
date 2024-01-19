<?php
require_once "DBController.php";

class appController extends DBController
{
   
    function userLogin($password, $email)
    {
        $query = "SELECT * FROM tbl_users TU  WHERE TU.password = ? AND TU.email = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $password
            ),array(
                "param_type" => "s",
                "param_value" => $email
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }


    function userMailValidation($email, $code)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO tbl_user_security (email, code, status, date_created) VALUES (?,?,?,?)";
   
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => 'UNUSED'
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );

        $this->insertDB($query, $params);
    
    }

    function saveTokenToDatabase($user_id, $token)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO remember_me_tokens (user_id,token,expiration_date)
        VALUES (?,?,?)"; 

        $params = array(
                   
            array(
                "param_type" => "i",
                "param_value" => $user_id
            ),
            array(
                "param_type" => "s",
                "param_value" => $token
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d H:i:s', strtotime('+30 days'))
            )
        );
        $this->insertDB($query, $params);
    }

    function userExisting($email, $phone)
    {
        $query = "SELECT * FROM tbl_users TU  WHERE TU.phone = ? OR TU.email = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $phone
            ),array(
                "param_type" => "s",
                "param_value" => $email
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function registerUser($email, $phone, $password, $designation, $code, $status, $date_created)
    {
        $query = "INSERT INTO tbl_users (email, phone, password, designation, code, status, date_created) VALUES (?,?,?,?,?,?,?)";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $email
            ),array(
                "param_type" => "s",
                "param_value" => $phone
            ),array(
                "param_type" => "s",
                "param_value" => $password
            ),array(
                "param_type" => "i",
                "param_value" => $designation
            ),array(
                "param_type" => "i",
                "param_value" => $code
            ),array(
                "param_type" => "s",
                "param_value" => $status
            ),array(
                "param_type" => "s",
                "param_value" => $date_created
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function userCodeExisting($email, $code)
    {
        $query = "SELECT * FROM tbl_users TU WHERE TU.email = ? AND TU.code = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $email 
            ),array(
                "param_type" => "s",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function userAccountVerified($code)
    {
        $query = "UPDATE tbl_users SET status = 'VERIFIED' WHERE code = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $code 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function forgotUser($email)
    {
        $query = "SELECT * FROM tbl_users TU WHERE TU.email = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $email 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function getUserDetails($session_id)
    {
        $query = "SELECT * FROM tbl_users TU WHERE TU.user_id = ?";

        $params = array(
           
           array(
               "param_type" => "i",
               "param_value" => $session_id
           )
       );
       
       $userCredentials = $this->getDBResult($query, $params);
       return $userCredentials;

   }


    function userValidatesEmail($email, $code)
    {
        $query = "SELECT * FROM tbl_user_security TUS WHERE  TUS.email = ? AND TUS.code = ? AND date_created = CURDATE()";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $email
            ),array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function userhasBeenValidated($email, $code)
    { 
        date_default_timezone_set('Asia/Manila');
        $query = "UPDATE tbl_user_security TUS SET status = ? WHERE TUS.email = ? AND TUS.code = ?";
 
        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => 'USED'
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $this->updateDB($query, $params);
    }


    function fullyUse($code, $fname, $mname, $lname, $region, $province, $city, $barangay, $address)
   {
      $query = "INSERT INTO `tbl_user_information` (`code`, `fname`, `mname`, `lname`, `region`, `province`, `city`, `barangay`, `address`) VALUES (?,?,?,?,?,?,?,?,?)"; 

      $params = array(
            
        array(
            "param_type" => "s",
            "param_value" => $code
        ),array(
            "param_type" => "s",
            "param_value" => $fname
        ),array(
            "param_type" => "s",
            "param_value" => $mname
        ),array(
            "param_type" => "s",
            "param_value" => $lname
        ),array(
            "param_type" => "s",
            "param_value" => $region
        ),array(
            "param_type" => "s",
            "param_value" => $province
        ),array(
            "param_type" => "s",
            "param_value" => $city
        ),array(
            "param_type" => "s",
            "param_value" => $barangay
        ),array(
            "param_type" => "s",
            "param_value" => $address
        )
    );
    
    $userCredentials = $this->getDBResult($query, $params);
    return $userCredentials;
   }

   function fullyUseService($code, $company, $region_text, $province_text, $city_text, $barangay_text, $address)
   {
            $query = "INSERT INTO `tbl_user_information_store` ( `code`, `company`, `region_text`, `province_text`, `city_text`, `barangay_text`, `address`) 
            VALUES (?,?,?,?,?,?,?)"; 

            $params = array(
                
            array(
                "param_type" => "s",
                "param_value" => $code
            ),array(
                "param_type" => "s",
                "param_value" => $company
            ),array(
                "param_type" => "s",
                "param_value" => $region_text
            ),array(
                "param_type" => "s",
                "param_value" => $province_text
            ),array(
                "param_type" => "s",
                "param_value" => $city_text
            ),array(
                "param_type" => "s",
                "param_value" => $barangay_text
            ),array(
                "param_type" => "s",
                "param_value" => $address
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
   }

   function fullyUseIdentification($code, $identification, $identification_number, $photoPath)
   {
      $query = "INSERT INTO `tbl_user_information_identification` (`code`, `identification`, `identification_number`, `image`) VALUES (?,?,?,?)";

      $params = array(
                        
        array(
            "param_type" => "s",
            "param_value" => $code
        ),array(
            "param_type" => "s",
            "param_value" => $identification
        ),array(
            "param_type" => "s",
            "param_value" => $identification_number
        ),array(
            "param_type" => "s",
            "param_value" => $photoPath
        )
    );

    $userCredentials = $this->getDBResult($query, $params);
    return $userCredentials;
   }


   function fullyUseIdentificationCompanyCredentials($code, $business_type, $business_number, $photoPath)
   {
    $query = "INSERT INTO `tbl_company_registration_credentials` (`code`, `business_type`, `business_number`, `image_credentials`) VALUES (?,?,?,?)";

        $params = array(
                        
        array(
            "param_type" => "s",
            "param_value" => $code
        ),array(
            "param_type" => "s",
            "param_value" => $business_type
        ),array(
            "param_type" => "s",
            "param_value" => $business_number
        ),array(
            "param_type" => "s",
            "param_value" => $photoPath
        )
    );

    $userCredentials = $this->getDBResult($query, $params);
    return $userCredentials;
   }

   function fullyUseImage($code, $imageData)
    {
        $query = "INSERT INTO `tbl_information_image` (`code`, `image_data`) VALUES (?, ?)";
        
        // Assuming `code` is an integer, use "i" as the parameter type
        // Change "s" to "b" for binary data in the parameter type
        $params = array(
            array(
                "param_type" => "i", // Integer
                "param_value" => $code
            ),
            array(
                "param_type" => "s", // Binary
                "param_value" => $imageData
            )
        );

        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }


   function userInformation($code)
   {
    $query = "SELECT * FROM tbl_user_information TUS WHERE TUS.code = ?";

    $params = array(
        
        array(
            "param_type" => "i",
            "param_value" => $code
        )
    );
    
    $userCredentials = $this->getDBResult($query, $params);
    return $userCredentials;
   }


   function userStore($code)
   {
    $query = "SELECT * FROM tbl_user_information_store TUS WHERE TUS.code = ?";

    $params = array(
        
        array(
            "param_type" => "i",
            "param_value" => $code
        )
    );

    $userCredentials = $this->getDBResult($query, $params);
    return $userCredentials;
   }


    function userIdentity($code)
    {
        $query = "SELECT * FROM tbl_user_information_identification TUS WHERE TUS.code = ?";

        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function companyCredentials($code)
    {
        $query = "SELECT * FROM tbl_company_registration_credentials TUS WHERE TUS.code = ?";

        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function userVerification($code)
    {
     $query = "SELECT * FROM tbl_information_image TUS WHERE TUS.code = ?";
 
     $params = array(
         
         array(
             "param_type" => "i",
             "param_value" => $code
         )
     );
     
     $userCredentials = $this->getDBResult($query, $params);
     return $userCredentials;
    }

    function getUserCompleteDetails($code)
    {
        $query = "SELECT * FROM tbl_user_information TUI LEFT JOIN tbl_user_information_store TUIS ON TUI.code = TUIS.code WHERE TUI.code = ?";
 
        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }


    function addCompanyService($code, $category, $servicename, $photoPath)
    {
        $query = "INSERT INTO `tbl_user_store_services` (`code`, `category`, `servicename`, `image`) VALUES (?,?,?,?)";

        $params = array(
                          
          array(
              "param_type" => "s",
              "param_value" => $code
          ),array(
            "param_type" => "s",
            "param_value" => $category
          ),array(
              "param_type" => "s",
              "param_value" => $servicename
          ),array(
              "param_type" => "s",
              "param_value" => $photoPath
          )
      );
  
      $userCredentials = $this->getDBResult($query, $params);
      return $userCredentials;
    }


    function getCompanyServices($code)
    {
        $query = "SELECT * FROM tbl_user_store_services TUIS  WHERE TUIS.code = ?";
 
        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function getSpecificServices($serviceId)
    {
        $query = "SELECT * FROM tbl_user_store_services TUIS  WHERE TUIS.sid = ?";
 
        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $serviceId
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }


    function updateCompanyService($sid, $code, $category, $servicename, $photoPath)
    {
        $query = "UPDATE tbl_user_store_services SET category = ?, servicename = ?, image = ? WHERE code = ? AND sid = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $category 
            ), array(
                "param_type" => "s",
                "param_value" => $servicename 
            ), array(
                "param_type" => "s",
                "param_value" => $photoPath 
            ), array(
                "param_type" => "i",
                "param_value" => $code 
            ), array(
                "param_type" => "i",
                "param_value" => $sid 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function addCompanyPromo($code,$servicepromo,$promo_name,$percentage,$available_date,$expiration_date,$date_created,$status)
    {
        $query = "INSERT INTO `tbl_user_promo` (`code`, `servicepromo`, `promo_name`, `percentage`, `available_date`, `expiration_date`, `date_created`, `status`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"; 

        $params = array(
                          
            array(
                "param_type" => "i",
                "param_value" => $code
            ),array(
              "param_type" => "i",
              "param_value" => $servicepromo
            ),array(
                "param_type" => "s",
                "param_value" => $promo_name
            ),array(
                "param_type" => "i",
                "param_value" => $percentage
            ),array(
                "param_type" => "s",
                "param_value" => $available_date
            ),array(
                "param_type" => "s",
                "param_value" => $expiration_date
            ),array(
                "param_type" => "s",
                "param_value" => $date_created
            ),array(
                "param_type" => "s",
                "param_value" => $status
            )
        );
    
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function getCompanyPromo($code)
    {
        $query = "SELECT * FROM tbl_user_promo TUP LEFT JOIN tbl_user_store_services TUS ON TUP.servicepromo = TUS.sid  WHERE TUP.code = ?";
 
        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function getCompanyPromoSpecific($promo_id)
    {
        $query = "SELECT * FROM tbl_user_promo TUP LEFT JOIN tbl_user_store_services TUS ON TUP.servicepromo = TUS.sid  WHERE TUP.pid = ?";
 
        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $promo_id
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }
    
    function updateCompanyPromo($pid,$promo_name,$percentage,$available_date,$expiration_date,$status)
    {
        $query = "UPDATE tbl_user_promo SET promo_name = ?, percentage = ?, available_date = ?, expiration_date = ?, status = ?  WHERE pid = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $promo_name 
            ), array(
                "param_type" => "i",
                "param_value" => $percentage 
            ), array(
                "param_type" => "s",
                "param_value" => $available_date 
            ), array(
                "param_type" => "s",
                "param_value" => $expiration_date 
            ), array(
                "param_type" => "s",
                "param_value" => $status 
            ), array(
                "param_type" => "i",
                "param_value" => $pid 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function getCompanyServicesClientView()
    {
        $query = "SELECT * FROM tbl_users TU LEFT JOIN tbl_user_information_store TUIS ON TU.code = TUIS.code WHERE TU.designation = 2";
        
        $productCategoryProductResult = $this->getDBResult($query);
        return $productCategoryProductResult;    
    }

    function getCompanyInformationOfASpecificService($ccode)
    {
        $query = "SELECT * FROM tbl_user_store_services TUIS LEFT JOIN tbl_user_promo TUP ON TUIS.sid = TUP.servicepromo  WHERE TUIS.code = ?";
 
        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $ccode
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials; 
    }


    function getCompanyClientViewServicesCheck($ccode)
    {
        $query = "SELECT * FROM tbl_user_information_store TUI WHERE TUI.code = ?";
 
        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $ccode
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function checkPromoCode($promo_code)
    {
        $query = "SELECT * FROM tbl_user_promo TUP WHERE TUP.promo_name = ?";
 
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $promo_code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function insertBookingCreatedByUser($sid, $tracking, $booked_by, $car_model, $car_brand, $price, $date_appointment, $time_appointment, $photoPath, $newpromoCode)
    {
        $query = "INSERT INTO tbl_user_booking (sid, tracking, booked_by, car_model, car_brand, price, date_appointment, time_appointment, photo, promo_code, status, booking_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $sid
            ),array(
                "param_type" => "s",
                "param_value" => $tracking
            ),array(
                "param_type" => "i",
                "param_value" => $booked_by
            ),array(
                "param_type" => "s",
                "param_value" => $car_model
            ),array(
                "param_type" => "s",
                "param_value" => $car_brand
            ),array(
                "param_type" => "s",
                "param_value" => $price
            ),array(
                "param_type" => "s",
                "param_value" => $date_appointment
            ),array(
                "param_type" => "s",
                "param_value" => $time_appointment
            ),array(
                "param_type" => "s",
                "param_value" => $photoPath
            ),array(
                "param_type" => "s",
                "param_value" => $newpromoCode
            ),array(
                "param_type" => "s",
                "param_value" => 'PENDING'
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );

        
    
        $this->insertDB($query, $params);
    }

    function insertBookingHistory($tracking) {

        $query = "INSERT INTO tbl_booking_history (tracking, status, date_updated) VALUES (?, ?, ?)";
        $params = array(             
            array(
                "param_type" => "s",
                "param_value" => $tracking
            ),array(
                "param_type" => "s",
                "param_value" => 'PENDING'
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
    
        $this->insertDB($query, $params);
    }

    function addTrackingHistory($tracking, $status)
    {
        $query = "INSERT INTO tbl_booking_history (tracking, status, date_updated) VALUES (?, ?, ?)";
        $params = array(             
            array(
                "param_type" => "s",
                "param_value" => $tracking
            ),array(
                "param_type" => "s",
                "param_value" => $status
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
    
        $this->insertDB($query, $params);
    }

    function myTotalBookings($code)
    {
        $query = "SELECT COUNT(*) as total FROM tbl_user_booking TUB WHERE TUB.booked_by = ?";
 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myOwnerTotalBookings($code)
    {
        $query = "SELECT COUNT(TUB.bid) as total FROM tbl_user_store_services TUSS LEFT JOIN tbl_user_booking TUB ON TUSS.sid = TUB.sid WHERE TUSS.code = ?"; 

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;

    }


    function myOwnerTotalBookingsCompleted($code)
    {
        $query = "SELECT COUNT(TUB.bid) as total FROM tbl_user_store_services TUSS LEFT JOIN tbl_user_booking TUB ON TUSS.sid = TUB.sid WHERE TUSS.code = ? AND TUB.status = 'COMPLETED'"; 

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;

    }

    function myBookingsToday($code)
    {

        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_user_booking TUB WHERE TUB.booked_by = ? AND TUB.date_appointment = ?";
 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myOwnerTotalBookingsToday($code)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(TUB.bid) as total FROM tbl_user_store_services TUSS LEFT JOIN tbl_user_booking TUB ON TUSS.sid = TUB.sid WHERE TUSS.code = ? AND TUB.date_appointment = ?"; 

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;

    }


    function myBookingsList($code)
    {


        $query = "SELECT * FROM tbl_user_booking TUB LEFT JOIN tbl_user_store_services TUSS ON TUB.sid = TUSS.sid LEFT JOIN tbl_user_information_store TUIS ON TUSS.code = TUIS.code WHERE TUB.booked_by = ?";
 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function mybookingHistoryTrack($tracking)
    {
        $query = "SELECT *,TBH.status as TSTAT  FROM tbl_booking_history TBH LEFT JOIN tbl_user_booking TUB ON TBH.tracking = TUB.tracking LEFT JOIN tbl_user_store_services TUSS ON TUB.sid = TUSS.sid WHERE TBH.tracking = ?";
 
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $tracking
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myServiceList($code)
    {
        $query = "SELECT COUNT(*) as total  FROM `tbl_user_store_services` WHERE code = ?"; 

        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

   

    function myPromoListList($code)
    {
        $query = "SELECT COUNT(*) as total FROM `tbl_user_promo` WHERE code = ?"; 

        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }




    function myBookingsListSpecific($bid)
    {
        $query = "SELECT * FROM tbl_user_booking TUB LEFT JOIN tbl_user_store_services TUSS ON TUB.sid = TUSS.sid LEFT JOIN tbl_user_information_store TUIS ON TUSS.code = TUIS.code WHERE TUB.bid = ?";
 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $bid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myBookingsListSpecificForMessageClient($tracking)
    {
        $query = "SELECT * FROM tbl_user_booking TUB LEFT JOIN tbl_users TU ON TUB.booked_by = TU.code WHERE TUB.tracking = ?";
 
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $tracking
            )
        );
        
        $userBookingForMessage = $this->getDBResult($query, $params);
        return $userBookingForMessage;
    }


    function myBookingsListSpecificForMessageParter($tracking)
    {
        $query = "SELECT * FROM tbl_user_booking TUB LEFT JOIN tbl_user_store_services TUSS ON TUB.sid = TUSS.sid LEFT JOIN tbl_users TU ON TUSS.code = TU.code WHERE TUB.tracking = ?";
 
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $tracking
            )
        );
        
        $userBookingForMessage = $this->getDBResult($query, $params);
        return $userBookingForMessage;
    }


    function myAppointmentList($code){
        $query = "SELECT * FROM tbl_user_booking TUB LEFT JOIN tbl_user_store_services TUSS ON TUB.sid = TUSS.sid LEFT JOIN tbl_user_information_store TUIS ON TUSS.code = TUIS.code LEFT JOIN tbl_user_information TUI ON TUB.booked_by = TUI.code WHERE TUSS.code = ?";
 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myAppointmentListPendingInprogress($code){
        $query = "SELECT * 
        FROM tbl_user_booking TUB 
        LEFT JOIN tbl_user_store_services TUSS ON TUB.sid = TUSS.sid 
        LEFT JOIN tbl_user_information_store TUIS ON TUSS.code = TUIS.code 
        LEFT JOIN tbl_user_information TUI ON TUB.booked_by = TUI.code 
        WHERE TUSS.code = ?  
          AND (TUB.status = 'PENDING' OR TUB.status = 'CONFIRM')";
 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myAppointmentListDecline($code){
        $query = "SELECT * FROM tbl_user_booking TUB LEFT JOIN tbl_user_store_services TUSS ON TUB.sid = TUSS.sid LEFT JOIN tbl_user_information_store TUIS ON TUSS.code = TUIS.code LEFT JOIN tbl_user_information TUI ON TUB.booked_by = TUI.code WHERE TUSS.code = ? AND TUB.status = 'DECLINE'";
 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function myAppointmentListCompleted($code){
        $query = "SELECT * FROM tbl_user_booking TUB LEFT JOIN tbl_user_store_services TUSS ON TUB.sid = TUSS.sid LEFT JOIN tbl_user_information_store TUIS ON TUSS.code = TUIS.code LEFT JOIN tbl_user_information TUI ON TUB.booked_by = TUI.code WHERE TUSS.code = ? AND TUB.status = 'COMPLETED'";
 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }


    function getBookingToday()
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_user_booking WHERE date_appointment = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        
        $TotalResult = $this->getDBResult($query, $params);
        return $TotalResult;    
    }

    function getTotalClient()
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_users WHERE designation = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => 3
            )
        );
        
        $TotalResult = $this->getDBResult($query, $params);
        return $TotalResult;    
    }

    function getTotalOwner()
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_users WHERE designation = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => 2
            )
        );
        
        $TotalResult = $this->getDBResult($query, $params);
        return $TotalResult;    
    }

    function getTotalBooking()
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_user_booking";

        $TotalResult = $this->getDBResult($query);
        return $TotalResult;    
    }


    function getTotalPromo()
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_user_promo";

        $TotalResult = $this->getDBResult($query);
        return $TotalResult;    
    }

    function getTotalService()
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_user_store_services";

        $TotalResult = $this->getDBResult($query);
        return $TotalResult;    
    }



    function getTotalClientList()
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT * FROM tbl_users WHERE designation = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => 3
            )
        );
        
        $TotalResult = $this->getDBResult($query, $params);
        return $TotalResult;    
    }

    function getTotalOwnerList()
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT * FROM tbl_users WHERE designation = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => 2
            )
        );
        
        $TotalResult = $this->getDBResult($query, $params);
        return $TotalResult;    
    }


    function insertEmployee($company_code, $emp_id, $emp_name, $emp_designation)
    {
        $query = "INSERT INTO tbl_company_employee (company_code, emp_id, emp_name, emp_designation, date_created, status) VALUES (?,?,?,?,?,?)";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $company_code
            ),array(
                "param_type" => "s",
                "param_value" => $emp_id
            ),array(
                "param_type" => "s",
                "param_value" => $emp_name
            ),array(
                "param_type" => "s",
                "param_value" => $emp_designation
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            ),array(
                "param_type" => "s",
                "param_value" => 'AVAIL'
            )
        );
    
        $this->insertDB($query, $params);
    }

    function addClientMessage($tracking, $sid, $message_by, $role, $message)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO tbl_user_message (tracking, sid, message_by, role, message, date_send) VALUES (?,?,?,?,?,?)";
        $params = array(             
            array(
                "param_type" => "s",
                "param_value" => $tracking
            ),array(
                "param_type" => "i",
                "param_value" => $sid
            ),array(
                "param_type" => "i",
                "param_value" => $message_by
            ),array(
                "param_type" => "i",
                "param_value" => $role
            ),array(
                "param_type" => "s",
                "param_value" => $message
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
    
        $this->insertDB($query, $params);
    }

    function addClientRating($tracking, $sid, $rate_by, $rate, $comment)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO tbl_service_rating (tracking, sid, rate_by, rate, comment, date) VALUES (?,?,?,?,?,?)";
        $params = array(             
            array(
                "param_type" => "s",
                "param_value" => $tracking
            ),array(
                "param_type" => "i",
                "param_value" => $sid
            ),array(
                "param_type" => "i",
                "param_value" => $rate_by
            ),array(
                "param_type" => "i",
                "param_value" => $rate
            ),array(
                "param_type" => "s",
                "param_value" => $comment
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
    
        $this->insertDB($query, $params);
    }

    function getCompanyDetails($code)
    {
        $query = "SELECT * FROM tbl_user_information_store TSR WHERE TSR.code = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $companyOverall = $this->getDBResult($query, $params);
        return $companyOverall;    
    }

    function uploadCompanyLogo($company_code, $photoPath)
    {
        $query = "UPDATE tbl_user_information_store SET image = ? WHERE code = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $photoPath 
            ), array(
                "param_type" => "i",
                "param_value" => $company_code 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function updateCompanyLogo($company_code, $photoPath)
    {
        $query = "UPDATE tbl_user_information_store SET image = ? WHERE code = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $photoPath 
            ), array(
                "param_type" => "i",
                "param_value" => $company_code 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }


    function getRatingForServices($sid)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT * FROM tbl_service_rating TSR LEFT JOIN tbl_users TU ON TSR.rate_by = TU.code WHERE TSR.sid = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $sid
            )
        );
        
        $ratingOverall = $this->getDBResult($query, $params);
        return $ratingOverall;    
    }


    function getConversation($tracking)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT * FROM tbl_user_message TUM LEFT JOIN tbl_users TU ON TUM.message_by = TU.code WHERE TUM.tracking = ? ORDER BY TUM.meid ASC";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $tracking
            )
        );
        
        $conversationOverall = $this->getDBResult($query, $params);
        return $conversationOverall;    
    }

    function checkCompanyLogo($code)
    {
        $query = "SELECT * FROM tbl_user_information_store TSR WHERE TSR.code = ? AND TSR.image IS NOT NULL";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $companyOverall = $this->getDBResult($query, $params);
        return $companyOverall;    
    }

    function checkProfilePicture($user_code)
    {
        $query = "SELECT * FROM tbl_information_image TII WHERE TII.code = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $user_code
            )
        );
        
        $companyOverall = $this->getDBResult($query, $params);
        return $companyOverall;  
    }

    function updateProfilePicture($user_code, $photoPath)
    {
        $query = "UPDATE tbl_information_image SET image_data = ? WHERE code = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $photoPath 
            ), array(
                "param_type" => "i",
                "param_value" => $user_code 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function getProfilePicture($code)
    {
        $query = "SELECT * FROM tbl_information_image TII WHERE TII.code = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $companyOverall = $this->getDBResult($query, $params);
        return $companyOverall; 
    }

    function uploadProfilePicture($user_code, $photoPath)
    {
        $query = "INSERT INTO tbl_information_image (code, image_data) VALUES (?,?)";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $user_code
            ),array(
                "param_type" => "s",
                "param_value" => $photoPath
            )
        );
    
        $this->insertDB($query, $params);
    }

    function myEmployeeList($code)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_company_employee WHERE company_code = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;    
    }

    function getCompanyEmployee($code)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT * FROM tbl_company_employee WHERE company_code = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;   
    }

    function getSpecificEmployee($empId)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT * FROM tbl_company_employee WHERE emp_id = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $empId
            )
        );
        
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;   
    }

    function updateEmployee($emp_id, $emp_name, $emp_designation)
    {
        $query = "UPDATE tbl_company_employee SET emp_name = ?, emp_designation = ? WHERE emp_id = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $emp_name 
            ), array(
                "param_type" => "s",
                "param_value" => $emp_designation 
            ), array(
                "param_type" => "s",
                "param_value" => $emp_id 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function updateAppointmentSetOwner($bid, $status)
    {
        $query = "UPDATE tbl_user_booking SET status = ? WHERE bid = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $status 
            ), array(
                "param_type" => "i",
                "param_value" => $bid 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function ListAvailEmployee($code)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT * FROM tbl_company_employee WHERE company_code = ? AND status = 'AVAIL'";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
        
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;   
    }

    function addAppointmentSetOwnerAfterConfirmation($bid, $emp_id, $estimated_minutes)
    {
        $query = "INSERT INTO tbl_assigned_employee (bid, emp_id, estimated_minutes, date_confirmed) VALUES (?,?,?,?)";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $bid
            ),array(
                "param_type" => "s",
                "param_value" => $emp_id
            ),array(
                "param_type" => "i",
                "param_value" => $estimated_minutes
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
    
        $this->insertDB($query, $params);
    }

    function checkConfirmation($bid)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT * FROM tbl_assigned_employee WHERE bid = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $bid
            )
        );
        
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;   
    }

    function updateAppointmentSetOwnerAfterConfirmation($bid, $estimated_minutes)
    {
        $query = "UPDATE tbl_assigned_employee SET estimated_minutes = ? WHERE bid = ?";

        $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $estimated_minutes 
            ), array(
                "param_type" => "i",
                "param_value" => $bid 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function updateEmployeeAfterCompletion($emp_id, $stat)
    {
        $query = "UPDATE tbl_company_employee SET status = ? WHERE emp_id = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $stat
            ), array(
                "param_type" => "s",
                "param_value" => $emp_id 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function specificBookingServicesToday($serviceId)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_user_booking WHERE sid = ? AND date_appointment = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $serviceId
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;   
    }


    function specificBookingServicesTotal($serviceId)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "SELECT COUNT(*) as total FROM tbl_user_booking WHERE sid = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $serviceId
            )
        );
        
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;   
    }

    function specificEmployeeeBookingServicesToday($empId)
    {
        $query = "SELECT COUNT(*) as total FROM tbl_assigned_employee WHERE emp_id = ? AND date_confirmed = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $empId
            ),array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );
        
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;   
    }

    function specificEmployeeeBookingServicesTotal($empId)
    {
        $query = "SELECT COUNT(*) as total FROM tbl_assigned_employee WHERE emp_id = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $empId
            )
        );
        
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;   
    }

    function addServiceAmountPricing($vehicle_type, $price, $service_id)
    {
        $query = "INSERT INTO tbl_store_service_pricing (vehicle_type, price, service_id) VALUES (?,?,?)";
        $params = array(             
            array(
                "param_type" => "s",
                "param_value" => $vehicle_type
            ),array(
                "param_type" => "i",
                "param_value" => $price
            ),array(
                "param_type" => "i",
                "param_value" => $service_id
            )
        );
    
        $this->insertDB($query, $params);
    }

    function showServiceAmountPrice($service_id)
    {
        $query = "SELECT * FROM  tbl_store_service_pricing WHERE service_id = ?";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $service_id
            )
        );
    
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult;   
    }

    function myRentPaymentSetting()
    {
        $query = "SELECT * FROM  tbl_company_rental_setting";
       
        $RentalTotal = $this->getDBResult($query);
        return $RentalTotal;   
    }

    function paypalPayment($status,$code,$amount,$transaction_id)
    {
        $query = "INSERT INTO tbl_user_monthly_payment_history (code, status, transaction_id, amount, date_created) VALUES (?,?,?,?,CURDATE())";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $code
            ),array(
                "param_type" => "s",
                "param_value" => $status
            ),array(
                "param_type" => "s",
                "param_value" => $transaction_id
            ),array(
                "param_type" => "i",
                "param_value" => $amount
            )
        );
    
        $this->insertDB($query, $params);
    }

    function paypalPaymentDeposit($status,$code,$amount,$transaction_id)
    {
        $query = "INSERT INTO tbl_user_company_deposit (code, status, transaction_id, amount, date_created) VALUES (?,?,?,?,CURDATE())";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $code
            ),array(
                "param_type" => "s",
                "param_value" => $status
            ),array(
                "param_type" => "s",
                "param_value" => $transaction_id
            ),array(
                "param_type" => "i",
                "param_value" => $amount
            )
        );
    
        $this->insertDB($query, $params);
    }

    function checkPaymentForthisMonth($code)
    {
        $query = "SELECT *
        FROM tbl_user_monthly_payment_history
        WHERE code = ? 
        AND status = 'true'
        AND MONTH(date_created) = MONTH(NOW())
        AND YEAR(date_created) = YEAR(NOW())";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
    
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult; 
    }

    function checkDepositPaymentForNewOwner($code)
    {
        $query = "SELECT *
        FROM tbl_user_company_deposit
        WHERE code = ? 
        AND status = 'true'
        AND MONTH(date_created) = MONTH(NOW())
        AND YEAR(date_created) = YEAR(NOW())";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
    
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult; 
    }

    function myHistoryOfPayments($code)
    {
        $query = "SELECT *
        FROM tbl_user_monthly_payment_history
        WHERE code = ? 
        AND status = 'true'";
        $params = array(             
            array(
                "param_type" => "i",
                "param_value" => $code
            )
        );
    
        $TotalEmployeeResult = $this->getDBResult($query, $params);
        return $TotalEmployeeResult; 
    }

    function userAccountPasswordChange($email, $upass)
    {
        $query = "UPDATE tbl_users SET password = ? WHERE email = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $upass
            ), array(
                "param_type" => "s",
                "param_value" => $email 
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }


}
