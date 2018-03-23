<?php
/*
================================================================================================
Camaraderie - woocommerce.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files 
for a theme (the other being functions.php). This template-tags.php template file allows you to 
add additional features and functionality to a WordPress theme which is stored in the includes 
folder. The primary template file functions.php contains the main features and functionality to 
the WordPress theme which is stored in the root of the theme's directory.

@package        Camaraderie WordPress Theme
@copyright      Copyright (C) 2017. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
================================================================================================
*/

/*
================================================================================================
Table of Content
================================================================================================
 1.0 - WooCommerce Setup
================================================================================================
*/

/*
================================================================================================
 1.0 - WooCommerce Setup
================================================================================================
*/
function camaraderie_woocommerce_setup() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'camaraderie_woocommerce_setup');