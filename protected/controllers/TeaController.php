<?php

class TeaController extends Controller
{
	public $layout='//layouts/column3';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update'),
				'users'=>array('*'),
			),
			//array('allow', // allow authenticated user to perform 'create' and 'update' actions
			//	'actions'=>array('create','update'),
			//	'users'=>array('@'),
			//),
		//	array('allow', // allow admin user to perform 'admin' and 'delete' actions
		//		'actions'=>array('admin','delete'),
		//		'users'=>array('admin'),
		//	),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Tea;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tea']))
		{
			$model->attributes=$_POST['Tea'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tea));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tea']))
		{
			$model->attributes=$_POST['Tea'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tea));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models. */
	
	public function actionIndex($string = '', $tea='')
	{
        //echo $string;
        $criteria=new CDbCriteria;
       /* if(!empty($_GET['marka']))
        {
        $criteria=new CDbCriteria(array(
        'condition'=>
        '(category_id=:id or cat_parent=:id) and
        t.shown_'.Yii::app()->params['region'].'=1 and
        category.shown_'.Yii::app()->params['region'].'=1',
        'params' => array(':id'=>(int)$_GET['marka']),
        'with' => array('category'),
        ));
        }         
        else
        {
        $criteria=new CDbCriteria(array(
        'condition'=>'t.shown_'.Yii::app()->params['region'].'=1
         and category.shown_'.Yii::app()->params['region'].'=1',
        'with' => array('marka'),                              
        ));   
        }
*/
		//$criteria->compare('id_tea',$this->id_tea);
		//$criteria->compare('id_marka',$this->id_marka);
	//	$criteria->compare('nazvanie', 'ACS');
	//	$criteria->compare('id_bag',$this->id_bag);
        //$criteria->compare('id_big',$this->id_big);
      //  $criteria->compare('id_gramm',$this->id_gramm);
	//	$criteria->compare('text',$this->text,true);
	//	$criteria->compare('foto_link',$this->foto_link,true);
      /*  $sort = new CSort();
        // имя $_GET параметра для сортировки,
        // по умолчанию ModelName_sort
        $sort->sortVar = 'sort';
        // сортировка по умолчанию 
        //$sort->defaultOrder = 'id ASC';
        // включает поддержку мультисортировки, 
        // т.е. можно отсортировать сразу и по названию и по цене
        $sort->multiSort = true;
        // здесь описываем аттрибуты, по которым будет сортировка
        // ключ может быть произвольный, это будет $_GET параметр
        $sort->attributes = array(
                    'id_bag'=>array(
                        'label'=>'Марке',
                        'asc'=>'id_bag ASC',
                        'desc'=>'id_bag DESC',
                        //'default'=>'desc',
                    ),
                    ///'price'=>array(
                   //     'asc'=>'marka ASC',
                   //     'desc'=>'marka DESC',
                   //     'default'=>'desc',
                   //     'label'=>'цене',
                   // ),
                );
       // if(isset($_GET['Tea']))
		//	$model->attributes=$_GET['Tea'];  */
        if( strlen( $string ) > 0 ) {
            $criteria->addSearchCondition( 't.id_marka',
            $string,true, 'AND' );
            $criteria->addSearchCondition( 't.id_big',
            $tea,true, 'AND' );
            }      
        $dataProvider=new CActiveDataProvider('Tea', array(
            //'pagination' => array(
            //    'params' => $params
            //),
            'criteria'=>$criteria,
          //  'sort'=>$sort,
        ));
        //if(isset($_GET['Tea']))
		//	$dataProvider->attributes=$_GET['Tea'];
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 
	public function actionIndex()
	{
		$model=new Tea('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tea']))
			$model->attributes=$_GET['Tea'];

		$this->render('index',array(
			'model'=>$model,
		));
	}*/

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tea the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tea::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tea $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tea-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
