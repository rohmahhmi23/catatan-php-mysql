<?php
$array = [
    ["nama"=>"Asep", "grade"=>"A"],
    ["nama"=>"Icha", "grade"=>"A"],
    ["nama"=>"Shane", "grade"=>"C"],
    ["nama"=>"Jojo", "grade"=>"D"],
    ["nama"=>"Willy", "grade"=>"A"],
    ["nama"=>"Aby", "grade"=>"B"],
    ["nama"=>"Julie", "grade"=>"E"],
    ["nama"=>"Nate", "grade"=>"B"],
    ["nama"=>"Osi", "grade"=>"C"]
];

function getKeterangan($grade) {
    switch ($grade) {
        case 'A': return 'Sangat Baik';
        case 'B': return 'Baik';
        case 'C': return 'Cukup';
        case 'D': return 'Kurang';
        case 'E': return 'Buruk';
        default: return '-';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Grade dan Keterangan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 400px; }
        th, td { border: 1px solid #888; padding: 8px; text-align: center; }
        th { background: #f0f0f0; }
    </style>
</head>
<body>
    <h2>Daftar Grade dan Keterangan</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Grade</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($array as $i => $data): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= htmlspecialchars($data['nama']) ?></td>
            <td><?= $data['grade'] ?></td>
            <td><?= getKeterangan($data['grade']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
