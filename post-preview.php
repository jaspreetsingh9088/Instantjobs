<?php 
    $page = 'Post Preview';
    include('inc/header.php'); 
  
    $service = $_GET['topic'];
    $signle_service = $obj->GetServiceByName($service);
    $userid = $signle_service['user_id'];
    $postuser = $obj->GetUserById($userid);
     
    $addons= $obj->GetAddonsByTopic($service);
    $addonstotal= $obj->GetSumAddonsByTopic($service);
     
   
     
   
    ?>
<?php include('inc/sidebar.php'); ?>     
<!--first tab row start-->
<style>
form#cart p {font-size: 12px;float: right;  margin: 5px 0 0 10px;}
form#cart div {margin: 10px 0 0 0;}
</style>
<div class="col-sm-12 instant-main" style="background:#e5e5e5;">
<div class="row">
<div class="middle_container" id="myTabContent">
     <div class="head-mid">
            <h2>Post Preview</h2>
        </div>
    
    <div class="service_provider_contain post_prev_top_wrap" style="position:relative;">
                       
                             <div class="img-p">
                                  <!--<a class="name_topic" href="professional-service?t=<?=$signle_service['id'];?>&service=<?=$topic;?>">-->
                                <div class="hh-1"><img class="hhh" src="admin/assets/img/services/<?=$signle_service['photos'];?>"
                                        alt=""></div>
                                        <!--</a>-->
                                <div class="all-cnt">
                                    <div class="inner">
                                        <a href="user-view.php?viewuserid=<?=$postuser['id'];?>">
                                            <div class="d-flex two-lb align-items-center heart-img-head">
                                                <div class="img-heart-nm">
                                                    <img class="sm-img"
                                                        src="<?php if(!empty($data['picture'])) { echo $_SESSION['user_image']; } elseif(!empty($postuser['ProfilePic'])) { echo 'admin/assets/img/profile/'.$postuser['ProfilePic']; }  else { echo 'assets/img/dcc2ccd9.avif'; } ?>"
                                                        alt="">
                                                    <p class="pp mr-in">
                                                        <?=$postuser['ProfileName'];?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                     <p class="pp2" alt=""> <?=$signle_service['topic'];?></p>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <small>4.9 (108)</small>
                                        </div>

                                        <p><small>From </small> <b>
                                                <?=$signle_service['price'];?>
                                                <?=$signle_service['price_type'];?>
                                            </b> </p>
                                    </div>
                                     
                                </div> 
                            </div>
                        
                        
                        
                        
                    </div>
    
    <div class="mid-pro">
        <div class="profsnl-servc">
            <div class="big-img-pro">
                <b style="color: #ff0000;"> </b>
                <img class="pro-big-img" src="admin/assets/img/services/<?=$signle_service['photos'];?>" alt=""> 
            </div>
        </div>
    </div>
    <div class="bg-white p-3">
            <h3 class="p-2">Summary</h3>
    <div class="">
        <div class="">
            <div class="summary-table-left">
                <div class="d-flex" style="justify-content: space-between;">
                   
                        <div class="third-sec-profsnl">
                    <div class="hd-para">
                        <div>
                            <h6><?=$signle_service['topic'];?> </h6>
                        </div>
                        <div>
                            <p>  <?php echo substr($signle_service['description'], 0,150);?>...</p>
                        </div>
                    </div>
                </div>
                        <div style="">
                            <p class="">RM<?=$signle_service['price'];?></p>
                        </div>
                   
                </div>
                <div class="d-flex" style="justify-content: space-between; margin-top: 10px;">
                    <div class="d-flex">
                        <form id='cart'></form>
                    </div>
                </div>
                <div class="d-flex" style="justify-content: space-between; margin-top: 10px;">
                    <div class="d-flex">
                        <form id='cart'></form>
                    </div>
                </div>
                <div class="d-flex" style="justify-content: space-between;margin-top: 10px;">
                    <div class="d-flex">
                        <form id='cart'></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="margin:0;">
    <div class="summary-table-left align-center" style="display: flex;justify-content: space-between; align-items:center;">
        <div>
            <p>5% Service Fee</p>
            <p>6% SST</p>
            <label class="total_cost">
            <b>Total:</b> 
            </label>
        </div>
        <div class="summary-table-right">
            <p>RM<?=$servicetax = $signle_service['price']*5/100;?></p>
            <p>RM<?=$ssttax = $signle_service['price']*6/100;?></p>
            <output id='total' form='cart'><?=$total = $servicetax + $signle_service['price']+ $ssttax + $addonstotal['addontotal'];?></output>
            
        </div>
    </div>
     </div>
    <div class="last_title">
        <div class="last_title" style="padding: 15px;">
            <a href="post-sponsor.php?id=<?=$signle_service['id'];?>&am=<?=$total;?>" class=" btn-check">
            <button type="button" class=" rounded btn-success btn-sucs btnm-frst w-100 post_spon_btn">Submit Post for Approval</button>
            </a>
        </div>
    </div>
</div>
<?php include('inc/footer.php'); ?> 
<!----------------SUMMARY SCRIPT---------------------->
<script>
    var cart = document.forms.cart;
    var x = cart.elements;
    cart.addEventListener('click', updateBill, false);
      var basket = [
           <?php 
           
           while($adon = mysqli_fetch_array($addons)) { ?>
             {
              name: "<?=$adon['AddonName'];?>",
              price: <?=$adon['AddonPrice'];?>
            },     
          <?php } ?>
     ];
    
    for (let j = 0; j < basket.length; j++) {
      var details = `
      <div id="item-${j}">
        
        <button class="btn_plus_minus" id="dec-${j}" type="button">-</button>
        <output id="qty-${j}">1</output>
        <button class="btn_plus_minus" id="inc-${j}" type="button">+</button>
        <p>${basket[j].name}</p>
        <output id="bas-${j}">${basket[j].price}</output>
       <p class="output_RM"> RM <output id="prc-${j}" class="prc">${basket[j].price}</output></p>
    </div>
    `;
      cart.insertAdjacentHTML('beforeend', details);
    }
    
    function updateBill(e) {
      if (e.target.type === 'button') {
        var ID = e.target.parentElement.id;
        var idx = ID.split('-').pop();
        var dir = e.target.id.split('-').shift();
        var qty = x.namedItem(`qty-${idx}`);
        var bas = x.namedItem(`bas-${idx}`);
        var prc = x.namedItem(`prc-${idx}`);
         
        var sum = x.total;
        var quantity = parseInt(qty.value, 10);
        var base = parseFloat(bas.value).toFixed(2);
        var price = parseFloat(prc.value).toFixed(2);
        
        var total = parseFloat(sum.value).toFixed(2);
        if (dir === "inc") {
          quantity++;
          qty.value = quantity;
          prc.value = quantity * base;
        } else {
          quantity--;
          if (quantity <= 0) {
            quantity = 0;
          }
          qty.value = quantity;
          prc.value = quantity * base;
        }
      }
      var prices = Array.from(document.querySelectorAll('.prc'));
  
      var numbers = prices.map(function(dig, idx) {
        return parseFloat(dig.value);
      });
      var grandTotal = numbers.reduce(function(acc, cur) {
        return acc + cur;
      }, 0);
      
       grandTotals = grandTotal+<?=$total;?>;
    
      x.total.value = grandTotals.toFixed(2);
    }
</script>
<!----------------SUMMARY SCRIPT---------------------->