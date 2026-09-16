<div class="content-container article">
    <div class="article__header">
        <h1 class="article__title"><?php the_title(); ?></h1>
        <div class="article__info">
            <span>By <?php the_author(); ?></span><span><?php the_date(); ?></span>
        </div>
        <div class="article__img-container">
            <img class="article__img" src="<?php echo esc_attr( get_the_post_thumbnail_url() ); ?>" alt="">
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
</div>