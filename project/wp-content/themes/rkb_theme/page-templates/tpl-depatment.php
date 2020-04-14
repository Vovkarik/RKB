<?php
    /**
     * Template Name: Department
     */

    the_post();
    get_header();

    require_once __DIR__ . '/../classes/DepartmentInfo.php';

    $departmentsInfo = DepartmentInfo::getDepartmentsInfo();
    $departmentInfo = $departmentsInfo[substr($_SERVER['REQUEST_URI'], 1, -1)];
?>
  <main class="container">
    <div class="b-main__container">
      <h1 class="b-main__h1"><?= $departmentInfo['departmentName'] ?></h1>
      <div class="b-department row">
        <div class="col-12 col-md-6">
          <img src="/wp-content/themes/rkb_theme/images/departments/<?= $departmentInfo['departmentImage'] ?>/<?= $departmentInfo['departmentImage'] ?>.png"
               class="img-fluid" title=""
               alt="">
        </div>
        <div class="b-department__text col-12 col-md-6">
          <div class=""><?= $departmentInfo['departmentDescription'] ?></div>
        </div>
      </div>
      <div class="">
        <h2 class="b-title__h2 text-center">Специалисты</h2>
        <div class="b-specialists row">
            <? foreach ($departmentInfo['specialists'] as $key => $specialist): ?>
              <div class="b-specialist col-12 col-sm-6 col-md-3">
                <img src="/wp-content/themes/rkb_theme/images/departments/<?= $departmentInfo['departmentImage'] ?>/<?= $specialist['image'] ?>.png"
                     class="img-fluid <? if ($key != 0): ?>b-specialist__image<? endif; ?>"
                     title=""
                     alt="">
                  <? if ($key == 0): ?>
                    <div class="b-specialist__position">Заведующий отделением</div>
                  <? endif; ?>
                <div class="b-specialist__name"><?= $specialist['name'] ?></div>
                <div class="b-specialist__description"><?= $specialist['qualification'] ?>​</div>
              </div>
            <? endforeach; ?>
        </div>
      </div>
    </div>
  </main>
<?php
    get_footer();