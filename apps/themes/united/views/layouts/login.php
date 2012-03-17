<!DOCTYPE html>

<html>
<head>
    <title>Portal Administrasi Klaim Asuransi</title>
    
    <meta name="description" content="Portal Administrasi Klaim Asuransi" />    
    <meta property="og:title" content="Portal Administrasi Klaim Asuransi"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content=""/>
    <meta property="og:description" content="Portal Administrasi Klaim Asuransi"/>
    
    <link rel="shortcut icon" href="images/favicon.png">
    
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
	<?php echo Yii::app()->bootstrap->registerCss(); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>  
    
    

</head>
<body>

  
        <?php $this->widget('bootstrap.widgets.BootNavbar', array(
    'fixed'=>false,	
    //'brand'=>Yii::app()->name,
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.BootMenu',			
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index') , 'active'=>true),				
				array('label'=>'Claim', 'url'=>array('/claim')),
				
			),            
        ),
        
    ),
)); ?>
      </div>
<div class="container">
    <div class="row" id="header">
        <div class="span10 right">

            <?php echo $content; ?>
            <div style="width:400px;">

                <h1 style="margin:50px 0 0 0;"><a href="/"><img src="images/logo.png" alt="PAKA" height="67" width="142"></a></h1>
                <h2>Portal Administrasi <br>Klaim Asuransi</h2>
                <p class="lead">PAKA memudahkan administrasi dan registrasi seluruh klaim asuransi Anda.</p>
                <hr />
                <p><a href="#" class="btn red large">Info Detail</a>
            </div>
        </div>

    </div>
    <div class="span16">

        <div class="grid">
            
            <h5>Tentang PAKA&trade;</h5>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id ipsum a ipsum tincidunt rutrum nec id lectus. Nunc porta massa nec ligula varius commodo. Pellentesque congue lorem sed tortor rutrum eu fermentum nunc convallis. Donec rhoncus velit ac felis egestas sodales. Pellentesque ac felis nec leo pellentesque ultricies vel at justo. Quisque fringilla rutrum sodales. Nunc blandit ligula in magna vestibulum fringilla. Donec velit lacus, lacinia vitae dignissim ac, ullamcorper id nisl. 
            </p>
        </div>
        
        
        <div class="grid last">
            <h5>Disclaimer</h5>
            <p>
            In sapien enim, viverra sed blandit vitae, sollicitudin at nulla. Aenean euismod iaculis rutrum. Sed condimentum ipsum sagittis nisi cursus sed rhoncus ipsum porta. Maecenas rhoncus urna urna. Cras ac vehicula leo. Praesent id sapien sit amet lacus pretium pharetra in non ante. Nam consectetur nunc iaculis dolor ultrices a pellentesque purus consectetur. Curabitur ipsum tortor, cursus quis facilisis in, sagittis ut elit. Mauris in egestas velit.   
            </p>
        </div>
    </div>

    
    <div class="row">
        <div class="span16">
            <hr />
            <h5 style="text-align:center;">Informasi Klaim Terkini</h5>
            <ul id="klaim">
            	<li>
                <div class="span1 right"><span class="label label-info right">Klaim Diterima</span></div>
                <div class="span12">
                <strong>#PK03884-2293/0299ACM-2012</strong> <br>
                In sapien enim, viverra sed blandit vitae, sollicitudin at nulla. Aenean euismod iaculis rutrum. Sed condimentum ipsum sagittis nisi cursus sed rhoncus ipsum porta.  </div> </li>
                
                <li>
                <div class="span1 right"><span class="label label-success right">Klaim Terbayar</span></div>
                <div class="span12">
                <strong>#PK03884-2293/0299ACM-2012</strong><br>
                Maecenas rhoncus urna urna. Cras ac vehicula leo. Praesent id sapien sit amet lacus pretium pharetra in non ante. 
                </div></li>
                
                <li>
                <div class="span1 right"><span class="label label-important right">Klaim Ditolak</span></div>
                <div class="span12">
                <strong>#PK03884-2293/0299ACM-2012</strong><br>
                Nam consectetur nunc iaculis dolor ultrices a pellentesque purus consectetur. Curabitur ipsum tortor, cursus quis facilisis in, sagittis ut elit. Mauris in egestas velit.</div></li>
            </ul>
        </div>
    </div>
    
    <div class="row">
    <div class="footer span16">   
    
        <div class="span2" style="float:left">System v.0.1</div>
       
       <div class="span6 right">
        <form class="span2" name="lang">
		<select name="lang" id="select01" class="span2 right" onchange="this.form.submit();">
                <option>Pilih Bahasa</option>
                <option value="id">Indonesia</option>
                <option value="en-us">Ingris</option>
                <option value="arab">Arab</option>
                <option value="spanyol">Spanyol</option>
              </select>
		</form>
        <form class="span3" name="theme">      
        <select name="theme" id="select02" class="span2 right" style="margin-right:10px;" onchange="this.form.submit();">
                <option>Pilih Style</option>
				<option value="bootstrap">bootstrap</option>
                <option value="cyborg">cyborg</option>
                <option value="slate">slate</option>
                <option value="united">united</option>
                <option value="dangdut">dangdut</option>
              </select>
		</form>
        </div>
        <div class="span4" style="margin:0 auto">
        Copyright &copy; 2012 - <a href="#">Disclaimer</a> | <a href="#">Help</a> 
        </div>
        
        
   
        
        </div>
    </div>
</div>
</div>
</div>




</body>
</html>