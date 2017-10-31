<?php
/* @var $this TapkiController */
/* @var $data Tapki */
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

<!-- .white это класс div -->

<tr><td>
                       <div class="gallery">   <?php    //вырезает путь к файлу картинки
                        	$st1=strrpos($data->foto_link, "src=");
                            $st2=strrpos($data->foto_link, "jpg");                            
                            $st=substr($data->foto_link, $st1+5, $st2-$st1-2);                                                       
                       ?>  <?php
                    	 echo CHtml::link(CHtml::image($st,$data->nazvinie,array('width'=>"90")),$st, array('rel'=>'lightgallery[page]'));   
                        ?>
                    </div> 
                       
               	<!--        <?php echo "<a href='#img".$data->id_tapki."'>".$data->foto_link."</a>"; ?>
                     
                       <?php    //вырезает путь к файлу картинки
                        	$st1=strrpos($data->foto_link, "src=");
                            $st2=strrpos($data->foto_link, "jpg");                            
                            $st=substr($data->foto_link, $st1+5, $st2-$st1-2);                                                       
                       ?>
        
        <div class="lightbox" <?php echo "id='img".$data->id_tapki."'>";?>
	 	<div class="white">
			 	        <?php	echo "<img alt='' src='".$st."' />"; ?>
                    </div>			
                    <a href="#close" class="close" title="Щелкните, чтобы закрыть"></a>     
		</div>-->
<div>
</td><td>



	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marka')); ?>:</b>
	<?php echo CHtml::encode($data->Marka->marka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazvinie')); ?>:</b>
	<?php echo CHtml::encode($data->nazvinie); ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />
		<b><?php echo CHtml::encode($data->getAttributeLabel('colour')); ?>:</b>
	<?php echo CHtml::encode($data->colour); ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />


</td>
</tr>