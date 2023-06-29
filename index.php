<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bacnkimage</title>
</head>
<body>
    <form action="addimage.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <input type="submit" name="submit" value="Télécharger">
    </form>

    <div class="abborecence">
        <?php
        include "listeimage.php"
        ?>
    </div>
    <div class="contenuimage">

    </div>
</body>
</html>