<?php $this->beginContent('//layouts/main'); ?>

  <div class="row-fluid">
    <div class="span2">
      <!--Sidebar content-->
	  <?php $this->widget('bootstrap.widgets.BootMenu', array(
			'type'=>'list',
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
			// 'items'=>array(
				// array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				// array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
				// array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
				// array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
				// array('label'=>'ANOTHER LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				// array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
				// array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
				// array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
			// ),
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootMenu', array(
			'type'=>'list',
			//'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
			'items'=>array(
				array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
				array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
				array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
				array('label'=>'ANOTHER LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
				array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
				array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
			),
		)); ?>
    </div>
    <div class="span10">
      <!--Body content-->
	  <?php echo $content; ?>
    </div>
  </div>


<?php $this->endContent(); ?>