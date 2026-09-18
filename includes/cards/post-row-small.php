<a href="<?php echo esc_attr( get_the_permalink() ); ?>">
    <div class="card card--row">
        <div class="card__img-container card__img-container--mobile">
            <img class="card__img" src="<?php echo esc_attr( the_post_thumbnail_url() ); ?>" alt="">
        </div>
        <div class="card__info card__info--row">
            <span class="card__title"><?php the_title(); ?></span>
        </div>
    </div>
</a>