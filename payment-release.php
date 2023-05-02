<?php 
    $page = 'Release Payment';
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
            <section class="payment_bg">
            <div class="d-flex hidn-objct sticky msg-header">
                <div class="backbtn">
                    <a href="payment-success?id=<?=$signle_service['id'];?>"><i class="fa-solid fa-arrow-left"></i></a>
                    <div class="prof-heigh-wid">
                        <div class="manage-as-lo">Full stack developer with knowledge of PHP   and  from the back-end </div>
                    </div>
                </div>
                <div class="prof-heigh-wid">
                    <div class="manage-as-lo"><?=$signle_service['topic'];?></div>
                </div>
                <div class="rightsidemenu">
                    <div><i class="fa-solid fa-ellipsis-vertical"></i></div>
                </div>
            </div>
            <div class="">
                <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                    <h3 class="text-left font-weight-bold">Summary</h3>
                </div>
            </div>
            <div class="">
                <div class="">
                    <div class="summary-table-left">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="d-flex">
                                <p style="font-size: 13px;">I need help saving my bosai tree</p>
                                <div  style="padding-left:10px;">
                                </div>
                            </div>
                            <p>RM499</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border border-2">
            <div class="">
                <div class="" >
                    <div class="summary-table-left d-flex justify-content-between" >
                        <div class="text-left">
                            <p>5% Service Fee</p>
                            <p>6% SST</p>
                            <p><strong>Total</strong></p>
                        </div>
                        <div class="summary-table-right">
                            <p>RMXXX</p>
                            <p>RMXXX</p>
                            <p><strong>RMXXXX</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------->
            <div class="field_wrapper">
                <div class="d-flex justify-content-between payment_methd">
                    <h2 class="font-weight-bold">Release Payment</h2>
                </div>
                <div class="release-pay-container">
                    <div class="d-flex justify-content-between align-items-center payment_percnt">
                        <p>payment 25%</p>
                        <a href="payment-release-success?id=<?=$signle_service['id'];?>"><button>RELEASE</button></a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center payment_percnt">
                        <p>payment 50%</p>
                        <button>RELEASE</button>
                    </div>
                    <div class="d-flex justify-content-between align-items-center payment_percnt pay_release">
                        <p>payment 25%</p>
                        <button>RELEASE</button>
                    </div>
                </div>
            </div>
            <div class="cancel-btn">
                <i class="fa-solid fa-circle-exclamation"></i>
                <button style="font-size: 11px;">Cancel job</button>
            </div>
             </section>
			 </div>
  
                <?php include('inc/footer.php'); ?>