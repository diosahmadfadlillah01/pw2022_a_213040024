<?php
$mahasiswa = [
    [
        "nama" => "Dios Ahmad Fadlillah",
        "npm" => "213040024",
        "email" => "diosahmadfadhilah01@gmail.com",
        "gambar" => "img/dios.jpg",
        "row" => "1",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Alif Akbar",
        "npm" => "213040019",
        "email" => "alifakbaaaaar@gmail.com",
        "gambar" => "img/iip.jpg",
        "row" => "2",
        "jurusan" => "Teknik Inormatika"
    ],

    [
        "nama" => "Haykal Alvegio",
        "npm" => "213040028",
        "email" => "haykal@gmail.com",
        "gambar" => "img/haykal.jpg",
        "row" => "3",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Ainan Bahrul Ihsan",
        "npm" => "213040010",
        "email" => "haykal@gmail.com",
        "gambar" => "img/ainan.jpg",
        "row" => "4",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Wildan Fauzan",
        "npm" => "213040027",
        "email" => "wildanfauzan@gmail.com",
        "gambar" => "img/wildanfauzan.jpg",
        "row" => "5",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Fauzi Ilyas",
        "npm" => "213040032",
        "email" => "fauziilyaaaas@gmail.com",
        "gambar" => "img/fauziilyas.jpg",
        "row" => "6",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Deral Bratayuda",
        "npm" => "213040023",
        "email" => "deralbratayuda@gmail.com",
        "gambar" => "img/deral.jpg",
        "row" => "7",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Riyan Supriadi",
        "npm" => "213040017",
        "email" => "muhammadriyaaaan@gmail.com",
        "gambar" => "img/riyan.jpg",
        "row" => "8",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Diva Nurafifah",
        "npm" => "213040001",
        "email" => "divanurafifah@gmail.com",
        "gambar" => "img/divanurafifah.jpg",
        "row" => "9",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Malwi Hidayat Togatorop",
        "npm" => "213040015",
        "email" => "malwi017@gmail.com",
        "gambar" => "img/malwi.jpg",
        "row" => "10",
        "jurusan" => "Teknik Informatika"
    ],

];


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
</head>

<body>

    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table  table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs) { ?>
                    <tr class="align-middle">
                        <th scope="row"><?php echo $mhs["row"]; ?></th>
                        <td>
                            <img src=<?php echo $mhs["gambar"] ?> width="50px" class="rounded-circle">
                        </td>
                        <td><?php echo $mhs["nama"]; ?></td>
                        <td>
                            <a href="" class="btn badge bg-warning">edit</a>
                            <a href="" class="btn badge bg-danger">delete</a>
                            <a href="kuliah_latihan4.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>" class="btn badge bg-info">detail</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>