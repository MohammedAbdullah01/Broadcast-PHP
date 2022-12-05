<?php

/*
-
 */
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-2 my-3">Hello, world!</h1>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <?php
                for ($i = 1; $i <= 10; $i++) : ?>
                    <th scope="col"><?php echo $i ?></th>

                <?php endfor; ?>
            </tr>

        </thead>
        <tbody>
            
            <?php
            for ($a = 1; $a <= 10; $a++) : ?>
                <tr>
                    <?php

                    for ($h = 1; $h <= 10; $h++) : ?>
                        <td class="<?php if ($a == $h) {echo 'bg-success';} ?>">
                            <?php echo $a * $h ?>
                        </td>

                    <?php endfor; ?>

                </tr>
            <?php endfor; ?>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>