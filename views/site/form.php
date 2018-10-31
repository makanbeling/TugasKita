<div class="form">

    <?php use kartik\widgets\ActiveForm;
    use yii\bootstrap\Html;

    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'address') ?>
    <?= $form->field($model, 'fileImport')->fileInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- form -->
