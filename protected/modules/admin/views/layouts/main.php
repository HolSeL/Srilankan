<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    
    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Чай', 'url'=>array('/admin/tea')),
                array('label'=>'Кофе', 'url'=>array('/admin/coffee')),
                array('label'=>'Подушки', 'url'=>array('/admin/pillows')),
                array('label'=>'Обувь', 'url'=>array('/admin/tapki')),
                array('label'=>'Статьи', 'url'=>array('/admin/page')),
                array('label'=>'Производитель', 'url'=>array('/admin/marka')),
                array('label'=>'Упаковка', 'url'=>array('/admin/bag')),
                array('label'=>'Фасовка', 'url'=>array('/admin/big')),
                array('label'=>'Кол-во', 'url'=>array('/admin/gramm')),
                array('label'=>'Пользователи', 'url'=>array('/admin/user')),
				array('label'=>'Войти', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    <img scr="/images/logo2.jpg"/>
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		HolSeL &copy; <?php echo date('Y'); ?> ЧТУП "Ланка Трейд".<br/>
		Отдел продаж: +375-17-544-62-20 <!--<a><?php echo Yii::app()->params->adminEmail;?></a>--><br/>
		  
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
