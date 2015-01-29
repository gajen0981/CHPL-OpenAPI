<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chpl */

$this->title = 'Update Chpl: ' . ' ' . $model->STG_Certification_Certification_ID;
$this->params['breadcrumbs'][] = ['label' => 'Chpls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->STG_Certification_Certification_ID, 'url' => ['view', 'id' => $model->STG_Certification_Certification_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chpl-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
