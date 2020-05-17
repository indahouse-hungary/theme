<?php /* Template Name: Adományozás */ ?>
<?php get_header() ?>

<section>
    <div class="mx-auto text-secondary pt-5 page container-fluid">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <div class="row">
                    <div class="col-md-8">
                        <?php the_post() ?>
                        <h2 class="text-uppercase text-left mb-4"><?php the_title() ?></h2>

                        <?php the_content() ?>
                    </div>
                    <div class="col-md-4">
                        <?php if (is_active_sidebar('sidebar-donate')): ?>
                            <?php dynamic_sidebar('sidebar-donate'); ?>
                        <?php endif ?>
                    </div>
                </div>
            <?php endwhile ?>
        <?php endif ?>
    </div>
</section>

<?php get_template_part('include/birthday-promo') ?>

<?php get_template_part('include/donate-other') ?>

<?php get_footer() ?>
