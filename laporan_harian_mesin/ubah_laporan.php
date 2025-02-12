<?php
include "../koneksi.php";
$sql = mysqli_query($conn, "select* from mesin where id_mesin='$_GET[kode]'");
$data = mysqli_fetch_array($sql);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Produksi</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold " href="#"> Bakul Pak Wie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah_data.php">Tracking Unit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_produksi.php">Data Produksi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reject
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="reject.php.php">Input riject</a></li>
                            <li><a class="dropdown-item" href="data_reject.php">Data Reject</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mesin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="laporan_harian_mesin.php">Laporan Harian Mesin</a></li>
                            <li><a class="dropdown-item" href="Work_instruction.php">Work Instruction</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- close navbar -->


    <h3 class="text-uppercase text-center">production proccess</h3>
    <h3 class="text-uppercase text-center">pt mobat mabit golet duit</h3>
    <hr>

    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header bg-warning text-secondary">
                        Edit Laporan Harian Mesin
                    </div>
                    <div class="card-body bg-secondary">
                        <form action="" method="post">

                            <div class="mb-3">
                                <div class="row">
                                    <input type="hidden" class="form-control" id="id_mesin" name="id_mesin" value="<?php echo $data['id_mesin']; ?>">
                                    <div class="col-md-4 mb-3">
                                        <label for="tanggal" class="form-label">Date</label>
                                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php
                                                                                                                    date_default_timezone_set("Asia/jakarta");
                                                                                                                    $krw = date("d/m/y H:i:s a");
                                                                                                                    echo "" . $krw;
                                                                                                                    ?>">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="knife1" class="col-form-label">Pressure Knife 1</label>
                                        </div>
                                        <div class="col">
                                            <input type="number" name="knife1" value="<?php echo $data['knife1']; ?>" id=" id=" knife1" class="form-control">
                                        </div>

                                        <div class="col-md-2">
                                            <label for="knife2" class="col-form-label">Pressure Knife 2</label>
                                        </div>
                                        <div class="col">
                                            <input type="number" name="knife2" value="<?php echo $data['knife2']; ?>" id=" id=" knife2" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="knife3" class="col-form-label">Presseure Knife 3</label>
                                        </div>
                                        <div class="col">
                                            <input type="number" name="knife3" value="<?php echo $data['knife3']; ?>" id=" id=" knife3" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 mt-3">
                                            <label for="knife4" class="col-form-label">Pressure Knife 4</label>
                                        </div>
                                        <div class="col mt-3">
                                            <input type="number" name="knife4" value="<?php echo $data['knife4']; ?>" id=" id=" knife4" class="form-control">
                                        </div>
                                        <div class="col-md-2 mt-3">
                                            <label for="knife5" class="col-form-label">Pressure Knife 5</label>
                                        </div>
                                        <div class="col mt-3">
                                            <input type="number" name="knife5" value="<?php echo $data['knife5']; ?>" id=" id=" knife5" class="form-control">
                                        </div>
                                        <div class="col-md-2 mt-3">
                                            <label for="waterjet" class="col-form-label">Pressure Waterjet</label> <br>
                                        </div>
                                        <div class="col mt-3 mb-3 ">
                                            <input type="number" name="waterjet" value="<?php echo $data['waterjet']; ?>" id=" id=" watrejet" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="doubling" class="col-form-label">Pressure doubling</label> <br>
                                        </div>
                                        <div class="col-md-2 mb-5 ">
                                            <input type="number" name="doubling" value="<?php echo $data['doubling']; ?>" id=" id=" doubling" class="form-control">
                                        </div>
                                    </div>
                                    <tr>
                                        <div class="col d-flex justify-content-center mb-3">
                                            <td><input type="submit" value="simpan" name="simpan" class="btn btn-primary"></td>
                                        </div>
                                    </tr>
                        </form>
                        <!-- ubah data laporan harian mesin-->
                        <?php
                        include "../koneksi.php";
                        // database = '$_POST[ name field]'
                        if (isset($_POST['simpan'])) {
                            mysqli_query($conn, "update mesin set
                                tanggal = '$_POST[tanggal]',
                                knife1 = '$_POST[knife1]',
                                knife2 = '$_POST[knife2]',
                                knife3 = '$_POST[knife3]',
                                knife4 = '$_POST[knife4]',
                                knife5 = '$_POST[knife5]',
                                waterjet = '$_POST[waterjet]',
                                doubling = '$_POST[doubling]'
                                
                                where id_mesin = $_GET[kode]
                                ");
                            echo "laporan  telah di Update";
                            echo "<meta http-equiv=refresh content=1;URL='data_laporan.php'>";
                        }
                        ?>
                        <!-- close ubah data -->

                    </div>
                    <div class="card-footer bg-warning text-end text-light">
                        Created By Wihartoko
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- close container -->
    <!-- bootstrap js -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>