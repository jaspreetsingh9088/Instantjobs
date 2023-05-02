<?php 
    $page = 'Discussion Budget';
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
        <div class="col-lg-9 col-md-9" id="myTabContent">
            <div class="d-flex hidn-objct sticky msg-header">
                <div class="backbtn"> 
                    <a href="discussion?id=<?=$signle_service['id'];?>"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="prof-heigh-wid">
                    <div class="manage-as-lo"><?=$signle_service['topic'];?></div>
                </div>
                <div class="rightsidemenu">
                    <button class="btn-content-hide" ><i onclick="myFun()"class="fa-solid fa-ellipsis-vertical dropbtn"></i></button>
                </div>
            </div>
            <!----------------three dot menu mobila view START--------------------->
            <div class="dropdown">
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">start job</a>
                    <a href="#">propose budget </a>
                    <a href="#">Attach files</a>
                    <a href="#">Send location</a>
                    <a href="#">Report job</a>
                    <a href="#">Block user</a>
                </div>
            </div>
            <!--------------------------three dot menu mobila view----------------------------------->
            <!------------------------------------Middle content--------------------------->
            <h2>Budget</h2>
            <div class="img-p img_p">
                <div class="hh-1"><img class="hhh" src="admin/assets/img/services/how-often-feed-dog-900x600.jpg" alt="">
                </div>
                <div class="all-cnt">
                    <div class="d-flex two-lb align-items-center job-listing-fl  ">
                        <div class="title_img">
                            <img class="sm-img" src="admin/assets/img/profile/247929946_1473706362988509_5649812827670982879_n.jpg" alt="">
                            <p class="pp mr-in ">Jaspreet Singh</p>
                        </div>
                        <div>
                            <div class="clock-time">
                                <i class="fa-regular fa-clock"></i>
                                <p>72h 42s left</p>
                            </div>
                        </div>
                    </div>
                    <p class="pp2">Need help feeding my dog over this weekend 2 days. </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <img class="cash-img" src="assets/img/cash.svg">   
                            <b>60 MYR</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inp_content">
                <div class="">
                    <h3 style="font-size: 18px;">Budget</h3>
                </div>
                <div class="input-group" style="width: 100%;">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" style="padding: 19px;">
                    <div class="input-group-append" style="width: 80%;">
                        <button class="btn btn-outline-secondary dropdown-toggle" style="background: #eaeaea; color: #000; border: none;;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MYR</button>
                        <a href="discussion?id=<?=$signle_service['id'];?>"><button type="button" class="btn-wallet btn_budget_confirm" style="margin-left: 40px;">Confirm</button></a>
                    </div>
                </div>
            </div>
            <!-----------------------------------Middle content------------------------>  
        </div>
    </div>
</div>