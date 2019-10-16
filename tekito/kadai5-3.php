<html>
<body>
<title>課題5-3</title>
<p>これはテストです。</p>

<?php
    $count = 0;
    $fruit[0][0] = 0;
    $fruit[0][1] = 150;

    $fruit[1][0] = 0;
    $fruit[1][1] = 300;

    $fruit[2][0] = 0;
    $fruit[2][1] = 1000;

    echo $fruit[0][0];

    //echo "リンゴの個数が" . $fruits['apple'][0] . "個、バナナの個数が" . $fruits['banana'][0] . "個、パイナップルの個数が" . $fruit['pinapple'][0] . "個<br>";
    /*
    echo "<form method='POST' action=''>";
    echo "<input type='radio' name='add_fruit' value='apple'>リンゴを1個追加 <br>";
    echo "<input type='radio' name='add_fruit' value='banana'>バナナを1個追加 <br>";
    echo "<input type='radio' name='add_fruit' value='pinapple'>パイナップルを1個追加 <br>";

    $add_fruit = $_POST['add_fruit'];

    if ($add_fruit == 'apple') {
        $fruits['apple'][0] += 1;
        $count += 1;
    }

    elseif ($add_fruit =='banana') {
        $fruits['banana'][0] += 1;
        $count += 1;
    }

    else {
        $fruits['pinapple'][0] += 1;
        $count += 1;
    }*/
?>
</body>
</html>
