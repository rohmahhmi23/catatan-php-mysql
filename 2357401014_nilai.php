<?php
$array = [
    ["nama"=>"Asep", "nilai"=>78],
    ["nama"=>"Icha", "nilai"=>89],
    ["nama"=>"Shane", "nilai"=>45],
    ["nama"=>"Jojo", "nilai"=>67],
    ["nama"=>"Willy", "nilai"=>85],
    ["nama"=>"Aby", "nilai"=>70],
    ["nama"=>"Julie", "nilai"=>100],
    ["nama"=>"Nate", "nilai"=>66],
    ["nama"=>"Osi", "nilai"=>83]
];

function getGrade($nilai) {
    if ($nilai >= 85) return 'A';
    elseif ($nilai >= 75) return 'B';
    elseif ($nilai >= 65) return 'C';
    elseif ($nilai >= 55) return 'D';
    else return 'E';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Nilai dan Grade</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 400px; }
        th, td { border: 1px solid #888; padding: 8px; text-align: center; }
        th { background: #f0f0f0; }
    </style>
</head>
<body>
    <h2>Daftar Nilai dan Grade</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($array as $i => $data): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= htmlspecialchars($data['nama']) ?></td>
            <td><?= $data['nilai'] ?></td>
            <td><?= getGrade($data['nilai']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
