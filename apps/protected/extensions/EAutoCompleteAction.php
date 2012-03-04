<?php
class EAutoCompleteAction extends CAction
{
    public $model;
    public $label;
    public $value;
    public $id;
    public $option = array();
    private $results = array();
    private $matributs = array();

    public function run()
    {
        if(isset($this->model) && isset($this->label)) {
            $criteria = new CDbCriteria();
            $criteria->compare($this->label, $_GET['term'], true);
            $model = new $this->model;

            foreach($model->findAll($criteria) as $m)
            {
                //$this->results[] = $m->{$this->attribute};
                
                foreach($m->getAttributes() as $k=>$v)//dodol
                {
                    $this->matributs[$k] = $v;                   
                    
                    //print_r($matributs);
                }
                $this->matributs['label']=$m->{$this->label};
                $this->matributs['value']=$m->{$this->value};

                $this->results[] = $this->matributs;
                //print_r($matributs);
                /*
                $this->results[] =
                array(
                            'label'=>$m->{$this->label},
                            'value'=>$m->{$this->value},
                            'id'=>$m->{$this->id}
                            );
                $this->results = array_merge($this->matributs,$this->results);
                */
            }

        }
        echo CJSON::encode($this->results);
    }
}
?>