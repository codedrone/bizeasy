<div class="wmle_item_holder <?php echo $shortcodeData['wmlo_columns'] ?>" style="display:none;">
    <div class="wmle_item">
        <div class="wmle_post_title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="wmle_post_date">
            <?php echo get_the_date(); ?>
        </div>
        <?php if ( has_post_thumbnail() ) :?>
            <div class="wpme_image">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($shortcodeData['wmlo_image_size']); ?></a>
            </div>
        <?php endif; ?>
        
        <div class="wmle_post_excerpt">
            <?php the_excerpt(); ?>
        </div>
        <?php $tags = get_the_tags($post->ID);?>
        <div class="tags">
        <?php $i=0;?>
        <?php foreach ( $tags as $tag ) { ?>
            <?php if($i+1 == count($tags)){?>
                <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"><?php echo $tag->name; ?></a>
            <?php } else {?>
                <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"><?php echo $tag->name; ?></a>
            <?php } ?>
        <?php $i++; } ?>
        </div>
        
    </div><!-- EOF wmle_item_holder -->
</div><!-- EOF wmle_item_holder -->