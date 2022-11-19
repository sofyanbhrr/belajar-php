<?php
/*
$nama = "Sofyan";

echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>"
    $i++;
}
*/
/*
do {
    $n= $i + 1;
    echo $n." ".$nama."<br/>"
}

$data = array('Samsung', 'Nokia', 'Apple', 'Realme', 'Xiomi')
/*
switch($nama) {
    case "Sofyan":
        $pesan = $nama." adalah orang Wonosobo"
    break;
    case "Budi":
        $pesan = $nama." berasal dari pulau Jawa"
    break;
    default:
        $pesan = $nama." dari mana ya?"

}
*/
echo;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" metode="post">
        <label>Nama</label>
        <input type="text" nama="nama">
        <label>Jumlah</label> 
        <input type="text" nama="no">
        <label>Jumlah</label> 
        <input type="text" nama="submit" value="submit">

    </form>
    <?php
        if(!empty($_POST['submit'])) {
            switch($nama) {
                case "Sofyan":
                    $pesan = $nama." adalah orang Wonosobo"
                break;
                case "Budi":
                    $pesan = $nama." berasal dari pulau Jawa"
                break;
                default:
                    $pesan = $nama." dari mana ya?"
            
            }
        }
    ?> 
</body>
</html>