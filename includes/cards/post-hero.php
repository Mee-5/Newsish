<div class="card card--hero flex flex--dt-row flex--mb-col">
    <div class="card__info card__info--large">
        <?php
            $terms = get_the_category();
            foreach( $terms as $term) {
                if ($term->term_id != 1) {
                    echo '<a href="' . esc_attr( get_term_link( $term ) ) . '" class="card__category--large">' . $term->name . '</a>';
                    break;
                }
            } 
        ?>
        <a class="card__title card__title--large" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <a href="<?php the_permalink(); ?>">
        <div class="card__img-container card__img-container--large">
            <img class="card__img" src="<?php echo esc_attr( the_post_thumbnail_url() ); ?>" alt="">
        </div>
    </a>
</div>
