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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link href='http://fonts.googleapis.com/css?family=Marck+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/gallery.css" rel="stylesheet" type="text/css" />    
   
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="keywords" content="ланка трэйд, подушки, чай, кофе, латекс, шри ланка, заславль, оптовые продажи, rivon, royal, st.clair's, Richard Pieris Natural Foams Ltd., 100% натуральный латекс, Частное предприятие «Ланка Трэйд»">
    <meta name="Author" content="Частное предприятие «Ланка Трэйд»">
    <meta name="Address" content="Заславль">   
</head>

<body>

<div class="container">


<!--	<div id="header_p">
            <style>
                #pop-up {
                  position: fixed; top: 0%; bottom: 0%; left: 0%; right: 0%;
                  z-index: 100;  
                  margin:1px auto;
                    width:1380px;
                    height:650px;
                    
                  background:  rgba(0,0,0,.5) url(http://srilankan.by/images/vistavka/vis.jpg) no-repeat center center;       
                        -webkit-background-size: cover ;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        -khtml-background-size:cover;
                        background-size: cover;
                	background-repeat: no-repeat;
                
                  
            	 border:  13px solid #dedede;
                 opacity: .9;
                }
                
                #pop-up div {
                  position: absolute;
                  right: -3%;
                  top: 0%;
                  
                  
                  color: #fff;
                  background:url(http://srilankan.by/images/button/button_close.png);
                  cursor: pointer;
                }
                </style>
                
                <div id="pop-up">
                  <div onclick="popUp()"><img src="http://srilankan.by/images/button/button_close.png"/></div>
                </div>
                
                <script>
                var popup = document.getElementById('pop-up');
                
                function popUp() {
                  sessionStorage.setItem('popup', 'none');
                  location.reload();
                }
                
                if(sessionStorage.getItem('popup') || !window.sessionStorage) {
                  popup.parentNode.removeChild(popup);
                }else{
                  if(window.stop !== undefined) {
                    window.stop();
                  } else if (document.execCommand !== undefined) {
                    document.execCommand("Stop", false);
                  }
                }
                </script>
    </div>-->
    <div id="header">
		 
            <?php 
                Yii::import('application.extensions.jqLiteGallery');
                    jqLiteGallery::addGallery(
                                    '#gallery a',
                                    array('default_height'=>240,'opacity'=>'0.1'));
            /*
                //указываем папки с изображениями
                $folder_mas = array('images/vistavka','images');
                $images = array();
                //выбираем случайную папку
                $folder = $folder_mas[rand(0,1)];
                $all_files = scandir($folder);
                while ($i++ < sizeof($all_files)){
                    //выбираем только изображения с расширением .png, .jpg и .gif
                    if (!strstr($all_files[$i],".png") and !strstr($all_files[$i],".jpg") and
                    !strstr($all_files[$i],".gif")) continue;
                    array_push($images, $all_files[$i]);
                }
                //выбираем случайное изображение из папки
                $img_random = $images[rand(0,sizeof($images)-1)];
                $img_src = $folder."/".$img_random;
                echo $img_src;
                echo '<img src="'.Yii::app()->request->baseUrl.'/'.$img_src.'" alt="" width="150" auto>';
                */ ?>
        
        <div></div>
        <!----><div id="logo">
        <?php
        
        ?>
        <center><b><?php echo CHtml::image(Yii::app()->request->baseUrl."/css/logo_white.png", "www.srilankan.by" ,array('height'=>'101px', 'alt'=>'www.srilankan.by'));
        
        echo "                ".CHtml::encode(Yii::app()->name); 
        //echo CHtml::image(Yii::app()->request->baseUrl."/images/lanka.jpg", "Ланка Трэйд" ,array('width'=>'1312px','height'=>'151px'));
        //echo CHtml::image(Yii::app()->request->baseUrl."/images/lanka1.jpg");
        ?></b></center></div>
        
	</div><!-- header -->
    </div>
    <div class="container" id="page">

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
                array('label'=>'Продукция', 'url'=>array('//production/index', 'view'=>'about')),
                array('label'=>'Статьи', 'url'=>array('//page/index', 'view'=>'about')),
				//array('label'=>'Чай', 'url'=>array('//tea/index', 'view'=>'about')),
                //array('label'=>'Кофе', 'url'=>array('/site/cofe', 'view'=>'about')),
                //array('label'=>'Подушки', 'url'=>array('/site/pillows', 'view'=>'about')),
                //array('label'=>'Обувь', 'url'=>array('/site/slippers', 'view'=>'about')),
               // array('label'=>'О нас', 'url'=>array('/site/info', 'view'=>'about')),
				//array('label'=>'Обратная связь', 'url'=>array('/site/contact')),
                array('label'=>'Админка', 'url'=>array('/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Войти', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                //array('label'=>'Регистрация', 'url'=>array('/site/registration'), 'visible'=>Yii::app()->user->isGuest),
			),
		)); ?>
	</div><!-- mainmenu -->
</div>
<div class="container_v">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    <img scr="/images/logo2.jpg"/>
    <div class="content">
	<?php echo $content; ?>
    </div>
	<div class="clear"></div>
</div>    
<div class="container" id="page">
	<div id="footer">
		<a href="mailto:holochev@yandex.ru"><b>HolSeL</b></a> &copy; 2014 - <?php echo date('Y'); ?> <br/>ЧТУП "Ланка Трэйд". УНП 691765656.
		Государственная регистрация от 30.05.2014 Минский горисполком.</br> Юридический адрес: Республика Беларусь  г.Заславль, ул. Дзержинская 26, пом. 24.
		<!--<a><?php echo Yii::app()->params->adminEmail;?></a>--><br/>
		  
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>