<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $judul = "Daftar Anggota";
    ob_start();
    ?>
    <h1>Daftar Anggota</h1>
    <ul>
    <?php foreach ($anggota as $row): ?>
        <li>
            <a href="detail.php?id=<?= $row['id'] ?>"><?= $row['nama']; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php $isi = ob_get_clean(); ?>
    <?php include 'view/template.php'; ?>
</body>
</html>
