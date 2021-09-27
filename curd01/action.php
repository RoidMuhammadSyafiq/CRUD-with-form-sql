<?php
include("db.php");
        if(isset($_POST['datadiri'])){
            $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $lahir = $_POST['lahir'];
        $goldar = $_POST['goldar'];

        $kirim = mysqli_query($mysqli, "INSERT into tryit values('','$nik','$nama','$lahir','$goldar')");
        }
        ?>