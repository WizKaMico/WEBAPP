
<center>
  <a href="home.php?view=MYBOOKING" class="btn btn-primary btn-block btn-lg" style="margin-top:100px; border-radius:20px; width:80%;">BACK TO MY BOOKING VIEW</a>
</center>
<!-- App Capsule -->
  <div id="appCapsule">
  <div class="message-divider">
   TRACKING : <?php echo strtoupper($_GET['tracking']); ?>
</div>

<!-- MESSAGE SHOULD BE IN THIS PART -->

<!-- MESSAGE SHOULD BE IN THIS PART -->
</div>
<!-- * App Capsule -->
<script>
function reloadMessages() {
    <?php $tracking = $_GET['tracking']; ?>
    fetch('api/get_newmessage.php?tracking=<?php echo $tracking; ?>')
        .then(response => response.json())
        .then(data => {
            // Sort the messages based on meid in ascending order
            data.sort((a, b) => a.meid - b.meid);

            // Clear the previous messages
            document.getElementById('appCapsule').innerHTML = '';

            // Loop through the messages and create HTML for each message
            data.forEach(message => {
                // Determine the class based on the role
                let className = message.role == 2 ? 'message-item' : 'message-item user';

                // Create message item with appropriate class
                let messageItem = '<div class="' + className + '">';
                messageItem += '<div class="content">';
                messageItem += '<div class="title">' + message.email + '</div>';
                messageItem += '<div class="bubble">' + message.message + '</div>';
                messageItem += '<div class="footer">' + message.date_send + '</div>';
                messageItem += '</div></div>';

                // Append message item to the container
                document.getElementById('appCapsule').innerHTML += messageItem;
            });
        })
        .catch(error => console.error('Error:', error));
}

// Call reloadMessages initially
reloadMessages();

// Reload messages every 10 seconds (adjust interval as needed)
setInterval(reloadMessages, 10000); // 10000 milliseconds = 10 seconds
</script>

<!-- chat footer -->
<div class="chatFooter">
<?php if($userSession[0]["designation"] == 3) { ?>
<form method="POST" action="home.php?view=CHAT&action=chatServiceBookSpecific" enctype="multipart/form-data">
   
    <div class="form-group basic">
        <div class="input-wrapper">
            <input type="hidden" name="tracking" class="form-control" value="<?php echo $checkInfoDetails[0]['tracking']; ?>" readonly="">
            <input type="hidden" name="sid" class="form-control" value="<?php echo $checkInfoDetails[0]['sid']; ?>" readonly="">
           
            <input type="hidden" name="message_by" class="form-control" value="<?php echo $checkInfoDetails[0]['booked_by']; ?>" readonly="">
            <input type="hidden" name="role" class="form-control" value="<?php echo $checkInfoDetails[0]['designation']; ?>" readonly="">
            <input type="text" name="message" class="form-control" placeholder="Type a message...">
            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
        </div>
    </div>
    <input type="submit" name="submit" class="btn btn-icon btn-primary"  value="SEND" />
</form>
<?php } else { ?>
<form method="POST" action="home.php?view=CHAT&action=chatServiceBookSpecific" enctype="multipart/form-data">
   
   <div class="form-group basic">
       <div class="input-wrapper">
            <input type="hidden" name="tracking" class="form-control" value="<?php echo $checkInfoDetailsPartner[0]['tracking']; ?>" readonly="">
            <input type="hidden" name="sid" class="form-control" value="<?php echo $checkInfoDetailsPartner[0]['sid']; ?>" readonly="">
            <input type="hidden" name="message_by" class="form-control" value="<?php echo $checkInfoDetailsPartner[0]['code']; ?>" readonly="">
            <input type="hidden" name="role" class="form-control" value="<?php echo $checkInfoDetailsPartner[0]['designation']; ?>" readonly="">
           <input type="text" name="message" class="form-control" placeholder="Type a message partner...">
           <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
       </div>
   </div>
   <input type="submit" name="submit" class="btn btn-icon btn-primary" value="SEND" />
</form>

<?php } ?>
</div>
<!-- * chat footer -->
