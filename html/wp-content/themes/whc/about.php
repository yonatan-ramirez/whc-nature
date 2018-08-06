<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: About template
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-nature
 */

get_header();
?>

    <div class="container text-center" style="padding-top: 1rem;">
        <div class="row">
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

<script>
var i = 0;
var txt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta vero qui nulla. Ipsam nemo vero, minima dignissimos nostrum nihil voluptate itaque ad odio tempora nobis esse ratione accusamus culpa earum quo facilis consectetur autem id quidem veniam necessitatibus? Quae unde architecto consectetur harum eos necessitatibus itaque, non recusandae ipsam similique.';
var speed = 1;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>
	

<?php
get_footer();
