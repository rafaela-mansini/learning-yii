<?php 
use \yii\bootstrap\ActiveForm;
use \yii\helpers\Html;
?>
<h2>Matricule-se com facilidade</h2>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'nome') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'idade') ?>

    <div class="form-group">
        <?= Html::submitButton('Matricular', ['class' => 'btn btn-warning']) ?>
    </div>

<?php $form = ActiveForm::end() ?>
