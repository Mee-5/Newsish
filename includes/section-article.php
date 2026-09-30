<article class="content-container article">
    <div class="article__header">
        <h1 class="article__title"><?php the_title(); ?></h1>
        <div class="article__info">
            <span>By <?php the_author(); ?></span><span><?php the_date(); ?></span>
        </div>
        <div class="article__img-container">
            <?php
                $youtube_url = get_post_meta( get_the_ID(), 'youtube_video_url', true);
                if ( $youtube_url && $youtube_url != '' ):
                    echo newsish_get_youtube_embed( newsish_get_youtube_id( $youtube_url ) ); 
                else:?>
                    <img class="article__img" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="">
            <?php endif; ?>
        </div>
    </div>
    <hr>
    <div class="article__body">
        <div class="article__content">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="article__footer">

    </div>
</article>