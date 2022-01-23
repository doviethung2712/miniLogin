<?php
session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
//    print_r($user);
//    die();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    table {
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #000000;
       width: 300px;
        height: 300px;
        text-align: center;
    }
</style>
<body>

<table>
    <tr>
        <th>Thông tin cá nhân</th>
    </tr>
    <tr>
        <td>Name: <?php echo $user->name; ?> </td>
    </tr>
    <tr>
        <td>Email: <?php echo $user->email; ?>  </td>
    </tr>
    <tr>
        <td>Password: <?php echo $user->password; ?>  </td>
    </tr>

</table>
<a href="home.php">Quay về trang chủ</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
