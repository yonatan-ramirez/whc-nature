<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name: Home template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-nature
 */

get_header();
?>

	<div class="container" style="padding-top: 3rem;">
    <div class="row  text-center">
     <div class="col-md-12 bg-dark text-light">
     <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
     </div>
    </div>
	<section id="movies">
		<div class="row">
		<!-- Star movie custom types loop-->
		<?php 
		$args = array(
			'posts_per_page' => 4,
			'post_type' => 'moviesss',
			'order' => 'DSC'

		);
		$movies = new WP_Query($args);

		?>

		<?php
		 if($movies -> have_posts()): while($movies -> have_posts()): $movies -> the_post()

		?>

			<div class="col-md-3">
				<div class="movie-bot">
				<!--Render Movie Info-->
				<h2>
				<?php
					the_title();
				?>
				</h2>

				<div class="movie-poster">
				<?php if(has_post_thumbnail()): ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
					<?php endif; ?>
				</div>
					<p>
						<?php the_content(); ?>
					</p>
				</div>
			</div>
	<?php endwhile; endif; ?>
		</div>
	</section>
<?php
get_footer();
