<?php
    $page = 'Profile Info';
    include('inc/header.php'); ?>
<?php include('inc/sidebar.php'); ?>     
<!--first tab row start-->
<div class="col-sm-12 instant-main" style="background: #fff">
    <div class="row">
        <div class="col-lg-12 col-md-12 second-mid example">
            <div class="container">
                <div class="card">
                    <form action="admin/inc/process.php?action=ProfileInfo" method="post">
                        <div class="main prof-inf-new active" style="">
                            <a href="service-provider"> 
                            <img class="logo_new_instant" src="assets/img/new-instant-logo.png" alt="">
                            </a>
                            <div class=" text-center body">
                                <div class="mx-auto">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M7,10L12,15L17,10H7Z" />
                                    </svg>
                                    <select class="ddll-select" id="lists" name="list" class="">
                                        <option value="0" class="lang_optn">Choose language</option>
                                        <option value="1" class="lang_optn">English</option>
                                        <option value="2" class="lang_optn">Bahasa Melayu</option>
                                        <option value="3" class="lang_optn">中文</option>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="create-workspace btn-inactive"  id="nextBtn" disabled >Next</button>
                        </div>
                        <div class="main" >
                            <a href="service-provider"> 
                            <img class="logo_instant_jobs" src="assets/img/new-instant-logo.png" alt="">
                            </a>
                            <img src="assets/img/street-view-doll copy.png" class="icon1">
                            <p class="cont1" style=" margin-top: 16px;">Instantjob allows people to buy or sell services for any one-time jobs locally or
                                worldwide. 
                            </p>
                            <button type="button" class="next-click btn-inactive" id="nextBtn6">Let's Begin!</button>
                        </div>
                        <div class="main" >
                            <a href="service-provider"> 
                            <img class="logo_instant_jobs" src="assets/img/new-instant-logo.png" alt="">
                            </a>
                            <p class="text-center lets set_profile">Let's setup your public profile.</p>
                            <p class="text-center letss profile_set">What is your name?</p>
                            <input type="text" class="uploadtxt10 url form-control" placeholder="Name" id="namee" name="name" required>
                            <input type="hidden" class="form-control" placeholder="Name" value="<?=$_SESSION['Userid'];?>" name="id">
                            <input  type="button" name="name" id="nextBtn10" class="next-click name btn-inactive"  value="Next" disabled/>
                        </div>
                        <div class="main main_1"  >
                            <a href="service-provider"> 
                            <img class="logo_instant_jobs" src="assets/img/new-instant-logo.png" alt="">
                            </a>
                            <p class="text-center lets">Where are you from?</p>
                            <input type="text" class="uploadtxt8 urlform-control input" placeholder="Country" id="namee" name="country" required>
                            <input  type="button" name="country" id="nextBtn8" class="next-click country btn-inactive"  value="Next" disabled/>
                        </div>
                        <div class="main" >
                            <a href="service-provider"> 
                            <img class="logo_instant_jobs" src="assets/img/new-instant-logo.png" alt="">
                            </a>
                            <p class="text-center lets">What are the skills? We'll email you when there's a job match </p>
                            <input type="text" id="tag-input1" name="skills[]">
                            <input  type="button" name="skills" id="nextBtn9" class="next-click btn-inactive bnt-fill-green"  value="Next" />
                        </div>
                        <div class="main last-form" style="">
                            <a href="service-provider"> 
                            <img class="logo_new_instant last_pg_logo" src="assets/img/new-instant-logo.png" alt="">
                            </a>
                            <p class="text-center lets verify">Verify your account details to receive payments.</p>
                            <p class="govt">Unlock the ability to recieve payments on ouyr platform, and enhances repulation and credibility among follow members 
                            <p>
                            <div class="boxs">
                                <label for="Name" class="full">Government Issued ID</label>
                                <input type="file" name="file" id="file" required>
                                <div class="upload-area"  id="uploadfile" contentEditable=true data-text="Upload">
                                    <img src="assets/img/onboarding/cameraa.png" class="camera" placeholder="Upload" required>
                                </div>
                            </div>
                            <label for="Name" class="full">Full Name</label>
                            <p class="inp-pro-info"><input  placeholder="Name as per ID" oninput="this.className = ''" name="fullname" required></p>
                            <label for="Name" class="full">ID Number</label>
                            <p class="inp-pro-info"><input placeholder="NRIC / ID Number" oninput="this.className = ''" name="icnumber" required></p>
                            <label for="dob" class="date_contry">Date of Birth</label>
                            <p class="inp-pro-info"><input class="inp_date_onb" type="date" placeholder="DD/MM/YYYY" oninput="this.className = ''" name="date" required ></p>
                            <label class="date_contry" for="country">Country</label>
                            <select id="country" class='form-control' name="countrry">
                                <option value="Malaysia">Malaysia</option>
                                <option value="China"> China </option>
                                <option value="India"> India </option>
                            </select>
                            <button class="button btn-inactive bnt-fill-green" type="submit" id="nextBtn7">Submit</button>
                            <div>
                                <p class="skip">
                                    Skip,remind me about this later
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('inc/footer.php'); ?> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script>
    $(document).ready(function () {
    $('#lists').val("0");
    
    $('#lists').change(function () {
    selectVal = $('#lists').val();
     
    if (selectVal == 0) {
       $('#nextBtn').prop("disabled", true);
    }
    else {
      $('#nextBtn').prop("disabled", false);
      $('.create-workspace').addClass("bnt-fill-green");
      
    }
    })
    
    });
    
    $(document).ready(function(){
    
    $("input[class^='uploadtxt']").keyup(function(e){
         var empty=true;
        $("input[class^='uploadtxt']").each(function(i){
            if($(this).val()=='')
            {
                empty=true;
                $('#nextBtnn').prop('disabled', true);
                return false;
            }
            else
            {
                empty=false;
            }
        });
        if(!empty) $('#nextBtnn').prop('disabled', false);                    
        $('.name').addClass("bnt-fill-green");
     });
    
    
    
    $("input[class^='uploadtxt8']").keyup(function(e){
         var empty=true;
        $("input[class^='uploadtxt8']").each(function(i){
            if($(this).val()=='')
            {
                empty=true;
                $('#nextBtn8').prop('disabled', true);
                return false;
            }
            else
            {
                empty=false;
            }
        });
        if(!empty)  $('#nextBtn8').prop('disabled', false);                    
        $('.btn-inactive').addClass("bnt-fill-green");
     });
    
    
    
    $("input[class^='uploadtxt9']").keyup(function(e){
         var empty=true;
        $("input[class^='uploadtxt9']").each(function(i){
            if($(this).val()=='')
            {
                empty=true;
                $('#nextBtn9').prop('disabled', true);
                return false;
            }
            else
            {
                empty=false;
            }
        });
        if(!empty)  $('#nextBtn9').prop('disabled', false);                    
        $('.country').addClass("bnt-fill-green");
     });
     
     
      $("input[class^='uploadtxt10']").keyup(function(e){
         var empty=true;
        $("input[class^='uploadtxt10']").each(function(i){
            if($(this).val()=='')
            {
                empty=true;
                $('#nextBtn10').prop('disabled', true);
                return false;
            }
            else
            {
                empty=false;
            }
        });
        if(!empty)  $('#nextBtn10').prop('disabled', false);                    
        $('.name').addClass("bnt-fill-green");
     });
     
    
    });
    
    
    
</script>