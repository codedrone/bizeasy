<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="full-width-row">
		

		<?php if ( have_posts() ) : ?>

			<div class="tag-category-search-title">
				<?php
					if (is_category())
					{
						$catarr = get_the_category();
						$categoryid = $catarr[0]->cat_ID;

					}

					if(is_tag()){
						$obj = get_queried_object();
						$tagid = $obj->term_id;
					}

					the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div>
			<?php if (is_category()) {?>
				<?php echo do_shortcode('[wmls name="blog-archive" id="2" categoryid="'.$categoryid.'"]');?>
			<?php } ?>
			
			<?php if (is_tag()) {?>
				<?php echo do_shortcode('[wmls name="blog-archive" id="2" tagid="'.$tagid.'"]');?>
			<?php } ?>

			<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>


	</div><!-- .content-area -->
<?php get_footer(); ?>
