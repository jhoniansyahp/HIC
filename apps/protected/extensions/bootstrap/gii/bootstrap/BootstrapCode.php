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
		
		if((stripos(strtolower($column->name),'created_')) OR
			(stripos(strtolower($column->name),'updated_')) OR
			(stripos(strtolower($column->name),'verifikasi_')) OR
			(stripos(strtolower($column->name),'upload_'))
		  ){
			return "\"\"";
		  }
		
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
	
	public function generateAutoComplete($modelClass,$column){
		
		
		//if(!($column->isForeignKey)) return '"&nbsp;"';
		
		$relation = $this->findRelation($this->modelClass,$column);
		$relatedModelName = $relation[0];
		$relatedModelClass = $relation[3];
		$relatedFKfield	= $relation[2];
		
		return "
		
			echo '<div class=\"control-group\">';
			echo \$form->labelEx(\$model, '{$column->name}');
			 echo '<div class=\"controls\">';
		 \$this->widget('EJuiAutoCompleteFkField', array(
			  'model'=>\$model,
			  'attribute'=>'{$relatedFKfield}', //the FK field (from CJuiInputWidget)
			  // controller method to return the autoComplete data (from CJuiAutoComplete)
			  'sourceUrl'=>array('combo_{$this->class2id($relatedModelClass)}'),
			  // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
			  'showFKField'=>false,
			   // display size of the FK field.  only matters if not hidden.  defaults to 10
			  'FKFieldSize'=>15,
			  'relName'=>'{$relatedModelName}', // the relation name defined above
			  'displayAttr'=>'{$column->name}',  // attribute or pseudo-attribute to display
			  // length of the AutoComplete/display field, defaults to 50
			  //'autoCompleteLength'=>15,
			  // any attributes of CJuiAutoComplete and jQuery JUI AutoComplete widget may
			  // also be defined.  read the code and docs for all options
			  'options'=>array(
				  // number of characters that must be typed before
				  // autoCompleter returns a value, defaults to 2
				  'minLength'=>2,
			  ),
			  'htmlOptions' => array(
					'class' => 'span5',
			  ),
		 ));
		 echo \$form->error(\$model, '{$column->name}');
		 echo \"</div>\n</div>\"";
		
		
	}
	
	public function generateDatePicker($modelClass,$column){
		
		
		if((stripos(strtolower($column->name),'created_')) OR
			(stripos(strtolower($column->name),'updated_')) OR
			(stripos(strtolower($column->name),'verifikasi_')) OR
			(stripos(strtolower($column->name),'upload_'))
		  ){
			return "echo \"\"";
		  }
		
		
		return "
		  echo '<div class=\"control-group\">';
		  echo \$form->labelEx(\$model,'{$column->name}');
		 echo '<div class=\"controls\">';
		\$form->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>\$model,
	        'attribute'=>'{$column->name}',
	        'name'=>'{$column->name}',    // This is how it works for me.
			'value'=>'{$column->defaultValue}',
	        'options'=>array('dateFormat'=>'dd/mm/yy', 
	                        'altFormat'=>'yy-mm-dd', 
	                        'changeMonth'=>'true', 
	                        'changeYear'=>'true',
							'showButtonPanel'=>'false',
	                        'yearRange'=>'1998:2030', 
	                     	),
	        'htmlOptions'=>array('size'=>'10','class'=>'span5 date')
	   ));
		echo \"</div>\n</div>\"";
	  	
	}
	
	public function findRelation($modelClass, $column) {
		if (!$column->isForeignKey)
			return null;
		$relations = CActiveRecord::model($modelClass)->relations();
		// Find the relation for this attribute.
		foreach ($relations as $relationName => $relation) {
			// For attributes on this model, relation must be BELONGS_TO.
			if ($relation[0] == CActiveRecord::BELONGS_TO && $relation[2] == $column->name) {
				return array(
					$relationName, // the relation name
					$relation[0], // the relation type
					$relation[2], // the foreign key
					$relation[1] // the related active record class name
				);
			}
		}
		// None found.
		return null;
	}
	
		
}
