<?php
$page = 'Profile';
include('inc/header.php');
$portfolio = $obj->GetPortfolioByUserId($user_id);
?>
<link rel="stylesheet" href="assets/css/profile.css">

</style>
<div class="container-fluid">
    <!-------- ASIDE SEC START -------->
    <?php include('inc/sidebar.php'); ?>
    <!--first tab row start-->
    <div class="col-sm-12 instant-main">
        <div class="row row_profile-mob">
            <div class="middle_container">
                <div class="head-mid">
                    <h2>Public Profile</h2>
                </div>
                <!-- ----------------------middle one---------------------- -->
                <div class="bck-white ">
                    <?php include('user-information.php'); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <!--title & summary 1-->
                            <div class="profile-mid-content">
                                <div class="title-and-para">
                                    <div class="bio-title title_bio">
                                        <div class="pro-bio-contain">
                                            <h3>Profile Bio</h3>
                                        </div>
                                        <div class="edit-container">
                                            <!--on click show popup to edit profile bio-->
                                            <!-- Button trigger modal -->
                                            <button id="edit_profile_wrap" type="button" class="btn btn-primary profile-edit btn_profile_edit" data-toggle="modal" data-target="#exampleModalCenter">
                                                Edit
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form action="admin/inc/process.php?action=EditBio" method="post">
                                                            <div class="modal-body">
                                                                <div class="title-and-para">
                                                                    <div class="bio-title  edit_profile_bio_wrap">
                                                                        <h3>Profile Bio</h3>
                                                                        <input type="hidden" name="id" value="<?= $user_information['id']; ?>">
                                                                        <textarea id="w3review" name="bio" class="form-control" rows="2" cols="50"><?= $user_information['ProfileBio']; ?></textarea>
                                                                    </div>
                                                                </div>
    
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn_close_wrap" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn_save_wrap">Save</button>
                                                            </div>
                                                       </form> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--on click show popup to edit profile bio-->
                                        </div>
                                    </div>
                                    <p><?= $user_information['ProfileBio']; ?></p>
                                </div>
                            </div>
                            <!--title & summary 1-->
                            <div class="profile-mid-content">
                                <div class="title-and-para">
                                    <div class="bio-title title_bio">
                                        <div class="pro-bio-contain">
                                            <h3>Skills</h3>
                                        </div>
                                        <div class="edit-container">
                                            <!--on click show popup to edit profile bio-->
                                            <!-- Modal -->
                                            <!-- Button trigger modal -->
                                            <button id="edit_profile_wrap" type="button" class="btn btn-primary btn_profile_edit" data-toggle="modal" data-target="#exampleModal">
                                                Edit
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal skills_hobbies_model_wrap fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog content_pop_up_centered " role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="admin/inc/process.php?action=Skills">

                                                            <div class="modal-body ">


                                                                <div class="title-and-para">
                                                                    <div class="bio-title edit_profile_bio_wrap">
                                                                        <h3>Skills</h3>
                                                                    </div>
                                                                    <input type="text" id="tag-input1" name="skills[]" value="<?php foreach ($skills as $skils) {
                                                                                                                                    echo $skils['Skills'];
                                                                                                                                } ?>">
                                                                    <input type="hidden" name="userid" value="<?= $user_information['id']; ?>">
                                                                </div>
                                                                <div class="title-and-para ">
                                                                    <div class="bio-title edit_profile_bio_wrap">
                                                                        <h3>Hobbies</h3>
                                                                    </div>
                                                                    <input type="text" id="tag-input2" name="intrest[]" value="<? //=$intrest['Interest'];
                                                                                                                                ?>">
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn_close_wrap" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn_save_wrap">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--on click show popup to edit profile bio-->
                                        </div>
                                    </div>
                                    <div class="row skill_hobbies_">
                                        <?php
                                        foreach ($skills as $skill) {
                                            if (!empty($skill['Skills'])) {
                                                $skills = explode(',', $skill['Skills']);
                                                foreach ($skills as $s) {
                                                    echo '<p class="skills">' . $s . '</p>';
                                                }
                                            } else {
                                                echo 'Nothing added yet';
                                            }
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                            <!--title & summary 1-->
                            <div class="profile-mid-content">
                                <div class="title-and-para">
                                    <div class="bio-title title_bio">
                                        <div class="pro-bio-contain">
                                            <h3 class="hobbies_wrap">Hobbies</h3>
                                        </div>
                                        <div class="edit-container">
                                            <!--<p><a href="profile-edit">Edit</a></p>-->
                                        </div>
                                    </div>
                                    <div class="row skill_hobbies_">
                                        <?php
                                        foreach ($intrest as $interest) {
                                            if (!empty($interest['Interest'])) {
                                                $interests = explode(',', $interest['Interest']);
                                                foreach ($interests as $i) {
                                                    echo '<p class="skills">' . $i . '</p>';
                                                }
                                            } else {
                                                echo 'Nothing added yet';
                                            }
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                            <!--title & summary 1-->

                            <!--title & summary 2-->
                            <div class="profile-mid-content">
                                <div class="title-and-para">
                                    <div class="bio-title title_bio">
                                        <div class="pro-bio-contain">
                                            <h3>Qualification</h3>
                                        </div>
                                        <div class="edit-container">
                                            <!--on click show popup to edit profile bio-->
                                            <!-- Modal -->
                                            <!-- Large modal -->
                                            <button id="edit_profile_wrap" type="button" class="btn btn-primary btn_profile_edit" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button>
                                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="title-and-para">
                                                                <div class="bio-title edit_profile_bio_wrap">
                                                                    <h3>Qualification</h3>
                                                                </div>
                                                                <input type="text" name="qualification" class="form-control skills_wrap_inp" value="<?= $user_information['Qualifications']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn_close_wrap" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn_save_wrap">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--on click show popup to edit profile bio-->
                                        </div>
                                    </div>
                                    <div class="bio-quali">
                                        <p><?= $user_information['Qualifications']; ?> <?= $user_information['Year']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-mid-content">
                                <div class="title-and-para">
                                    <div class="bio-title title_bio">
                                        <div class="pro-bio-contain">
                                            <h3>Portfolio</h3>
                                        </div>
                                        <div class="edit-container">
                                            <button id="edit_profile_wrap" type="button" class="btn btn-primary btn_profile_edit" data-toggle="modal" data-target=".bd-example-modal-sm">Edit</button>
                                            <div class="modal skills_hobbies_model_wrap fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm content_pop_up_centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="title-and-para">
                                                                <div class="bio-title edit_profile_bio_wrap">
                                                                    <h3>Portfolio</h3>
                                                                </div>
                                                                <div class="bio-img-portfolio">
                                                                    <div class="upload__box">
                                                                        <div class="upload__btn-box">
                                                                            <label class="upload__btn">
                                                                                <p>Upload images</p>
                                                                                <input type="hidden" name="id" value="50">
                                                                                <input type="file" multiple="" class="form-control upload__inputfile" name="portfolio[]" data-max_length="20">
                                                                            </label>
                                                                            <div class="all-images">
                                                                                <div class="add-img-container slide">
                                                                                    <img class="add-img photo" src="admin/assets/img/portfolio/mid.png" alt="">
                                                                                    <button id="del">x</button>
                                                                                </div>
                                                                                <div class="add-img-container slide">
                                                                                    <img class="add-img photo" src="admin/assets/img/portfolio/photo-1472457897821-70d3819a0e24.avif" alt="">
                                                                                    <button id="del">x</button>
                                                                                </div>
                                                                                <div class="add-img-container slide">
                                                                                    <img class="add-img photo" src="admin/assets/img/portfolio/photo-1495195129352-aeb325a55b65.avif" alt="">
                                                                                    <button id="del">x</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="upload__img-wrap"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn_close_wrap" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn_save_wrap">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bio-img">
                                        <?php while ($row = mysqli_fetch_array($portfolio)) { ?>
                                            <div class="add-img-container">
                                                <img class="add-img" src="admin/assets/img/portfolio/<?= $row['Photos']; ?>" alt="">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!--title & summary 3-->

                            <!--title & summary 4-->
                            <div class="profile-mid-cont hidn-aftr-fotr">
                                <div class="title-and-para forth-sm">
                                    <div class="bio-title fl-sm">
                                        <h3>Job Completed</h3>
                                        <div class="show-all">
                                            <a href="#">Show All</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="img-p-content">
                                            <div class="img-pro-fl">
                                                <img class="" src="admin/assets/img/services/photo-1472457897821-70d3819a0e24.avif" alt="">
                                            </div>
                                            <div class="para-profile">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr...</p>
                                            </div>
                                        </div>
                                        <div class="img-p-content">
                                            <div class="img-pro-fl">
                                                <img class="" src="	admin/assets/img/services/R0010382.JPG" alt="">
                                            </div>
                                            <div class="para-profile">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr...</p>
                                            </div>
                                        </div>
                                        <div class="img-p-content">
                                            <div class="img-pro-fl">
                                                <img class="" src="	admin/assets/img/services/Chrysanthemum.jpg" alt="">
                                            </div>
                                            <div class="para-profile">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--title & summary 4-->

                            <!--reviews-->
                            <div class="review-section hidn-aftr-fotr">
                                <div class="review-sec-profile">
                                    <div class="bio-title fl-sm">
                                        <h3>Reviews</h3>
                                        <div class="show-all">
                                            <a href="review-only">Show All</a>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <div class="star-rating-img">
                                            <img class="review-img" src="admin/assets/img/services/photo-1472457897821-70d3819a0e24.avif" alt="">
                                        </div>
                                        <div class="star-rating">
                                            <h3>Clinton</h3>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum Pellentesque efficitur leo a laoreet. Quis neque fringilla, in imperdiet sapien euismod.</p>
                                    <div class="review-content">
                                        <div class="star-rating-img">
                                            <img class="review-img" src="admin/assets/img/services/R0010382.JPG" alt="">
                                        </div>
                                        <div class="star-rating">
                                            <h3>Abdullah</h3>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum Pellentesque efficitur leo a laoreet. Quis neque fringilla, in imperdiet sapien euismod.</p>
                                    <div class="review-content">
                                        <div class="star-rating-img">
                                            <img class="review-img" src="admin/assets/img/services/Chrysanthemum.jpg" alt="">
                                        </div>
                                        <div class="star-rating">
                                            <h3>Man Kaya</h3>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum Pellentesque efficitur leo a laoreet. Quis neque fringilla, in imperdiet sapien euismod.</p>
                                </div>
                            </div>
                            <!--reviews-->
                        </div>


                    </div>
                </div>


            </div>

            <?php include('inc/footer.php'); ?>
            <script>
                $(document).ready(function() {

                });
            </script>