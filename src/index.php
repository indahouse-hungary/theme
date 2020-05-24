<?php get_header() ?>
<section>
    <?php if (have_posts()): ?>
        <div class="mx-auto text-secondary pt-5 general-page container-fluid">
            <?php while (have_posts()): ?>
                <?php the_post() ?>
                <?php get_template_part('content', get_post_format()) ?>
            <?php endwhile ?>
        </div>
    <?php endif ?>
</section>
<?php get_footer() ?>
