<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item  <?=$this->context->route=='site/index' ? 'active' : '' ?>">
      <?php
     echo  Html::a('Home',['/site/index'], ['class' => 'nav-link'])
      ?>
      
      </li>
      <li class="nav-item <?=$this->context->route=='site/import' ? 'active' : '' ?>">
      <?php
     echo  Html::a('Import',['/site/import'], ['class' => 'nav-link'])
      ?>
      </li>
     
    </ul>
  
  </div>
</nav>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="page-footer font-small bg-secondary pt-4">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">
  <h5>© 2021 Copyright</h5>
</div>
<!-- Copyright -->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
