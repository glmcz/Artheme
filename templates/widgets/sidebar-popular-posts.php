<?php
/**
 * Popular posts
 * User: Filip Uhlir
 * Date: 20.01.2017
 * Time: 15:30
 */
?>
<div class="row">
    <div class="col-md-12 col-xs-12 recent-header">
            <h5><?php echo ((is_home()) ? 'Nejčtenější články':'Nejčtenější články rubriky' ); ?></h5>
    </div>

    <div class="col-md-12 col-xs-12 side-recent-item">
        <?php bg_popular_post(); ?>
    </div>
</div>