<?php

include('connection.php');

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM karyawan WHERE id='$id' ");

if ($delete)
    header('location: list.php');
else
    echo 'Delete Data Gagal';

