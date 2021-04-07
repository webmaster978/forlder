<?php
if ($_FILES["upload_file"]["name"] != '') {
    $data = explode(".", $_FILES["upload_file"]["name"]);
    $extension = $data[1];
    $allowed_extension = array("jpg", "png", "gif", "pdf", "mp4");
    if (in_array($extension, $allowed_extension)) {
        $new_file_name = rand() . '.' . $extension;
        $path = $_POST["hidden_folder_name"] . '/' . $new_file_name;
        if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path)) {
            echo 'Fichier telecharger';
        } else {
            echo 'Une erreur est survenue';
        }
    } else {
        echo 'Photo invalide';
    }
} else {
    echo 'Veuillez selectionner une image';
}
