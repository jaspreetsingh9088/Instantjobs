<?php
    $page = 'Manage Post';
    include('inc/header.php'); 
    
    $filter1 = $_GET['f1'];
    $filter2 = $_GET['f2'];
    if($filter1 == 'services') {
    $filterdata = $obj->GetServiceFilterData($user_id);
    } elseif($filter2 == 'jobs') {
            $filterdata = $obj->GetJobFilterData($user_id);
        }else{}
    $userservices = $obj->GetServiceByUserId($user_id);
    $pending_services = $obj->GetPendingServiceByUserId($user_id);
    $inactive_services = $obj->GetInactiveServiceByUserId($user_id);
    $activejobs = $obj->GetActiveJobByUserId($user_id);
        $inactive_jobs = $obj->GetInactiveJobByUserId($user_id);
        $alljobs = $obj->GetAllJobByUser($user_id);
    $waiting_jobs = $obj->GetPendingJobByUserId($user_id);
    $completed_services = $obj->GetCompleteServicesByUserId($user_id);
    $rejected_services = $obj->GetRejectedServicesByUserId($user_id);
     
    $rejected_jobs = $obj->GetRejectedJobsByUserId($user_id);
    ?>
<?php include('inc/sidebar.php'); ?>   

<style>
 .show-Dropdown {
        display: block;
      }
      /* Dropdown container */
      .dropdown {
        position: relative;
        display: inline-block;
      }

      /* Dropdown button */
      .dropdown button {
        padding: 10px;
        border: none;
        cursor: pointer;
      }

      /* Dropdown content */
      .dropdown-contenttt {
        display: none;
        position: absolute;
        z-index: 1;
        left: 0;
        top: 26px;
        background: #fff;
        width: max-content;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        z-index: 1;
        left: 0;
        top: 40px !important;
        width: 100%;
      }

      /* Show dropdown content on button click */
      .show-dropdown {
        display: block;
      }

      /* Dropdown links */
      .dropdown-contenttt a {
        color: black;
        padding: 6px 4px;
        text-decoration: none;
        display: block;
        font-size: 12px;
        font-family: 'Roboto';
        border-bottom: 1px solid #cfcccc;
      }
      .dropdown-content a {
        color: black;
        padding: 6px 10px;
        text-decoration: none;
        display: block;
        font-size: 14px;
      }

      /* Change color of dropdown links on hover */
      .dropdown-contenttt a:hover {
        background-color: #f1f1f1;
      }
      .dropdown-content a:hover {
        background-color: #f1f1f1 !important;
      }
      button.btn_dropDown{
        padding: 2px 6px;
        border: none;
        cursor: pointer;
        font-size: 15px;
        height: 25px;
}

.dropDown_links a:focus{
    background:#00c853;
    color:#fff;
}
.dropDown_links_post a {
    padding: 8px !important;
    font-size: 12px !important;
}
.dropDown_links_post {
    right: 16px !important;
    top: 5px !important;
    width: max-content;

}
@media only screen and (min-width: 768px) {
  .mobile_drop_down {
    display: none;
  }
}

/* Mobile view */
@media only screen and (max-width: 767px) {
  .mobile_drop_down {
    display: flex;
  }
}



   /* toggle in label designing */
    .toggle {
           position: absolute;
    display: inline-block;
    width: 65px;
    height: 30px;
        right: 45px;
    top: 9px;

    background-color: #e5e5e5;
    border-radius: 30px;
    }
           
    /* After slide changes */
    .toggle:after {
          content: '';
    position: absolute;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background-color: #fff;
    top: 3px;
    left: 3px;
    transition: all 0.5s;
    }
           
    /* Toggle text */
   .off_wrap_btn {
    top: 8px;
    position: absolute;
    right:8px;
    font-family: 'Roboto';
    font-size: 12px;
    font-weight: bold;
}   
   .on_wrap_btn {
    top: 8px;
    position: absolute;
    left:6px;
    color:#fff !important;
    font-family: 'Roboto';
    font-size: 12px;
    font-weight: bold;
}   
    /* Checkbox checked effect */
    .checkbox:checked + .toggle::after {
            left: 35px;
    }
           
    /* Checkbox checked toggle label bg color */
    .checkbox:checked + .toggle {
        background-color: #000;
    }
           
    /* Checkbox vanished */
    .checkbox {
        display : none;
    }
    .jst-nw.d-flex.justify-content-end {
    gap: 5px;
}


button.btn.btn-round.btn-default.active {
    background: #323232;
    color: #fff;
    border: 1px solid #000;
}
    </style>
<!--first tab row start-->
<div class="col-sm-12 instant-main">
<div class="row">
<div class="middle_container">
    <div class="head-mid">
        <h2>Manage Post</h2>
    </div>
    <!-- ----------------------middle one---------------------- -->

<div class="manage-section">
    <div class=" justify-content-between mb-2 mt-3 mobile_drop_down">
     <div class="dropdown ">
          <button class="text-dark bg-white font-weight-bold rounded btn_dropDown drop_btn_showall" onclick="toggleDropdownnnn()">Show All
            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
            </svg>
          </button>
          <div class="text-left dropdown-contenttt dropDown_links"> 
            <a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=">Show All</a>
            <a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=waiting">Waiting Approval</a>
            <a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=active">Active</a>
            <a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=inactive">Inactive</a>
            <a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=completed">Completed</a>
          </div>
        </div>
            <!--Create a New Service or POst-->
           <a href="select-services"><button type="button" class=" rounded btn_new_post">+ New Post</button></a> 
           
    </div>
    
    
         
        
        <!--All posts by user-->
            <div class="all-posts">
        <?php if($_GET['f1'] == 'all'  && $_GET['f2'] == '') { ?>
        <?php  
            while($rows = mysqli_fetch_array($userservices)) {
            	$userid = $rows['user_id'];
                $userinfo = $obj->GetUserById($userid);
              ?>
              
              <div class="">
    <p class="status-id"><?php if($rows['status'] == '') { echo 'Waiting Approval';} elseif($rows['status'] == 1) { echo 'Active';} elseif($rows['status'] == 2) { echo 'Inactive';} elseif($rows['status'] == 3) { echo 'Completed';} elseif($rows['status'] == 4) { echo 'Rejected';}  ?> : Post ID - MYS<?=$rows['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$rows['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>
                             <div class="icon-menu" onclick="ExtraMenu<?=$rows['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$rows['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                <a class="dropdown_menu" href="edit-service?id=<?=$rows['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$rows['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$rows['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><b class="highlighter-rouge"></b> <?=$rows['topic'];?> </p>
               <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$rows['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
    <!--Manage post  three horizontal drop down-->

<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$rows['id'];?>() {
      document.getElementById("more_menus<?=$rows['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
        <?php }  
            while($alljob = mysqli_fetch_array($alljobs)) {
            $userid = $alljob['user_id'];
            $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
    <p class="status-id"><?php if($alljob['status'] == '') { echo 'Waiting Approval';} elseif($alljob['status'] == 1) { echo 'Active';} elseif($alljob['status'] == 2) { echo 'Inactive';} elseif($alljob['status'] == 3) { echo 'Completed';} elseif($alljob['status'] == 4) { echo 'Rejected';} ?> :  Post ID - MYJ<?=$waiting_job['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$alljob['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$alljob['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$alljob['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                <a class="dropdown_menu" href="edit-post?id=<?=$alljob['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-post?id=<?=$alljob['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$alljob['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$alljob['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                         <div class="csh-img-div wrapper_cash_total">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                        </svg> 
                        <b>RM<?=$alljob['price'];?></b>
                    </div>
                     <div class="wrapper_clock">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-outline</title><path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" /></svg>
                        
                        <?php
                            $remaining_hours =$alljob['fast_complete']; // number of hours left
                            $now = new DateTime();
                            $end = clone $now;
                            $end->add(new DateInterval('PT'.$remaining_hours.'H'));
                            $interval = $now->diff($end);
                            $remaining_time = $interval->format('%Hhr %Ss left');
                            echo '<b class="text-dark">'.$remaining_time.'</b>'; // output: 24hr 0m 0s left
                        ?>
                       
                       
                        </div>
                </div>
            </div>
        </div>
        
    </div>
    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$alljob['id'];?>() {
      document.getElementById("more_menus<?=$alljob['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php } ?>
    
         <!--Waiting Posts -->
         <?php } elseif($_GET['f1'] == 'all' && $_GET['f2'] == 'waiting') {  
             while($waiting_job = mysqli_fetch_array($waiting_jobs)) {
            $userid = $waiting_job['user_id'];
            $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
    <p class="status-id">Waiting Approval : Post ID - MYJ<?=$waiting_job['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$waiting_job['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$waiting_job['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$waiting_job['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                             <a class="dropdown_menu" href="edit-post?id=<?=$waiting_job['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-post?id=<?=$waiting_job['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$waiting_job['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$waiting_job['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                         <div class="csh-img-div wrapper_cash_total">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                        </svg> 
                        <b>RM<?=$waiting_job['price'];?></b>
                    </div>
                     <div class="wrapper_clock">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-outline</title><path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" /></svg>
                        <?php
                            $remaining_hours =$waiting_job['fast_complete']; // number of hours left
                            $now = new DateTime();
                            $end = clone $now;
                            $end->add(new DateInterval('PT'.$remaining_hours.'H'));
                            $interval = $now->diff($end);
                            $remaining_time = $interval->format('%Hhr %Ss left');
                            echo '<b class="text-dark">'.$remaining_time.'</b>'; // output: 24hr 0m 0s left
                        ?>
                       
                        </div>
                </div>
            </div>
        </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$waiting_job['id'];?>() {
      document.getElementById("more_menus<?=$waiting_job['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  
    </script>
    </div>
    
    <?php } 
    
    // pending Services- All
              while($pending_service = mysqli_fetch_array($pending_services)) {
            $userid = $pending_service['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Waiting Approval : Post ID - MYS<?=$pending_service['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$pending_service['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$pending_service['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$pending_service['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-service?id=<?=$pending_service['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$pending_service['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$pending_service['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$pending_service['topic'];?> </p>
                   <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$pending_service['price'];?></b> </p>
                </div>
            </div>
        </div>
            <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$pending_service['id'];?>() {
      document.getElementById("more_menus<?=$pending_service['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

      
    </script>  
    </div>
  
    <?php } ?>
        <!--Active Posts -->
        <?php } elseif($_GET['f1'] == 'all' && $_GET['f2'] == 'active') {  
         
        while($row_active = mysqli_fetch_array($userservices)) {
            $userid = $row_active['user_id'];
            $userinfo = $obj->GetUserById($userid);
        ?>
             <div class="Showallactiveservices">
    <p>Active : Post ID - MYS<?=$row_active['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$row_active['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$row_active['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$row_active['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                 <a class="dropdown_menu" href="edit-service?id=<?=$row_active['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$row_active['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$row_active['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$row_active['topic'];?> </p>
                     <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$row_active['price'];?></b> </p>
                </div>
            </div>
        </div>
         <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$row_active['id'];?>() {
      document.getElementById("more_menus<?=$row_active['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 
    </script>
    </div>
         <?php } ?>	
         
        <?php while($rorw=mysqli_fetch_array($activejobs)){ 
            $userid = $rorw['user_id'];
            $userinfo = $obj->GetUserById($userid);
            
            ?> 
            <div class="">
    <p>Active : Post ID - MYJ<?=$rorw['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$rorw['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$rorw['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$rorw['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                <a class="dropdown_menu" href="edit-post?id=<?=$rorw['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$rorw['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$rorw['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"> <?=$rorw['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                    <div class="csh-img-div">
                        <img class="cash-img img-cash-gr" src="assets/img/cash.svg">   
                        <b>RM<?=$rorw['price'];?></b>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
     
        
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$rorw['id'];?>() {
      document.getElementById("more_menus<?=$rorw['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

       function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    
    
        <?php }?>
        
        <?php } elseif($_GET['f1'] == 'all' && $_GET['f2'] == 'inactive') { ?> 
            
        <?php
            // if(!empty($inactive_services->num_rows)) {echo '<div class="app-act"> <h2>Inactive</h2> </div>';}else{}
            while($rowsss = mysqli_fetch_array($inactive_services)) {
            $userid = $rowsss['user_id'];
                                           $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
    <p>Inactive : Post ID - MYS<?=$rowsss['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$rowsss['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$rowsss['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$rowsss['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                <a class="dropdown_menu" href="edit-service?id=<?=$rowsss['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$rowsss['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$rowsss['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$rowsss['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                    <div class="csh-img-div">
                        <img class="cash-img img-cash-gr" src="assets/img/cash.svg">   
                        <b>RM<?=$rowsss['price'];?></b>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
     <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$rowsss['id'];?>() {
      document.getElementById("more_menus<?=$rowsss['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

      function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    
    
        <?php } ?>
        
        <?php
            // if(!empty($inactive_jobs->num_rows)) {echo '<div class="app-act"> <h2>Inactive</h2> </div>';}else{}
            while($rowsj = mysqli_fetch_array($inactive_jobs)) {
            $userid = $rowsj['user_id'];
                                           $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
    <p>Inactive : Post ID - MYJ<?=$rowsj['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$rowsj['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$rowsj['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$rowsj['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                <a class="dropdown_menu" href="edit-post?id=<?=$rowsj['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-post?id=<?=$rowsj['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$rowsj['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$rowsj['topic'];?> </p>
                       <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$rowsj['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
    
     <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$rowsj['id'];?>() {
      document.getElementById("more_menus<?=$rowsj['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  
    </script>
    
    
        <?php } ?>
        <!--End inactive-->
        
        <!--Start completed-->
        <?php } elseif($_GET['f1'] == 'all' && $_GET['f2'] == 'completed') {  
        while($completed_service = mysqli_fetch_array($completed_services)) {
            $userid = $completed_service['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Completed : Post ID - MYS<?=$completed_service['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$completed_service['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$completed_service['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$completed_service['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-service?id=<?=$completed_service['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$completed_service['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$completed_service['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$completed_service['topic'];?> </p>
                      <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$completed_service['price'];?></b> </p>
                </div>
            </div>
        </div>
            <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$completed_service['id'];?>() {
      document.getElementById("more_menus<?=$completed_service['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    </div>
    
    <?php }  
        while($completed_job = mysqli_fetch_array($completed_jobs)) {
            $userid = $waiting_job['user_id'];
            $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
   <p class="status-id">Completed : Post ID - MYJ<?=$completed_job['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$completed_job['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$completed_job['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$completed_job['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-post?id=<?=$completed_job['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-post?id=<?=$completed_job['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$completed_job['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$completed_job['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                     <div class="csh-img-div wrapper_cash_total">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                        </svg> 
                        <b>RM<?=$completed_job['price'];?></b>
                    </div>
                    <div class="wrapper_clock">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-outline</title><path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" /></svg>
                        <?php
                            $remaining_hours =$completed_job['fast_complete']; // number of hours left
                            $now = new DateTime();
                            $end = clone $now;
                            $end->add(new DateInterval('PT'.$remaining_hours.'H'));
                            $interval = $now->diff($end);
                            $remaining_time = $interval->format('%Hhr %Ss left');
                            echo '<b class="text-dark">'.$remaining_time.'</b>'; // output: 24hr 0m 0s left
                        ?>
                       
                        </div>
                </div>
            </div>
        </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$completed_job['id'];?>() {
      document.getElementById("more_menus<?=$completed_job['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  
    </script>
    </div>
    
    <?php } ?>
        <!--End completed-->
        
        
        <!-- Start Reject -->
        <?php } elseif($_GET['f1'] == 'all' && $_GET['f2'] == 'reject') {  
        
         while($rejected_job = mysqli_fetch_array($rejected_jobs)) {
             
             
            $userid = $rejected_job['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Rejected : Post ID - MYS<?=$rejected_job['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$rejected_job['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$rejected_job['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$rejected_job['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-service?id=<?=$rejected_job['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-post?id=<?=$rejected_job['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$rejected_job['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$rejected_job['topic'];?> </p>
                      <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$rejected_job['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$rejected_job['id'];?>() {
      document.getElementById("more_menus<?=$rejected_job['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php }  
         while($rejected_service = mysqli_fetch_array($rejected_services)) {
             
             
            $userid = $rejected_service['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Rejected : Post ID - MYS<?=$rejected_service['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$rejected_service['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$rejected_service['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$rejected_service['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-service?id=<?=$rejected_service['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$rejected_service['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$rejected_service['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$rejected_service['topic'];?> </p>
                      <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$rejected_service['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$rejected_service['id'];?>() {
      document.getElementById("more_menus<?=$rejected_service['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php }  ?>
        <!-- End Reject -->
        
        <?php  } else {} ?>
        </div>
        <!--End All posts by user-->
        
        
         <?php if($filter1 == 'services' && $filter2 == '') { ?>
         
         <!--Start all service only -->
         <div class="all-services">
             
             <?php 
            // if(!empty($userservices->num_rows)) {echo '<div class="app-act"> <h2>Active</h2> </div>';}else{}
            while($row_active = mysqli_fetch_array($userservices)) {
            $userid = $row_active['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id"><?php if($row_active['status'] == '') { echo 'Waiting Approval';} elseif($row_active['status'] == 1) { echo 'Active';} elseif($row_active['status'] == 2) { echo 'Inactive';} elseif($row_active['status'] == 3) { echo 'Completed';} elseif($row_active['status'] == 4) { echo 'Rejected';} ?> :  Post ID - MYS<?=$row_active['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$row_active['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$row_active['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$row_active['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                <a class="dropdown_menu" href="edit-service?id=<?=$row_active['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$row_active['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$row_active['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$row_active['topic'];?> </p>
                     <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$row_active['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$row_active['id'];?>() {
      document.getElementById("more_menus<?=$row_active['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php } ?>
             
             
             
             
         </div>
         
         <?php }elseif($filter1 == 'services' && $filter2 == 'waiting') { ?>
         
          <?php 
             while($pending_service = mysqli_fetch_array($pending_services)) {
            $userid = $pending_service['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Waiting Approval : Post ID - MYS<?=$pending_service['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$pending_service['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$pending_service['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$pending_service['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-service?id=<?=$pending_service['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$pending_service['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$pending_service['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$pending_service['topic'];?> </p>
                   <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$pending_service['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$pending_service['id'];?>() {
      document.getElementById("more_menus<?=$pending_service['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php } ?>
         
          <?php } elseif($filter1 == 'services' && $filter2 == 'active') {   
            $active_services = $obj->GetActiveServiceByUserId($user_id);
               while($active_service = mysqli_fetch_array($active_services)) {
            $userid = $active_service['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Active : Post ID - MYS<?=$active_service['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$active_service['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$active_service['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$active_service['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                             <a class="dropdown_menu" href="edit-service?id=<?=$active_service['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$active_service['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$active_service['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$active_service['topic'];?> </p>
                      <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$active_service['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$active_service['id'];?>() {
      document.getElementById("more_menus<?=$active_service['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php } ?>
           
           <?php }elseif($filter1 == 'services' && $filter2 == 'inactive') { ?>
           
            <?php 
            $inactive_services = $obj->GetInactiveServiceByUserId($user_id);
            while($inactive_service = mysqli_fetch_array($inactive_services)) {
            $userid = $inactive_service['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Inactive : Post ID - MYS<?=$inactive_service['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$inactive_service['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$inactive_service['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$inactive_service['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                             <a class="dropdown_menu" href="edit-service?id=<?=$inactive_service['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$inactive_service['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$inactive_service['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$inactive_service['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                           <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$inactive_service['price'];?></b> </p>
                </div>
                </div>
            </div>
        </div>
        
    </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$inactive_service['id'];?>() {
      document.getElementById("more_menus<?=$inactive_service['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php } ?>
    
            <?php }elseif($filter1 == 'services' && $filter2 == 'completed') {  
           
             while($completed_service = mysqli_fetch_array($completed_services)) {
            $userid = $completed_service['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Completed : Post ID - MYS<?=$completed_service['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$completed_service['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$completed_service['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$completed_service['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-service?id=<?=$completed_service['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$completed_service['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$completed_service['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$completed_service['topic'];?> </p>
                      <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$completed_service['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$completed_service['id'];?>() {
      document.getElementById("more_menus<?=$completed_service['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php } ?>
    
    
     <?php }elseif($filter1 == 'services' && $filter2 == 'reject') {  
         
         while($rejected_service = mysqli_fetch_array($rejected_services)) {
             
             
            $userid = $rejected_service['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Rejected : Post ID - MYS<?=$rejected_service['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$rejected_service['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$rejected_service['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$rejected_service['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-service?id=<?=$rejected_service['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$rejected_service['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$rejected_service['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$rejected_service['topic'];?> </p>
                      <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$rejected_service['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$rejected_service['id'];?>() {
      document.getElementById("more_menus<?=$rejected_service['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php }  ?> 
         
         <!--End all service only -->
          <?php } elseif($filter1 == 'jobs' && $filter2 == '') { ?>
          <!--Start all jobs only -->
           <div class="all-jobs">
                <?php
            while($aljobs = mysqli_fetch_array($alljobs)) {
            $userid = $aljobs['user_id'];
            $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
    <p class="status-id"><?php if($aljobs['status'] == '') { echo 'Waiting Approval';} elseif($aljobs['status'] == 1) { echo 'Active';} elseif($aljobs['status'] == 2) { echo 'Inactive';} elseif($aljobs['status'] == 3) { echo 'Completed';} elseif($aljobs['status'] == 4) { echo 'Rejected';} ?> :  Post ID - MYJ<?=$aljobs['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$aljobs['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div> 
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$aljobs['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$rowsj['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                   <a class="dropdown_menu" href="edit-post?id=<?=$aljobs['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-post?id=<?=$aljobs['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$aljobs['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$aljobs['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                    <div class="csh-img-div wrapper_cash_total">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                        </svg>
                        <!--<img class="cash-img img-cash-gr" src="assets/img/cash.svg">   -->
                        <b>RM<?=$aljobs['price'];?></b>
                        </div>
                        <div class="wrapper_clock">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-outline</title><path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" /></svg>
                        <?php
                            $remaining_hours =$aljobs['fast_complete']; // number of hours left
                            $now = new DateTime();
                            $end = clone $now;
                            $end->add(new DateInterval('PT'.$remaining_hours.'H'));
                            $interval = $now->diff($end);
                            $remaining_time = $interval->format('%Hhr %Ss left');
                            echo '<b class="text-dark">'.$remaining_time.'</b>'; // output: 24hr 0m 0s left
                        ?>
                       
                        </div>
                    
                </div>
            </div>
        </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$aljobs['id'];?>() { 
      document.getElementById("more_menus<?=$aljobs['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  
    </script>
    </div>
    
    <?php } ?>
           
           </div>
           <!--End all jobs only -->
           <?php }elseif($filter1 == 'jobs' && $filter2 == 'waiting') { ?>
           
                <?php
                 
                 
        //   if(!empty($waiting_jobs->num_rows)) {echo '<div class="app-act"> <h2>Waiting Approval</h2> </div>';}else{}

               
            while($waiting_job = mysqli_fetch_array($waiting_jobs)) {
            $userid = $waiting_job['user_id'];
            $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
    <p class="status-id">Waiting Approval : Post ID - MYJ<?=$waiting_job['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$waiting_job['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$waiting_job['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$waiting_job['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                             <a class="dropdown_menu" href="edit-post?id=<?=$waiting_job['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-post?id=<?=$waiting_job['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$waiting_job['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$waiting_job['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                         <div class="csh-img-div wrapper_cash_total">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                        </svg> 
                        <b>RM<?=$waiting_job['price'];?></b>
                    </div>
                     <div class="wrapper_clock">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-outline</title><path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" /></svg>
                        <?php
                            $remaining_hours =$waiting_job['fast_complete']; // number of hours left
                            $now = new DateTime();
                            $end = clone $now;
                            $end->add(new DateInterval('PT'.$remaining_hours.'H'));
                            $interval = $now->diff($end);
                            $remaining_time = $interval->format('%Hhr %Ss left');
                            echo '<b class="text-dark">'.$remaining_time.'</b>'; // output: 24hr 0m 0s left
                        ?>
                       
                        </div>
                </div>
            </div>
        </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$waiting_job['id'];?>() {
      document.getElementById("more_menus<?=$waiting_job['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  
    </script>
    </div>
    
    <?php } ?>
           
           
           <?php }elseif($filter1 == 'jobs' && $filter2 == 'active') { ?>
           
            <?php
                 $active_jobs = $obj->GetActiveJobByUserId($user_id);
                 
        //   if(!empty($active_jobs->num_rows)) {echo '<div class="app-act"> <h2>Active</h2> </div>';}else{}

               
            while($active_job = mysqli_fetch_array($active_jobs)) {
            $userid = $active_job['user_id'];
            $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
    <p class="status-id">Active : Post ID - MYJ<?=$active_job['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$active_job['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$active_job['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$active_job['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                   <a class="dropdown_menu" href="edit-post?id=<?=$active_job['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-post?id=<?=$active_job['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$active_job['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$active_job['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                  <div class="csh-img-div wrapper_cash_total">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                        </svg> 
                        <b>RM<?=$active_job['price'];?></b>
                    </div>
                     <div class="wrapper_clock">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-outline</title><path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" /></svg>
                        <?php
                            $remaining_hours =$active_job['fast_complete']; // number of hours left
                            $now = new DateTime();
                            $end = clone $now;
                            $end->add(new DateInterval('PT'.$remaining_hours.'H'));
                            $interval = $now->diff($end);
                            $remaining_time = $interval->format('%Hhr %Ss left');
                            echo '<b class="text-dark">'.$remaining_time.'</b>'; // output: 24hr 0m 0s left
                        ?>
                       
                        </div>
                </div>
            </div>
        </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$active_job['id'];?>() {
      document.getElementById("more_menus<?=$active_job['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  
    </script>
    </div>
    
    <?php } ?>
    
    
           <?php }elseif($filter1 == 'jobs' && $filter2 == 'inactive') { ?>
            <?php
                 $inactive_jobs = $obj->GetInactiveJobByUserId($user_id);
                 
        //   if(!empty($inactive_jobs->num_rows)) {echo '<div class="app-act"> <h2>Inactive</h2> </div>';}else{}

               
            while($inactive_job = mysqli_fetch_array($inactive_jobs)) {
            $userid = $inactive_job['user_id'];
            $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
    <p class="status-id">Inactive : Post ID - MYJ<?=$inactive_job['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$inactive_job['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$inactive_job['id'];?>()">
                              <svg style="position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$inactive_job['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                <a class="dropdown_menu" href="edit-post?id=<?=$inactive_job['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$inactive_job['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$inactive_job['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$inactive_job['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                    <div class="csh-img-div wrapper_cash_total">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                        </svg> 
                        <b>RM<?=$inactive_job['price'];?></b>
                    </div>
                    <div class="wrapper_clock">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-outline</title><path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" /></svg>
                       <?php
                            $remaining_hours =$inactive_job['fast_complete']; // number of hours left
                            $now = new DateTime();
                            $end = clone $now;
                            $end->add(new DateInterval('PT'.$remaining_hours.'H'));
                            $interval = $now->diff($end);
                            $remaining_time = $interval->format('%Hhr %Ss left');
                            echo '<b class="text-dark">'.$remaining_time.'</b>'; // output: 24hr 0m 0s left
                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$inactive_job['id'];?>() {
      document.getElementById("more_menus<?=$inactive_job['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  
    </script>
    </div>
    
    <?php } ?>
    
    
           <?php }elseif($filter1 == 'jobs' && $filter2 == 'completed') { ?>
           
            <?php
                 $completed_jobs = $obj->GetCompletedJobsByUserId($user_id);
                 
        //   if(!empty($completed_jobs->num_rows)) {echo '<div class="app-act"> <h2>Completed</h2> </div>';}else{}

               
            while($completed_job = mysqli_fetch_array($completed_jobs)) {
            $userid = $waiting_job['user_id'];
            $userinfo = $obj->GetUserById($userid);
            ?>
              <div class="">
   <p class="status-id">Completed : Post ID - MYJ<?=$completed_job['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$completed_job['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$completed_job['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$completed_job['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-post?id=<?=$completed_job['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$completed_job['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deletepost=<?=$completed_job['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2">  <?=$completed_job['topic'];?> </p>
                <div class="d-flex justify-content-between align-items-center manage_post_wrap">
                     <div class="csh-img-div wrapper_cash_total">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                        </svg> 
                        <b>RM<?=$completed_job['price'];?></b>
                    </div>
                    <div class="wrapper_clock">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>clock-outline</title><path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" /></svg>
                        <?php
                            $remaining_hours =$completed_job['fast_complete']; // number of hours left
                            $now = new DateTime();
                            $end = clone $now;
                            $end->add(new DateInterval('PT'.$remaining_hours.'H'));
                            $interval = $now->diff($end);
                            $remaining_time = $interval->format('%Hhr %Ss left');
                            echo '<b class="text-dark">'.$remaining_time.'</b>'; // output: 24hr 0m 0s left
                        ?>
                       
                        </div>
                </div>
            </div>
        </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$completed_job['id'];?>() {
      document.getElementById("more_menus<?=$completed_job['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  
    </script>
    </div>
    
    <?php } ?>
           
           <?php } elseif($filter1 == 'jobs' && $filter2 == 'reject') {  
           while($rejected_job = mysqli_fetch_array($rejected_jobs)) {
             
             
            $userid = $rejected_job['user_id'];
            $userinfo = $obj->GetUserById($userid);
             ?>
             <div class="">
    <p class="status-id">Rejected : Post ID - MYS<?=$rejected_job['id'];?></p>
    <div class="img-p">
            <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$rejected_job['photos'];?>" alt=""> </div>
            <div class="all-cnt">
                <div class="d-flex two-lb align-items-center">
                     <div class="img-plus-nm">
                        <img class="sm-img" src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($userinfo['ProfilePic'])) { echo 'admin/assets/img/profile/'.$userinfo['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>" alt="">
                        <p class="pp mr-in "> <?=$userinfo['ProfileName'];?></p>
                    </div>
                    <div class="jst-nw d-flex justify-content-end">
                        <!--<div class="on-off-toggle">-->
                        <!--  <input class="on-off-toggle__input" type="checkbox" id="bopis" />-->
                        <!--  <label for="bopis" class="on-off-toggle__slider"></label>-->
                        <!--</div>-->
                         <input type="checkbox" id="switch" class="checkbox" />
                           <label for="switch" class="toggle">
                       <p class="off_wrap_btn">OFF</p>
                       <p class="on_wrap_btn text-light">ON</p>
                       </label>


                             <div class="icon-menu" onclick="ExtraMenu<?=$rejected_job['id'];?>()">
                              <svg style="    position: absolute; right: 0; top: -11px;" class="dropbtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                              <path fill="currentColor" d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" />
                            </svg>
                            <div id="more_menus<?=$rejected_job['id'];?>" class="text-left dropdown-contentt dropDown_links_post">
                                  <a class="dropdown_menu" href="edit-service?id=<?=$rejected_job['id'];?>">Edit</a>
                                <a class="dropdown_menu" href="duplicate-service?id=<?=$rejected_job['id'];?>">Duplicate</a>
                                <a class="dropdown_menu" href="#sponsor-ad">Sponsor AD</a>
                                <a class="dropdown_menu" href="admin/inc/process.php?deleteservice=<?=$rejected_job['id'];?>">Delete</a>
                            </div>
                        </div>
                   
                    </div>
                </div>
                <p class="pp2"><?=$rejected_job['topic'];?> </p>
                      <div class="d-flex justify-content-between align-items-center">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <small>4.9 (108)</small>
                    </div>

                    <p><small>From </small> <b>
                            RM<?=$rejected_job['price'];?></b> </p>
                </div>
            </div>
        </div>
        
    </div>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function ExtraMenu<?=$rejected_job['id'];?>() {
      document.getElementById("more_menus<?=$rejected_job['id'];?>").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-contentt");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
 

     function toggleDropdownnnn() {
        var dropdownContentt = document.querySelector(".dropdown-contenttt");
        dropdownContentt.classList.toggle("show-dropdown");
      }
    </script>
    <?php } ?>
           
           <?php } else{} ?>
        
    </div>
   
    <!---------------------- middle one end -------------------------->
</div>


<?php include('inc/footer.php'); ?> 

<script>
     
     $(document).on('click','#post-filter',function(e){
      var postfilter = $(this).val();
         // var filter2val = $('#filter2.active').val();
        // var pageid = $('#pageid').val();
        if(postfilter == 'ALL') {
            $('.postfilter-all').addClass('active'); 
            $('.postfilter-ps').removeClass('active'); 
            $('.postfilter-jm').removeClass('active');
             $(this).addClass('active');
             window.location.href = 'manage-post?f1=all';
           } 
          
          if(postfilter == 'Professional Services') {
            $('.postfilter-all').removeClass('active'); 
            $('.postfilter-ps').addClass('active'); 
            $('.postfilter-jm').removeClass('active');
             $(this).addClass('active');
             window.location.href = 'manage-post?f1=services';
           }
          
          if(postfilter == 'Jobs Marketplace') {
            $('.postfilter-all').removeClass('active'); 
            $('.postfilter-ps').removeClass('active'); 
            $('.postfilter-jm').addClass('active');
             $(this).addClass('active');
             window.location.href = 'manage-post?f1=jobs';
           }
       $.ajax({    
        type: "GET",
       url: 'admin/inc/process.php?postfilter='+postfilter,         
        dataType: "html",                  
        success: function(data){                    
            $("#searchdata").html(data); 
            $("#servicedata").hide(); 
             $("#jobdata").hide(); 
         }
    });
     
     
    
     
     });
     
     
     
//     $(document).ready(function() {
//   $('#poststatus').on('change', function() {
//     var poststatus = $(this).val();
//      var postfilter = $('#post-filter.active').val();
//      console.log(postfilter);
//       $.ajax({    
//         type: "GET",
//         url: 'admin/inc/process.php?postfilter='+postfilter+'&poststatus='+poststatus,         
//         dataType: "html",                  
//         success: function(data){                    
//             $("#searchdata").html(data); 
//             $("#servicedata").hide(); 
//              $("#jobdata").hide(); 
//          }
//     });
    
    
//   });
// });

    
    
</script>

 