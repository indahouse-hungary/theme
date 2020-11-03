<?php get_header() ?>
<?php
$custom = get_post_custom($post->ID);
$donation_layout = <<<EOT
<div class="row">
    <div class="col-4 col-md-2 text-right text-primary amount">{amount} Ft</div>
    <div class="col-8 col-md-10">
        <div class="float-md-right text-primary"><a href="{url}">{campaign}</a></div>
        <div class="title float-md-left"><strong>{name}</strong> <span class="date">{relative_date}</span></div>
        <div class="clearfix"></div>
        <div class="message mt-1">{message}</div>
        <hr />
    </div>
</div>
EOT;

$single_campaign_layout = <<<EOT
<div class="campaign-volunteers-section">
    <div class="card mt-6 border-bottom-0">
        <div class="py-5 px-3">
            <div class="icon justify-content-center mx-auto d-flex bg-primary rounded-circle" style="background-image:url({image}); background-size: cover; background-position: center center;">
                &nbsp;
            </div>
            <h5 class="text-uppercase text-secondary m-0 mt-4 text-center">{title}</h5>
        </div>
        <div class="footer">
            <div class="float-left mt-3 ml-3 mb-2 text-secondary">
                <strong>{collected} Ft</strong> összegyűjtve
            </div>
            <div class="float-right mt-3 mr-3 mb-2 text-secondary">
                <strong>{percentage}%</strong>
            </div>
            <div class="clearfix"></div>
            <div class="progress mx-3">
                <div class="progress-bar" role="progressbar" style="width: {percentage}%" aria-valuenow="{percentage}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-muted small float-left ml-3 mr-3 mb-3 mt-2">
                <i>{goal} Ft cél</i>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
EOT;

$campaigns_layout = <<<EOT
<div class="col-md-4 mb-md-8">
    <div class="card mb-7 mb-md-0 mx-3 mx-md-0">
        <div class="py-5 px-3">
            <div class="icon justify-content-center mx-auto d-flex bg-primary rounded-circle" style="background-image:url({image}); background-size: cover; background-position: center center;">
                &nbsp;
            </div>
            <h5 class="text-uppercase text-secondary m-0 mt-4">{title}</h5>
            <div class="py-1 text-secondary text-center">
                <p class="py-3 m-0">{excerpt}</p>
                <a href="{url}" class="btn btn-primary rounded-xl btn-sm">
                    Őt támogatom
                </a>
            </div>
        </div>
        <div class="footer">
            <div class="float-left mt-3 ml-3 mb-2 text-secondary">
                <strong>{collected} Ft</strong> összegyűjtve
            </div>
            <div class="float-right mt-3 mr-3 mb-2 text-secondary">
                <strong>{percentage}%</strong>
            </div>
            <div class="clearfix"></div>
            <div class="progress mx-3">
              <div class="progress-bar" role="progressbar" style="width: {percentage}%" aria-valuenow="{percentage}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-muted small float-left ml-3 mr-3 mb-3 mt-2">
                <i>{goal} Ft cél</i>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
EOT;
?>

<section>
    <div class="mx-auto text-secondary pt-5 page container-fluid">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <div class="row">
                    <div class="col-md-8">
                        <?php the_post() ?>
                        <h2 class="text-uppercase text-left"><?php the_title() ?></h2>
                        <?php the_content() ?>

                        <?php /* al-kampany oldalon bal oldalt vannak az adomanyozok */ ?>
                        <?php if ($post->post_parent): ?>
                            <div class="campaign-donations">
                                <h2 class="m-0 mt-5 p-1">Adományozók</h2>
                                <div class="mt-4">
                                    <?= do_shortcode("[furik_donations layout='" . $donation_layout . "']") ?>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="col-md-4">
                        <?= do_shortcode("[furik_campaign layout='" . $single_campaign_layout . "' default_image='https://indahousehungary.trau.hu/wp-content/themes/indahouse/assets/img/default-avatar.png']") ?>
                        <div class="donate-form-widget mb-5" id="campaign_form_widget">
                            <?php if (isset($custom['DONATE_FORM_TITLE'])): ?>
                                <h3><?= current($custom['DONATE_FORM_TITLE']) ?></h3>
                            <?php else: ?>
                                <?php if ($post->post_parent): ?>
                                    <h3>Támogasd te is <?= $post->post_title ?> kampányát</h3>
                                <?php else: ?>
                                    <h3>Támogass!</h3>
                                <?php endif ?>
                            <?php endif ?>
                            <?= do_shortcode("[furik_donate_form enable_monthly=true enable_newsletter=true]"); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        <?php endif ?>
    </div>
</section>

<?php if ($volunteers = do_shortcode("[furik_campaigns layout='" . $campaigns_layout . "' default_image='https://indahousehungary.trau.hu/wp-content/themes/indahouse/assets/img/default-avatar.png']")): ?>
    <section class="bg-gradient campaign-volunteers-section text-center pt-5">
        <div class="center-section mx-auto">
            <h2 class="text-uppercase m-0 p-1">Követeink kampányai</h2>
            <div class="row p-0 m-0 mt-8">
                <?= $volunteers ?>
            </div>
        </div>
    </section>
<?php endif ?>

<?php if (!$post->post_parent && !isset($custom['DO_NOT_LIST_DONORS'])): ?>
    <section class="campaign-donations-section container">
        <div class="center-section mx-auto pb-5">
            <h2 class="text-uppercase text-center m-0 py-5">Adományozók</h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="campaign-donations">
                        <?= do_shortcode("[furik_donations layout='" . $donation_layout . "']") ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="donation-sum text-center sticky-top">
                        <div class="px-4 py-5">
                            <h3 class="text-secondary"><?= do_shortcode("[furik_donation_sum]") ?> FT</h3>
                            <p class="text-muted">összegyűjtőtt adomány</p>

                            <div class="mt-4">
                                <div class="text-primary"><strong>Köszönjük a segítséget!</strong></div>
                                <div>
                                    A InDaHouse havi működési költsége másfél millió forint. Ebből 110 Borsodban élő gyereknek tartunk személyre szabott fejlesztést hétről hétre.
                                </div>
                            </div>
                        </div>

                        <div class="footer p-4">
                            <a href="#campaign_form_widget" class="btn btn-primary text-uppercase rounded-xl btn-sm">
                                Én is szeretnék adni
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?php get_footer() ?>