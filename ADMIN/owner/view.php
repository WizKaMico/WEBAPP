
<?php 

$code = $_GET['code']; 
$conn = new mysqli('localhost', 'root', '', 'capstone_app');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>

<h2>REVIEW COMPANY INFORMATION</h2>

<div class="tab">
  <button class="tablinks active" onclick="openInformation(event, 'User')">USER INFORMATION</button>
  <button class="tablinks" onclick="openInformation(event, 'CInformation')">COMPANY INFORMATION</button>
  <button class="tablinks" onclick="openInformation(event, 'CCredentials')">COMPANY CREDENTIALS</button>
  <button class="tablinks" onclick="openInformation(event, 'UIdentity')">USER IDENTITY</button>
  <button class="tablinks" onclick="openInformation(event, 'UImage')">USER IMAGE</button>
</div>

<div id="User" class="tabcontent" style="display: block;">
  <h3>USER INFORMATION</h3>
  <form>
    <?php 

        $sql = "SELECT * FROM `tbl_user_information` WHERE code = '$code'";
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Process or display fetched data here
                // Example: echo $row['column_name'];
    ?>
    <div class="form-group">
      <label for="usr">Fullname:</label>
      <input type="text" class="form-control" value="<?php echo $row['lname'] ?>,<?php echo $row['fname'] ?>&nbsp;<?php echo $row['mname'] ?>" id="usr" readonly="">
    </div>
    <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" value="<?php echo $row['address'] ?>,<?php echo $row['barangay'] ?>,<?php echo $row['city'] ?>,<?php echo $row['region'] ?>" id="pwd">
    </div>
    <?php 
    
        }
            } else {
                echo "No results found";
            }
    ?>
  </form>
</div>

<div id="CInformation" class="tabcontent">
  <h3>COMPANY INFORMATION</h3>
  <form>
    <?php 

        $sql = "SELECT * FROM `tbl_user_information_store` WHERE code = '$code'";
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Process or display fetched data here
                // Example: echo $row['column_name'];
    ?>
    <div class="form-group">
      <label for="usr">Company:</label>
      <input type="text" class="form-control" value="<?php echo $row['company'] ?>" id="usr" readonly="">
    </div>
    <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" value="<?php echo $row['address'] ?>,<?php echo $row['barangay_text'] ?>,<?php echo $row['city_text'] ?>,<?php echo $row['region_text'] ?>" id="pwd">
    </div>
    <?php 
    
        }
            } else {
                echo "No results found";
            }
    ?>
  </form>
</div>

<div id="CCredentials" class="tabcontent">
  <h3>COMPANY CREDENTIALS</h3>
  <form>
    <?php 

        $sql = "SELECT * FROM `tbl_company_registration_credentials` WHERE code = '$code'";
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Process or display fetched data here
                // Example: echo $row['column_name'];
    ?>
    <div class="form-group">
      <label for="usr">Business Type:</label>
      <input type="text" class="form-control" value="<?php echo $row['business_type'] ?>" id="usr" readonly="">
    </div>
    <div class="form-group">
      <label for="pwd">Business #:</label>
      <input type="text" class="form-control" value="<?php echo $row['business_number'] ?>" id="pwd">
    </div>
    <div class="form-group">
      <center><img src="../../<?php echo $row['image_credentials'] ?>" style="width:50%; height:200px;" /></center>
    </div>
    <?php 
    
        }
            } else {
                echo "No results found";
            }
    ?>
  </form>
</div>

<div id="UIdentity" class="tabcontent">
  <h3>USER IDENTITY</h3>
  <form>
    <?php 

        $sql = "SELECT * FROM `tbl_user_information_identification` WHERE code = '$code'";
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Process or display fetched data here
                // Example: echo $row['column_name'];
    ?>
    <div class="form-group">
      <label for="usr">User Identification:</label>
      <input type="text" class="form-control" value="<?php echo $row['identification'] ?>" id="usr" readonly="">
    </div>
    <div class="form-group">
      <label for="pwd">User Identification #:</label>
      <input type="text" class="form-control" value="<?php echo $row['identification_number'] ?>" id="pwd">
    </div>
    <div class="form-group">
      <center><img src="../../<?php echo $row['image'] ?>" style="width:50%; height:200px;" /></center>
    </div>
    <?php 
    
        }
            } else {
                echo "No results found";
            }
    ?>
  </form>
</div>

<div id="UImage" class="tabcontent">
  <h3>USER IMAGE</h3>
  <form>
    <?php 

        $sql = "SELECT * FROM `tbl_information_image` WHERE code = '$code'";
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Process or display fetched data here
                // Example: echo $row['column_name'];
    ?>
    <div class="form-group">
      <center><img src="../../<?php echo $row['image_data'] ?>" style="width:50%; height:200px;" /></center>
    </div>
    <?php 
    
        }
            } else {
                echo "No results found";
            }
    ?>
  </form>
</div>


<script>
  function openInformation(evt, infoUse) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(infoUse).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Code to set the first tab (London) as active by default
  document.getElementById("User").style.display = "block";
</script>
   
</body>
</html> 
