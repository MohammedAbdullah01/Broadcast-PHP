
<?php

/*
- Use Cli And Bootstrap
- Write a PHP Function Check If The Number Is Prime Or Not
 */

/**
 * @param int $number
 * @return string
 */
function getPrimeNumber(int $number): string
{
    for ($i = 2; $i < $number; $i++):
        if ($number % $i == 0):
            return "{$number} => Not a Prime Number ( The remainder of the division is => 0)";
        endif;
    endfor;

    return "{$number} => This Number Is Prime";
}

echo getPrimeNumber(24) . "\n"; // Not a Prime Number
echo getPrimeNumber(17); // This Number Is Prime
?>



<?php

/*
- Draw thead table from number 1 to 10, then tbody in each column 10 fields, 
    so that the final table is 10 x 10.
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
    <h1 class="text-center p-2 my-3">Check From Prime Numbers</h1>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Prime</th>
            </tr>

        </thead>
        <tbody>
            
            <?php
            for ($a = 2; $a <= 50; $a++) : ?>
                <tr>
                
                <td><?php echo $a?></td>
                <td>
                    <?php 
                        echo  getPrimeNumber($a)
                    ?>
                </td>
            </tr>
                <?php endfor; ?>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>







