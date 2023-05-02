<?php 
    $page = 'Payment Summary';
    include('inc/header.php'); 
    $serviceid = $_GET['serviceid'];
    $signle_service = $obj->GetServiceById($serviceid);
    $userid = $signle_service['user_id'];
    $postuser = $obj->GetUserById($userid);
    
    ?>
<?php include('inc/sidebar.php'); ?>     
<!--first tab row start-->
<div class="col-sm-12 instant-main">
    <div class="row">
        <div class="middle_container" id="myTabContent">
            <div class="head-mid">
              <h2></h2>
            </div>
            <div class="d-flex hidn-objct sticky msg-header">
                <div class="backbtn"> 
                    <a href="professional-service?id=<?=$signle_service['id'];?>"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="prof-heigh-wid">
                    <div class="manage-as-lo"><?=$signle_service['topic'];?></div>
                </div>
                <div class="rightsidemenu">
                    <div><i class="fa-solid fa-ellipsis-vertical"></i></div>
                </div>
            </div>
            <div class="mid-pro">
                <div class="profsnl-servc">
                    <div class="big-img-pro">
                        <img class="pro-big-img" src="admin/assets/img/services/<?=$signle_service['photos'];?>" alt=""> 
                    </div>
                </div>
            </div>
            <div class="">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 style="padding:10px;">Summary</h3>
                </div>
            </div>
            <div class="">
                <div class="">
                    <div class="summary-table-left">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="d-flex">
                                <p style="font-size: 13px;"><?=$signle_service['topic'];?></p>
                                <div  style="padding-left:10px;">
                                </div>
                            </div>
                            <p>RM<?=$signle_service['price'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="">
                <div class="" >
                    <div class="summary-table-left" style="display: flex;justify-content: space-between;">
                        <div>
                            <p>5% Service Fee</p>
                            <p>6% SST</p>
                            <p><strong>Total</strong></p>
                        </div>
                        <div class="summary-table-right">
                            <p>RM<?=$servicetax = $signle_service['price']*5/100;?></p>
                            <p>RM<?=$ssttax = $signle_service['price']*6/100;?></p>
                            <output id='total' form='cart'>RM<?=$servicetax + $signle_service['price']+ $ssttax;?></output>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------->
            <div class="field_wrapper">
                <div class="d-flex justify-content-between payment_methd">
                    <h2>Choose Payment Plan</h2>
                </div>
                <label class="lst-plus summary_favs_wrap" style="width:100%;">
                <input onkeyup="countupdate(this.value)" type="text" id="field_name" name="" value="" placeholder="" maxlength="70" style="width:100%;">
                <a href="javascript:void(0);" class="add_button summary_icon_wrap" title="Add field"><i class="fa-solid fa-plus"></i> </a>
                </label>      
            </div>
            <!----------------------------->
            <div class="last_title">
                <div class="last_title" style="padding: 15px;">
                    <a href="checkout?id=<?=$signle_service['id'];?>">
                    <button type="button" class="rounded btn-success btn-sucs btnm-frst w-100"> Checkout</button>
                    </a>
                    <br>
                    <p style="text-align:center !important;width: 100%;  font-size: 13px;">Always pay Through Instantjob to protect yourself, you can release the payment anytime.</p>
                </div>
            </div>
        </div>
<!--    </div>-->
<!--</div>-->
<?php include('inc/footer.php'); ?> 
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 3; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="addonss"><input type="text" name="field_price[]" value=""  placeholder="Payment 100%" class="addon2"/><a href="javascript:void(0);" class="remove_button summary_remove_wrap"><i class="fa-solid fa-minus"></i></a></div>'; //New input field html 
 
    //   <input type="text" name="field_name[]" value="" class="addon1"/>
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