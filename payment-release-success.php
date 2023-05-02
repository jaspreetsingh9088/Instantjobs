<?php 
    $page = 'Payment Release Success';
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
  <div class="middle_container">
        <div class="head-mid people-paid">
                <h2></h2>
            </div>
            <div class=" hidn-objct sticky msg-header">
                <div class="backbtn"> 
                    <a href="payment-release?id=<?=$signle_service['id'];?>"><i class="fa-solid fa-arrow-left"></i></a>
                    <span class="checkout-top-title">Payment</span>
                </div>
                <div class="prof-heigh-wid">
                    <div class="manage-as-lo"><?=$signle_service['topic'];?></div>
                </div>
            </div>
            <Section class="payment_bg">
                <div class="checkout_titles">
                    <div class="instant-sidebar-profile-image">
                        <img class="main-img img-main-pro" src="assets/img/dummy-profile-pic.png" alt="">
                    </div>
                    <p class="cnfrm-amount">Release 25% to billyjean88</p>
                    <p class="checkout_prize font-weight-bold">RM111.30</p>
                </div>
                <div class="checkout_btn">
                    <a  href="payment-release?id=<?=$signle_service['id'];?>"><button class="checkout_no pay_check">No</button></a>
                    <a  href="payment-success?id=<?=$signle_service['id'];?>"><button class="checkout_now pay_check">Release</button></a> 
                </div>
            </Section>
            
			 </div>
  
                <?php include('inc/footer.php'); ?>