<?php get_header();?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h4 class="page-title">404 not found</h4>
            </div>
        </div>
    </div>
</section>
<section class="page-404 pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="page-404-content">
                    <h4>Sorry! Not Found</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                        <?php
                            $args = array(
                                'post_type' => '404page',
                            );
                            $query = new WP_query($args);
                            while($query->have_posts()){
                                $query->the_post();

                            $page404 = get_field('404_page');
                        ?>
                        <div class="404-img">
                        <img src="<?php echo $page404['url'];?>" alt="">
                        <?php }
                            wp_reset_postdata();
                            
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <?php dynamic_sidebar('main_sidebar');?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>