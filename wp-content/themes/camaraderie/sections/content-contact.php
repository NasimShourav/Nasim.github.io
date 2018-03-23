<?php
/*
================================================================================================
Camaraderie - content-testimonial.php
================================================================================================
This is the most generic template file in a WordPress theme and is one required files to display
content. This content.php is the main content that will be displayed when is on front page, home
or index.

@package        Camaraderie WordPress Theme
@copyright      Copyright (C) 2017. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
================================================================================================
*/
$contact_dropdown = get_theme_mod('contact_dropdown');
$about_dropdown = get_theme_mod('about_dropdown');
?>
<?php if (!empty($contact_dropdown)) { ?>
    <section id="section-contact" class="section-contact">
        <div id="site-main" class="site-main">
            <ul class="contact-grid">
                <li>
                    <?php if (!empty($about_dropdown)) { ?>
                        <?php $query = new WP_Query(array('p' => $page_id = get_theme_mod('about_dropdown'), 'post_type' => 'page')); ?>
                        <?php if ($query->have_posts()) { ?>
                            <?php while ($query->have_posts()) { ?>
                                <?php $query->the_post(); ?>
                                    <header class="entry-header">
                                         <h1 class="entry-title"><?php the_title(); ?></h1>
                                        <span class="entry-description"><?php esc_html_e('Some things about me', 'camaraderie'); ?></span>
                                    </header>
                                <div class="entry-excerpt">
                                    <div class="about-avatar">
                                        <?php the_post_thumbnail('camaraderie-small-avatar'); ?>
                                    </div>
                                    <?php the_excerpt(); ?>
                                    <?php if (!is_singular() || is_front_page()) { ?>
                                        <div class="continue-reading">
                                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                                <?php
                                                    printf(
                                                        wp_kses(__('Read More %s', 'camaraderie'), array('span' => array('class' => array()))),
                                                        the_title('<span class="screen-reader-text">"', '"</span>', false)
                                                    );
                                                ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                                <?php wp_reset_postdata(); ?>
                        <?php } ?>
                    <?php } ?>
                </li>
                <li>
                    <?php $query = new WP_Query(array('p' => $page_id = get_theme_mod('contact_dropdown'), 'post_type' => 'page')); ?>
                    <?php if ($query->have_posts()) { ?>
                        <?php while ($query->have_posts()) { ?>
                            <?php $query->the_post(); ?>
                                <header class="entry-header">
                                     <h1 class="entry-title"><?php the_title(); ?></h1>
                                    <span class="entry-description"><?php camaraderie_custom_contact_description_setup(); ?></span>
                                </header>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                        <?php } ?>
                            <?php wp_reset_postdata(); ?>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </section>
<?php } ?>