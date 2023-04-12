<?php



define("UPLOADDIR", "/home/breathelife/blogs/Simple-PHP-Blog/uploads/");


    $file = array_shift($_FILES);

    if(move_uploaded_file($file['tmp_name'], UPLOADDIR . basename($file['name']))) {
        $name = dirname($_SERVER['PHP_SELF']) . 'uploads/' . $file['name'];

        $data = array(
            'message' => 'uploadSuccess',
            'data'    => 'https://blog.breathelife.org.my'.$name,
            'success' => true
        );
    } else {
        $error = true;
        $data = array(
            'message' => 'uploadError',
        );
    }

// $data['file']= $name;

// echo "<pre>";print_r($name);die();
echo json_encode($data);