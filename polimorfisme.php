 <?php

 // Class Parent
 class Profesi {
    public function bekerja() {
        return "Melakukan pekerjaan umum...";
    }
 }

 // Class Child 1
 class Guru extends profesi {
    // Method Overriding (menimpa method parent)
    public function bekerja() {
        return "pergi ke sekolah dan mengajar siswa SMK.";
    }
 }

 // Class Child 2
 class programer extends Profesi {
    // Method Overriding
    public function bekerja() {
        return "Membuka VS Code, mengetik kode PHP, dan meminum kopi.";
    }
 }
 $pakGuru = new Guru();
 $anakRPL = new Programer();
 echo $pakGuru->bekerja(); // Output: Pergi ke kelas dan mengajar siswa SMK.
 echo "<br>";
 echo $anakRPL->bekerja(); // Output: Membuka VS code, mengetik kode PHP, dan meminum kopi.
 ?>