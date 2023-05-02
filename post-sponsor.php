<?php
    $page = 'Service Sponsorship';
    include('inc/header.php');  
    include('inc/sidebar.php');  
     
    $serviceid = $_GET['id'];
    $price = $_GET['am'];
    $signle_service = $obj->GetServiceById($serviceid);
    $userid = $signle_service['user_id'];
    $postuser = $obj->GetUserById($userid);
    
    ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<!--first tab row start-->
<div class="col-sm-12 instant-main" style="background: #fff">
<div class="row">
<div class="col-lg-12 col-md-12 second-mid example">
<div class="select_srvc_choice total_budget_wrapper">
<div class="card_wrapper">
<div class="main prof-inf-new active" style="">
<a href="service-provider"> 
<img class="logo_instant_jobss" src="assets/img/new-instant-logo.png" alt="">
</a>
<p class="text-center lets sevices_topic_">Sponsor will be shown on the top , page providing visibility and recognition as a thank you for your support </p>

<div class="radio form-check">
  <label class="form-check-label check_currency">
    <input class="form-check-input"  type="radio" name="action" value="green"/>
   RM14.00 for 7 days
  </label>
</div>
<div class="radio form-check">
  <label class="form-check-label check_currency">
    <input class="form-check-input"  type="radio" name="action" value="red"/>
    RM29.99 for 30 days
  </label>
</div>


<div class="service_provider_contain post_spon_wrap mt-4" style="position:relative;">
                 
                        <div class="outer">
                            
                            <div class="img-p post_spon_field_data">
                                
                                 <a class="name_topic" href="professional-service?t=<?=$signle_service['id'];?>&service=<?=$topic;?>">
                                <div class="hh-1 p-0"><img class="hhh" src="admin/assets/img/services/<?=$signle_service['photos'];?>"
                                        alt=""></div>
                                        </a>
                                <div class="all-cnt post_spon_post">
                                    <div class="inner">
                                        <a href="user-view.php?viewuserid=<?=$postuser['id'];?>">
                                            <div class="d-flex two-lb align-items-center heart-img-head">
                                                <div class="img-heart-nm">
                                                    <img class="sm-img"
                                                        src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($postuser['ProfilePic'])) { echo 'admin/assets/img/profile/'.$postuser['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>"
                                                        alt="">
                                                    <p class="pp mr-in">
                                                        <?=$postuser['ProfileName'];?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <a class="name_topic" href="professional-service?t=<?=$signle_service['id'];?>&service=<?=$topic;?>">
                                    <p class="pp2 text-left" alt="<?=$signle_service['topic'];?>">
                                        <?php echo substr($signle_service['topic'], 0, 80);?>
                                    </p>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="star position-absolute">
                                            <i class="fa-solid fa-star"></i>
                                            <small>4.9 (108)</small>
                                        </div>

                                        <p class="text-right"><small>From </small> <b>
                                                RM<?=$price;?>
                                                <?//=$signle_service['price_type'];?>
                                            </b> </p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sponsor-top_img">
                        <img src="assets/images/sponsor-top.png" alt="sponsor-top">
                    </div>

        <div id="green" class="show-hide">  
    
            <a href="#" class=" btn-check">
            <button type="button" class="rounded  btn-success btn-sucs btnm-frst w-100 post_spon_btn">Sponsor RM14.00 for 7 days</button>
            </a>
        </div>
            <div id="red" class="show-hide">
             <a href="#" class=" btn-check">
            <button type="button" class="rounded  btn-success btn-sucs btnm-frst w-100 post_spon_btn">Sponsor RM29.99 for 30 days</button>
            </a>
        </div>
        
          <div class="last_title">
        <div class="last_title" style="padding: 8px;">
          <p class="skip" onclick="wanttosubmit()" style="cursor: pointer; color: #0090FF">No, I don't want to sponsor</p>
        </div>
    </div>
    
    
    <script>
        $(document).ready(function(){ 
    $("input[name=action]").change(function() {
        var test = $(this).val();
        $(".show-hide").hide();
        $("#"+test).show();
    }); 
});


    function wanttosubmit() {
        var TotalAmount = <?=$price;?>;
        var PostId = <?=$serviceid;?>;
        
      $.ajax({
           type: 'POST',
           url: 'admin/inc/process.php?action=ServiceApprovalRequest',
           data:
           {
           PostId: PostId,
           TotalAmount: TotalAmount
           },
           success: function () {
      window.open("manage-post");

           }
       });
       
       
       
        
    }
    </script>
                    
<?php include('inc/footer.php'); ?>