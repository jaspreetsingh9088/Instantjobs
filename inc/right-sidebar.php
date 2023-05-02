<link rel="stylesheet" href="assets/css/right-sidebar.css">
<div class="instant-rightbar">
    <?php if($page == 'Service Provider') { ?>
    <div  class="li-rt h4_title"> 
        <h4>Filter</h4>
        <div id="log">
            
            <label class="btn-round lbl-4 active">
            <input type="radio" class="btn btn-default btnn1 active" name="area" value="Worldwide" id="showData" >
            
            WORLDWIDE
            </label>
            <label class="btn-round lbl-1">
            <input type="radio" class="btn btn-default btnn2" name="area" value="Local" id="showData" >
            LOCAL
            </label>
            <label class="btn-round lbl-2">
            <input type="radio" class="btn btn-default btnn3" name="area" value="Overseas" id="showData" >
            OVERSEAS
            </label>
            <label class="btn-round lbl-3">
            <input type="radio" class="btn btn-default btnn4" name="area" value="Near me" id="showData" >
            NEAR ME
            </label>
            <h4>Sort by </h4>
            <label class="btn-round sort1 active">
            <input type="radio" class="btn btn-default btnn5 active" name="sort" value="new" id="filter2" style="cursor: pointer;" >
            NEW
            </label>
            <label class="btn-round sort2">
            <input type="radio" class="btn btn-default btnn6" name="sort" value="high" id="filter2" style="cursor: pointer;" >
            $ HIGH
            </label>
            <label class="btn-round sort3">
            <input type="radio" class="btn btn-default btnn7" name="sort" value="low" id="filter2" style="cursor: pointer;" >
            $ LOW
            </label>
            <input type="hidden" class="" value="service" id="pageid" >
        </div>
    </div>
    <?php } if($page =='Job Marketplace') { ?>
    <div class="li-rt h4_title">
        <h4>Filter</h4>
        <div id="log">
            <input type="hidden" class="" value="job" id="pageid" >
          <label class="btn-round lbl-4 active">
            <input type="radio" class="btn btn-default btnn1 active" name="area" value="Worldwide" id="showData" >
            
            WORLDWIDE
            </label>
            <label class="btn-round lbl-1">
            <input type="radio" class="btn btn-default btnn2" name="area" value="Local" id="showData" >
            LOCAL
            </label>
            <label class="btn-round lbl-2">
            <input type="radio" class="btn btn-default btnn3" name="area" value="Overseas" id="showData" >
            OVERSEAS
            </label>
            <label class="btn-round lbl-3">
            <input type="radio" class="btn btn-default btnn4" name="area" value="Near me" id="showData" >
            NEAR ME
            </label>
            <h4>Sort by </h4>
            <label class="btn-round sort1 active">
            <input type="radio" class="btn btn-default btnn5 active" name="sort" value="new" id="filter2" style="cursor: pointer;" >
            NEW
            </label>
            <label class="btn-round sort2">
            <input type="radio" class="btn btn-default btnn6" name="sort" value="high" id="filter2" style="cursor: pointer;" >
            $ HIGH
            </label>
            <label class="btn-round sort3">
            <input type="radio" class="btn btn-default btnn7" name="sort" value="low" id="filter2" style="cursor: pointer;" >
            $ LOW
            </label>
        </div>
    </div>
    <?php } if($page == 'Profile' || $page == 'Profile Edit' || $page == 'Portfolio' || $page == 'Bank Details') { ?>
     <?php } if($page == 'Search result') { ?>
    <div  class="li-rt h4_title">
        <h4>Filter</h4>
        <div id="log">
             <label class="btn-round lbl-1">
            <input type="radio" class="lbl-1 btn btn-default btnn" name="skilarea" value="Local" id="showSkilData">
            Local
            </label>
            <label class="btn-round lbl-2">
            <input type="radio" class="btn btn-default btnn" name="skilarea" value="Overseas" id="showSkilData">
            Overseas
            </label>
            
            <label class="btn-round ">
            <input type="radio" class="btn btn-default btnn" name="skilarea" value="Worldwide" id="showSkilData">
            Worldwide
            </label>
           
            
            <label class="btn-round lbl-3">
            <input type="radio" class="btn btn-default btnn" name="skilarea" value="Near me" id="showSkilData">
            Near Me
            </label>
            
            
            <h4>Sort by </h4>
            <label class="btn-round lbl-a">
            <input type="radio" class="btn btn-default btnn" name="sortbyskill" value="new" id="sortfilter" style="cursor: pointer;">
            New Member
            </label>
            
            <label class="btn-round lbl-a">
            <input type="radio" class="btn btn-default btnn" name="sortbyskill" value="new" id="sortfilter" style="cursor: pointer;">
            Top Rated
            </label>
            
            
            <label class="btn-round lbl-b">
            <input type="radio" class="btn btn-default btnn" name="sortbyskill" value="level3" id="sortfilter" style="cursor: pointer;">
            Level 3
            </label>
             
            <label class="btn-round lbl-b">
            <input type="radio" class="btn btn-default btnn" name="sortbyskill" value="level2" id="sortfilter" style="cursor: pointer;">
            Level 2
            </label>
            
             
            <label class="btn-round lbl-b">
            <input type="radio" class="btn btn-default btnn" name="sortbyskill" value="level1" id="sortfilter" style="cursor: pointer;">
            Level 1
            </label>
            
        </div>
    </div>
    
    
    
    <?php } if($page == 'Wallet') { ?>
    <div class="top-rt-h head-mid">
        <h2>Wallet</h2>
    </div>
    <div class="li-rt new-li-profl" id="panel">
        <div class="button-hist">
            <a href="https://mitdevelop.com/instajobs/transaction"><button type="button" class="btn-round">View Transaction History</button>   </a>
        </div>
    </div>
    <?php } if($page == 'Manage Post') { ?>
    <div class="top-rt-h head-mid">
        <h2>Filter</h2>
        <div class="rt-side" >
            <div class="ALL-RI new-li-profl" id="log">
                <a href="manage-post?f1=all"><label class="btn-round postfilter-all <?php if($_GET['f1'] == 'all' || $_GET['f1'] == '') { echo 'active';}?>" data="ALL"><input type="radio" class="btn btn-default btnn2"  value="ALL" id="post-filter">ALL</label></a>
                <a href="manage-post?f1=services"><label class="btn-round postfilter-ps <?php if($_GET['f1'] == 'services') { echo 'active';}    ?>" data="Professional Services"><input type="radio" class="btn btn-default btnn2 "  value="Professional Services" id="post-filter">Professional Services</label></a>
                <a href="manage-post?f1=jobs"><label class="btn-round postfilter-jm <?php if($_GET['f1'] == 'jobs') { echo 'active';}    ?>" data="Jobs Marketplace"><input type="radio" class="btn btn-default btnn2 "   value="Jobs Marketplace" id="post-filter">Jobs Marketplace</label></a>
                <!--<button class=" btn-round lbl-a manage_post_wrap postfilter-all active" value="All" id="post-filter" >ALL</button> -->
                <!--<button class=" btn-round lbl-2 manage_post_wrap postfilter-ps"  value="Professional Services" id="post-filter" >Professional Services</button> -->
                 <!--<button class=" btn-round lbl-b manage_post_wrap postfilter-jm" value="Jobs Marketplace" id="post-filter" >Jobs Marketplace</button> -->
            </div>
            <h2>Posts</h2>
          <!--  <select class="form-control" id="poststatus">-->
          <!--    <option value="Show All">Show All</option>-->
          <!--    <option value="Waiting Approval">Waiting Approval</option>-->
          <!--    <option value="Active">Active</option>-->
          <!--    <option value="Inactive">Inactive</option>-->
          <!--    <option value="Completed">Completed</option>-->
          <!--</select>-->
        <!--         <div class="dropdown ">-->
        <!--             <div  class=" section_drop_show text-dark bg-white font-weight-bold rounded btn_dropDown" onclick="toggleDropdown()">-->
        <!--  <button class="btn btn_dropDown">Show All-->
        <!--    <svg class="inner_layer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />-->
        <!--    </svg>-->
        <!--    </button>-->
        <!--             </div>-->
                         
        <!--  <div class="text-left dropdown-content dropDown_links"> -->
        <!--    <a class="font-weight-bold" href="manage-post?f1=<//?=$_GET['f1'];?>&f2=">Show All</a>-->
        <!--    <a class="font-weight-bold" href="manage-post?f1=<//?=$_GET['f1'];?>&f2=waiting">Waiting Approval</a>-->
        <!--    <a class="font-weight-bold" href="manage-post?f1=<//?=$_GET['f1'];?>&f2=active">Active</a>-->
        <!--    <a class="font-weight-bold" href="manage-post?f1=<//?=$_GET['f1'];?>&f2=inactive">Inactive</a>-->
        <!--    <a class="font-weight-bold" href="manage-post?f1=<//?=$_GET['f1'];?>&f2=completed">Completed</a>-->
        <!--  </div>-->
        <!--</div>-->
        
        
        
        <div class="dropdown_wrap_contain">
            <div class="section_drop_show">
  <button class="dropdown-toggle_Wrap" id="dropdownButtoonn"> </button>
 
    <svg class="inner_layer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>menu-down</title>
      <path fill="currentColor" d="M7,10L12,15L17,10H7Z" />
    </svg>
            </div>
  <ul class="dropdown-mennuu" id="dropdownMennuu">
    <li><a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=">Show All</a></li>
    <li><a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=waiting">Waiting Approval</a></li>
    <li><a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=active">Active</a></li>
    <li><a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=inactive">Inactive</a></li>
    <li><a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=completed">Completed</a></li>
    <li><a class="font-weight-bold" href="manage-post?f1=<?=$_GET['f1'];?>&f2=reject">Reject</a></li>
  </ul>
</div>


        
        
        
        </div>
    </div>
    <?php } if($page == 'Transaction') {  ?>
    <div class="top-rt-h head-mid">
        <h2></h2>
    </div>
    <div class="new-li-profl" id="panel">
        <div id="log"> 
            <a href="#"><button class=" btn-round downld_contact ">Download receipts</button></a>
            <a href="#"><button class=" btn-round  downld_contact">Contact support</button></a>
        </div>
    </div>
    <?php } if($page == 'Message' || $page == 'Job Status') { ?>
    <div class="top-rt-h head-mid">
        <h2>Category</h2>
    </div>
    <div class="side nav  msg-job " id="log">
        <a data-toggle="tab" href="#message"><button class=" btn-round active lbl-2 manage_post_wrap">MESSAGE</button></a>
        <a data-toggle="tab" href="#job"><button class=" btn-round active status manage_post_wrap">JOB STATUS</button></a>
    </div>
    <?php  }   ?>
</div>
<script src="assets/js/right-sidebar.js"></script>
<script>
    // $('#showData').on('click', function(){
    // $('label').removeClass('active');
    // $(this).addClass('active');
    // });
    /* JOb Provider */
    $(document).on('click','#showJobData',function(e){
        var filter1 = $(this).val();
          
      $.ajax({    
        type: "GET",
        url: "admin/inc/process.php?jobfilter="+filter1,             
        dataType: "html",                  
        success: function(data){                    
            $("#searchjobdata").html(data); 
            $("#jobdata").hide(); 
         }
    });
      
    });
    
    
     function toggleDropdown() {
        var dropdownContent = document.querySelector(".dropdown-content");
        dropdownContent.classList.toggle("show-Dropdown");
      }
      
      
      
    //   manage post menu list either its active post or inactive post script
      var dropdownButton = document.getElementById("dropdownButtoonn");
var dropdownMenu = document.getElementById("dropdownMennuu");

// it will give us our value even after reloading
var selectedOption = localStorage.getItem("selectedOption");

if (selectedOption) {
  dropdownButton.innerText = selectedOption;
}

//  event listener  to show and hide the lists menu
dropdownButton.addEventListener("click", function() {
  if (dropdownMenu.style.display = "none") {
    dropdownMenu.style.display = "block";
  } else {
    dropdownMenu.style.display = "none";
  }
});

//  event listener to the dropdown menu to select an option
dropdownMenu.addEventListener("click", function(event) {
  var selectedOption = event.target.innerText;
  dropdownButton.innerText = selectedOption;
  dropdownMenu.style.display = "none";
  
  // Save the selected option to local storage
  localStorage.setItem("selectedOption", selectedOption);
});

</script>