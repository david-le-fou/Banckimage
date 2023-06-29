<?php
$files = glob(__DIR__.'/images/*');
// Utilisation de glob() pour récupérer tous les fichiers dans le dossier

// Parcourir tous les fichiers trouvés
foreach ($files as $file) {
    // Récupérer le chemin complet du fichier
    $filePath = realpath($file);
    
    // Récupérer le nom du fichier
    $fileName = basename($filePath);
    
    // Afficher le chemin complet et le nom du fichier
    echo "Chemin : " . $filePath . "</br>";
    echo "Nom du fichier : " . $fileName . "</br>";
}