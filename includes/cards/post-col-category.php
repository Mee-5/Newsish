<div class="card flex flex--dt-col flex--mb-row">
    <a class="card__img-container card__img-container--mobile" href="<?php echo esc_attr( get_the_permalink() ); ?>">
        <img class="card__img" src="<?php echo esc_attr( the_post_thumbnail_url() ); ?>" alt="">
    </a>
    <div class="card__info">
        <?php
            $terms = get_the_category();
            foreach( $terms as $term) {
                if ($term->term_id != 1) {
                    echo '<a href="' . esc_attr( get_term_link( $term ) ) . '" class="card__category">' . $term->name . '</a>';
                    break;
                }
            } 
        ?>
        <a href="<?php echo esc_attr( get_the_permalink() ); ?>" class="card__title"><?php the_title(); ?></a>
    </div>
</div>
