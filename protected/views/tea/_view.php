<?php
/* @var $this TeaController */
/* @var $data Tea */
?>

<script type="text/javascript">
        $(document).ready(function(){
        $(window).resize(function(){
        $('.white').css({
        position:'absolute',
        left: ($(window).width() - $('.white').outerWidth())/2,
        top: ($(window).height() - $('.white').outerHeight())/2
        });
        });
        $(window).resize();
        });
    </script>

<tr><td>
                  <div class="gallery">   <?php    //вырезает путь к файлу картинки 
                        	$st1=strrpos($data->foto_link, "src=");
                            $st2=strrpos($data->foto_link, "jpg");                            
                            $st=substr($data->foto_link, $st1+5, $st2-$st1-2);                                                       
                       ?>  <?php
                    	 echo CHtml::link(CHtml::image($st,$data->nazvanie,array('width'=>"90")),$st, array('rel'=>'lightgallery[page]'));   
                        ?>
                    </div>   
                       
                   <!--   <?php //echo "<a href='#img".$data->id_tea."'>".$data->foto_link."</a>"; ?>
                     
                       
        <div>
        <div class="lightbox" <?php //echo "id='img".$data->id_tea."'>";?>
			<div class="white">
			 	        <?php//	echo "<img alt='' src='".$st."' align='middle'/>"; ?>
                    </div>			
                    <a href="#close" class="close" title="Щелкните, чтобы закрыть"></a>     
		</div>-->
        <div>

</td><td>
<div class="view_v">
     
     <b><?php echo CHtml::encode($data->getAttributeLabel('id_marka')); ?>:</b>
	<?php echo CHtml::encode($data->Marka->marka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazvanie')); ?>:</b>
	<?php echo CHtml::encode($data->nazvanie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bag')); ?>:</b>
	<?php echo CHtml::encode($data->Bag->bag); ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_big')); ?>:</b>
	<?php echo CHtml::encode($data->Big->big); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

</div>
</td></tr>
