<?php 
/*
Template Name: Gallery
*/
get_header();
?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php get_template_part('inc/breadcumb');?>
            </div>
        </div>
    </div>
</section>

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/01.jpg" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/01.jpg" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/02.jpg" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/02.jpg" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/03.jpg" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/03.jpg" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/03.jpg" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/04.jpg" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/05.jpg" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/05.jpg" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/06.jpg" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/06.jpg" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/01.jpg" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/01.jpg" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/01.jpg" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/01.jpg" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/01.jpg" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/01.jpg" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
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