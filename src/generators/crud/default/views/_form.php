<?php

/* @var $this yii\web\View */
/* @var $generator gofuroov\generator\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-body">

        <?= "<?php " ?>$form = ActiveForm::begin(); ?>

        <?php foreach ($generator->getColumnNames() as $attribute) {
            if (in_array($attribute, $safeAttributes)) {
                echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
            }
        } ?>

        <div class="row">
            <div class="col d-flex justify-content-end">
                <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Saqlash') ?>, ['class' => 'btn
                btn-success']) ?>
            </div>
        </div>


        <?= "<?php " ?>ActiveForm::end(); ?>

    </div>
</div>