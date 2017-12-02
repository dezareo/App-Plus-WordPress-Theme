<?php
$utility_one_picture = get_field('utility_one_picture');
$utility_title = get_field('utility_title');
$utility_content = get_field('utility_content');

?>

<!-- utility 1 -->
	<section id="utility">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                    <img class="img-responsive" src="<?php echo $utility_one_picture; ?>" alt="">
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay=".8s">
                    <div class="block">
                        <h2><?php echo $utility_title; ?></h2>
                        <p>
                            <?php echo $utility_content; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>