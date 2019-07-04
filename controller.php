<?php
    //Model
    function processData(){
        $data['title'] = 'Brad Big Company';
        $data['who'] = 'Brad';
        return $data;
    }

    //Call view
    function loadView($viewfile,$data){
        $query = http_build_query(array("data" => $data));
        echo file_get_contents("http://localhost/php_lesson/views/{$viewfile}.php?{$query}");
    }

    $data = processData();
    loadView('view1',$data);

?>