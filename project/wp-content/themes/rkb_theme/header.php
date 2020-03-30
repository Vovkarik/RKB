<?php
the_post();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Республиканская клиническая больница</title>
    <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing|Open+Sans|Roboto+Condensed&display=swap"
          rel="stylesheet">
      <?php wp_head(); ?>
  </head>
  <body>
    <div class="b-header">
      <div class="container">
        <div class="row">
          <div class="col-9 col-sm-9 col-md-5 col-lg-5 col-xl-5 d-none d-md-block">
            <div class="b-header__logo">
              <a href="/">
                <img class="img-fluid" src="/wp-content/themes/rkb_theme/images/rkb_logo.JPG">
              </a>
            </div>
            <div class="b-header__name">
              Республиканская клиническая
              больница республики Марий Эл
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-12 col-md-7 col-lg-7 col-xl-7">
            <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand b-header__logo-xs d-md-none d-lg-none" href="/">
                <img class="img-fluid" src="/wp-content/themes/rkb_theme/images/rkb_logo.JPG">
              </a>
              <div class="b-header__name d-md-none d-lg-none">
                Республиканская клиническая
                больница республики Марий Эл
              </div>
              <button class="b-header__burger navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                      aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav b-header__menu">
                  <li class="nav-item dropdown b-header__item">
                    <a class="dropdown-toggle" href="/about-rkb" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                      О РКБ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/executives">Руководители</a>
                      <a class="dropdown-item" href="http://mari-el.gov.ru/minzdrav/rkb/Pages/license.aspx" target="_blank">Лицензии</a>
                      <a class="dropdown-item" href="http://mari-el.gov.ru/minzdrav/rkb/Pages/rcb-docs.aspx">Документы</a>
                      <a class="dropdown-item" href="#">Научная деятельность</a>
                      <a class="dropdown-item" href="/history">История</a>
                    </div>
                  </li>
                  <li class="nav-item b-header__item">
                    <a href="/departments">Отделения</a>
                  </li>
                  <li class="nav-item b-header__item">
                    <a href="http://localhost/wp-content/uploads/2020/03/Прейскуран.xls">Платные услуги</a>
                  </li>
                  <li class="nav-item b-header__item">
                    <a href="/news">Новости</a>
                  </li>
                  <li class="nav-item dropdown b-header__item">
                    <a class="dropdown-toggle" href="/contacts" id="navbarDropdownContactMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                      Контакты
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownContactMenuLink">
                      <a class="dropdown-item" href="http://anketa.rosminzdrav.ru/staticogvjustank/54/1" target="_blank">Оценить качество услуг</a>
                      <a class="dropdown-item" href="http://mari-el.gov.ru/minzdrav/rkb/Pages/feedback.aspx" target="_blank">Оставить отзыв</a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

