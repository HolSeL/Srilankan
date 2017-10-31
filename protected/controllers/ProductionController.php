<?php

class ProductionController extends Controller
{
    public $layout='//layouts/column3';
    
    public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
 }