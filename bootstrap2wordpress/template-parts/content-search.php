<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bootstrap2wordpress_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
<!--CUSTOM HTML FOR BLOG POST		-->
		<div class="post-details">
			<i class="fa fa-user"></i><?php the_author(); ?>
			<i class="fa fa-clock-o"></i><time><?php the_date(); ?></time>
			<i class="fa fa-folder"></i><?php the_category(', '); ?>
			<i class="fa fa-tags"></i><?php the_tags('', ', ', ''); ?>
			<div class="post-comments-badge">
				<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number(0, 1, '%'); ?></a>
			</div>
			<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i>', ''); ?>
		</div>
	</header><!-- .entry-header -->
<!--	CHECK FOR POST IMAGE-->
	<?php if(has_post_thumbnail()) : ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>
			<div class="post-excerpt">
			<p><?php the_excerpt(); ?> </p>
			</div>
</article><!-- #post-## -->
