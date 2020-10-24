<?php
// ez adja hozza a fomenu helyet a menukhoz
function idh_register_mainmenu() {
    register_nav_menu('mainmenu', 'Főmenü');
}
add_action('init', 'idh_register_mainmenu');

// regisztralja a dropdownos menut
function register_navwalker() {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

function indahouse_widgets_init() {
    register_sidebar( array(
        'name'          => __('Adományozás sablon', 'indahouse'),
        'id'            => 'sidebar-donate',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action('widgets_init', 'indahouse_widgets_init');

// ez adja hozza a theme customizerhez a fieldeket
function idh_customizer_options($wp_customize) {
    $wp_customize->add_section('about_us_btns', ['title' => 'Felső doboz']);
    $wp_customize->add_setting('btn_about_us', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_about_us_control', ['label' => 'Rólunk gomb linkje', 'section' => 'about_us_btns', 'settings' => 'btn_about_us']);
    $wp_customize->add_setting('btn_join', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_join_control', ['label' => 'Csatlakozom gomb linkje', 'section' => 'about_us_btns', 'settings' => 'btn_join']);
    $wp_customize->add_setting('btn_support', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_support_control', ['label' => 'Támogatom gomb linkje', 'section' => 'about_us_btns', 'settings' => 'btn_support']);

    $wp_customize->add_section('join_us_btns', ['title' => 'Légy InDaHouse önkéntes']);
    $wp_customize->add_setting('btn_join_us_study_hall', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_join_us_study_hall_control', ['label' => 'Tanoda', 'section' => 'join_us_btns', 'settings' => 'btn_join_us_study_hall']);
    $wp_customize->add_setting('btn_join_us_early_childhood', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_join_us_early_childhood_control', ['label' => 'Koragyerekkor', 'section' => 'join_us_btns', 'settings' => 'btn_join_us_early_childhood']);
    $wp_customize->add_setting('btn_join_us_mentor', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_join_us_mentor_control', ['label' => 'Mentor', 'section' => 'join_us_btns', 'settings' => 'btn_join_us_mentor']);
    $wp_customize->add_setting('btn_join_us_worksheet', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_join_us_worksheet_control', ['label' => 'Feladatlap', 'section' => 'join_us_btns', 'settings' => 'btn_join_us_worksheet']);
    $wp_customize->add_setting('btn_join_us_online', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_join_us_online_control', ['label' => 'Online', 'section' => 'join_us_btns', 'settings' => 'btn_join_us_online']);

    $wp_customize->add_section('support_us_btns', ['title' => 'Támogass minket']);
    $wp_customize->add_setting('btn_support_us_partner', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_support_us_partner_control', ['label' => 'Legyél a partnerünk gomb linkje', 'section' => 'support_us_btns', 'settings' => 'btn_support_us_partner']);
    $wp_customize->add_setting('btn_support_us_money', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_support_us_money_control', ['label' => 'Segíts minket pénzzel gomb linkje', 'section' => 'support_us_btns', 'settings' => 'btn_support_us_money']);
    $wp_customize->add_setting('btn_support_us_fund', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_support_us_fund_control', ['label' => 'Segíts adományokkal gomb linkje', 'section' => 'support_us_btns', 'settings' => 'btn_support_us_fund']);
    $wp_customize->add_setting('btn_support_us_hero', ['default' => '', 'type' => 'option']);
    $wp_customize->add_control('btn_support_us_hero_control', ['label' => 'Legyél a hősünk gomb linkje', 'section' => 'support_us_btns', 'settings' => 'btn_support_us_hero']);
}
add_action('customize_register','idh_customizer_options');

/**
 * Adjust contact form 7 radios and checkboxes to match bootstrap 4 custom radio structure.
 */
add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<label><input type="(checkbox|radio)" name="(.*?)" value="(.*?)" \/><span class="wpcf7-list-item-label">/i', '<label class="custom-control custom-\1"><input type="\1" name="\2" value="\3" class="custom-control-input"><span class="wpcf7-list-item-label custom-control-label">', $content);

    return $content;
});

/**
 * Remove old jQuery version from non-admin pages to
 */
if ( !is_admin() ) wp_deregister_script('jquery');
