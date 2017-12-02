<?php
$utility_two_picture = get_field('utility_two_picture');
$utility_two_title = get_field('utility_two_title');
$utility_two_content = get_field('utility_content');
?>
<!-- utility-2 -->
<section id="utility-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay=".8s">
                    <div class="block">
                        <h2 class="title"><?php echo $utility_two_title; ?></h2>
                        <p>
                            <?php echo $utility_two_content; ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".8s">
                    <img class="img-responsive" src="<?php echo $utility_two_picture; ?>" alt="">
                </div>
            </div>
        </div>
    </section>