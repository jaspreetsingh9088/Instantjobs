<?php 
    $page = 'Wallet Top up';
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
        <!--<div class="col-lg-9 col-md-9" id="myTabContent">-->
            <!--<div class=" hidn-objct sticky msg-header">-->
            <!--    <div class="backbtn"> -->
            <!--        <a href="discussion-budget-summary?id=<?=$signle_service['id'];?>"><i class="fa-solid fa-arrow-left"></i></a>-->
            <!--        <span class="checkout-top-title">Top Up Wallet</span>-->
            <!--    </div>-->
            <!--    <div class="prof-heigh-wid">-->
            <!--        <div class="manage-as-lo"><?=$signle_service['topic'];?></div>-->
            <!--    </div>-->
            <!--</div>-->
            <Section class="">
                <form action="admin/inc/process.php?action=TopUpWallet" method="post">
                <div class="checkout_titles">
                    <p class="checkout_para">How much do you want to top up to your instajob's wallet? </p>
                    <input type="text" class="form-control topup_input" placeholder="Amount" id="topup_amount" name="topup_amount" required="">
                    <input type="hidden" name="userid" value="<?=$_GET['id'];?>">
                </div>
                <!--<div class="payment_methods">-->
                <!--    <div class="payment_methods_title">-->
                <!--        <h2>Payment Methods</h2>-->
                <!--    </div>-->
                <!--    <div class="payments_container"></div>-->
                <!--    <div class="online_payment_methods">-->
                <!--        <div class="transfer_methods">-->
                <!--            <img class="fpx_logo" src="assets/img/fpx-logo.png" alt="">-->
                <!--            <p class="pay_online">Pay via Online Transfer</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="field_wrapper">-->
                <!--    <div class="transfer_methods cerdit_debit_cards">-->
                <!--        <i class="fa-regular fa-credit-card"></i>-->
                <!--        <p class="pay_online">Credit/Debit card</p>-->
                <!--    </div>-->
                <!--    <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa-solid fa-plus"></i> </a>-->
                <!--</div>-->
                <div>
                    <!--<a href="?id=<?=$signle_service['id'];?>" class="btn_confrm_topup">-->
                    <button type="submit" class="rounded btn-success btn-sucs btnm-frst w-100"> Confirm</button>
                    <!--</a>-->
                </div>
                </form>
            </Section>
        <!--</div>-->
         </div>

    
<?php include('inc/footer.php'); ?>