
<?php

$angka = 0;

if (isset($_POST["angka"])) {
    $angka = $_POST["angka"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6b</title>
    <style>
    .flex {
        display: flex;
        gap: 2px;
    }

    .bluebox,
    .whitebox {
        width: 75px;
        height: 75px;
        line-height: 75px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        color: white;
        border: 1px solid black;
        background-color: #5678;
    }

    .whitebox {
        background-color: white;
        color: black;
    }
    </style>
</head>

<body>

    <form method="POST">
        <span>Masukan angka</span>
        <span> : </span>
        <input type="text" name="angka" id="angka" placeholder="Masukkan angka..." />
        <input type="submit" value="tampilkan" name="tampilkan" id="tampilkan" />
    </form>

    <br>
    <br>


    <?php for ($i = $angka; $i >= 1; $i--) : ?>
    <div class="flex">
        <?php for ($j = 1; $j <= $i; $j++) : ?>
        <?php if ($i % 2 == 0) : ?>
        <div class="bluebox"><?= $i  ?></div>
        <?php else : ?>
        <div class="whitebox"><?= $i ?></div>
        <?php endif ?>
        <?php endfor ?>
    </div>
    <?php endfor ?>

</body>

</html>
