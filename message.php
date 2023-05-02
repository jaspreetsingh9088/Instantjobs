<?php $page = 'Message';
    include('inc/header.php'); ?>
<?php include('inc/sidebar.php'); 

 // Message By Dist Notification Start
    $userid = $_SESSION['Userid'];
    $messages = $obj->GetMessageByUser($userid);
    

?>     
<!--first tab row start-->
<div class="col-sm-12 instant-main">
<div class="row">
<div class="middle_container" id="myTabContent" >
    <div class="head-mid">
        <h2 class="message_title">Messages</h2>
    </div>
    <!---->
    <div class="tab-content">
        <!--------------------message content start----------------------------->
        <div id="message" class="tab-pane active">
            <?php while($row = mysqli_fetch_array($messages)) {
                 
                    $viewuserid = $row["from_user"]; 
                     $from_user = $row["from_user"]; 
                      $to_user = $userid; 
                    $userinfo = $obj->GetUSerByUserId($viewuserid);
                    // print_r($userinfo);
                    $messageinfo = $obj->GetMessageByFromUsers($from_user,$to_user);
                    // print_r($row);
               ?>
                
                <a href="discussion?stid=<?=$row["id"];?>&lgn=<?=$to_user;?>&dis_id=<?=$messageinfo['from_user'];?>">
            <div class="img-p third-pge-contnt"> 
                <div class="hh-1"><img class="cir-img" src="admin/assets/img/profile/<?=$userinfo["ProfilePic"];?>" alt=""></div>
                <div class="all-cntnt">
                    <div class="d-flex two-lb align-items-center">
                        <div class="items-title">
                            <div class="inner">
                                <!--<a href="user-view.php?viewuserid=<?//=$userinfo['id'];?>">-->
                                <p class="pp mr-in title-name"><?=$userinfo['ProfileName'];?>  </p>
                                <!--</a>-->
                             </div>
                             
                        </div>
                         <!--<div class="inner">-->
                        
                            <div class="just-now-ok">
                                <p class="jst-now"><?php $datee = date_create($messageinfo['date_created']); echo date_format($datee,"d M Y"); ?></p>
                            </div>
                       
                        <!--</div>-->
                    </div>
                    <p class="content-para"><?=$messageinfo['message'];?> </p>
                </div>
            </div>
            </a>
            <?php   } ?>
            
        </div>
        <!-----------------------------------message content end-------------------->
        <!-----------------------------------job status content start-------------------->
        <div id="job" class="tab-pane" style="">
            <div class="img-p third-pge-contnt">
                <div class="hh-1"><img class="cir-img" src="assets/img/photo-1472457897821-70d3819a0e24.avif" alt=""></div>
                <div class="all-cntnt">
                    <div class="d-flex two-lb align-items-center">
                        <div class="items-title">
                            <p class="pp mr-in title-name ">Aleafay</p>
                            <i class="fa-solid fa-star"></i>
                            <small class="sml"> 5.0 (32)</small> 
                        </div>
                        <div class="just-now-ok">
                            <p class="jst-now">Just Now</p>
                        </div>
                    </div>
                    <div class="d-flex content_w_btn">
                        <p class="content-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit  amet adipiscing elit amet </p>
                        <a class="job_status_btn" href="discussion?id=<?=$signle_service['id'];?>">
                        <button class="message-dicuss" >DISCUSS</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="img-p third-pge-contnt">
                <div class="hh-1"><img class="cir-img" src="assets/img/photo-1472457897821-70d3819a0e24.avif" alt=""></div>
                <div class="all-cntnt">
                    <div class="d-flex two-lb align-items-center    ">
                        <div class="items-title">
                            <p class="pp mr-in title-name ">Hammondbaile</p>
                            <i class="fa-solid fa-star"></i>
                            <small class="sml">2.2 (5))</small>
                        </div>
                        <div class="just-now">
                            <p class="jst-now">28 mins ago</p>
                        </div>
                    </div>
                    <div class="d-flex content_w_btn">
                        <p class="content-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit  amet adipiscing elit amet </p>
                        <a class="job_status_btn">
                        <button class="message-dicuss">ONGOING</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="img-p third-pge-contnt">
                <div class="hh-1"><img class="cir-img" src="assets/img/photo-1472457897821-70d3819a0e24.avif" alt=""></div>
                <div class="all-cntnt">
                    <div class="d-flex two-lb align-items-center    ">
                        <div class="items-title">
                            <p class="pp mr-in title-name ">Daisyfinnegan</p>
                            <i class="fa-solid fa-star"></i>
                            <small class="sml">3.2 (12)</small>
                        </div>
                        <div class="just-now">
                            <p class="jst-now">8 hours ago</p>
                        </div>
                    </div>
                    <div class="d-flex content_w_btn">
                        <p class="content-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit  amet adipiscing elit amet </p>
                        <a class="job_status_btn">
                        <button class="message-dicuss" >DONE</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="img-p third-pge-contnt">
                <div class="hh-1"><img class="cir-img" src="assets/img/photo-1472457897821-70d3819a0e24.avif" alt=""></div>
                <div class="all-cntnt">
                    <div class="d-flex two-lb align-items-center    ">
                        <div class="items-title">
                            <p class="pp mr-in title-name ">Chinspicy1</p>
                            <i class="fa-solid fa-star"></i>
                            <small class="sml">4.1 (22))</small>
                        </div>
                        <div class="just-now">
                            <p class="jst-now">4 days ago</p>
                        </div>
                    </div>
                    <div class="d-flex content_w_btn">
                        <p class="content-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit  amet adipiscing elit amet </p>
                        <a class="job_status_btn">
                        <button class="message-dicuss">CLOSED</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="img-p third-pge-contnt">
                <div class="hh-1"><img class="cir-img" src="assets/img/photo-1472457897821-70d3819a0e24.avif" alt=""></div>
                <div class="all-cntnt">
                    <div class="d-flex two-lb align-items-center    ">
                        <div class="items-title">
                            <p class="pp mr-in title-name ">Todlila</p>
                            <i class="fa-solid fa-star"></i>
                            <small class="sml">4.4 (19)</small> 
                        </div>
                        <div class="just-now">
                            <p class="jst-now">5 mnth ago</p>
                        </div>
                    </div>
                    <div class="d-flex content_w_btn">
                        <p class="content-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit  amet adipiscing elit amet </p>
                        <a class="job_status_btn">
                        <button class="message-dicuss">DISPUTE</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------job status content End-------------------->
</div>
<?php include('inc/footer.php'); ?>