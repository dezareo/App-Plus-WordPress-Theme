<?php
$footer_logo = get_field('footer_logo');
$footer_copyright = get_field('footer_copyright');
?>

    <footer class="wow fadeInUp" data-wow-delay=".8s">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                        <a class="footer-logo" href="#">
                            <img class="img-responsive" src="<?php echo $footer_logo; ?>" alt="">
                        </a>
                    <p><?php echo $footer_copyright; ?></p>
                    
                </div>
            </div>
        </div>
    </footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>