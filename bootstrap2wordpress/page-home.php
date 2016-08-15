<?php
/*
Template Name: Home Page
*/
?>
<!--HEADER SECTION-->
<?php get_header(); ?>
<!--HERO SECTION-->
<?php get_template_part( 'template-parts/content', 'hero'); ?>
<!--OPTIN SECTION-->
<?php get_template_part( 'template-parts/content', 'optin');?>
<!--BOOST YOUR INCOME SECTION-->
<?php get_template_part( 'template-parts/content', 'boost');?>
<!--WHO BENEFITS SECTION-->
<?php get_template_part( 'template-parts/content', 'who');?>
<!--COURSE FEATURES SECTION-->
<?php get_template_part( 'template-parts/content', 'features');?>
<!--PROJECT FEATURES SECTION-->
<?php get_template_part( 'template-parts/content', 'project');?>
<!--VIDEO FEATURETTE SECTION-->
<?php get_template_part( 'template-parts/content', 'featurette');?>
<!--INSTRUCTOR SECTION-->
<?php get_template_part( 'template-parts/content', 'instructor');?>
<!--TESTIMONIAL SECTION-->
<?php get_template_part( 'template-parts/content', 'testimonial');?>
<!--FOOTER SECTION-->
<?php get_footer(); ?>
