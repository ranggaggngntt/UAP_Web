<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perulangan</title>
    <style>
        tbody tr:nth-child(odd) {
            background-color: green;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
                <th>Kolom 4</th>
                <th>Kolom 5</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 5; $j++) {
                    echo "<td>Baris $i, Kolom $j</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>