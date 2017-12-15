<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form ActiveForm */
?>
<div class="index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'categoryId') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'description') ?>
        <?= $form->field($model, 'fulltext') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- index -->