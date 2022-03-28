<?php
//Studi Kasus

$mahasiswa = [
    ["Dios Ahmad Fadlillah", "213040024", "diosahmadfadhilah01@gmail.com", "Teknik Informatika"],
    ["Haykal Alvegio", "213040028", "haykalalvegio@gmail.com", "Tenik Informatika"],
    ["Ainan Bahrul Ihsan", "213040012", "ainanbahrul@gmail.com", "Teknik Informatika"]
];
?>

<?php
foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs[0] ?></li>
        <li>NPM: <?php echo $mhs[1] ?></li>
        <li>Email: <?php echo $mhs[2] ?></li>
        <li>Jurusan: <?php echo $mhs[3] ?></li>
    </ul>
<?php } ?>