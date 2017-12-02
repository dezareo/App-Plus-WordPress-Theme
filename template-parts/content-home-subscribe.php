<?php
$subscribe_title = get_field('subscribe_title');
$subscribe_subtitle = get_field('subscribe_subtitle');
$subscribe_form = get_field('subscribe_form');

?>
<!-- subscribe -->
<section id="subscribe" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown" data-wow-delay=".8s">
                    <div class="block">
                        <div class="title text-center">
                            <h2><?php echo $subscribe_title; ?></h2>
                            <p><?php echo $subscribe_subtitle; ?></p>
                        </div>
                        
                       

                        <form class="form-inline text-center col-sm-12 col-xs-12" role="form">
                             
                             <?php //echo do_shortcode($subscribe_form); ?>

                         <div class="form-group">
                                 <input type="text" class="form-control" id="signup-form" >  
                            </div>
                            <a href="" type="submit" class="btn btn-default btn-signup">
                                <i class="fa fa-paper-plane"></i>
                            </a>

                        </form>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>