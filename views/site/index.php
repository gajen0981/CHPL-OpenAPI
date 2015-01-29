<?php
	use yii\helpers\Url;
	/* @var $this yii\web\View */
	$this->title = 'CHPL OpenAPI';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>CHPL OpenAPI</h1>
        <p class="lead">Certified Health Product List (CHPL)</p>
        <p><a class="btn btn-lg btn-info" href="<? echo Url::to(['chpl/']); ?>">Search / Filter</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">OpenAPI - JSON</h3>
					</div>
					<div class="panel-body">
						<a class="btn btn-lg btn-info" target="_blank" href="http://localhost:8888/chpl/web/api?_format=json">JSON</a>
						<p><pre>http://localhost:8888/chpl/web/api?_format=json</pre></p>
					</div>
				</div>
            </div>
			
			<div class="col-lg-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">OpenAPI - XML</h3>
					</div>
					<div class="panel-body">
						<a class="btn btn-lg btn-success" target="_blank" href="http://localhost:8888/chpl/web/api?_format=xml">XML</a>
						<p><pre>http://localhost:8888/chpl/web/api?_format=json</pre></p>
					</div>
				</div>
            </div>
            
        </div> <!-- .row -->

    </div>
</div>
