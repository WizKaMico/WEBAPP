        <!-- Transactions -->
        <div id="appCapsule">
        <div class="section mt-2">
            <div class="section-title">SERVICE RATING</div>
            <div class="transactions">
                <!-- item -->
                <?php 
                $sid = $_GET['sid'];
                $checkRate = $portCont->getRatingForServices($sid); 
                if (!empty($checkRate)) {
                    foreach ($checkRate as $key => $value) {
                ?>
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <div>
                            <strong>RATE : <?php echo $checkRate[$key]['rate']; ?></strong>
                            <p>COMMENT : <?php echo $checkRate[$key]['comment']; ?> | COMMENTED BY : <?php echo $checkRate[$key]['email']; ?></p>
                        </div>
                    </div>
                </a>
                <?php } } ?>
                <!-- * item -->
            </div>
        </div>
        </div>