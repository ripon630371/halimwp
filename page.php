<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <?php 
                        while(have_posts()){
                            the_post();
                            ?>
                            <h4><?php the_title(); ?></h4>
                            <ul>
                                <li><a href="<?php echo site_url(); ?>"></a>Home</li> / 
                                <li><?php the_title(); ?></li>
                            </ul>
                        <?php }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">

            <?php
               while(have_posts()){
                  the_post();
                  get_template_part('template-parts/content');
               }
            ?>
            <div class="col-xl-4">
               <?php dynamic_sidebar('main_sidebar'); ?>
                
            </div>
        </div>
    </div>
</section>

 <!-- CTA Area Start -->
 <section class="cta">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <h4>best solution for your business <span>the can be used on larger scale projectss as well as small scale projectss</span></h4>
          </div>
          <div class="col-md-6 text-center">
             <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
          </div>
       </div>
    </div>
 </section>
 <!-- CTA Area End -->
 <?php get_footer(); ?>