<?php $page = 'Service Provider';
include('inc/header.php'); 

$ads = $obj->GetServiceByAds();
$jobads = $obj->GetJobsByAds();
 
?>

 <link rel="stylesheet" href="assets/css/service-provider.css">
            <!-------- ASIDE SEC START -------->
               <?php include('inc/sidebar.php'); ?>     
                    <!--first tab row start-->
       <div class="col-sm-12 instant-main">
                <div class="row" id="row_main">
                    <div class="col-lg-9 col-md-9">
                        <div id="myTabContent"> 
                    <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <div class="head-mid people-paid"> <h2>Professional Services</h2> </div>
                            

                            <!------------------------------------------search bar new--------------------------------------------------->
                            <div class="content_sec_service">
                                 <!--Carousel Start -->
                              <div class=" mid-i-p">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"> 
                                    <div class="carousel-inner">
                                        <?php 
                                        $i=1;
                                        while($row = mysqli_fetch_array($ads)){ 
                                        $userid = $row['user_id'];
                                        $userinfo = $obj->GetUserById($userid);
                                        ?>
                                        <div class="carousel-item <?php if($i == 1) { echo 'active';} else {} ?> p-20" style="background-image:url(admin/assets/img/services/<?=$row['photos'];?>);">
                                            <div class="d-flex first-profl">
                                                <div class="small-imgg">
                                                   <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                                                <p class="pp cl-w2 mr-in"><a href="profile?id=<?=$userid;?>"><?=$userinfo['ProfileName'];?></a></p> 
                                                </div>
                                                  <div class="Sponsor">
                                               <?php  $user_id = $_SESSION['Userid']; 
                                					if($user_idd == $_SESSION['Userid']){	
                                				?>
                                				    <a class="spnsr-serv-pro" href="manage-post.php">Sponsored</a>  
                                					<?php } else {	?>
                                					<a href="create-service.php">Sponsored</a> 
                                	                <?php } ?>
                                                
                                            </div>
                                            </div>
                                          
                                            <p class="pp2 cl-w2 w-75"><?=$row['topic'];?></p>
                                        </div>
                                        <?php $i++; } ?>
                                    </div>                             
                                </div>
                            </div>
                                 <!--Carousel End -->
                                
                                <div id="livesearch"></div>
                                
                                <div id="searchdata"> </div>
                                <div id="servicedata">
                                <?php 
                                while($row=mysqli_fetch_array($services)){ 
                                    $userid = $row['user_id'];
                                    $postid = $row['id'];
                                    $userinfo = $obj->GetUserById($userid);
                                    $likedislike = $obj->GetLikeDislikeByUser($user_id, $postid);
                                     $text = $row['topic'];
                                         $topic = $obj->slugify($text);
                                 ?> 
                                 <div class="service_provider_contain" style="position:relative;">
                                     <div class="likedislike">
                                          <?php if($likedislike['status'] == 1) { ?>
                                            <img class="heart-img " src="assets/img/hearts.png" id="dislike" alt="" data-id="2" post-id="<?=$row['id'];?>" style="cursor:pointer;" >
                                           
                                            <?php } elseif($likedislike['status'] == 2) {   ?>
                                            <img class="heart-img" src="assets/img/white-heart-1.png" alt="" id="updatelike" style="cursor:pointer;width: 19px;" data-id="1" post-id="<?=$row['id'];?>">
                                            <?php } else { ?>
                                                    <img class="heart-img likehide" src="assets/img/white-heart-1.png" alt="" id="like" style="cursor:pointer;width: 19px;" data-id="1" post-id="<?=$row['id'];?>">

                                            <?php }   ?>
                                          </div>  
                                          <div class="outer">
                                 <a class="name_topic" href="professional-service?service=<?=$topic;?>"></a>
                                     <div class="img-p">
                                     <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$row['photos'];?>" alt=""></div>
                                     <div class="all-cnt">
                                          <div class="inner">
                                         <a href="user-view.php?viewuserid=<?=$userinfo['id'];?>"> 
                                        <div class="d-flex two-lb align-items-center heart-img-head">
                                            <div class="img-heart-nm">
                                               <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>"
                                                    alt="">
                                                    <p class="pp mr-in"><?=$userinfo['ProfileName'];?></p>   
                                            </div>
                                         </div>
                                         </a>
                                         </div>
                                        <p class="pp2"><?=$row['topic'];?> 
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="star">
                                               <i class="fa-solid fa-star"></i>
                                                <small>4.9 (108)</small>
                                            </div>

                                            <p><small>From </small> <b><?=$row['price'];?> <?=$row['price_type'];?></b> </p>
                                        </div>
                                     </div>
                                 </div>
                                </div>
                                
                                
                                
                                 </div>
                                 
                                 <?php } ?>
                                 </div>
                                 <div id="skillsearch"></div>
                            </div>
                            </div>

                        </div>
                        </div>
                        
                    <div class="plus-sign">
                      <a href="create-service">
                          <i class="fa-solid fa-plus"></i>
                      </a>  
                    </div>

                 <?php include('inc/footer.php'); ?>


  <script>
   
/* LIKE */
      $(document).on('click','#like',function(e){
         var like = $(this).attr('data-id');
        var postid = $(this).attr('post-id');
        var userid = <?=$user_id;?>;
        $.ajax({    
        type: "GET",
        url: "admin/inc/process.php?like="+like+"&postid="+postid+"&userid="+userid,             
        dataType: "html",                  
        success: function(data){                    
                   location.reload();
         }
    });  
    
 
      
});

/* DISLIKE */
$(document).on('click','#dislike',function(e){
         var dislike = $(this).attr('data-id');
        var postid = $(this).attr('post-id');
        var userid = <?=$user_id;?>;
       $.ajax({    
        type: "GET",
        url: "admin/inc/process.php?dislike="+dislike+"&postid="+postid+"&userid="+userid,             
        dataType: "html",                  
        success: function(data){                    
                   location.reload();
          }
    });  
 });
 
 /* UPDATE DISLIKE */
$(document).on('click','#updatelike',function(e){
         var updatelike = $(this).attr('data-id');
        var postid = $(this).attr('post-id');
        var userid = <?=$user_id;?>;
       $.ajax({    
        type: "GET",
        url: "admin/inc/process.php?updatelike="+updatelike+"&postid="+postid+"&userid="+userid,             
        dataType: "html",                  
        success: function(data){                    
                   location.reload();
          }
    });  
 });



  
$(document).ready(function(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $.ajax({
        type:'POST',
        url:'getLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
        }
    });
}
</script>