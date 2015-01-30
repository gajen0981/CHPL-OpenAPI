<?php
	use yii\helpers\Url;
	use yii\helpers\Html;
?>
<div class="site-index">

    <div class="jumbotron">
		<? 
			echo Html::decode("<img height='50%' width='50%' style='max-width:100px; margin-top: -7px;' src='" . Url::toRoute('/images/healthitgov-logo.png') . "'/>"); 
		?>
        <h1><? echo Yii::$app->params['appName']; ?></h1>
        <p class="lead">Certified Health Product List (CHPL)</p>
        <p><a class="btn btn-lg btn-info" href="<? echo Url::to(['chpl/']); ?>">Search & Filter</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">OpenAPI - JSON</h3>
					</div>
					<div class="panel-body">
						<p>List all records</p>
						<p><pre><a target="_blank" href="http://localhost:8888/chpl/web/api?_format=json">http://localhost:8888/chpl/web/api?_format=json</a></pre></p>
						<br><br>
						<p>List all records but specific attributes</p>
						<p><pre><a target="_blank" href="http://localhost:8888/chpl/web/api?_format=json&fields=STG_Certification_Certification_ID, Certification_Edition_Year">http://localhost:8888/chpl/web/api?_format=json&fields=STG_Certification_Certification_ID, Certification_Edition_Year</a></pre></p>						
					</div>
				</div>
            </div>
			
			<div class="col-lg-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">OpenAPI - XML</h3>
					</div>
					<div class="panel-body">
						<p>List all records</p>
						<p><pre><a target="_blank" href="http://localhost:8888/chpl/web/api?_format=xml">http://localhost:8888/chpl/web/api?_format=xml</a></pre></p>						
					</div>
				</div>
            </div>
            
        </div> <!-- .row -->

    </div>
</div>
