<?php get_header() ?>

<section>
    <div class="mx-auto text-secondary pt-5 page container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-uppercase text-left mb-4">
                    Aktuális gyűjtéseink
                </h2>
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): ?>
                        <?php the_post() ?>
                        <h3 class="text-uppercase text-left mb-4">
                            <?php the_title() ?>
                        </h3>
                        <?php the_content() ?>
                    <?php endwhile ?>
                <?php else: ?>
                    <p>Jelenleg nincs aktív gyűjtésünk, nézz vissza később!</p>
                <?php endif ?>
            </div>
            <div class="col-md-4">
                <?php if (is_active_sidebar('sidebar-donate')): ?>
                    <?php dynamic_sidebar('sidebar-donate'); ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('include/birthday-promo') ?>

<?php get_template_part('include/donate-other') ?>

<?php get_footer() ?>
