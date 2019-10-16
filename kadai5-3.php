<html>
<body>
<title>課題5-3</title>
<p>↓フルーツを増やすと「個数」と「合計金額」が表示されるよ↓</p>

<?php

    $fruit['apple'][1] = 150;
    $fruit['banana'][1] = 300;
    $fruit['pineapple'][1] = 1000;

//GETでアクセス
    $gapl = $_GET['apl'];
    $gbnn = $_GET['bnn'];
    $gpnp = $_GET['pnp'];

    if ((isset($gapl) !== FALSE) || (isset($gbnn) !== FALSE) || (isset($gpnp) !== FALSE)) {
        if (($gapl>=0) && ($gbnn>=0) && ($gpnp>=0)) {
            $fruit['apple'][0] = $gapl;
            $fruit['banana'][0] = $gbnn;
            $fruit['pineapple'][0] = $gpnp;
        }

        elseif (($gapl>=0) && ($gbnn>=0)) {
            $fruit['apple'][0] = $gapl;
            $fruit['banana'][0] = $gbnn;
            $fruit['pineapple'][0] = 0;
        }
        elseif (($gbnn>=0) && ($gpnp>=0)) {
            $fruit['banana'][0] = $gbnn;
            $fruit['pineapple'][0] = $gpnp;
            $fruit['apple'][0] = 0;
        }
        elseif (($gapl>=0) && ($gpnp>=0)) {
            $fruit['apple'][0] = $gapl;
            $fruit['banana'][0] = 0;
            $fruit['pineapple'][0] = $gpnp;
        }
        elseif (($gapl>=0) && ($gbnn<0) && ($gpnp<0)) {
            $fruit['apple'][0] = $gapl;
            $fruit['banana'][0] = 0;
            $fruit['pineapple'][0] = 0;
        }
        elseif (($gbnn>=0) && ($gapl<0) && ($gpnp<0)) {
            $fruit['apple'][0] = 0;
            $fruit['banana'][0] = $gbnn;
            $fruit['pineapple'][0] = 0;
        }
        elseif (($gpnp>=0) && ($gapl<0) && ($gbnn<0)) {
            $fruit['apple'][0] = 0;
            $fruit['banana'][0] = 0;
            $fruit['pineapple'][0] = $gpnp;
        }
    }

    else {
        $fruit['apple'][0] = 0;
        $fruit['banana'][0] = 0;
        $fruit['pineapple'][0] = 0;
    }

    if ($fruit['apple'][0]>0)
        echo "リンゴ: " . $fruit['apple'][0] . "個<br>";
    if ($fruit['banana'][0]>0)
        echo "バナナ: " . $fruit['banana'][0] . "個<br>";
    if ($fruit['pineapple'][0]>0)
        echo "パイナップル: " . $fruit['pineapple'][0] . "個<br>";

    $price = $fruit['apple'][0]*$fruit['apple'][1] + $fruit['banana'][0]*$fruit['banana'][1] + $fruit['pineapple'][0]*$fruit['pineapple'][1];
    if (($fruit['apple'][0]>0) || ($fruit['banana'][0]>0) || ($fruit['pineapple'][0]>0))
        echo '合計: ' . $price . '円<br>';


    echo "<h2>個数増やすよ</h2>";
    echo "<p><a href='kadai5-3.php?apl=" . ($fruit['apple'][0]+1) . "&bnn=" . $fruit['banana'][0] . "&pnp=" . $fruit['pineapple'][0] . "'>リンゴ増やすよ</a></p>";
    echo "<p><a href='kadai5-3.php?apl=" . $fruit['apple'][0] . "&bnn=" . ($fruit['banana'][0]+1) . "&pnp=" . $fruit['pineapple'][0] . "'>バナナ増やすよ</a></p>";
    echo "<p><a href='kadai5-3.php?apl=" . $fruit['apple'][0] . "&bnn=" . $fruit['banana'][0] . "&pnp=" . ($fruit['pineapple'][0]+1) . "'>パイナップル増やすよ</a></p>";

    echo "<h2>個数減らすよ</h2>";
    echo "<p><a href='kadai5-3.php?apl=" . ($fruit['apple'][0]-1) . "&bnn=" . $fruit['banana'][0] . "&pnp=" . $fruit['pineapple'][0] . "'>リンゴ減らすよ</a></p>";
    echo "<p><a href='kadai5-3.php?apl=" . $fruit['apple'][0] . "&bnn=" . ($fruit['banana'][0]-1) . "&pnp=" . $fruit['pineapple'][0] . "'>バナナ減らすよ</a></p>";
    echo "<p><a href='kadai5-3.php?apl=" . $fruit['apple'][0] . "&bnn=" . $fruit['banana'][0] . "&pnp=" . ($fruit['pineapple'][0]-1) . "'>パイナップル減らすよ</a></p>";

?>
</body>
</html>
