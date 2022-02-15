<?php
/**
 * @var $title
 * @var $posts
 */
?>


<div class="container">

    <code><?php echo __FILE__; ?></code>
    <br>

    <?php echo '<h1 class="text-center">' . $title . '</h1>' ?>

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
