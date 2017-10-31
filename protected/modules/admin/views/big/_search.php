<?php
/* @var $this BigController */
/* @var $model Big */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_big'); ?>
		<?php echo $form->textField($model,'id_big'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'big'); ?>
		<?php echo $form->textField($model,'big'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->