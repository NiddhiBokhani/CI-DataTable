<?php

$table = 'datatable';
$id = 'id';

$aColumns = array('name','city');

// multiple where condition should start with AND | OR
$where = [];
$join = [];

// accessing key as a variable which is passed through controller
// echo $rowid;

$aaColumns = array();

$result = get_datatable($table,$id,$aColumns,$join,$where);

$Oresult = $result['result'];
// $totalRecord = count_all($table);
// $filteredRecord = $result['filtered'];

foreach ($Oresult as $key => $value) {
	$row = array();
	$row[] = $value['name'];
	$row[] = $value['city'];

	$data[] = $row;
}