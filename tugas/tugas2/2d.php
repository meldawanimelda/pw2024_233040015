<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
    <style>
        .flex {
            display: flex;
        }

        .box {
            width: 100px;
            height: 100px;
            border: 1px solid black;
        }

        .box1 {
            background-color: black;
        }

        .box2 {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <div class="flex">
            <?php for ($j = 1; $j <= 5; $j++) { ?>
                <?php if (($i + $j) % 2 == 0) { ?>
                    <div class="box box1"></div>
                <?php } else { ?>
                    <div class="box box2"></div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>
</body>

</html>
