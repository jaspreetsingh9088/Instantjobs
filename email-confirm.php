<?php
    $page = 'Email Confirmation';
    include('inc/header.php'); ?>
<?php include('inc/sidebar.php'); ?>     
<!--first tab row start-->
<div class="col-sm-12 instant-main">
    <div class="row" style="margin-right: 0 !important;  margin-left: 0 !important;">
        <div class="col-lg-12 col-md-12 second-mid example" style="background: #fff;">
            <div class="container">
                <div class="card">
                    <div class="parent">
                        <div class="main active">
                            <form method="post" id="" action="admin/inc/process.php?action=ConfirmEmail">
                                <a href="service-provider"> 
                                <img class="logo_new_instant" src="assets/img/new-instant-logo.png" alt="">
                                </a>
                                <p class="text-center lets chk-email ">Check your Email for the confirmation code</p>
                                <label for="number" class="mobile">Confirmation code</label>
                                <input type="text" class="form-control" placeholder="Enter confirmation code" name="emailotp" required id="emailotp">
                                <?php if($_GET["msg"] == "error") { ?>
                                <p id="" style="color:red;">Wrong OTP</p>
                                <?php } ?>
                                <input type="hidden" class="form-control" placeholder="" name="email" value="<?=$_GET['email'];?>" id="email">
                                <button type="submit" id="nextBtn8" onclick="nextPrev(1)">Submit</button>
                                <h3 class="title here">Can't access?</h3>
                                <button type="button" id="nextBtn10" onclick="nextPrev(1)">Resend Code</button>
                                <button type="button" id="nextBtn10" onclick="nextPrev(1)">Contact Support</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('inc/footer.php'); ?> 
    <script src="inc/js/instantjob.js"></script>
</div>
</script>