<?php 
    $page = 'Job Details';
    include('inc/header.php'); 
    
    $val = $_GET['job'];
    $job =  $obj->myUrlEncode($val);
    
    //$job = $_GET['job'];
    $signle_job = $obj->GetJobByTopic($job);
    $userid = $signle_job['user_id'];
    $postuser = $obj->GetUserById($userid);
    // print_r($postuser);
    ?>
<?php include('inc/sidebar.php'); ?>    
<!--first tab row start-->
<div class="col-sm-12 instant-main">
<div class="row">
<div class="middle_container" id="myTabContent">
    <div class="tab-pane fade show active wrap_content_mid" id="one" role="tabpanel" aria-labelledby="one-tab">
        <div class="head-mid">
            <h2>Professional Services For Hire</h2>
        </div>
        <div>
            <!-- for image and content -->
        </div>
        <div class="mid-pro">
            <div class="profsnl-servc">
                <div class="big-img-pro">
                    <img class="pro-big-img" src="admin/assets/img/services/<?=$signle_job['photos'];?>" alt=""> 
                </div>
                <div class="scnd-bg-clr">
                    <div class="img-cir-prof">
                        <img class="sm-img-profsonal" src="assets/img/dcc2ccd9.avif"alt="">
                        <div class="dream-p-img">
                            <p class="pp mr-in title-name "><?php echo $postuser['ProfileName'];?></p>
                            <p class="dream-p-impro" ><img class="cir-img star-yllo" src="assets/img/star-svg.png" alt="">5.0 (32)</p>
                        </div>
                    </div>
                    <div class="myr">
                        <p class="jst-now"><?=$signle_job['price'];?> <?=$signle_job['price_type'];?></p>
                    </div>
                </div>
                <div class="third-sec-profsnl">
                    <div class="hd-para">
                        <div>
                            <h6><?=$signle_job['topic'];?> </h6>
                        </div>
                        <div>
                            <p> <?=$signle_job['description'];?></p>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="pro-ul">
                        <li>Delivery:<?=$signle_job['fast_complete'];?></li>
                        <li>Preferred Day:<?=$signle_job['prefer_day'];?></li>
                        <li>Preferred Time: </li>
                    </ul>
                </div>
            </div>
            <div class="flx">
                <div class="row user-info_row">
                    <div class="col-lg-8">
                        <div class="dream">
                            <?php ?>
                            <?php if(!empty($postuser['ProfilePic'])) { ?>
                            <img  class="main-img profile-in_mid" src="admin/assets/img/profile/<?php echo $postuser['ProfilePic'];?>" alt="">
                            <?php } else { ?>
                            <img  class="main-img" src="assets/img/male-1.png" alt="">
                            <?php }?>
                            <div class="dream-star">
                                <h6> <?php   echo $postuser['ProfileName'];?></h6>
                                <p> <img class="small-img-star " src="assets/img/star-svg.png" alt=""> New Member</p>
                                <!--<p>From: <?=$postuser['Country'];?></p>-->
                                <!--<p>Member Since: <?php $datee = date_create($postuser['Created_at']); echo date_format($datee,"M Y"); ?></p>-->
                                <p>Level 3 Member </p>
                            </div>
                        </div>
                        <div class="users_all_info">
                            <div class="users_info_container">
                                <div class="">
                                    <table class="table_container">
                                        <tr class="table-row_top">
                                            <th><?=$postuser['Country'];?></th>
                                            <th><?php $datee = date_create($postuser['Created_at']); echo date_format($datee,"M Y"); ?></th>
                                            <th>15min</th>
                                            <th>230k+</th>
                                        </tr>
                                        <tr class="table-row_users">
                                            <td>Country</td>
                                            <td>Member since</td>
                                            <td>Respomse time</td>
                                            <td>Earning MYR</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div  class="profile-mid_right_btns">
                            <div>
                                <!--<a href="message"><button class="snd-msg">Send a message</button></a>-->
                                <a href="discussion?dis_id=<?=$postuser['id']?>"><button class="snd-msg">Send a message</button></a>

                            </div>
                            <div>
                                 <button class="invt-job-intrvw" data-toggle="modal" type="button" data-target="#exampleModalCenter" value="<?=$postuser['id'];?>">Invite for job interview</button> 
                            <input type="hidden" name="job-id" id="jobid" value="<?=$signle_job['id'];?>">
                            </div>
                            <div>
                                 <button data-toggle="modal" data-target="#exampleModal" class="invite-jop-post" value="<?=$postuser['id'];?>">Invite to your job post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--title & summary 1-->
            <div class="profile-mid-content">
                <div class="title-and-para">
                    <div class="bio-title">
                        <h3>Profile Bio</h3>
                    </div>
                    <div class="bio">
                        <p> <?php echo $postuser['ProfileBio'];?></p>
                    </div>
                </div>
            </div>
            <!--title & summary 1-->
            <!--title & summary 1-->
            <div class="profile-mid-content">
                <div class="title-and-para">
                    <div class="bio-title title_bio">
                        <div class="pro-bio-contain">
                            <h3>Skills</h3>
                        </div>
                    </div>
                    <div class="row skill_hobbies_">
                        <?php if(!empty($postuser['Skills'])) { ?>
                        <p class="skills"> <?php echo str_replace(",","<p class='skills'>",$postuser['Skills']); ?> </p>
                        <?php } else {echo 'Nothing added';}?>
                    </div>
                </div>
            </div>
            <!--title & summary 1-->
            <div class="profile-mid-content">
                <div class="title-and-para">
                    <div class="bio-title title_bio">
                        <div class="pro-bio-contain">
                            <h3>Hobbies</h3>
                        </div>
                    </div>
                    <div class="row skill_hobbies_">
                        <?php if(!empty($postuser['Hobbies'])) { ?>
                        <p class="skills"> <?php echo str_replace(",","<p class='skills'>",$postuser['Hobbies']); ?> </p>
                        <?php } else {echo 'Nothing added';}?>
                    </div>
                </div>
            </div>
            <!--title & summary 1-->
            <!--title & summary 2-->
            <div class="profile-mid-content">
                <div class="title-and-para">
                    <div class="bio-title">
                        <h3>Qualification / Awards</h3>
                    </div>
                    <div class="bio-quali">
                        <p><?php echo $postuser['Qualification'];?> <?php echo $postuser['Year'];?></p>
                    </div>
                </div>
            </div>
            <!--title & summary 2-->
            <!---->
            <div class="review-sec-profile">
                <div class="bio-title fl-sm">
                    <h3>Reviews</h3>
                    <div class="show-all">
                        <a href="#">Show All</a>
                    </div>
                </div>
                <div class="review-content">
                    <div class="star-rating-img">
                        <img class="review-img" src="https://mitdevelop.com/instajobs/admin/assets/img/services/R0010382.JPG" alt="">
                    </div>
                    <div class="star-rating">
                        <h3>Clinton</h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p>Lorem ipsum Pellentesque efficitur leo a laoreet. Quis neque fringilla, in imperdiet sapien euismod.</p>
                <div class="review-content">
                    <div class="star-rating-img">
                        <img class="review-img" src="https://mitdevelop.com/instajobs/admin/assets/img/services/Chrysanthemum.jpg" alt="">
                    </div>
                    <div class="star-rating">
                        <h3>Abdullah</h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p>Lorem ipsum Pellentesque efficitur leo a laoreet. Quis neque fringilla, in imperdiet sapien euismod.</p>
                <div class="review-content">
                    <div class="star-rating-img">
                        <img class="review-img" src="https://mitdevelop.com/instajobs/admin/assets/img/services/R0010382.JPG" alt="">
                    </div>
                    <div class="star-rating">
                        <h3>Man Kaya</h3>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p>Lorem ipsum Pellentesque efficitur leo a laoreet. Quis neque fringilla, in imperdiet sapien euismod.</p>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php'); ?> 
<script>
    $(document).ready(function(){
        
        $('#two-tab').click(function(){
            $('.service-create').css('display', 'none')
            $('.post-create').css('display', 'block')
        });
        
         $('#one-tab').click(function(){
            $('.service-create').css('display', 'block')
            $('.post-create').css('display', 'none')
        });
        
    });
    
    
    
</script>