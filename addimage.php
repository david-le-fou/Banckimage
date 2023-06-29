<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDirectory = __DIR__.'/images/'; // Chemin vers le dossier de destination où vous souhaitez enregistrer les images téléchargées
    $targetFile = $targetDirectory . basename($_FILES['image']['name']);

    // Vérifier si le fichier est une image valide
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo 'Erreur : Seules les images JPG, JPEG, PNG et GIF sont autorisées.';
        exit();
    }

    // Déplacer le fichier téléchargé vers le dossier de destination
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        echo 'L\'image a été téléchargée avec succès.';
    } else {
        echo 'Une erreur s\'est produite lors du téléchargement de l\'image.';
    }
}
?>
