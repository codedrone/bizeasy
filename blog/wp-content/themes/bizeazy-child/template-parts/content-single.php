<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="bizeazy-container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-detail-title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div><!-- .entry-header -->

		<?php twentysixteen_excerpt(); ?>

		<?php twentysixteen_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
				the_content();

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );

				if ( '' !== get_the_author_meta( 'description' ) ) {
					get_template_part( 'template-parts/biography' );
				}
			?>

			<div class="blog-detail-post-tag-main">
				<?php $category = get_the_category($post->ID);?>
				<div class="blog-detail-post-id">
					<?php if($category > 0){?>
						<h2>Category :</h2>
						<?php $c=0;?>
						<?php foreach($category as $cat){?>
							<?php if($c+1 == count($category)){?>
								<a href="<?php echo get_category_link($cat->cat_ID); ?>"><?php echo $cat->name ?></a>
							<?php } else {?>
								<a href="<?php echo get_category_link($cat->cat_ID); ?>"><?php echo $cat->name ?>, </a>
							<?php } ?>
							
						<?php $c++; } ?>
					<?php }?>
				</div>

				<?php $tags = get_the_tags($post->ID);?>
				
				<div class="tags">

				<?php if($tags > 0){?>
					<h2>Tag :</h2>
					<?php $i=0;?>
					<?php foreach ( $tags as $tag ) { ?>
						<?php if($i+1 == count($tags)){?>
							<a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"><?php echo $tag->name; ?></a>
						<?php } else {?>
							<a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"><?php echo $tag->name; ?>, </a>
						<?php } ?>
					<?php $i++; } ?>

				<?php }?>	
					
				</div>
			</div>

		</div><!-- .entry-content -->
		
	</article><!-- #post-## -->
</div>
