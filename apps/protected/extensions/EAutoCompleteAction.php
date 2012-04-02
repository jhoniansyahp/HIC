<?php
class EAutoCompleteAction extends CAction
{
    public $model;
	public $query;
    public $label;
    public $value;
    public $id;
	public $condition;
    public $option = array();
    private $results = array();
    private $matributs = array();

    public function run()
    {
        if(isset($this->model) && isset($this->label)) {
	
			
			if(!isset($_GET['term']) && $_GET['term'] == "") CJSON::encode(array("label"=>"","value"=>"","id"=>""));
			if(isset($_GET['term']) && $_GET['term'] == "") CJSON::encode(array("label"=>"","value"=>"","id"=>""));
			
            $criteria = new CDbCriteria();
            $criteria->compare($this->label, $_GET['term'], true);

			if(!empty($this->condition)){
				$criteria->addCondition(current($this->condition),'AND');
				$params = end($this->condition);
				foreach($params as $param){
					$criteria->params[key($params)] = $param;
				}
			}

            $model = new $this->model;
			
            foreach($model->findAll($criteria) as $m)
            {          
                foreach($m->getAttributes() as $k=>$v)//dodol
                {
                    $this->matributs[$k] = $v;                   
                }
                $this->matributs['label']=$m->{$this->label};
                $this->matributs['value']=$m->{$this->value};
				$this->matributs['id']   =$m->{$this->id};

                $this->results[] = $this->matributs;
            }

        }
        echo CJSON::encode($this->results);
    }
}
?>