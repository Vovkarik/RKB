<?php
    /**
     * Template Name: Department
     */

    the_post();
    get_header();

    $departmentsInfo = DepartmentInfo::getTraumatologyInfo();
?>
<? foreach ($departmentsInfo as $departmentName => $departmentInfo): ?>
  <main class="container">
    <div class="b-main__container">
      <h1 class="b-main__h1 text-center"><?= $departmentInfo['$departmentName'] ?></h1>
      <div class="row">
        <div class="col-12 col-md-6">
          <img src="/wp-content/themes/rkb_theme/images/<?= $departmentInfo['$departmentImage'] ?>.png"
               class="img-fluid" title=""
               alt="">
        </div>
        <div class="col-12 col-md-6">
          <div class=""><?= $departmentInfo['$departmentDescription'] ?></div>
        </div>
      </div>
      <div class="">
        <h2>Специалисты</h2>
        <div class="row">
            <? foreach ($departmentInfo['specialists'] as $key => $specialist): ?>
              <div class="col-12 col-sm-6 col-md-3">
                <img src="/wp-content/themes/rkb_theme/images/<?= $specialist['image'] ?>.png" class="img-fluid"
                     title=""
                     alt="">
                  <? if ($key == 0): ?>
                    <div class="b-executives__position">Заведующий отделением</div>
                  <? endif; ?>
                <div class="b-executives__name"><?= $specialist['name'] ?></div>
                <div class="b-executives__description"><?= $specialist['qualification'] ?>​</div>
              </div>
            <? endforeach; ?>
        </div>
      </div>
    </div>
  </main>
<? endforeach; ?>
<?php
    get_footer();