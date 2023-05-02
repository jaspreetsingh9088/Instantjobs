<?php 
    $page = 'Discussion Budget Summary';
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
        <div class="head-mid">
            <h2>Summary</h2>
        </div>
            <div class="d-flex hidn-objct sticky msg-header">
                <div class="backbtn"> 
                    <a href="discussion?id=<?=$signle_service['id'];?>"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="prof-heigh-wid">
                    <div class="manage-as-lo"><?=$signle_service['topic'];?></div>
                </div>
                <div class="rightsidemenu">
                    <div><i class="fa-solid fa-ellipsis-vertical"></i></div>
                </div>
            </div>

            <img class="pro-big-img" src="admin/assets/img/services/<?=$signle_service['photos'];?>" alt="">
            <div class="">
                <div class="">
                    <div class="summary-table-left">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="d-flex">
                                <p style="font-size: 13px;">
                                    <?=$signle_service['topic'];?>
                                </p>
                                <div  style="padding-left:10px;">
                                </div>
                            </div>
                            <p>RM<?=$signle_service['price'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="margin:0;">
            <div class="">
                <div class="" >
                    <div class="summary-table-left align-center" style="display: flex;justify-content: space-between; align-items:center;">
                        <div>
                            <p>5% Service Fee</p>
                            <p>6% SST</p>
                            <label class="total_cost">
                            <b>Total:</b> 
                            </label>
                        </div>
                        <div class="summary-table-right">
                            <p>RM<?=$servicetax = $signle_service['price']*5/100;?></p>
                            <p>RM<?=$ssttax = $signle_service['price']*6/100;?></p>
                            <output id='total' form='cart'>RM<?=$servicetax + $signle_service['price']+ $ssttax;?></output>
                        </div>
                    </div>
                </div>
            </div>
            <div class="last_title">
                <div class="last_title" style="padding: 15px;">
                    <a href="summary-payment?serviceid=<?=$signle_service['id'];?>" >
                    <button type="button" class="rounded btn-success btn-sucs btnm-frst w-100">Create Payment Plan</button>
                    </a>
                    <br>
                    <p style="text-align:center !important;width: 100%;  font-size: 13px;">Always pay Through Instantjob to protect yourself, you can release the payment anytime.</p>
                </div>
            </div>
        </div>
<!--    </div>-->
<!--</div>-->
<?php include('inc/footer.php'); ?>