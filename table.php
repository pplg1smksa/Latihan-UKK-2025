<?php 

session_start();

if (isset($_SESSION['tmpEventCode'])) {
    $eventCode = $_SESSION['tmpEventCode'];
}
if (isset($_SESSION['tmpEventName'])) {
    $eventName = $_SESSION['tmpEventName'];
}
if (isset($_SESSION['tmpCategories'])) {
    $categories = $_SESSION['tmpCategories'];
}
if (isset($_SESSION['tmpDate'])) {
    $date = $_SESSION['tmpDate'];
}
if (isset($_SESSION['tmpOrganizer'])) {
    $organizer = $_SESSION['tmpOrganizer'];
}

$eventCode[] = $_POST['eventCode'];
$eventName[] = $_POST['eventName'];
$categories[] = $_POST['categories'];
$date[] = $_POST['date'];
$organizer[] = $_POST['organizer'];

// var_dump($eventCode);
// var_dump($eventName);
// var_dump($categories);
// var_dump($date);
// var_dump($organizer);

$_SESSION['tmpEventCode'] = $eventCode;
$_SESSION['tmpEventName'] = $eventName;
$_SESSION['tmpCategories'] = $categories;
$_SESSION['tmpDate'] = $date;
$_SESSION['tmpOrganizer'] = $organizer;

// session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Event</title>
</head>
<body>
    <table>
        <tr>
            <th>Kode Event</th>
            <th>Nama Event</th>
            <th>Kategori</th>
            <th>Tanggal</th>
            <th>Penyelenggara</th>
        </tr>
        <?php for ($i=0; $i < count($eventCode); $i++) : ?>
        <tr>
            <td><?= $eventCode[$i] ?></td>
            <td><?= $eventName[$i] ?></td>
            <td><?= $categories[$i] ?></td>
            <td><?= $date[$i] ?></td>
            <td><?= $organizer[$i] ?></td>
        </tr>
        <?php endfor ?>
    </table>
    <a href="event.php">Kembali</a>
    <a href="index.php">Log Out</a>
</body>
</html>