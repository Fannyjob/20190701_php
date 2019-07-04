<?php
//Model

function processData(){
    $data ['title'] = 'Brad Big company';
    $data ['who'] = 'Brad';
    return $data;
}

//call View  呼叫 view
function loadView($viewFile,$data){
    $query = http_build_query(array("data" => $data));
    echo file_get_contents("http://localhost/myphp/20190701_php/views/{$viewFile}.php?{$query}");

}
$data = processData();
//loadView('view1',$data);
loadView('view2',$data);

?>