<?php
    /*
        Template Name:Coming Soon Page
    */
 ?>

<?php get_header(); ?>
    <!-- Preloader -->

    <div id="preloader"></div>

    
    <!-- Background Slideshow END -->
    <?php
        $banner = get_field('banner');
        $banner_imgs = wp_list_pluck($banner, 'url');
     ?>
<div id="demo-1" class="my-overlay" data-zs-src='["<?php echo implode("\",\"", $banner_imgs); ?>"]' data-zs-overlay="plain">
    

    <div id="wrapper">
        <div class="container" id="top-container">
            <div class="main-container">
                <!-- Header Logo START -->
                <?php if (get_field('logo')) : ?>
                    <header class="header-logo">
                        <img src="<?php the_field('logo'); ?>" alt="logo" />
                    </header>
                <?php endif; ?>
                <!-- Header Logo END -->

                <!-- Page Header -->
                <h1 class="title"><?php the_field('site_title_text'); ?></h1>

                <!-- Page Slogan -->
                <p class="slogan-text">
                    <?php the_field('content'); ?>
                </p>

                <!-- Subscribe Form START -->
                <p class="subscribe-title"><?php the_field('subscribe_title_text'); ?></p>
                <form class="subscribe-form" id="subscribe-form">
                    <input type="email" name="email" placeholder="Your Email" required>
                    <button type="submit" id="btn-subscribe">Subscribe</button>
                </form>
                <div id="subscribe-msg"></div>
                <!-- Subscribe Form END -->

                <!-- Contact Button -->
                <a class="btn-effect" id="trigger-overlay"><span class="hover-bg reset"><span class="hover-text reset"><?php the_field('contact_button_text'); ?></span></span><?php the_field('contact_button_text'); ?></a>

                <!-- Social Icons Section START -->
                <div class="social-icon">
                    <ul>

                        <?php 
                            $social_ico = get_field('social_icon');
                            foreach ($social_ico as $socials ) :
                         ?>
                        <li>
                            <a class="facebook" href="<?php echo $socials['icon']; ?>" title="Facebook"><i class="fa fa-<?php echo $socials['icon']; ?>"></i></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- Social Icons Section END -->
            </div>
        </div>

        <!-- Modal Popup START -->
        <div class="overlay overlay-modal">
            <!-- Close Button -->
            <a class="overlay-close"><i class="fa fa-close fa-2x"></i></a>

            <div class="container">
                <!-- Modal Popup Title and Description START -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title"><?php the_field('form_title'); ?></h2>
                        <p><?php the_field('form_content'); ?>
                        </p>
                    </div>
                </div>
                <!-- Modal Popup Title and Description END -->

                <div class="row">
                    <div class="col-md-8 clearfix overlay-left">
                        <h4 class="text-left">Send Us A Message</h4>

                        <!-- Contact Form START -->
                        <?php echo do_shortcode('[gravityform id="'. get_field('form_id') .'" title="false" description="false" ajax="true"]'); ?>
                        <div id="contact-msg"></div>
                        <!-- Contact Form END -->
                    </div>

                    <div class="col-md-4 overlay-right">
                        <!-- Contact Address START -->
                        <h4 class="text-left"><?php the_field('address_title'); ?></h4>
                        <?php 
                            $address_it = get_field('address');
                            foreach ($address_it as $address_i ) :
                        ?>
                        <address>
                            
                          <strong><?php echo $address_i['address_item_title'] ?></strong><br>
                        <?php 
                        foreach($address_i['address_item'] as $item){
                            echo '<i class="fa fa-'. $item['address_icon'] .'"></i>';
                            if( $item['address_icon'] == 'envelope') {
                                echo '<a href="mailto:' . $item['address_text'] .'">'.$item['address_text'].'</a>';
                            } else {
                                echo $item['address_text'] . '<br>';
                            }
                        }
                        ?>
                        </address>

                        <?php endforeach; ?>
                        <!-- Contact Address END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Popup END -->
    </div>
</div>
    <div id="bg-pattern"></div>

    <!-- Settings (Remove it on Production) -->
<?php get_footer(); ?>