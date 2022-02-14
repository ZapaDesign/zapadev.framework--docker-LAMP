<?php
/**
 * @var $title
 * @var $posts
 */
?>


<div class="container">

    <code><?php echo __FILE__; ?></code>

    <?php echo '<br>' . $title ?>

    <?php foreach ($posts as $post): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">
                    <?php echo $post['title']; ?>
                </h3>
                <div class="card-text">
                    <?php echo $post['excerpt']; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
