<?php

$table = 'datatable'; // your database table name
$id = 'id'; // your database table id

$aColumns = array('name','city'); // datatable columns array which you want in output

// multiple where condition should start with AND | OR
$where = [];

//multiple join conditions
$join = [];

// accessing key as a variable which is passed through controller
// echo $rowid;

$aaColumns = array();

$result = get_datatable($table,$id,$aColumns,$join,$where,[]); // last array is additional columns array for join table columns

$Oresult = $result['result'];
// $totalRecord = count_all($table);
// $filteredRecord = $result['filtered'];

foreach ($Oresult as $key => $value) {
	$row = array();
	$row[] = $value['name']; // field name of database table
	$row[] = $value['city']; // field name of database table

	$data[] = $row;
}
