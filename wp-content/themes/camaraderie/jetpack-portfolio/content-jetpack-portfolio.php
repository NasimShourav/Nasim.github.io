<?php
/*
================================================================================================
Splendid Portfolio - content-jetpack-portfolio.php
================================================================================================
This is the most generic template file in a WordPress theme and is one required files to display
portfolio content.

@package        Splendid Portfolio WordPress Theme
@copyright      Copyright (C) 2017. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
================================================================================================
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header>
    <div class="featured-portfolio">
        <?php the_post_thumbnail('camaraderie-jetpack-portfolio'); ?>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <?php wp_link_pages(); ?>
</article>
<?php comments_template(); ?>