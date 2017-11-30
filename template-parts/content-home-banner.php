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
                            Beautiful, simple and easy to use App Plus.
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nemo, corporis ipsum soluta nobis ea!
                        </p>

                        <ul class="download-btn">
                            <li>
                                <a href="#" class="btn btn-default btn-apple"> <i class="fa fa-apple"></i>App store</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-andriod"><i class="fa fa-android"></i>Play Store</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-windows"><i class="fa fa-windows"></i>Windows Store</a>
                            </li>
                        </ul>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>