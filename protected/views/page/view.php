
	<div class="view_v">

	
	<center><h1><b><?php echo $dataProvider->title; ?></b></h1></center>
	<br />

	<?php //echo CHtml::encode($data->getAttributeLabel('content')); ?>
	<?php echo $dataProvider->content; ?>
	<br />

	<?php //echo CHtml::encode($data->getAttributeLabel('created')); ?>
	<?php echo CHtml::encode(date("j.m.Y H:i", $dataProvider->created)); ?>
	<br />
</div>
