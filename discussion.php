<?php 
    $page = 'Discussion';
    include('inc/header.php'); 
    $from_user = $_GET['dis_id'];
    $stid = $_GET['stid'];
    $to_user = $_GET['lgn'];
    $message_room = $obj->GetMessageByFromUser($from_user,$to_user);
    $st_change = $obj->UpdateMessageViewed($stid);
     ?>
<?php include('inc/sidebar.php'); ?>     
<!--first tab row start-->
<div class="col-sm-12 instant-main">
    <div class="row">
        <div class="middle_container" id="myTabContent">
            <div class="d-flex hidn-objct sticky msg-header">
                <div class="backbtn"> 
                    <a href="professional-service?id=<?=$signle_service['id'];?>">
                        <svg class="dropbtn" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                </svg>
                        </a>
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
                    <a href="discussion-budget?id=<?=$signle_service['id'];?>">start job</a>
                    <a href="#">Propose budget </a>
                    <a href="#">Attach files</a>
                    <a href="#">Send location</a>
                    <a href="#">Report job</a>
                    <a href="#">Block user</a>
                </div>
            </div>
            <!--------------------------three dot menu mobila view----------------------------------->
            <div class="main_contain_discuss">
                <div class="active_content">
                    
                    <h3 class="discussion_title">Discussion<b style="color: #ff0000;"></b></h3>
                    
                    <div class="allchat bg-white"></div>
                    
                    
                    <form method="post" id="sendmessage">
                    <?php //foreach($message_room as $user_room) { 
                        // $userid = $user_room["from_user"];
                        // $userifno = $obj->GetUserById($userid);
                     
                    ?>
                  
                    <?php //} ?>
                    
                    
                    <div class="search_inp">
                        <!--<textarea name="message" rows="3" cols="86" id="sendmessage" placeholder="Write message" id="textbox" style="margin-top: 10px;"></textarea>-->
                        
                        <input type="hidden" id="sender_id" name="sender" class="form-control" value="<?=$_SESSION['Userid'];?>">
                        <input type="hidden" id="reciever_id" name="reciever" class="form-control" value="<?=$from_user;?>">
                        <div class="search_msg_wrapper">
                        <input placeholder="Say something...." style="width: 100%;border-radius: 25px;" id="message" name="message">
                        </div>
                        <!--<button type="submit" class="send_btn" id="">Send</button>-->
                    </div>
                    </form>
                </div>
                <!--------------------- hidden content of discussion--------------------->
                <!--<div class="hidden_content" style="margin-top: 100px;">-->
                <!--    <div class="img-p third-pge-contnt" style="align-items:unset;  margin:0; border-top: 1px solid #F1F3F4;">-->
                <!--        <div class="hh-1"><img class="cir-img" src="assets/img/photo-1472457897821-70d3819a0e24.avif" alt=""></div>-->
                <!--        <div class="all-cntnt">-->
                <!--            <div class="align-items-center"  style="padding:0;">-->
                <!--                <div class="items-title">-->
                <!--                    <div>-->
                <!--                        <h5 class="pp mr-in title-name"  style="margin:0; font-size: 18px;">michael-ho</h5>-->
                <!--                    </div>-->
                <!--                    <div>-->
                <!--                        <a><i class="fa-regular fa-thumbs-up"></i></a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="time_discuss">-->
                <!--                <span style="font-size: 12px;">3 hours ago</span>-->
                <!--            </div>-->
                <!--            <p class="content-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit  amet adipiscing elit amet </p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="img-p third-pge-contnt  img_p " style="align-items:unset;">-->
                <!--        <div class="hh-1"><img class="cir-img" src="assets/img/photo-1472457897821-70d3819a0e24.avif" alt=""></div>-->
                <!--        <div class="all-cntnt" style="width:100%;">-->
                <!--            <div class=" align-items-center"  style="padding:0;">-->
                <!--                <div class="items-title">-->
                <!--                    <div>-->
                <!--                        <h5 class="pp mr-in title-name"  style="margin:0; font-size: 18px;">billyjeans88</h5>-->
                <!--                    </div>-->
                <!--                    <div>-->
                <!--                        <a><i class="fa-regular fa-thumbs-up"></i></a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="time_discuss">-->
                <!--                <span style="font-size: 12px;">3 hours ago</span>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                   
                <!--</div>-->
            </div>
            <!-- -------------------hidden content of discussion------------------->
        </div>
<!--    </div>-->
<!--</div> -->
 <?php include('inc/footer.php'); ?>
 
<script>
   $(document).ready(function(){
 
    // updating the view with notifications using ajax
function load_userchat_notification(view = '')
{
    var reciever = <?=$_GET['dis_id'];?>;
    var sender = <?=$_GET['lgn'];?>;
    
 $.ajax({
  url:"admin/inc/process.php?action=GetUserChat",
  method:"POST",
  data:{view:view,reciever:reciever,sender:sender},
  dataType:"json",
  success:function(data)
  {
  $('.allchat').html(data.notification);
 
  }
 });
}

load_userchat_notification();  

setTimeout(function() {load_userchat_notification();}, 1800);
 
// submit form and get new records

$('#sendmessage').on('submit', function(event){
 event.preventDefault();
 
 if($('#sender_id').val() != '' && $('#reciever_id').val() != '' && $('#message').val() != '')
  {
    var form_data = $(this).serialize();
    $.ajax({
       url:"admin/inc/process.php?action=SendMessage",
       method:"POST",
       data:form_data,
       success:function(data)
        { 
         $('#sendmessage')[0].reset();
        //  alert('You Invition is successfully Sent!!')
             load_userchat_notification(); 
  }
 });
 
 } else

 {
  alert("Both Fields are Required");
 }


});

        

});
</script>