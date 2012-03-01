<?php
/**
 * BootCrudCode class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('gii.generators.crud.CrudCode');
class BootstrapCode extendS CrudCode
{
	public function generateActiveRow($modelClass, $column)
	{
		if ($column->type === 'boolean')
			return "\$form->checkBoxRow(\$model,'{$column->name}')";
		else if (stripos($column->dbType,'text') !== false)
			return "\$form->textAreaRow(\$model,'{$column->name}',array('rows'=>6, 'cols'=>50, 'class'=>'span8'))";
		else
		{
			if (preg_match('/^(password|pass|passwd|passcode)$/i',$column->name))
				$inputField='passwordFieldRow';
			else
				$inputField='textFieldRow';

			if ($column->type!=='string' || $column->size===null)
				return "\$form->{$inputField}(\$model,'{$column->name}',array('class'=>'span5'))";
			else
				return "\$form->{$inputField}(\$model,'{$column->name}',array('class'=>'span5','maxlength'=>$column->size))";
		}
	}
	
	public function generateDatePicker($model,$column){
		
		return "
		  echo '<div class=\"control-group\">';
		  echo \$form->labelEx(\$model,'{$column->name}');
		 echo '<div class=\"controls\">';
		\$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>\$model,
	        'attribute'=>'{$column->name}',
	        'name'=>'{$column->name}',    // This is how it works for me.
			'value'=>'{$column->defaultValue}',
	        'options'=>array('dateFormat'=>'dd-mm-yy', 
	                        'altFormat'=>'yy-mm-dd', 
	                        'changeMonth'=>'true', 
	                        'changeYear'=>'true',
							'showButtonPanel'=>'false',
	                        'yearRange'=>'1998:2030', 
	                     	),
	        'htmlOptions'=>array('size'=>'10','class'=>'span5 date')
	   ));
		echo \"</div>\n</div>\"; 
	";
	   
		
	}
}
