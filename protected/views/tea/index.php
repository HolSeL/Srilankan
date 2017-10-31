<?php
/* @var $this TeaController */
/* @var $dataProvider CActiveDataProvider 

$this->breadcrumbs=array(
	'Teas',
);
*/

$this->menu=array(
	//array('label'=>'Create Tea', 'url'=>array('create')),
	//array('label'=>'Manage Tea', 'url'=>array('admin')),
    array('label'=>'Чай', 'url'=>array('//tea/index', 'view'=>'about')),
    //array('label'=>'Кофе', 'url'=>array('//cofe/index', 'view'=>'about')),
    array('label'=>'Подушки', 'url'=>array('//pillows/index', 'view'=>'about')),
    array('label'=>'Обувь', 'url'=>array('//tapki/index', 'view'=>'about')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tea-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Чай</h1>
<?php
	echo "Сортировать по марке: ".CHtml::beginForm(CHtml::normalizeUrl(array('/tea/index')),
        'get', array('id'=>'filter-form'))
        //. CHtml::dropDownList($model,'id_marka', Marka::all())) ?
        . CHtml::dropDownList('string', (isset($_GET['string'])) ?
         $_GET['string'] : '', array(''=>' ','1'=>"St.Clair's", '2'=>"Rivon", '3'=>"Royal"))
       // .CHtml::dropDownList('tea', (isset($_GET['tea'])) ?
       //  $_GET['tea'] : '', array(''=>' ','1'=>"Зеленый", '2'=>"Черный", '3'=>"Купаж"))
        . CHtml::submitButton('Фильтр', array('name'=>''))
        . CHtml::endForm();
Yii::app()->clientScript->registerScript('search',
"var ajaxUpdateTimeout;
var ajaxRequest;
$('input#string').keyup(function(){
ajaxRequest = $(this).serialize();
clearTimeout(ajaxUpdateTimeout);
ajaxUpdateTimeout = setTimeout(function () {
$.fn.yiiListView.update(
// this is the id of the CListView
'ajaxListView',
{
url: '" . CController::createUrl('/tea/index') . "',
data: ajaxRequest
}
)
},
// this is the delay
300);
});"
);
?><!-- search-form -->
<table>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    //'filter'=>$model,
    'sorterHeader'=>'Сортировать по:',
    //'sortableAttributes'=>array('id_bag'),
    //'sortableAttributes'=>array('marka', 'price'),
      //  'create_time',
      //  'price'=>'Цена',
   //),
)); ?>
</table>