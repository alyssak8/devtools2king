<?php
/**
 * The template for displaying Posts by Category
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) ); ?>
				</h1>
				<!--- This displays description text for specific category posts -->
					<?php if (is_category('Travel')) : ?>
					<p class="archive-subtitle">Read about my travels here</p>
				<?php elseif (is_category('Personal')) : ?>
					<p class="archive-subtitle">Some of my ramblings here</p>
				<?php elseif (is_category('UX')) : ?>
					<p class="archive-subtitle">See my UX work samples here</p>
				<?php elseif (is_category('Writing-Samples')) : ?>
					<p class="archive-subtitle">Read some pieces I've written here</p>
				<?php endif; ?>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
