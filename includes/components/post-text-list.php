<div class="component component--text-list flex flex--dt-col">
    <div class="component__header">
        <span class="component__title"><?php echo esc_html( $args[ 'title' ] ); ?></span>
    </div>
    <div class="component__body">
        <ul class="component__list flex flex--dt-col">
            <?php newsish_post_loop( 'title', $args[ 'query' ], post_count: 8) ?>
        </ul>
    </div>
</div>