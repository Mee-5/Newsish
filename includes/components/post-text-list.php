<div class="component component--title-list">
    <div class="component__header">
        <span class="component__title"><?php echo esc_html( $args[ 'title' ] ); ?></span>
    </div>
    <div class="component__body component__body--text-only">
        <ul class="title-list">
            <?php newsish_post_loop( 'title', $args[ 'query' ], post_count: 8) ?>
        </ul>
    </div>
</div>