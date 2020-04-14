<?php
/**
 * Template Name: News
 */

    get_header();

    $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
    $args = array(
        'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
        'paged'          => $current_page // текущая страница
    );
    query_posts( $args );

    $wp_query->is_archive = true;
    $wp_query->is_home = false;

    $counter = 1;
?>

<div class="b-news-container">
    <div class="container">
        <h1 class="b-title__h2 b-news__title-margin">Новости</h1>
        <?php while(have_posts()): the_post(); ?>
            <div class="b-news__item<? if ($counter % 2 !== 0): ?> b-news__item-blue<? endif;?>">
                <p class="b-news__date"><?= get_the_date() ?></p>
                <h3 class="b-news__title"><?= the_title() ?></h3>
                <p class="b-news__text"><?= the_content() ?></p>
                <div class="b-news__clear"></div>
            </div>
            <?php $counter++ ?>
        <?php endwhile; ?>
    </div>
</div>

<?php
get_footer();
