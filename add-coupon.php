<?php 
    $page = 'Add Coupon';
    include('inc/header.php'); 
    $serviceid = $_GET['id'];
    $signle_service = $obj->GetServiceById($serviceid);
    $userid = $signle_service['user_id'];
    $postuser = $obj->GetUserById($userid);
    ?>
<?php include('inc/sidebar.php'); ?>     
<!--first tab row start-->
<div class="col-sm-12 instant-main">
    <div class="row">
        <div class="middle_container" id="myTabContent">
              <div class="head-mid people-paid">
                <h2></h2>
            </div>
            <!--<div class=" hidn-objct sticky msg-header">-->
            <!--    <div class="backbtn"> -->
            <!--        <a href="discussion-budget-summary?id=<?=$signle_service['id'];?>"><i class="fa-solid fa-arrow-left"></i></a>-->
            <!--        <span class="checkout-top-title">Add Coupon</span>-->
            <!--    </div>-->
            <!--    <div class="prof-heigh-wid">-->
            <!--        <div class="manage-as-lo"><?=$signle_service['topic'];?></div>-->
            <!--    </div>-->
            <!--</div>-->
            <Section class="add_coupen_section bg-white p-4">
                <div class="checkout_titles">
                    <p class="checkout_para">Enter coupon code you want to redeem the credit  </p>
                    <input type="text" class="form-control topup_input border" placeholder="Coupon code" id="namee" name="name" required="">
                </div>
                <div class="confirm_title">
                    <a href="?id=<?=$signle_service['id'];?>">
                    <button type="button" class="rounded btn-success btn-sucs btnm-frst w-100"> Confirm</button>
                    </a>
                    <p class="text-center">You can use it as payment but not withdrawal</p>
                </div>
            </Section>
        </div>
    <!--</div>-->
<!--</div>-->
<?php include('inc/footer.php'); ?>