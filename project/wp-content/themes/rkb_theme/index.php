<?php
    get_header();

    require_once __DIR__ . '/classes/Utils.php';

    $result = Utils::getLastPosts();
    $postsCounter = 1;
?>
<main>
  <div class="b-slider">
    <div class="container">
      <div class="slider single-item">
        <div class="b-slider__img-wrap">
          <img src="/wp-content/themes/rkb_theme/images/slider4.png">
        </div>
        <div class="b-slider__img-wrap">
          <img src="/wp-content/themes/rkb_theme/images/slider5.png">
        </div>
        <div class="b-slider__img-wrap">
          <img src="/wp-content/themes/rkb_theme/images/slider6.png">
        </div>
      </div>
    </div>
  </div>
  <div class="b-departments">
    <div class="container">
      <h2 class="b-title__h2">Наши отделения</h2>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 b-departments__wrapper">
          <div class="b-departments-content">
            <a class="b-departments__link" href="/cardiology"></a>
            <img class="img-fluid" src="/wp-content/themes/rkb_theme/images/department-1.png">
            <p class="b-departments__title">Кардиология</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 b-departments__wrapper">
          <div class="b-departments-content">
            <a class="b-departments__link" href="/pulmonology"></a>
            <img class="img-fluid" src="/wp-content/themes/rkb_theme/images/department-2.png">
            <p class="b-departments__title">Пульмонология</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 b-departments__wrapper">
          <div class="b-departments-content">
            <a class="b-departments__link" href="/neurology"></a>
            <img class="img-fluid" src="/wp-content/themes/rkb_theme/images/department-3.png">
            <p class="b-departments__title">Неврология</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 b-departments__wrapper">
          <div class="b-departments-content">
            <a class="b-departments__link" href="/traumatology"></a>
            <img class="img-fluid" src="/wp-content/themes/rkb_theme/images/department-4.png">
            <p class="b-departments__title">Травматология</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 b-departments__wrapper">
          <div class="b-departments-content">
            <a class="b-departments__link" href="/surgery"></a>
            <img class="img-fluid" src="/wp-content/themes/rkb_theme/images/department-5.png">
            <p class="b-departments__title">Хирургия</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 b-departments__wrapper">
          <div class="b-departments-content">
            <a class="b-departments__link" href="/endocrinology"></a>
            <img class="img-fluid" src="/wp-content/themes/rkb_theme/images/department-6.png">
            <p class="b-departments__title">Эндокринология</p>
          </div>
        </div>
      </div>
      <div class="b-button__wrapper">
        <a class="b-button b-button-yellow" href="/departments">Еще отделения</a>
      </div>
    </div>
  </div>
  <div class="b-news">
    <div class="container">
      <h2 class="b-title__h2 b-news-title-margin">Новости</h2>
      <? foreach ($result as $post): ?>
      <div class="b-news__item<? if ($postsCounter % 2 !== 0): ?> b-news__item-blue<? endif;?>">
        <p class="b-news__date"><?= date("d.m.Y", strtotime($post["post_date"])) ?></p>
        <p class="b-news__title"><?= $post["post_title"] ?></p>
        <p class="b-news__text"><?= $post["post_content"] ?></p>
        <div class="b-news__clear"></div>
      </div>
          <?php $postsCounter++ ?>
      <? endforeach; ?>
      <div class="b-button__wrapper">
        <a class="b-button b-button-yellow" href="/news">Все новости</a>
      </div>
    </div>
  </div>
  <div class="container b-about-margin">
    <div class="b-about">
      <div class="row">
        <div class="col-12 col-md-6">
          <p class="b-about__pretitle">О нас</p>
          <p class="b-about__title">Lorem Ipsum</p>
          <p class="b-about__text">
            Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например,
            юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum
            для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца
          </p>
        </div>
        <div class="col-12 col-md-5">
          <div class="b-about__img-wrapper">
            <img class="img-fluid b-about__img" src="/wp-content/themes/rkb_theme/images/about-us.jpeg">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="b-contacts">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5 col-lg-4 offset-lg-1">
          <div class="b-contacts__info">
            <h3 class="b-title__h3">Свяжитесь с нами</h3>
            <div class="b-contacts__text">
              <p><span>Телефон: </span>+7 (8362) 68-94-08</p>
              <p><span>E-mail: </span>medcenter_rkb@mail.ru</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-7 col-lg-5">
          <div class="b-contacts__img">
            <img class="img-fluid" src="/wp-content/themes/rkb_theme/images/contacts.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer();