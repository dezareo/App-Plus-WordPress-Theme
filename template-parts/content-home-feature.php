<?php
$feature_main_title = get_field('feature_main_title');
$feature_item_one_icon = get_field('feature_item_one_icon');
$feature_item_one_title = get_field('feature_item_one_title');
$feature_item_one_content = get_field('feature_item_one_content');
$feature_item_two_icon = get_field('feature_item_two_icon');
$feature_item_two_title = get_field('feature_item_two_title');
$feature_item_two_content = get_field('feature_item_two_content');
$feature_item_three_icon = get_field('feature_item_three_icon');
$feature_item_three_title = get_field('feature_item_three_title');
$feature_item_three_content = get_field('feature_item_three_content');
$feature_main_picture = get_field('feature_main_picture');

?>
<!-- feature section -->
	<section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".8s">
                    <h2 class="title"><?php echo $feature_main_title; ?></h2>

                    <div class="feature-item">

                        <div class="media">
                            <div class="pull-left icon" href="#">
                                <?php echo $feature_item_one_icon; ?>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $feature_item_one_title; ?></h4>
                                <p><?php echo $feature_item_one_content; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item">

                        <div class="media">
                            <div class="pull-left icon" href="#">
                                <?php echo $feature_item_two_icon; ?>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $feature_item_two_title; ?></h4>
                                <p><?php echo $feature_item_two_content; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item">

                        <div class="media">
                            <div class="pull-left icon" href="#">
                                <?php echo $feature_item_three_icon; ?>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $feature_item_three_title; ?></h4>
                                <p><?php echo $feature_item_three_content; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay=".8s">
                    <div class="block">
                        <img class="img-responsive" src="<?php echo $feature_main_picture; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>