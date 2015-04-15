<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Skeleton
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

    <div class="twelve columns">
		<div id="primary" class="full-width">
			<div id="content">		


				<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header">
						<h2 class="entry-title"><?php the_title(); ?></h2>
					</header><!-- .entry-header -->



					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'WP-Skeleton' ) . '&after=</div>' ); ?>

			<table class="twelve columns">
			  <thead>
			    <tr>
			      <th>Name</th>
			      <th>Age</th>
			      <th>Sex</th>
			      <th>Location</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Gabriel</td>
			      <td>21</td>
			      <td>Male</td>
			      <td>Costa Rica</td>
			    </tr>
			    <tr>
			     <!--  <td>Dwayne Johnson</td>
			      <td>42</td>
			      <td>Male</td>
			      <td>Hayward</td> -->
			    </tr>
			  </tbody>
			</table>

					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->


				<?//php comments_template( '', true ); ?>

				<a class="button" href="#">Button</a>
				<a class="button button-primary" href="#">Button Primary</a>


			</div><!-- #content -->
		</div><!-- #primary -->


    </div>

                
<?php get_footer(); ?>