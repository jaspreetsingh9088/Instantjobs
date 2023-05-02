<?php
    $page = 'Create Job';
    include('inc/header.php'); 
    
        ?>
<?php include('inc/sidebar.php'); ?>     



<!--first tab row start-->
<div class="col-sm-12 instant-main">
<div class="row">
<div class="middle_container" id="myTabContent">
    <div class="tab-pane fade show active wrap_content_mid" id="one" role="tabpanel" aria-labelledby="one-tab">
        <div class="head-mid">
            <h2>Create a Job Offer  <?=$_SESSION['Country'];?><b style="color: #ff0000;"></b></h2>
        </div>
        <form action="admin/inc/process.php?action=CreateJob" method="post" class="service-form example" enctype="multipart/form-data">
            <input type="hidden" class="form-control" placeholder="Name" value="<?=$_SESSION['Userid'];?>" name="id" required>
            <div class="d-flex justify-content-between">
                <label> Topic</label>
                <div>
                    <span style="color: #495057;" id=charcount>0</span>
                    <span style="color: #495057;" id=charcount>/ 100</span> 
                </div>
            </div>
            
        <div class="test-form">

            <textarea id="myTextarea" class="mb-3" maxlength="100" name="topic" ></textarea>
            <!--<div class="words_counter">-->
            <!--    <span style="color: #495057;" id="charcount">0</span>-->
            <!--    <span style="color: #495057;" id="charcount">/ 80</span>-->
            <!--</div>-->

        </div>
            
            <div class="d-flex justify-content-between">
                <label>Description</label>
                <div>
                    <span style="color: #495057;" id=charcoun>0</span>
                    <span style="color: #495057;" id=charcoun>/ 1000 </span>
                </div>
            </div>
            <textarea class="form-control" name="description" rows="4" placeholder="Write something here..." id="textbox" onkeyup="charcountupdate(this.value)" maxlength="1000" required></textarea>
                <label>Budget</label>
            <div class="row select_budget">
                <div class="col-lg-4 col-6 prize_service_controller wrapper_price">
                    <div class="input-group cur-box">
                        <input type="text" class="form-control cur-input-1" name="price" aria-label="Text input with dropdown button" required>
                        <!--<select class="form-control cur-item-1" name="currency">-->
                        <!--    <option value="MYR" selected>MYR</option>-->
                        <!--    <option value="USD">USD</option>-->
                        <!--</select>-->
                    </div>
                    <!--<div class="change-box">-->
                    <!--    <p class="rate-box">0.00</p>-->
                    <!--</div>-->
                    <div class="input-group cur-box">
                        <!--<input type="text" class="form-control cur-input-2" name="price" aria-label="Text input with dropdown button" style="border: unset; background: transparent;">-->
                        <input type="hidden" class="form-control cur-item-2" name="currency" value="<?=$geoLocationData['currency_code'];?>" aria-label="Text input with dropdown button" required>
                        <input type="hidden" class="form-control cur-item-2" name="country" value="<?=$geoLocationData['country'];?>" aria-label="Text input with dropdown button" required>
                    </div>
                </div>
                <div class="col-md-12 p-0">
                    <label>Area</label>
                    <select class="form-control" name="area" required>
                        <option hidden>With in my city</option>
                        <option value="Worldwide">With in my city</option>
                        <option value="Local">With in my state</option>
                        <option value="Overseas">Across Malaysia</option>
                    </select>
                </div>
                
                
            
            
            </div>
            <div class="row flex-row">
                <div class="col-lg-6 col-6 wrapper_state">
                    <label>State:</label>
                    <select id="state" name="state">
            <option value="" hidden>--Select State--</option>
            <option value="Johor">Johor</option>
            <option value="Kedah">Kedah</option>
            <option value="Kelantan">Kelantan</option>
            <option value="Melaka">Melaka</option>
            <option value="Negeri Sembilan">Negeri Sembilan</option>
            <option value="Pahang">Pahang</option>
            <option value="Perak">Perak</option>
            <option value="Perlis">Perlis</option>
            <option value="Pulau Pinang">Pulau Pinang</option>
            <option value="Sabah">Sabah</option>
            <option value="Sarawak">Sarawak</option>
            <option value="Selangor">Selangor</option>
            <option value="Terengganu">Terengganu</option>
            <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
            <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
            <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
        </select>
                    <!--<input type="text" placeholder="State" name="state">-->
                </div>
                <div class="col-lg-6 col-6 wrapper_city">
                    <label>City:</label>
                    <select id="city" name="city">
            <option value="" hidden>--Select City--</option>
        </select>
                    <!--<input type="text" placeholder="City" name="city">-->
                </div>
                
            </div>
            <br>
            <label>Deadline -How soon you need this?</label> 
            <input type="text" name="how_fast" class="form-control" placeholder="Time to complete the job" required>
            <label>Location</label>
            <input type="text"id="autocomplete-address" name="location" class="form-control" placeholder="Enter your location" required>
            <!--<label>want to make it an advertisement?</label>-->
            <!--<input type="checkbox" name="ads" id="ads" value="yes" class="form-control" style="width: auto;" required>-->
            <label>Upload Photos</label>
            <div class="bio-img-portfolio">
                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label class="upload__btn">
                             <p class="plus_btn_upload">+</p>
                            <input type="hidden" name="id" value="<?=$user_id;?>">
                            <input type="file" multiple="" class="form-control upload__inputfile" name="image" data-max_length="20" required >
                        </label>
                        <div class="all-images"> </div>
                    </div>
                    <div class="upload__img-wrap"></div>
                </div>
            </div>
            <button type="submit" class=" custom-btn bnt-fill-green btn_submit_approval"> Create & Submit for Approval</button>
        </form>
    </div>
</div>
<!--get ip address-->
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
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
<?php include('inc/footer.php'); ?> 
<script src="inc/js/instantjob.js"></script>
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
<!--places search script start-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiKmRh2vEg2hiV1ZIVeyNlxPjVegpChvE&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>  
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.0-rc.1/css/foundation.css">-->
<script>
    let autocomplete;
    let placeSearch;
    let componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name'
    };
    
    window.initPlaces = function() {
      if ( jQuery( '#autocomplete-address' ).length ) {
        autocomplete = new google.maps.places.Autocomplete(
          document.getElementById( 'autocomplete-address' ),
          { types: [ 'geocode' ] }
        );
        autocomplete.addListener( 'place_changed', fillInAddress );
      }
    };
    
    function fillInAddress() {
    
      // Get the place details from the autocomplete object.
      let place = autocomplete.getPlace();
    
      // Get each component of the address from the place details
      // and fill the corresponding field on the form.
      for ( let i = 0; i < place.address_components.length; i++ ) {
        let addressType = place.address_components[i].types[0];
        if ( componentForm[addressType]) {
          let val = place.address_components[i][componentForm[addressType]];
          document.getElementById( addressType ).value = val;
        }
      }
      let streetNum = jQuery( '#street_number' ).val();
      let streetName = jQuery( '#route' ).val();
      let city = jQuery( '#locality' ).val();
      let state = jQuery( '#administrative_area_level_1' ).val();
      let zip = jQuery( '#postal_code' ).val();
      jQuery( 'input[name="rep_address_1"]' ).val( streetNum + ' ' + streetName );
      jQuery( 'input[name="rep_city"]' ).val( city );
      jQuery( 'input[name="rep_state"]' ).val( state );
      jQuery( 'input[name="rep_zip"]' ).val( zip );
      jQuery( '#autocomplete-address' ).val( '' );
    }
    
    function geolocate() {
      if ( navigator.geolocation ) {
        navigator.geolocation.getCurrentPosition( function( position ) {
          var geolocation = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          var circle = new google.maps.Circle({
            center: geolocation,
            radius: position.coords.accuracy
          });
          autocomplete.setBounds( circle.getBounds() );
        });
      }
    }
    
    jQuery( '#autocomplete-address' ).on( 'focus', function() {
      geolocate();
    });
    
    jQuery( '#manual_address' ).on( 'change', function( e ) {
      var checked = e.target.checked;
      if ( true === checked ) {
        jQuery( 'input[name="rep_address_1"]' ).removeAttr( 'disabled' );
        jQuery( 'input[name="rep_address_2"]' ).removeAttr( 'disabled' );
        jQuery( 'input[name="rep_city"]' ).removeAttr( 'disabled' );
        jQuery( 'input[name="rep_state"]' ).removeAttr( 'disabled' );
        jQuery( 'input[name="rep_zip"]' ).removeAttr( 'disabled' );
      } else {
        jQuery( 'input[name="rep_address_1"]' ).attr( 'disabled', 'true' );
        jQuery( 'input[name="rep_address_2"]' ).attr( 'disabled', 'true' );
        jQuery( 'input[name="rep_city"]' ).attr( 'disabled', 'true' );
        jQuery( 'input[name="rep_state"]' ).attr( 'disabled', 'true' );
        jQuery( 'input[name="rep_zip"]' ).attr( 'disabled', 'true' );
      }
    });        
                     
                      
</script>
<!--places search script end-->
<!--currency convertor start-->
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
  const textarea = document.getElementById("myTextarea");

  // Listen for input event on textarea
  textarea.addEventListener("input", () => {
    // Get the value of the textarea
    const value = textarea.value;
    
    // Save the value in a cookie
    document.cookie = `myTextarea=${value}; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/`;
  });
</script>
	
<!--character count discription-->
    <script>
        window.jQuery ||
            document.write(
                '<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>'
            );
    </script>
        <script>
        $(document).ready(function () {
            // Set initial value of textarea
            $('#myTextarea').val('I need help ');

            updateCharCount();

            // Add focus event listener to textarea
            $('#myTextarea').on('focus', function () {
                // Check if value starts with "I will help"
                if (!$(this).val().startsWith('I need help ')) {
                    // Prepend "I will help " (with a space) to the value of the textarea
                    $(this).val('I need help ' + $(this).val());

                    // Move the cursor to the end of the textarea
                    this.setSelectionRange(this.value.length, this.value.length);
                }
            });

            // Add input event listener to textarea
            $('#myTextarea').on('input', function () {
                // Check if value starts with "I will help"
                if (!$(this).val().startsWith('I need help ')) {
                    // Reset the value of the textarea to "I will help "
                    $(this).val('I need help ');

                    // Move the cursor to the end of the textarea
                    this.setSelectionRange(this.value.length, this.value.length);
                }
                // Update character count
                updateCharCount();
            });

            function updateCharCount() {
                $('#charcount').text($('#myTextarea').val().length);
            }
        });


    </script>

 <script>
        $(document).ready(function() {
            // When the state dropdown menu changes
            $('#state').change(function() {
                // Get the selected state
                var state = $(this).val();

                // Send an AJAX request to get the list of cities
                $.ajax({
                    type: 'POST',
                    url: 'get_cities.php',
                    data: { state: state },
                    success: function(cities) {
                        // Update the city dropdown menu with the list of cities
                        $('#city').html(cities);
                    }
                });
            });
        });
    </script>


<!--character count discription-->