

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <?php if($page == 'Home'){ ?>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <?php }else{ ?>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php } ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <title>College Day</title>
</head>
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location:../../index.php');
    exit();
}
?>
