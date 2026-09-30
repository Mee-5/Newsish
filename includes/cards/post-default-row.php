<a class="card card--row" href="<?php echo esc_attr( get_the_permalink() ); ?>">
    <div class="card__img-container card__img-container--sm">
        <img class="card__img" src="<?php echo esc_attr( the_post_thumbnail_url() ); ?>" alt="">
    </div>
    <div class="card__info card__info--row">
        <span class="card__title"><?php the_title(); ?></span>
    </div>
</a>