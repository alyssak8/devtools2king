<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
			<!-- This is the code for the form displayed on the contact page-->
			<section>
				<form class="form1" action="" method="post">
					<br>
					<label>First Name:</label>
					<br>
					<input type="text" name="first_name" placeholder="First Name" required>
					<br>
					<label>Last Name: </label>
					<br>
					<input type="text" name="last_name" placeholder="Last Name" required>
					<br>
					<label>Phone Number: </label>
					<br>
					<input type="tel" name="tel_number" placeholder="4161111111" required>
					<br>
					<label>Password: </label>
					<br>
					<input type="password" name="password" placeholder="******" required>
					<br>
					<label>Email: </label>
					<br>
					<input type="text" name="mail" placeholder="abcdef@email.com" required>
					<br>
					<label>Comments:</label>
					<br>
					<textarea name="longer_text" placeholder="Something interesting" required></textarea>
					<br>
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Reset">
				</form>
			</section>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>