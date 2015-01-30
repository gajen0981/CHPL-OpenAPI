<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chpl */

$this->title = 'Create Chpl';
$this->params['breadcrumbs'][] = ['label' => 'Chpls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chpl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
