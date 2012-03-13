<?php $this->beginContent(Rights::module()->appLayout); ?>

<div id="rights" class="container">

	<div id="content">
		<div class="row-fluid">
		<?php if( $this->id!=='install' ): ?>
			<div class="span-2">
				<div id="menu">
				<?php $this->renderPartial('/_menu'); ?>
				</div>
			</div>
		<?php endif; ?>
			<div class="span-10">
			<?php $this->renderPartial('/_flash'); ?>
		
			<?php echo $content; ?>
			</div>
		</div>
	</div><!-- content -->

</div>

<?php $this->endContent(); ?>