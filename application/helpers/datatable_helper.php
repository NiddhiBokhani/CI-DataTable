<?php

function get_datatable($table,$id,$aColumns=[],$join=null,$where=null,$additional_cols=[]) {
	$CI =& get_instance();

	$columns = '*';
	$sql = "";
	if(!empty($aColumns)) {
		$columns = implode(',', $aColumns);
	}

	if(!empty($additional_cols)) {
		$columns .= implode(',', $additional_cols);
	}

	$sql .= "SELECT " . $columns ." FROM " . $table ;
	$column_search = $aColumns;
	$column_search = array_merge($column_search, $additional_cols);

	if(!empty($join)) {
		foreach ($join as $key => $value) {
			$sql .= $value;
		}
	}

	if(!empty($where)) {
		$sql .= " WHERE ";
		foreach ($where as $key => $value) {
			$sql .= $value;
		}
	}

	$i = 0;
	foreach ($column_search as $item) // loop column 
	{
		if($CI->input->post('search')['value']) { // if datatable send POST for search
			if($i===0) { // first loop
				$CI->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
				$CI->db->like($item, $CI->input->post('search')['value'],'after');
			} else {
				$CI->db->or_like($item, $CI->input->post('search')['value'],'after');
			}

			if(count($column_search) - 1 == $i) //last loop
				$CI->db->group_end(); //close bracket
		}
		$i++;
	}
	
	if(!empty($CI->input->post('order'))) {// here order processing
		$sql .= " ORDER BY " . $column_search[$CI->input->post('order')['0']['column']] . " " . $CI->input->post('order')['0']['dir'];
	} 

	$sql .= " LIMIT " . $CI->input->post('start') . "," . $CI->input->post('length');
	if(!empty($CI->input->post('search')['value'])) {
		$CI->db->limit($CI->input->post('length'),$CI->input->post('start'));
		$result = $CI->db->select($columns)->from($table)->get();//->result_array();	
	} else {
		$result = $CI->db->query($sql);//->result_array();
	}
	// echo $CI->db->last_query();
	return $result_data = array(
		'result'=> $result->result_array(), 
		'filtered' => $result->num_rows()
	);
}

function count_all($table) {
	$CI =& get_instance();
	$CI->db->from($table);
	return $CI->db->count_all_results();
}