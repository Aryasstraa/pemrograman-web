<?php

$umur = 15;
$Umur = 20;

//komentar
# ini komentar juga

echo "<br> umur agnes saat ini adalah $umur";
echo "<br> umur komang saat ini adalah $Umur";
echo '<br> umur agnes saat ini adalah $umur'; //jika memakai petik 1 php akan mengoutput apa pun yang ada pada dalam petik 1
echo '<br> umur agnes saat ini adalah'. $umur;
echo '<br> umur komang 3 tahun yang lalu'.' '.'adalah' .$umur-3;



$ur = 15;

if($ur<17){
    echo "anak - anak";
}else{
    echo "bukan anak";
};
?>

<br>
<br>

<?php
// Percabangan if else
$cuaca = 'mendung';
if ($cuaca == 'hujan') {
    echo 'karena ' . $cuaca . ' maka pakai payung';
} elseif ($cuaca == 'mendung') {
    echo 'karena cuaca ' . $cuaca . ' maka bawa payung';
} else {
    echo 'karena cuaca ' . $cuaca . ' maka tidak bawa payung';
}

echo '<br>';

$hari = 'jumat';
switch ($hari) {
    case 'senin':
        echo 'Upacara';
        // break;
    case 'selasa':
        echo 'kekampus';
        //break;
    case 'rabu':
        echo 'kerja';
        //break;
    default:
        echo 'saatnya pacaran';
       // break;
}

echo '<br>';

$hari = 'jumat';
switch ($hari) {
    case 'senin':
        echo 'Upacara';
        break;
    case 'selasa':
        echo 'kekampus';
        break;
    case 'rabu':
        echo 'kerja';
        break;
    default:
        echo 'saatnya pacaran';
        break;
}

?>

<br>
<br>

<?php
//koreksi quiz (percabangan)
$username = 123;
$password = 123;
$tipe = "admin";

if (!($username == $password)){  //! = NOT
    echo "aman";
} else if($tipe == "admin"){
    echo "bahaya";
}
?>

<br>
<br>

<?php

$bangundatar = "segitiga";

switch($bangundatar){
    case 'segitiga':
        echo 'sisi jumlahnya 3 <br>';
        echo 'besarnya setiap sudut 60 derajat <br>';
        echo ' memiliki alas dan tinggi';
        // break;
    case 'persegi':
        echo'sisi jumlahnya 4 <br>';
        echo 'besar sudutnya 90 derajat <br>';
        echo 'memiliki 4 sisi yang sama panjang';
        break;
    default:
        echo'bangun datar belum terdaftar';
}
?>

<br>
<br>

<?php
$bulan = 13;

switch($bulan){
    case 1:
        echo "Bulan ke $bulan adalah Januari";
        break;
    case 2:
        echo 'Bulan ke '.$bulan.' adalah Februari';
        break;
    case 3:
        echo "Bulan ke $bulan adalah Maret";
        break;
    case 4:
        echo 'Bulan ke '.$bulan.' adalah April';
        break;
    case 5:
        echo "Bulan ke $bulan adalah Mei";
        break;
    case 6:
        echo 'Bulan ke '.$bulan.' adalah Juni';
        break;
    case 7:
        echo "Bulan ke $bulan adalah Juli";
        break;
    case 8:
        echo 'Bulan ke '.$bulan.' adalah Agustus';
        break;
    case 9:
        echo "Bulan ke $bulan adalah September";
        break;
    case 10:
        echo 'Bulan ke '.$bulan.' adalah Oktober';
        break;
    case 11:
        echo "Bulan ke $bulan adalah November";
        break;
    case 12:
        echo 'Bulan ke '.$bulan.' adalah Desember';
        break;
    default:
        echo "Bulan ke $bulan Belum terdaftar di data anda ";
        break;

}

?>

<!-- if else digunakan jika punya bnyk kondisi dan bisa flexsibel
untuk kasus yg cocokan angka bisa memakai switch case -->

<br>
<br>

<?php
$namaHari = "jumat";

switch ($namaHari){
    case "senin";

    case "selasa";

    case "rabu";
        echo "Kuliah";
        break;
    case "kamis";

    case "jumat";
        echo "Kerja";
        break;
    default:
        echo "Saat nya pacaran";
}
?>

<br>
<br>

<?php

for ($a=1; $a>=-10; $a--){
    echo "Baris ke-$a <br />";
}

?>

<!-- $a=1 = inisialisasi nilai,, 
$a<=10 = desision klo benar akan dijalankan perulangan jika tidak maka perulangan akan berhenti, 
$a++ Incremen menambah 1 dari sebelumnya, 
$a-- decremen akan mengurangkan 1 dari sebelumnya -->

<br>
<br>

<?php

$awal = 1;
echo "<ul>";
while($awal <= 10){
    echo "<li>Nilai Sekarang adalah $awal <br/>";
    $awal++;
}
echo "<ul>";
?>

<br>
<br>

<?php
$d = 0;
do{
    echo "perulangan ke-$d <br>";
    $d--;
}while ($d >= 1)
?>

<br>
<br>

<?php
$d = 0;
while ($d>=1){
    echo "perulangan ke-$d <br/>";
    $d--;
}

?>

<br>
<br>

<?php
$mobil = array ("volvo", "BMW", "Toyota");

$mobil[0] = "Volvo";
$mobil[1] = "BMW";
$mobil[2] = "Toyota";

echo $mobil[1];
echo "<br><br>";


$mobil[2] = "Supra";
$mobil[3] = "Toyota";

echo $mobil[2];
echo "<br><br>";
echo $mobil[3];
?>

<br>
<br>

<?php
$umur = array ("jorge"=>"29", "Jenifer"=>"28");
$umur ['jorge'] = "29";
$umur ['Jenifer'] = "28";

echo $umur ['jorge']."<br>";

foreach ($umur as $K => $V){ //foreach digunakan untuk 
    echo " umurnya $K adalah $V tahun.<br>";
}

?>