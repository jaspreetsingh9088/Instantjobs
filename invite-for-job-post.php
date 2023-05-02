<?php 
    $page = 'Invite For Job Post';
    include('inc/header.php'); 
     $portfolio = $obj->GetPortfolioByUserId($user_id);
      
    ?>
<div class="container-fluid">
    <!-------- ASIDE SEC START -------->
    <?php include('inc/sidebar.php'); ?>     
    <!--first tab row start-->
    <div class="col-sm-12 instant-main">
        <div class="row">
            <div class="col-lg-9 col-md-9 second-mid example">
                <div class="head-mid">
                    <h2>Public Profile</h2>
                </div>
                <!-- ----------------------middle one---------------------- -->
                <div class="bck-white ">
                    <?php include('user-information.php'); ?>   
                    <!--<div class="row">-->
                    <!--    <div class="col-lg-12">-->
                    <!--        <div class="interview_section">-->
                    <!--            <h3>Invite to your job post</h3>-->
                    <!--            <p>Pick a job from the list below  to send a job invitation</p>-->
                    <!--        </div>-->
                    <!--        <div class="inp_and_icon">-->
                    <!--            <input type="text" id="search" name="fname" placeholder="Search job post">-->
                    <!--            <i class="fa-solid fa-magnifying-glass"></i>-->
                    <!--        </div>-->
                    <!--        <div>-->
                    <!--            <div class="img-pro-fl for-spac">-->
                    <!--                <div class="img-pro-fl mid_bord_contain">-->
                    <!--                    <img class="" src="admin/assets/img/services/photo-1472457897821-70d3819a0e24.avif" alt="">-->
                    <!--                    <div>-->
                    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div>  <input type="radio" id="html" name="fav_language" value="HTML"> </div>-->
                    <!--            </div>-->
                    <!--            <div class="img-pro-fl for-spac middle_bord">-->
                    <!--                <div class="img-pro-fl mid_bord_contain">-->
                    <!--                    <img class="" src="admin/assets/img/services/photo-1472457897821-70d3819a0e24.avif" alt="">-->
                    <!--                    <div>-->
                    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div>  <input type="radio" id="html" name="fav_language" value="HTML"> </div>-->
                    <!--            </div>-->
                    <!--            <div class="img-pro-fl for-spac">-->
                    <!--                <div class="img-pro-fl mid_bord_contain">-->
                    <!--                    <img class="" src="admin/assets/img/services/photo-1472457897821-70d3819a0e24.avif" alt="">-->
                    <!--                    <div>-->
                    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div>  <input type="radio" id="html" name="fav_language" value="HTML"> </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="btn_snd_cancel">-->
                    <!--    <a class="anc_cancel" href="">cancel</a>-->
                    <!--    <a href=""><button class="send_btn">Invite</button></a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('inc/footer.php'); ?>