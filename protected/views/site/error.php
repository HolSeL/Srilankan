<?php
/* @var $this SiteController */
/* @var $error array 

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);*/
?>

<h2>Ошибка: <b><?php echo $code; ?></b></h2>
<center><h1><b>Приносим свои извинения, сайт находиться в стадии разработки</b></h1></center>
<div class="error">
<?php echo CHtml::encode($message); ?>
</div>