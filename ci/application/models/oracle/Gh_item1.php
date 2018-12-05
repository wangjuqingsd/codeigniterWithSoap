<?php
class Gh_item1 extends CI_Model {

    //public $item1_cod;
    //public $item1_nam;
    public $table_name = "GH_ITEM1";


    public function getOne($item1_cod="01"){
        $query = $this->get('item1_cod', $item1_cod);
        return $query->result();
    }
    public function getAll(){
    	$query = $this->db->from($this->table_name)->get();
    	//var_dump($this->db);
    	//return $query->get();
    	$out = [];
    	foreach($query->result_array() as $row){
    		$out[]=$row;
    	}
    	return $out;
    }
}