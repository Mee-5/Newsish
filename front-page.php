<?php get_header(); ?>

<main class="page-section">
    <div class="content-container">
        <?php if ( have_posts() ): while(have_posts()): the_post(); ?>
            <a href="<?php echo esc_attr( get_the_permalink() ); ?>">
                <div class="card card--row">
                    <div class="card__img-container">
                        <img class="card__img" src="<?php echo esc_attr( the_post_thumbnail_url() ); ?>" alt="">
                    </div>
                    <div class="card__info">
                        <span class="card__title"><?php the_title(); ?></span>
                    </div>
                </div>
            </a>
        <?php endwhile; else: endif; ?>
    </div>
</main>

<?php get_footer(); ?>