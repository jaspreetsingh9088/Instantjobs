<?php 
    $page = 'Create Service';
    include('inc/header.php');   
    
    $id = $_GET['id'];
    $editservice = $obj->GetServceById($id);
    
    include('inc/sidebar.php'); 
?>     
<!--first tab row start-->
<div class="col-sm-12 instant-main">
<div class="row">
<div class="middle_container" id="myTabContent">
    <div class="tab-pane fade show active wrap_content_mid" id="one" role="tabpanel" aria-labelledby="one-tab">
        <div class="head-mid">
            <h2>Sell Your Service <b style="element.style {color: #ff0000;}"> </b></h2>
        </div>
        <div>
            <!-- for image and content -->
        </div>
        <form action="admin/inc/process.php?action=EditService" method="post" class="service-form example" enctype="multipart/form-data">
            <input type="hidden" class="form-control" placeholder="Name" value="<?=$_SESSION['Userid'];?>" name="userid" id="id" required>
            <div class="d-flex justify-content-between">
                <label>Give your service a topic</label>
                <div class="words_counter">
                    <span style="color: #495057;" id=charcount>0</span>
                    <span style="color: #495057;" id=charcount>/ 80</span> 
                </div>
            </div>
                <div class="form-text">
            <textarea class="form-control static-textarea" name="topic" rows="2" placeholder="Write " id="textbox" onkeyup="charcount(this.value)" maxlength="70" required><?php echo $new_string = str_replace("I will help", " ", $editservice['topic']); ?>  </textarea>
      <input type="hidden" name="serviceid" value="<?=$editservice['id'];?>">
      <label style="font-size: 16px;font-weight: normal;color: #323232;" for="youridhere" class="static-value">I will help</label>
    </div> 
            
            <div class="d-flex justify-content-between">
                <label>Description</label>
                <div class="words_counter">     
                    <span style="color: #495057;" id=charcoun>0</span>
                    <span style="color: #495057;" id=charcoun>/ 2000 </span>
                </div>
            </div>
            <textarea class="form-control" name="description" rows="5" placeholder="Write something here..." id="textbox" onkeyup="charcountupdate(this.value)" maxlength="2000" required><?=$editservice['description'];?></textarea>
            <div class="row select_budget">
                <div class="col-lg-4 col-6 prize_service_controller wrapper_price">
                    <label>Price</label>
                    <div class="input-group cur-box">
                        <input type="text" class="form-control cur-input-1" name="postprice" value="<?=$editservice['price'];?>" aria-label="Text input with dropdown button" required>
                         
                    </div>
                    <div class="input-group cur-box total_prize_service">
                        <input type="hidden" class="form-control cur-input-2" name="price" aria-label="Text input with dropdown button" style="border: unset; background: transparent;">
                        <input type="hidden" class="form-control cur-item-2" name="currency" value="<?=$geoLocationData['currency_code'];?>" aria-label="Text input with dropdown button" required>
                        <input type="hidden" class="form-control cur-item-2" name="country" value="<?=$geoLocationData['country'];?>" aria-label="Text input with dropdown button" required>

                    </div>
                </div>
                <!--<div class="change-box">-->
                <!--      <p class="rate-box">0.00</p>-->
                <!--    </div>-->
                <div class="col-md-12 p-0">
                    <label>My service will only be available </label>
                    <select class="form-control" name="area" required>
                        <option hidden value="<?=$editservice['area'];?>"><?=$editservice['area'];?></option>
                         <option value="Worldwide">With in my city</option>
                        <option value="Local">With in my state</option>
                        <option value="Overseas">Across Malaysia</option>
                    </select>
                </div>
            </div>
            <div class="row flex-row">
                <div class="col-lg-6 col-6 wrapper_state">
                    <label>State:</label>
                    <input type="text" placeholder="State"  name="state" value="<?=$editservice['State'];?>">
                </div>
                <div class="col-lg-6 col-6 wrapper_city">
                    <label>City:</label>
                    <input type="text" placeholder="City"  name="city" value="<?=$editservice['City'];?>">
                </div>
                
            </div>
            <div class="mt-3">
            <label>Deadline -How soon you need this?</label>
            <input type="text" name="how_fast" id="how_fast" value="<?=$editservice['fast_complete'];?>" class="form-control" placeholder="Time to complete the job" required>
            <label>Preferred day to work</label>
            <select class="form-control" name="preferedday" id="preferedday" required>
                <option hidden>Select</option>
                <option value="Anytime">Anytime</option>
                <option value="<?=$editservice['prefer_day'];?>" selected><?=$editservice['prefer_day'];?></option>
                <option value="Weekday">Weekday</option>
                <option value="Weekend">Weekend</option>
            </select>
            </div>
            <!--<label>want to make it an advertisement?</label>-->
            <!--<input type="checkbox" name="ads" id="ads" value="yes" class="form-control" style="width: auto;">-->
            <div class="mt-3">
            <label>Upload Photos</label>
            <div class="bio-img-portfolio">
                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label class="upload__btn">
                           <p class="plus_btn_upload">+</p>
                            <input type="hidden" name="id" value="<?=$user_id;?>" required>
                            <input type="file" multiple="" class="form-control upload__inputfile" name="image" data-max_length="20">
                        </label>
                        <div class="all-images"> </div>
                    </div>
                    <div class="upload__img-wrap"></div>
                </div>
            </div>
            </div>
            <div class="field_wrapper">
                <div class="d-flex justify-content-between">
                    <label>Add-on tasks</label>
                    <div class="words_counter">
                        <span style="color: #495057;" id=charcounter>0</span>
                        <span style="color: #495057;" id=charcounter>/ 80</span>
                    </div>
                </div>
                <!--<textarea class="form-control" name="topic" rows="2" placeholder="Write something here..." id="textbox" onkeyup="countupdate(this.value)"></textarea>-->
                <label class="lst-plus">
                <input onkeyup="countupdate(this.value)" type="text" id="field_name" class="bg-white font-weight-bold" value="" placeholder="Click here to add more task" maxlength="80"/ disabled>
                </label>
                <a href="javascript:void(0);" class="add_button create_icon_wrap" title="Add field"><i class="fa-solid fa-plus"></i> </a>
            </div>
            <button type="submit" name="" value="submit" onclick="return clickButton();" class=" custom-btn bnt-fill-green btn_submit_approval"> Create & Submit for Approval</button>
        </form>
        <script type="text/javascript">
            $(document).ready(function(){
                var maxField = 10; //Input fields increment limitation
                var addButton = $('.add_button'); //Add button selector
                var wrapper = $('.field_wrapper'); //Input field wrapper
                var fieldHTML = '<div class="addonss"><input type="text" name="field_name[]" value="" class="addon1"/><input type="text" name="field_price[]" value=""  placeholder="RM00" class="addon2"/><a href="javascript:void(0);" class="remove_button create_remove_wrap"><i class="fa-solid fa-minus"></i></a></div>'; //New input field html 
                var x = 1; //Initial field counter is 1
                
                //Once add button is clicked
                $(addButton).click(function(){
                    //Check maximum number of input fields
                    if(x < maxField){ 
                        x++; //Increment field counter
                        $(wrapper).append(fieldHTML); //Add field html
                    }
                });
                
                //Once remove button is clicked
                $(wrapper).on('click', '.remove_button', function(e){
                    e.preventDefault();
                    $(this).parent('div').remove(); //Remove field html
                    x--; //Decrement field counter
                });
            });
        </script>
        <!--character count discription-->
        <script>
            // topic script
            function charcount(str) {
            var lng = str.length ;
            document.getElementById("charcount").innerHTML = lng;
            }
            // discription script
            function charcountupdate(String) {
            var lngr = String.length;
            document.getElementById("charcoun").innerHTML = lngr;
            }
            // Add on task script
            function countupdate(Strings) {
            var lngth = Strings.length;
            document.getElementById("charcounter").innerHTML = lngth;
            }
                                     
        </script>
        <!--character count discription-->
    </div>
</div>
<?php include('inc/footer.php'); ?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    // function clickButton(){
    //     var id = document.getElementById('id').value;
    //     var topic = document.getElementById('topic').value;
    //     var description = document.getElementById('desc').value;
    //     var price = document.getElementById('price').value;
    //     var currency = document.getElementById('currency').value;
    //     var area = document.getElementById('area').value;
    //     var how_fast = document.getElementById('how_fast').value;
    //     var preferedday = document.getElementById('preferedday').value;
    //     var image = document.getElementById('file').value;
    //     var field_names = document.getElementById('field_names').value;
    //     $.ajax({
    //         type:"post",
    //         url:"admin/inc/process.php?action=CreateService",
    //         data: 
    //         {  
    //           'id' :id, 
    //           'topic' :topic,
    //           'description' :description,
    //           'price' :price,
    //           'currency' :currency,
    //           'area' :area,
    //           'how_fast' :how_fast,
    //           'preferedday' :preferedday,
    //           'image' :image,
    //           'field_names' :field_names
    //          },
    //         cache:false,
    //         success: function (html) 
    //         {
    //           alert('Data Send');
    //           $('#msg').html(html);
    //         }
    //     });
    //     return false;
    //  }
</script>
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
<script>
    const curItem1 = document.querySelector(".cur-item-1");
    const curItem2 = document.querySelector(".cur-item-2");
    const curInput1 = document.querySelector(".cur-input-1");
    const curInput2 = document.querySelector(".cur-input-2");
    
    const rateBox = document.querySelector(".rate-box");
    const changeBtn = document.querySelector(".fa-retweet");
    
    function calc() {
    const curItem1Value = curItem1.value;
    const curItem2Value = curItem2.value;
    
    fetch(`https://api.exchangerate-api.com/v4/latest/${curItem1Value}`)
    .then((res) => res.json())
    .then((data) => {
    const rate = data.rates[curItem2Value];
    
    rateBox.textContent = `1 ${curItem1Value} = ${rate.toFixed(
    4
    )} ${curItem2Value}`;
    
    curInput2.value = (curInput1.value * rate).toFixed(2);
    });
    }
    
    function listeners() {
    curItem1.addEventListener("change", calc);
    curItem2.addEventListener("change", calc);
    curInput1.addEventListener("input", calc);
    curInput2.addEventListener("input", calc);
    curInput2.addEventListener("span", calc);
    
    changeBtn.addEventListener("click", () => {
    [curItem1.value, curItem2.value] = [curItem2.value, curItem1.value];
    calc();
    changeBtn.classList.toggle("rotate-btn");
    });
    }
    
    window.onload = () => {
    listeners();
    calc();
    };
    
    
</script>
<!--currency convertor end-->
<!--character count discription-->
<script>
    // topic script
    function charcount(str) {
    var lng = str.length ;
    document.getElementById("charcount").innerHTML = lng;
    }
    // discription script
    function charcountupdate(String) {
    var lngr = String.length;
    document.getElementById("charcoun").innerHTML = lngr;
    }
</script>

<script>
		// Function to set cookie
		function setCookie(name, value, days) {
			var expires = "";
			if (days) {
				var date = new Date();
				date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
				expires = "; expires=" + date.toUTCString();
			}
			document.cookie = name + "=" + (value || "") + expires + "; path=/";
		}

		// Function to get cookie
		function getCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for(var i=0;i < ca.length;i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
			}
			return null;
		}

		// Save form data on change of any input field
		document.addEventListener("DOMContentLoaded", function() {
			var inputs = document.querySelectorAll("input");
			var textarea = document.querySelectorAll("textarea");
			for (var i = 0; i < inputs.length; i++) {
				inputs[i].addEventListener("change", function(event) {
					setCookie(event.target.name, event.target.value, 1);
				});
			}
			// Restore form data on page load
			for (var i = 0; i < inputs.length; i++) {
				var value = getCookie(inputs[i].name);
				if (value) {
					inputs[i].value = value;
				}
			}
		});
	</script>
<!--character count discription-->