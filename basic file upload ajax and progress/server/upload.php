<?php

function getMaxUploadSize($unit='B')
{
    $tmp = min(ini_get('post_max_size'), ini_get('upload_max_filesize'));
    $max_upload = str_replace('M', '', $tmp);

    if($unit=='B')
        return $max_upload * 1024 * 1024;

    return $max_upload;
}


function getuploadedfile($index,$uploadPath='./',$maxSize=0,$validFormats=[])
{
    if($maxSize > getMaxUploadSize())
        return [0,"file size limit is greater than server limit."];

    $maxSize = ($maxSize==0) ? getMaxUploadSize() : $maxSize; //default equals server limit
    $validFormats = (count($validFormats)==0) ? ["jpg","png","pdf"] : $validFormats;

    $name = $_FILES[$index]['name']; //get the name of the file
    $size = $_FILES[$index]['size']; //get the size of the file
    $status = 0;

    if (strlen($name)) { //check if the file is selected or cancelled after pressing the browse button.
        $tmp = explode(".", $name);
        $ext = end($tmp); //extract the extension of the file
        if (in_array($ext, $validFormats)) { //if the file is valid go on.
            if ($size <= $maxSize) { // check if the file size is more than 2000 mb
                $tmp = $_FILES[$index]['tmp_name'];
                if (move_uploaded_file($tmp, $uploadPath.'/'.$name)) { //check if it the file move successfully.
                    $msg = "File uploaded successfully!!";
                    $status = 1;
                } else {
                    $msg = "failed to moving uploaded file. destination dir must be writable for all";
                }
            } else {
                $msg = "File size limit of $maxSize bytes exeeded";
            }
        } else {
            $msg = "$ext file format are not allowed";
        }
    } else {
        $msg = "Please select a file..!";
    }

    return [$status,$msg];
}


$result = getuploadedfile('file','./uploaded-files',0,["mp4","txt","zip","iso","exe"]);

$sucess = $result[0];


// $output will be converted into JSON

if ($sucess) {
    $output = array("success" => true, "message" => $result[1]);
} else {
    $output = array("success" => false, "error" => $result[1]);
}

header("Content-Type: application/json; charset=utf-8");
echo json_encode($output);

