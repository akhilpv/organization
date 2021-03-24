<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<style>
.help-block {
    color: red;
}
</style>
<div class="row mt-5">
    <div class="col-md-12">
        <div class="alert alert-warning" role="alert">
        Please remove the header from the csv file.The file contain maximum 20 rows and minimum 5 columns.
        </div>
        <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert card card-topline-green alert-success" role="alert">
            <div class="card-head" id="alert-box">
                <p><?= Yii::$app->session->getFlash('success') ?></p>
                <a style="padding-top: 9px;padding-right: 20px;" class="t-close btn-color fa fa-times alert-close-btn" data-dismiss="alert" aria-label="Close" href="javascript:;"></a>
            </div>
        </div>
        <?php endif; ?>
        <?php if (Yii::$app->session->hasFlash('error')): ?>

        <div class="alert card card-topline-red alert-danger" role="alert">
        <div class="card-head" id="alert-box">
            <p> <?= print_r(Yii::$app->session->getFlash('error')) ?></p>
            <a style="padding-top: 9px;padding-right: 20px;" class="t-close btn-color fa fa-times alert-close-btn" data-dismiss="alert" aria-label="Close" href="javascript:;"></a>
        </div>
        </div>

        <?php endif; ?>
    </div>
    <div class="col-md-6">
        <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

            <?= $form->field($model,'file')->fileInput() ?>
            <?=$form->field($model,'name')->textInput() ?>
            <?=$form->field($model,'department')->textInput() ?>
            <?=$form->field($model,'joiningdate')->textInput() ?>
            <?=$form->field($model,'dob')->textInput() ?>
            <?=$form->field($model,'empcode')->textInput() ?>
            <div class="form-group">
                <?= Html::submitButton('Save',['class'=>'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>  
</div>  