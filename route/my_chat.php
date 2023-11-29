  <!-- App Capsule -->
  <div id="appCapsule">

  <div class="message-divider">
   TRACKING : <?php echo strtoupper($_GET['tracking']); ?>
</div>

<?php 

$convo = $portCont->getConversation($tracking); 
if (!empty($convo)) {
    foreach ($convo as $key => $value) {

?>
<?php if($convo[$key]['role'] == 2) { ?>
<div class="message-item">
    <div class="content">
        <div class="title"><?php echo $convo[$key]['email']; ?></div>
        <div class="bubble">
           <?php echo $convo[$key]['message']; ?>
        </div>
        <div class="footer"><?php echo $convo[$key]['date_send']; ?></div>
    </div>
</div>
<?php } else { ?>

<div class="message-item user">
    <div class="content">
    <div class="title"><?php echo $convo[$key]['email']; ?></div>
        <div class="bubble">
           <?php echo $convo[$key]['message']; ?>
        </div>
        <div class="footer"><?php echo $convo[$key]['date_send']; ?></div>
    </div>
</div>
<?php } } } ?>



</div>
<!-- * App Capsule -->

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
    <input type="submit" name="submit" class="btn btn-icon btn-primary" value="SEND" />
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
