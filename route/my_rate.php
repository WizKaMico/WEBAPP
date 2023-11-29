
<div id="appCapsule">
<div class="section full mt-1 mb-2">
    <div class="section-title">Basic</div>
    <div class="wide-block pb-1 pt-1">

        <form action="home.php?view=RATE&action=addrating" method="POST">
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="name1">Rate</label>
                    <select class="form-control" name="rate">
                      <option value="1">1 STAR ⭐️</option>
                      <option value="2">2 STAR ⭐️⭐️</option>
                      <option value="3">3 STAR ⭐️⭐️⭐️</option>
                      <option value="4">4 STAR ⭐️⭐️⭐️⭐️</option>
                      <option value="5">5 STAR ⭐️⭐️⭐️⭐️⭐️</option>
                    </select>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Comment</label>
                    <input type="hidden" name="tracking" class="form-control" value="<?php echo $checkInfoDetails[0]['tracking']; ?>" readonly="">
                    <input type="hidden" name="sid" class="form-control" value="<?php echo $checkInfoDetails[0]['sid']; ?>" readonly="">
                    <input type="hidden" name="rate_by" class="form-control" value="<?php echo $checkInfoDetails[0]['booked_by']; ?>" readonly="">
                    <input type="text"  class="form-control" id="email1" name="comment" placeholder="Enter Comment">
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                   <input type="submit" name="ratesubmit" value="RATE" class="btn btn-primary" style="width:100%;"/>
                </div>
            </div>
        </form>

    </div>
</div>
</div>


