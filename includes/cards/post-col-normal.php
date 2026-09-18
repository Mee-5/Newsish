<a href="<?php echo esc_attr( get_the_permalink() ); ?>">
    <div class="card flex flex--dt-col flex--mb-row">
        <div class="card__img-container">
            <img class="card__img" src="<?php echo esc_attr( the_post_thumbnail_url() ); ?>" alt="">
        </div>
        <div class="card__info">
            <span class="card__title"><?php the_title(); ?></span>
        </div>
    </div>
</a>