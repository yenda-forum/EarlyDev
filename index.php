<?php
    require_once('classes/generateForums.class.php');
    $Forum = new Forum();
    print_r($Forum->returnForums());
    echo '<br>';
    foreach($Forum->returnForums() as $data){
        echo '<h1>'.$data['name'].'</h2>';
        echo '<p>'.$data['description'].'</p>';
    }
?>