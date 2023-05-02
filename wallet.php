<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$page = 'Wallet';
include('inc/header.php');   
include('inc/sidebar.php'); 
require_once('wallett/assets/php/functions.php');
 
  $user_id=$_SESSION['Userid'];
  $credit_balance = $obj->getCreditedBalance($user_id);
  $debit_balance = $obj->getDebitedBalance($user_id);
  $balance = $credit_balance['credit']-$debit_balance['debit'];
$history = $obj->getTransHistory($user_id);
$userin =$obj->GetUserById($user_id);

?>     
<!--first tab row start-->
<div class="col-sm-12 instant-main">
<div class="row">
<div class="middle_container">
    <div class="head-mid">
        <h2>Wallet  <b style="color: #ff0000;"></b></h2>
    </div>
    <!-- ----------------------middle one---------------------- -->
    <div class="wallet-container">
        <div class="supprt-wallet">
            <div class=" wallet-blnc">
                <div class="wallet_blance">
                    <h3>Wallet Balance</h3>
                    <p>RM <?=$balance?>.00</p>
                </div>
                <a href="top-up-wallet?id=<?=$user_id;?>">
                <button type="button" class="btn-wallet custom-btn bnt-fill-green">Top Up Wallet</button>
                </a>
            </div>
            <div class=" wallet-blnc">
                <div class="wallet_blance">
                    <h3>Coupon Credit</h3>
                    <p>RM 50.00</p>
                </div>
                <a href="add-coupon?id=<?=$user_id;?>">
                <button type="button" class="btn-wallet custom-btn bnt-fill-green">Add Coupon</button>
                </a>
            </div>
            <div class=" wallet-blnc">
                <div class="wallet_blance">
                    <h3>Account Holder</h3>
                    <p><?=$user_information['ProfileName'];?></p>
                </div>
                <a href="withdrawal?id=<?=$user_id;?>">
                <button type="button" class="btn-wallet custom-btn bnt-fill-green">Withdrawal</button>
                </a>
            </div>
         
            <!--<div class=" wallet-blnc">-->
            <!--    <div class="wallet_blance">-->
            <!--        <h3>Send Money</h3>-->
                    <p><?//=$user_information['ProfileName'];?></p>
            <!--    </div>-->
            <!--     <button type="button" class="btn-wallet custom-btn bnt-fill-green" data-toggle="modal" data-target="#staticBackdrop">Send Money</button>-->
            <!-- </div>-->
        </div>
        <div class="transaction-contain frst-trans">
            <h2>Transaction History</h2>
            <?php
                foreach($history as $trans){
                    
                  $suffix="";
                    if($trans['from_user_id']==$user_id && $trans['to_user_id'] != 0){
                        $color="danger";
                  $suffix= "".getUserById($trans['to_user_id'])['ProfileName']." (".getUserById($trans['to_user_id'])['Phone'].") " ;
                     
                     } elseif($trans['from_user_id']==0){
                        $color="success";
                        $suffix= "Top Up";
                        
                    } elseif($trans['to_user_id']== 0 && $trans['from_user_id']== $user_id){
                        $color="danger";
                        $suffix= "Withdrawal";
                        
                    }else{
                        $color="success";
                         $suffix= " ".getUserById($trans['from_user_id'])['ProfileName']." (".getUserById($trans['from_user_id'])['Phone'].") " ;
                  
                    }
                    
                    $date=date_create($trans['created_at']);
 
                     ?>
    
    <div class="h3-para-trans">
                <h3><?=$suffix?></h3>
                <div class="rm-text">
                    <p style="width:100%;"><?=$color=='danger'?'-':'+'?> RM <?=$trans['amount']?></p>
                </div>
            </div>
            <!--<p class="tran-para">Need help feeding my dog over this weekend 2 days.</p>-->
            <div class="date-format">
                <p><?php echo date_format($date,"d/m/Y H:i:s a");?></p>
            </div>
 


    <?php
}

?>
  
</div>
            
        </div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Send Money</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <div>
     <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Mobile</span>
  <input type="text" class="form-control" id="user_mobile_no" placeholder="enter user mobile no..." aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Amount</span>
  <input type="text" class="form-control" id="amount" placeholder="enter amount to send.." aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
<div class="d-flex justify-content-center">
<div class="spinner-border" role="status"  id="loading" style="display:none">
  <span class="visually-hidden">Loading...</span>
</div>
</div>

<div class="alert alert-success" role="alert" id="s_msg" style="display:none">

</div>
<div class="alert alert-danger" role="alert" id="e_msg" style="display:none">

</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hide</button>
        <button type="button" id="send_money" class="btn btn-primary">Send Money</button>
      </div>
    </div>
  </div>
</div>

 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <!---------------------- middle one end -------------------------->
</div>
<?php include('inc/footer.php'); ?>


<script>




const txn_data = {
    user_mobile_no:null,
    amount:null,
}

const obj = {
 url:'<?=site_url('wallett/assets/php/ajax.php?sendmoney')?>',
 method:'post',
 dataType:"json",
 data:txn_data,
 success:(response)=>{
if(response.txn_status){
    $("#e_msg").hide();
    $("#s_msg").text(response.msg);
    $("#s_msg").show();
    $("#loading").hide();
$("#send_money").attr("disabled",false);
$("#user_mobile_no").val("");
$("#amount").val("");
location.reload();
}else{
    $("#s_msg").hide();
    $("#e_msg").text(response.msg);
    $("#e_msg").show();
    $("#loading").hide();
$("#send_money").attr("disabled",false);
}
 }
}

$("#send_money").click(()=>{
txn_data.user_mobile_no = $("#user_mobile_no").val();
txn_data.amount = $("#amount").val();

if(!txn_data.user_mobile_no || !txn_data.amount){
alert("enter user mobile and amount to send money");
return 0;
}

$("#loading").show();
$("#send_money").attr("disabled",true);
$.ajax(obj);
});



</script>