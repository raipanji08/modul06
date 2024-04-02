<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
        }

        .even {
            background-color: coral;
            
        }

        .odd {
            background-color: deeppink;
        }
    </style>
    <title>Daftar Hewan</title>
</head>

<body>
    <h1>Galeri Hewan</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Jumlah Kaki</th>
            <th>Cari di Google</th>
        </tr>
        <?php
        $data = array('Ayam' => 2, 'Angsa' => 2, 'Bebek' => 2, 'Domba' => 4, 'Kalkun' => 2, 
        'Kambing' => 4, 'Kelinci' => 2, 'Kerbau' => 4, 'Kuda' => 4, 'Sapi' => 4);
        ksort($data);
        $i = 1;
        foreach ($data as $hewan => $kaki) {
        ?>
            <tr class="<?php
                        $class = $i % 2 == 0  ? 'even' : 'odd';
                        echo $class
                        ?>">
                <td><?php echo $i ?></td>
                <td><?php echo $hewan ?></td>
                <td><img src="img/<?php echo $hewan ?>.jpg" width="50"></td>
                <td><?php echo $kaki ?> buah</td>
                <td><a href="https://www.google.com/search?q=<?php echo $hewan ?>" target="_blank">Cari</a></td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </table>
</body>

</html>
