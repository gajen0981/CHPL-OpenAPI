<?php
	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\widgets\Breadcrumbs;
	use app\assets\AppAsset;
	
	/* @var $this \yii\web\View */
	/* @var $content string */
	
	AppAsset::register($this);
	$this->beginPage() 
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>CHPL - OpenAPI</title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
/*
            NavBar::begin([
                'brandLabel' => 'CHPL OpenAPI',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
*/
            
            NavBar::begin([
                'brandLabel' => Html::decode("<img height='40px' width='85px' style='max-width:100px; margin-top: -7px;' src='" . Url::toRoute('/images/healthitgov-logo.png') . "'/> <a href='" .  Yii::$app->homeUrl . "' class='navbar-brand'>". Yii::$app->params['appName'] ."</a>"),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
						['label' => 'CHPL', 'url' => ['/chpl/']],
					/*	['label' => 'Contact', 'url' => ['/site/contact']], */
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

     <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->params['appName'] . " " . date('Y') ?></p>
        <p class="pull-right"><?= Yii::$app->params['footerRight'] ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
