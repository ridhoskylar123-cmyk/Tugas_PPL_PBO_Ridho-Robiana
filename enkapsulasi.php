<?php
class siswa {
    //property pprivate,tidak bisa diubah lamgsung dari luar class
    private $nama;
    private $nilaiPBO;

    //Method public untuk mengisi data (Setter)
    public function setData($namaBaru, $nilaiBaru) {
$this->nama = $namaBaru;
// validasi : Nilai tidak boleh lebih dari 100
if($nilaiBaru <=100) {
$this->nilaiPBO = $nilaiBaru;
} else {
$this->nilaiPBO = 100;
}
}// Method public untuk mwngamil data (Getter)

public function getInfo() {

     return "siswa: " .$this->nama . ", Nilai PBO: " . $this->nilaiPBO;

}

}

$siswa1 = new Siswa();
// $siswa1->nilaiPBO = 150; // INI AKAN ERROR karena private!
$siswa1->setData("Nanang", 83);
echo $siswa1->getInfo();
?>