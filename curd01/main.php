<?php
include("db.php");
$kirim=mysqli_query($mysqli,"SELECT* from tryit ORDER by nom DESC")
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
    //form data diri menggunakan 4 variabel
    <form action="action.php" method="post">
        <fieldset style="width: 600px;">
            <legend>FORM DATA DIRI</legend>
        <label for="nik">NIK                : </label>
        <input type="text" name="nik" id="nik" required>
        <br><br>
        <label for="nama">NAMA               : </label>
        <input type="text" name="nama" id="nama" required>
        <br><br>
        <label for="lahir">TANGGAL LAHIR      : </label>
        <input type="date" name="lahir" id="" required>
        <br><br>
        <label for="goldar">GOLONGAN DARAH    : </label>
        <select name="goldar" id="goldar" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select>
        <br><br>
        <input type="submit" value="MASUKAN" name="datadiri">
        </fieldset>
        <br><br>
      
        //tabel output dari sql
        <table>
            <tr>
                <td>NIK</td>
                <td>NAMA</td>
                <td>TGL LAHIR</td>
                <td>GOL. DARAH</td>
            </tr>

        <?php
        while($tab=mysqli_fetch_array($kirim)){
        echo'<tr>';
        echo'<td>'.$tab['nik'].'</td>';
        echo'<td>'.$tab['nama'].'</td>';
        echo'<td>'.$tab['lahir'].'</td>';
        echo'<td>'.$tab['goldar'].'</td>';
        echo'</tr>';
    }
        ?>
        </table>
    </form>
</body>
</body>
</html>
