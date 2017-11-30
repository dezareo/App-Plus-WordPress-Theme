<?php
$banner_left_image = get_field('banner_left_image');
$banner_right_title = get_field('banner_right_title');
$banner_right_content = get_field('banner_right_content');
$banner_btn_app_store_link = get_field('banner_btn_app_store_link');
$banner_bnt_play_store_link = get_field('banner_btn_play_store_link');
$banner_btn_win_store_link = get_field('banner_btn_win_store_link');
?>
<!-- banner section -->
<section id="banner" class="wow fadeInUp">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="block">
                        <img class="app-img img-responsive" src="<?php echo $banner_left_image; ?>" alt="">
                    </div>
                    
                </div>
                <div class="col-md-6 col-md-offset-1 col-sm-6">
                    <div class="block">
                        <h1>
                            <?php echo $banner_right_title; ?>
                        </h1>
                        <p>
                            <?php echo $banner_right_content; ?>
                        </p>

                        <ul class="download-btn">
                            <li>
                                <a href="<?php echo $banner_btn_app_store_link; ?>" class="btn btn-default btn-apple"> <i class="fa fa-apple"></i>App store</a>
                            </li>
                            <li>
                                <a href="<?php echo $banner_btn_play_store_link; ?>" class="btn btn-default btn-andriod"><i class="fa fa-android"></i>Play Store</a>
                            </li>
                            <li>
                                <a href="<?php echo $banner_btn_win_store_link; ?>" class="btn btn-default btn-windows"><i class="fa fa-windows"></i>Windows Store</a>
                            </li>
                        </ul>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>