<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$aColumns     = array(
    'name',
    'email',
    'calendar_id',
    );
$sIndexColumn = "departmentid";
$sTable       = 'tbldepartments';

$result  = data_tables_init($aColumns, $sIndexColumn, $sTable,array(),array(),array('departmentid','email','hidefromclient'));
$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
    $row = array();
    for ($i = 0; $i < count($aColumns); $i++) {
        $_data = $aRow[$aColumns[$i]];
        if ($aColumns[$i] == 'name') {
            $_data = '<a href="#" onclick="edit_department(this,'.$aRow['departmentid'].'); return false" data-name="'.$aRow['name'].'" data-calendar-id="'.$aRow['calendar_id'].'" data-email="'.$aRow['email'].'" data-hide-from-client="'.$aRow['hidefromclient'].'">' . $_data . '</a>';
        }
        $row[] = $_data;
    }

    $options = icon_btn('departments/department/' . $aRow['departmentid'], 'pencil-square-o','btn-default',array(
        'onclick'=>'edit_department(this,'.$aRow['departmentid'].'); return false','data-name'=>$aRow['name'],'data-calendar-id'=>$aRow['calendar_id'],'data-email'=>$aRow['email'],'data-hide-from-client'=>$aRow['hidefromclient']
        ));
    $row[]   = $options .= icon_btn('departments/delete/' . $aRow['departmentid'], 'remove', 'btn-danger _delete');

    $output['aaData'][] = $row;
}
