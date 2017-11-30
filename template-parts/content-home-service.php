<?php
$section_box_icon_1 = get_field('section_box_icon_1'); 
$section_box_title_1 = get_field('section_box_title_1'); 
$section_box_content_1 = get_field('section_box_content_1'); 
$section_box_icon_2 = get_field('section_box_icon_2'); 
$section_box_title_2 = get_field('section_box_title_2'); 
$section_box_content_2 = get_field('section_box_content_2');
$section_box_icon_3 = get_field('section_box_icon_3'); 
$section_box_title_3 = get_field('section_box_title_3'); 
$section_box_content_3 = get_field('section_box_content_3');
$section_box_icon_4 = get_field('section_box_icon_4'); 
$section_box_title_4 = get_field('section_box_title_4'); 
$section_box_content_4 = get_field('section_box_content_4');
?>

<!-- sevice section -->

<section id="service">
        <div class="container">
            <div class="service-wrapper">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1s">
                            <div class="icon">
                               <?php echo $section_box_icon_1; ?> 
                            </div>
                            
                            <h3><?php echo $section_box_title_1; ?></h3>
                            <p><?php echo $section_box_content_1; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1.3s">
                            <div class="icon">
                                <?php echo $section_box_icon_2; ?>
                            </div>
                            <h3><?php echo $section_box_title_2; ?></h3>
                            <p><?php echo $section_box_content_2; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1.6s">
                            <div class="icon">
                                <?php echo $section_box_icon_3; ?>
                            </div>
                            <h3><?php echo $section_box_title_3; ?></h3>
                            <p><?php echo $section_box_content_3; ?></p>
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1.9s">
                            <div class="icon">
                                <?php echo $section_box_icon_4; ?>
                            </div>
                            <h3><?php echo $section_box_title_4; ?></h3>
                            <p><?php echo $section_box_content_4; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>