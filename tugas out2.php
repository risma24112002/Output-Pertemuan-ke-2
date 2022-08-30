<!DOCTYPE html>
<html>
<head>
        <title>PHP</title>
</head>
<body>
    <h1>Output Pertemuan 2</h1>
    <h4>Risma Ramadhaningtias</h4>
    <h4>210411100074</h4>
    <h5>Berikut Hasilnya : </h5>
    <?php
        function Penugasan(int $x, int $y, int $z) {
        $z = $x + $y * $z;
        return $z;
        }

        echo "<b>5 + 10 x 3 = " . Penugasan(5,10,3) . "<br></b>";
        echo "<b>7 + 13 x 5= " . Penugasan(7,13,5) . "<br></b>";
        echo "<b>2 + 4  x 6= " . Penugasan(2,4,6) . "</b>";
    ?>

</body>
</html>