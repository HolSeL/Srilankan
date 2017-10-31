<?php
class jqLiteGallery extends CComponent {
	
	  
	/**
	 * @brief retrieve the script file name
	 */
	protected static function scriptName($css=false) {
		return $css ? '/skins/default/stylelite.css' : 'lightgallery.js';
	}
	
	protected static function registerScript(){
		$cs = Yii::app()->clientScript;
		$cs->registerCoreScript('jquery');
		$assets = Yii::app()->extensionPath. DIRECTORY_SEPARATOR.'ligthgallery'.DIRECTORY_SEPARATOR;
		$aUrl = Yii::app()->getAssetManager()->publish($assets);
		$cs->registerScriptFile($aUrl.'/'.self::scriptName());
        $cs->registerScriptFile($aUrl.'/lang/ru_utf8.js');
		$cs->registerCssFile($aUrl .self::scriptName(true));
	}
	
	public static function addGallery($opts=array()){
		
		self::registerScript();
		
		//$opts['theme']=$theme;
		$js = ""; //Heard from community ad-image-wrapper should be larger as well
		/*
            animate (по умолчанию Ц true) Ц включение/выключение анимации
            framesNumber (по умолчанию Ц 20) Ц количество кадров в анимации
            speed (по умолчанию Ц 30) Ц отрезок времени между воспроизведением кадров, мсек
            resizeSync (по умолчанию Ц false) Ц если установить в true, то размеры контейнера измен€ютс€ одновременно и по-горизонтали и по-вертикали
            enableZoom (по умолчанию Ц true) Ц включение/выключение масштабировани€
            fadeImage (по умолчанию Ц true) Ц использовать плавное по€вление дл€ изображений (лучше выключать дл€ изображений большого размера)
            alias (по умолчанию Ц СlightgalleryТ) Ц псевдоним, используемый в атрибуте УrelФ (rel = СlightgalleryТ).
            showOverlay (по умолчанию Ц true) Ц показывать ли оверлей
            overlayColor (по умолчанию Ц #000) Ц цвет оверле€
            overlayOpacity (по умолчанию Ц .85) Ц прозрачность оверле€
            zoomStep (по умолчанию Ц 0.2) Ц коэффициент увеличени€/уменьшени€ размера при масштабировании
            fullSize (по умолчанию Ц false) Ц показывать ли изображени€ в реальном размере по умолчанию (не подгон€ть размер изображений под размер экрана)
            minPadding (по умолчанию Ц 15) Ц минимальное рассто€ние между контейнером и окном (пиксель)

        */		
		
		Yii::app()->clientScript->registerScript(__CLASS__,'lightgallery.init('.CJavaScript::encode($opts).');',CClientScript::POS_BEGIN );
	}
    
    protected function opt()
    {
        
    }
	
	
}
