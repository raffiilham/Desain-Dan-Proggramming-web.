<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>

    <style>
        body {
            background-color: white;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: red;
        }

        td {
            background-color: white;
        }
    </style>

    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
        ?>

        <table>
            <tr>
                <th>Informasi Dosen</th>
                <th>Data</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <?php echo $Dosen['nama']; ?>
                </td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td>
                    <?php echo $Dosen['domisili']; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <?php echo $Dosen['jenis_kelamin']; ?>
                </td>
            </tr>
        </table>
    </body>
</html>