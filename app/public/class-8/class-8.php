<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.8</title>

        <!-- bootstrap css link -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- font-awesome css link -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- style css link -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- responsive css link -->
        <link href="assets/css/responsive.css" rel="stylesheet">
        <!-- css link end -->
        
    </head>
    <body>
        
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        echo "<h1 class='text-center'>PHP-7</h1> \n<br/>";
                        echo "<h3 class='text-center'>১.৮ - ++ এবং -- নিয়ে আরও কিছু কথা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start
// Arithmetic operator
$number = 12 + 3; // 12 operant, + operator
echo $number;
echo "\n</br>";
$a = 7;
$x = $y = $a;
echo $x,"\n</br>",$y;
echo "\n</br>";
$number2 = 8;
$number2++;
echo $number2;
echo "\n</br>";
$n = 7;
$m = $n++;
echo $m, "\n</br>", $n;
/* PHP how count it.
$m = $n++;
$m = $n;
$n = $n + 1;
*/
/* PHP how count it.
$m = ++$n;
$n = 1 + $n;
$m = $n;
*/
// php end

                        </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-area">

                        <?php
                        echo "<h4>PHP Code Result: </h4>";
                        
// php code start
// Arithmetic operator
$number = 12 + 3; // 12 operant, + operator
echo $number;
echo "\n</br>";
$a = 7;
$x = $y = $a;
echo $x,"\n</br>",$y;
echo "\n</br>";
$number2 = 8;
$number2++;
echo $number2;
echo "\n</br>";
$n = 7;
$m = $n++;
echo $m, "\n</br>", $n;
/* PHP how count it.
$m = $n++;
$m = $n;
$n = $n + 1;
*/
/* PHP how count it.
$m = ++$n;
$n = 1 + $n;
$m = $n;
*/
// php end
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-area-text">
                            <p ><?php echo "© 2019 - Rayhan Uddin Chowdhury" ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- jquery js link -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- bootstrap js link -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- main js link -->
        <script src="assets/js/main.js"></script>
    </body>
</html>