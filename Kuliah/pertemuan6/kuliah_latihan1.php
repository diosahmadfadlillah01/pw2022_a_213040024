<?php
//Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilainya

$mahasiswa = [
    [
        "nama" => "Dios Ahmad Fadlillah",
        "npm" => "213040024",
        "email" => "diosahmadfadhilah01@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Haykal Alvegio",
        "npm" => "213040028",
        "email" => "haykalalvegio@gmail.com",
        "jurusan" => "Tenik Informatika"
    ],
    [
        "nama" => "Ainan Bahrul Ihsan",
        "npm" => "213040012",
        "email" => "ainanbahrul@gmail.com",
        "jurusan" => "Teknik Informatika"
    ]
];

// var_dump($mahasiswa[2]["email"]):
?>


<?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs["nama"] ?></li>
        <li>NPM: <?php echo $mhs["npm"] ?></li>
        <li>Email: <?php echo $mhs["email"] ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"] ?></li>
    </ul>
<?php } ?>