<?php
$profil = [
    "NIM" => "2357401014",
    "Nama" => "Rohmah",
    "Kelas" => "MI23",
    "Jenis Kelamin" => "Perempuan",
    "Email" => "rohmahshah244@gmail.com",
    "Nomor Handphone" => "085695014523"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Diri</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 400px; }
        th, td { border: 1px solid #888; padding: 8px; }
        th { background: #f0f0f0; text-align: left; }
    </style>
</head>
<body>
    <h2>Profil Diri</h2>
    <table>
        <?php foreach ($profil as $key => $value): ?>
        <tr>
            <th><?= htmlspecialchars($key) ?></th>
            <td><?= htmlspecialchars($value) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
