<?php

include('connection.php');

$keyword = $_GET['keyword'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE nama='$keyword' ");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="add.php">Tambah Data</a>

    <br/><br/>

    <form action="search.php" method="GET">
        <input type="text" name="keyword" placeholder="Keyword.." value="<?php echo $_GET['keyword']?>"/>
        <button type="submit">search</button>
    </form>
     
    <br/>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Pilihan</th>
        </tr>

        <?php foreach($result as $result) :?>
        <tr>
            <td><?php echo $result['nama']?></td>
            <td><?php echo $result['alamat']?></td>
            <td><?php echo $result['umur']?></td>
            <td><?php echo $result['jenis_kelamin']?></td>
            <td>
                <a href="edit.php?id=<?php echo $result['id']?>">Edit</a>
                <a href="delete.php?id=<?php echo $result['id']?>">Delete</a>
            </td>
        </tr>

        <?php endforeach;?>    

    </table>
    
</body>
</html>