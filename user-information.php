<?php //print_r($_SESSION['gdata']); ?>
<link rel="stylesheet" href="assets/css/user-information.css">
<link rel="stylesheet" href="assets/css/stylesheet.css">
<?php ?>   
<div class="row user-info_row">
    <div class="col-lg-8">
        <div class="dream">
            <?php //print_r($guser);?>
            <?php if(!empty($_SESSION['user_image'])) { ?>
            <img class="main-img" src="<?php echo $_SESSION['user_image'];?>" alt="">
            <?php } elseif(!empty($user_information['ProfilePic'])) { ?>
            <img  class="main-img profile-in_mid" src="admin/assets/img/profile/<?php echo $user_information['ProfilePic'];?>" alt="">
            <?php } else { ?>
            <img  class="main-img" src="assets/img/male-1.png" alt="">
            <?php }?>
            <div class="dream-star">
                <h6> <?php if(!empty($guser['ProfileName'])) { echo $guser['ProfileName']; } elseif(!empty($_SESSION['Userid'])) { echo $user_information['ProfileName']; } else {}?></h6>
                <p> <img class="small-img-star " src="assets/img/star-svg.png" alt=""> New Member</p>
                <!--<p>From: <?=$user_information['Country'];?></p>-->
                <!--<p>Member Since: <?php $datee = date_create($user_information['Created_at']); echo date_format($datee,"M Y"); ?></p>-->
                <p>Level 3 Member </p>
            </div>
        </div>
        <div class="users_all_info">
            <div class="users_info_container">
                <div class="">
                    <table class="table_container">
                        <tr class="table-row_top">
                            <th><?=$user_information['Country'];?></th>
                            <th><?php $datee = date_create($user_information['Created_at']); echo date_format($datee,"M Y"); ?></th>
                            <th>15min</th>
                            <th>230k+</th>
                        </tr>
                        <tr class="table-row_users">
                            <td>Country</td>
                            <td>Member since</td>
                            <td>Respomse time</td>
                            <td>Earning MYR</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 view_wrapper">
        <div  class="profile-mid_right_btns">
            <div>
                <a href="profile-edit" class=""> <button class="edit_accnt_btn">Edit Account Setting</button></a> 
            </div>
            <div>
                <a href=""><button class="sell_servc_btn">Sell Your Expertise</button></a>
            </div>
            <div>
                <a href=""><button class="hire_job_btn">Hire someone  for job</button></a>
            </div>
        </div>
    </div>
</div>