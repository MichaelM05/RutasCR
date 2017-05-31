<?php

$ds = DIRECTORY_SEPARATOR;

$storeFolderImage = '../Images/';
$storeFolderVideo = '../Video/';

if (!empty($_FILES)) {

    $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $video = array("video/x-msvideo", "video/mpeg", "video/quicktime", "application/vnd.rn-realmedia",
        "video/x-ms-wmv", "video/mp4", "application/x-shockwave-flash");

    if (in_array($_FILES['file']['type'], $allowed)) {
        $tempFile = $_FILES['file']['tmp_name'];

        $targetPath = dirname(__FILE__) . $ds . $storeFolderImage . $ds;

        $targetFile = $targetPath . $_FILES['file']['name'];

        if (move_uploaded_file($tempFile, $targetFile)) {

            //Registro en base de datos
        }
    }
    $video_type = $_FILES['file']['type'];
    if ($video_type == "video/x-msvideo" || $video_type == "video/mpeg" || $video_type == "video/quicktime" || 
            $video_type == "application/vnd.rn-realmedia" || $video_type == "video/x-ms-wmv" ||
            $video_type == "video/mp4" || $video_type == "application/x-shockwave-flash") {        
        
        $tempFile = $_FILES['file']['tmp_name'];

        $targetPath = dirname(__FILE__) . $ds . $storeFolderVideo . $ds;

        $targetFile = $targetPath . $_FILES['file']['name'];

        if (move_uploaded_file($tempFile, $targetFile)) {

            //registro en base de datos
        }
    }
}
?> 