<?php $this->beginContent('//layouts/main'); ?>

  <div class="row-fluid">
    <div class="span2">
      <!--Sidebar content-->
		<div class="thumbnail">
		  <img src="http://placehold.it/260x180" alt="">
		  <h5>Admin</h5>
		  <h6>Indonesia</h6>
		  <h6>Trouble Maker</h6>
		</div>
		<?php $this->menu=array_merge($this->globalMenu, $this->menu);
			$this->widget('bootstrap.widgets.BootMenu', array(
			'type'=>'list',
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),			
		)); ?>
    </div>
    <div class="span10">
      <!--Body content-->
	  <?php echo $content; ?>
    </div>
  </div>


<?php $this->endContent(); ?>