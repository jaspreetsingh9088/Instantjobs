<?php
    $page = 'Refer a friend';
    include('inc/header.php'); 
    $a = mt_rand(100000,999999); 
    
    $referlink = "https://mitdevelop.com/instajobs/referfriend?uid=".$_SESSION['Userid'].'-'.$a;
     
    ?>
<?php include('inc/sidebar.php'); ?>      
<!--first tab row start-->
<div class="col-sm-12 instant-main">
<div class="row refer_row">
<div class="middle_container">
    <div class="head-mid">
        <h2>Refer Friends</h2>
    </div>
    <!-- ----------------------middle one---------------------- -->
    <div class="refer-main">
        <div class="refer-chld">
            <div class="img-cash-green text-center">
                <img src="assets/img/cash-multiple copy.png"></img>
            </div>
            <div style=" " class="title-content refer-cont-p">
                <p>Get RMX10 for you and your friends when you make the first deposite and sign through this link</p>
            </div>
            <label class="refer-link">
                Referral link
                <div class="input-refer">
                    <input type="text" placeholder="copy-link" id="myInput" value="<?=$referlink;?>">
                    <button class="click_fnctn_btn" onclick="myFnctncopy()"><i class="fa-regular fa-copy"></i></button>
                </div>
            </label>
        </div>
    </div>
    <!---------------------- middle one end -------------------------->
</div>
<!--copy url button script -->
<script>
    function myFnctncopy() {
      // Get the text field
      var copyText = document.getElementById("myInput");
    
      // Select the text field
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices
    
      // Copy the text inside the text field
      navigator.clipboard.writeText(copyText.value);
      
      // Alert the copied text
      alert("Copied the text: " + copyText.value);
    }
</script>
<!--copy url button script -->
<?php include('inc/footer.php'); ?>