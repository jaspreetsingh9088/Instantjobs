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
        <div class="middle_container">

            <div class="head-mid people-paid">
                <h2>Professional Services</h2>
            </div>

            <!------------------------------------------search bar new--------------------------------------------------->
            <div class="content_sec_service">
                <!--Carousel Start -->
                <div class="mid-i-p">
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
                         <p class=" tooltip pp2 cl-w2 w-75">
                           <?= substr($row['topic'], 0, 80);?>
                         </p>
                       </div>
                       <?php $i++; } ?>
                     </div>
                   </div>
                 </div>
                <!--Carousel End -->

                <div id="livesearch"></div>
<!--<div class="loading-overlay" style="display: none;"><div class="overlay-content">Loading.....</div>-->
<!--<div id="userData"></div>-->
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
                            <img class="heart-img " src="assets/img/hearts.png" id="dislike" alt="" data-id="2"
                                post-id="<?=$row['id'];?>" style="cursor:pointer;">

                            <?php } elseif($likedislike['status'] == 2) {   ?>
                            <img class="heart-img white_img_heart_wrap" src="assets/img/white-heart-1.png" alt="" id="updatelike"
                              data-id="1" post-id="<?=$row['id'];?>">
                            <?php } else { ?>
                            <img class="heart-img white_img_heart_wrap likehide" src="assets/img/white-heart-1.png" alt="" id="like"
                              data-id="1" post-id="<?=$row['id'];?>">
                            <?php }   ?>
                        </div>
                        <div class="outer">
                            
                            <div class="img-p">
                                
                                 <a class="name_topic" href="professional-service?t=<?=$row['id'];?>&service=<?=$topic;?>">
                                <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$row['photos'];?>"
                                        alt=""></div>
                                        </a>
                                <div class="all-cnt">
                                    <div class="inner">
                                        <a href="user-view.php?viewuserid=<?=$userinfo['id'];?>">
                                            <div class="d-flex two-lb align-items-center heart-img-head">
                                                <div class="img-heart-nm">
                                                    <img class="sm-img"
                                                        src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>"
                                                        alt="">
                                                    <p class="pp mr-in">
                                                        <?=$userinfo['ProfileName'];?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <a class="name_topic" href="professional-service?t=<?=$row['id'];?>&service=<?=$topic;?>">
                                    <p class="pp2" alt="<?=$row['topic'];?>">
                                        <?php echo substr($row['topic'], 0, 80);?>
                                    </p>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <small>4.9 (108)</small>
                                        </div>

                                        <p><small>From </small> <b>
                                                <?=$row['price'];?>
                                                <?=$row['price_type'];?>
                                            </b> </p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>

                    <?php } ?>
                </div>
                <div id="skillsearch"></div>
            </div>



        </div>

        <div class="plus-sign">
            <a href="select-services">
              <svg class="text-light plus_svg_home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
              </svg>
            </a>
        </div>

        <?php include('inc/footer.php'); ?>


<script>
  $(document).ready(function() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showLocation);
    } else {
      $("#location").html("Geolocation is not supported by this browser.");
    }

    /* LIKE */
    $(document).on("click", "#like", function(e) {
      var like = $(this).attr("data-id");
      var postId = $(this).attr("post-id");
      var userId = <?= $user_id; ?>;

      handleLikeDislike("like", like, postId, userId);
    });

    /* DISLIKE */
    $(document).on("click", "#dislike", function(e) {
      var dislike = $(this).attr("data-id");
      var postId = $(this).attr("post-id");
      var userId = <?= $user_id; ?>;

      handleLikeDislike("dislike", dislike, postId, userId);
    });

    /* UPDATE DISLIKE */
    $(document).on("click", "#updatelike", function(e) {
      var updateLike = $(this).attr("data-id");
      var postId = $(this).attr("post-id");
      var userId = <?= $user_id; ?>;

      handleLikeDislike("updatelike", updateLike, postId, userId);
    });
  });

  function handleLikeDislike(type, dataId, postId, userId) {
    $.ajax({
      type: "GET",
      url: `admin/inc/process.php?${type}=${dataId}&postid=${postId}&userid=${userId}`,
      dataType: "html",
      success: function(data) {
        location.reload();
      }
    });
  }

  function showLocation(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;

    $.ajax({
      type: "POST",
      url: "getLocation.php",
      data: "latitude=" + latitude + "&longitude=" + longitude,
      success: function(msg) {
        if (msg) {
          $("#location").html(msg);
        } else {
          $("#location").html("Not Available");
        }
      }
    });
  }
</script>