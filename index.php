<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="jquery.highlighttextarea.js"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link href="jquery.highlighttextarea.css" rel="stylesheet">
</head>
<body>
    <?php
    $string_old = "The quick brown fox jumped over the lazy dog";
    $string_new = "The quicks brown foxs jumped over the lazy dog.";
    $array1 = explode(" ", $string_old);
    $array2 = explode(" ", $string_new);
    $result = array_diff($array2, $array1);
    // print_r($result);

    echo 'TEXT 1: '.$string_old;
    echo '<br>';
    echo 'TEXT 2: '.$string_new;
    echo '<br>';

    ?>
    <textarea cols="50" rows="5"><?=$string_new;?></textarea>

    <script>
    $('textarea').highlightTextarea({
        color: '#ADF0FF',
        words: [<?php
        $num=0;
        foreach($result as $val){
        $num++;
            echo ($num > 1?', ':'')."'".$val."'";
        }
        ?>]
    });
    </script>
</body>
</html>