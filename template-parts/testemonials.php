
<!-- para limitar a quantidade de caracteres do texto substr(get_the_excerpt(), 0, 50) -->

<article class="testemonials__card">
    <div class="card__image">
        <?php the_post_thumbnail('post-preview')?>
    </div>
    <h3><?= substr(get_the_title(),0,120)?>...</h3>
    <p><?= substr(get_the_excerpt(),0,110)?>...</p>
    <a href="<?php the_permalink()?>" class="button">Get started</a>
</article>