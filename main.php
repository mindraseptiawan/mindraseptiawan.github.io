<?php
include "crud.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style(2).css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="main.php">Muhammad Indra Septiawan 21060120130139</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="table.php">Table</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                <p>TUGAS PENGEMBANGAN WEB MEMBUAT APLIKASI CRUD</p>
                CREATE
            </div>
            <div class="card-body">
                <?php
                if ($gagal) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $gagal ?>
                    </div>
                <?php
                    header("refresh:5;url=main.php");
                }
                ?>
                <?php
                if ($berhasil) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $berhasil ?>
                    </div>
                <?php
                    header("refresh:5;url=main.php");
                }
                ?>
                <form action="" method="post">
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username  ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $Nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Konsentrasi" class="col-sm-2 col-form-label">Konsentrasi</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="Konsentrasi" id="Konsentrasi">
                                <option value="">Pilih Konsentrasi</option>
                                <option value="Power" <?php if ($Konsentrasi == "Power") echo "selected" ?>>Power</option>
                                <option value="Teknologi Informasi" <?php if ($Konsentrasi == "Teknologi Informasi") echo "selected" ?>>Teknologi Informasi</option>
                                <option value="Elektronika" <?php if ($Konsentrasi == "Elektronika") echo "selected" ?>>Elektronika</option>
                                <option value="Telekomunikasi" <?php if ($Konsentrasi == "Telekomunikasi") echo "selected" ?>>Telekomunikasi</option>
                                <option value="Kontrol" <?php if ($Konsentrasi == "Kontrol") echo "selected" ?>>Kontrol</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="Password" name="Password" value="<?php echo $Password ?>">
                            <input type="checkbox" onclick="myFunction()">Tampilkan Password

                            <script>
                                function myFunction() {
                                    var x = document.getElementById("Password");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="save" value="SUBMIT" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="card">
        <div class="card-header text-white bg-secondary">
            VIEW TABLE
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Konsentrasi</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                <tbody>
                    <?php
                    $sql2 = "select* from user order by id ASC";
                    $q2 = mysqli_query($connect, $sql2);
                    $urut = 1;
                    while ($r2 = mysqli_fetch_array($q2)) {
                        $id = $r2['id'];
                        $username = $r2['username'];
                        $Nama = $r2['Nama'];
                        $Konsentrasi = $r2['Konsentrasi'];
                        $Password = $r2['Password'];
                        $ubah = md5($Password);

                    ?>
                        <tr>
                            <th scope="row"><?php echo $urut++ ?></th>
                            <td scope="row"><?php echo $username ?></td>
                            <td scope="row"><?php echo $Nama ?></td>
                            <td scope="row"><?php echo $Konsentrasi ?></td>
                            <td scope="row"><?php echo $ubah ?></td>
                            <td scope="row">
                                <a href="main.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                <a href="main.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Apakah anda yakin ingin menghapus <?php echo $Nama  ?>?')"><button type="button" class="btn btn-danger">Hapus</button></a>


                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </thead>
            </table>
        </div>
    </div>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>