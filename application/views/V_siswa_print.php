<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>

                <th scope="col">MATA PELAJARAN</th>


                <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php $a = 1;
            foreach ($nilai_siswa as $row3) { ?>
                <tr>
                    <th scope="row"><?php echo $a++; ?></th>

                    <td><?php echo $row3->nama_matapelajaran ?></td>

                    <td><?php echo $row3->nilai_js ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>



    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>