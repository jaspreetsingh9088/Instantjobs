<?php
    $page = 'Transaction';
    include('inc/header.php');  
    include('inc/sidebar.php');
    require_once('wallett/assets/php/functions.php');

    $user_id = $_SESSION['Userid'];
    $history = $obj->getTransHistory($user_id);


?>     
<div class="col-sm-12 instant-main">
<div class="row">
<div class="middle_container">
    <div class="head-mid">
        <h2>Transaction History  </h2>
    </div>
    <!-- ----------------------middle one---------------------- -->
    <div class="bck-white ">
        <div class=transaction-part>
            <?php
                foreach($history as $trans){
                    // print_r($trans);
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
             <div class="transaction-contain">
                <div class="h3-para-trans">
                    <h2><?=$suffix?></h2>
                    <div class="rm-text">
                        <p><?=$color=='danger'?'-':'+'?> RM <?=$trans['amount']?></p>
                    </div>
                </div>
                <!--<p class="tran-para">Need help feeding my dog over this weekend 2 days.</p>-->
                <div class="date-format">
                    <p><?php echo date_format($date,"d/m/Y H:i:s a");?></p>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>
<!---------------------- middle one end -------------------------->
<?php include('inc/footer.php'); ?>