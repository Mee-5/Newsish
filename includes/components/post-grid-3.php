<div class="flex flex--dt-col">
    <div class=" grid grid--dt-col-1 grid--tb-col-1 grid--mb-col-1">
        <?php newsish_post_loop( 'default-col', $args[ 'query' ], 1 ); ?>
    </div>
    <div class="  grid grid--dt-col-2 grid--mb-col-1">
        <?php newsish_post_loop( 'default-col', $args[ 'query' ], 2 ); ?>
    </div>
</div>