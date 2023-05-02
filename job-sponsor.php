<?php
    $page = 'Job Sponsorship';
    include('inc/header.php');  
    include('inc/sidebar.php');  
     
    $jobid = $_GET['id'];
    $price = $_GET['am'];
    
    $signle_service = $obj->GetJobById($jobid);
    $userid = $signle_service['user_id'];
    $postuser = $obj->GetUserById($userid);
    
    ?>
 <style>
     button.rounded.btn-sucs.btnm-frst.w-100 {background: #0090FF !important;}
 </style>
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
                            
                            <div class="img-p img_wrap_sponsor">
                                
                                 <a class="name_topic" href="professional-service?t=<?=$signle_service['id'];?>&service=<?=$topic;?>">
                                <div class="hh-1 p-0"><img class="hhh" src="admin/assets/img/services/<?=$signle_service['photos'];?>"
                                        alt=""></div>
                                        </a>
                                <div class="all-cnt post_spon_post">
                                    <div class="inner">
                                        <a href="user-view.php?viewuserid=<?=$postuser['id'];?>">
                                            <div class="d-flex two-lb align-items-center heart-img-head">
                                                <div class="img-heart-nm">
                                                    <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($postuser['ProfilePic'])) { echo 'admin/assets/img/profile/'.$postuser['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                                                    <p class="pp mr-in"><?=$postuser['ProfileName'];?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <a class="name_topic" href="professional-service?t=<?=$signle_service['id'];?>&service=<?=$topic;?>">
                                    <p class="pp2 text-left" alt="<?=$signle_service['topic'];?>">
                                        <?php echo substr($signle_service['topic'], 0, 80);?>
                                    </p>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="csh-img-div wrapper_cash_total">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                                            </svg> 
                                            <b><?=$signle_service['price'];?>MYR</b>
                                        </div>

                                        <div class="wrapper_clock">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-outline</title><path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" /></svg>
                        <?php
                            $remaining_hours =$signle_service['fast_complete']; // number of hours left
                            $now = new DateTime();
                            $end = clone $now;
                            $end->add(new DateInterval('PT'.$remaining_hours.'H'));
                            $interval = $now->diff($end);
                            $remaining_time = $interval->format('%Hhr %Ss left');
                            echo '<b class="text-dark">'.$remaining_time.'</b>'; // output: 24hr 0m 0s left
                        ?>
                       
                        </div>
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
            <button type="button" class="rounded btn-sucs btnm-frst w-100">Sponsor RM14.00 for 7 days</button>
            </a>
        </div>
            <div id="red" class="show-hide">
             <a href="#" class=" btn-check">
            <button type="button" class="rounded btn-sucs btnm-frst w-100">Sponsor RM29.99 for 30 days</button>
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
        var JobId = <?=$jobid;?>;
        
      $.ajax({
           type: 'POST',
           url: 'admin/inc/process.php?action=JobApprovalRequest',
           data:
           {
           JobId: JobId,
           TotalAmount: TotalAmount
           },
           success: function () {
      window.open("manage-post");

           }
       });
       
       
       
        
    }
    </script>
                    
<?php include('inc/footer.php'); ?>