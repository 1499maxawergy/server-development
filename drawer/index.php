<html lang="en">
<head>
<title>Drawer page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php

// Если число ввели
    if(isset($_GET['num']))
    {
        // принимаем число
        if(!is_numeric($_GET['num'])){
            echo 'Ты че ввел?';
            exit(0);
        }
        $number = (int)$_GET['num'];

        // инициализируем данные
        $form = $number & 3;
        $color = $number >> 1 & 3;
        $p_x = $number >> 2 & 3;
        $p_y = $number >> 3 & 3;


        // выводим эти данные
        echo '<div>' . $form, $color, $p_x, $p_y . '</div>';

        $p_x = 100 + $p_x * 100;
        $p_y = 100 + $p_y * 100;
        
        
        $brush = "yellow";
        // выбор цвета в кисточку
        switch($color){
            case 0:
                $brush = "yellow";
                break;
            case 1:
                $brush = "red";
                break;
            case 2:
                $brush = "blue";
                break;
            case 3:
                $brush = "green";
                break;
        }

        $svg_code = '<svg width = "' . $p_x . '" height= "' . $p_y . '">';
        switch($form){
            case 0:
                if ($p_x > $p_y){
                    $p_x = $p_y;
                } else {
                    $p_y = $p_x;
                }
                $svg_code .= '<circle cx="' . $p_x / 2 . '" cy ="' . $p_y / 2 . '" r="' . $p_x / 2 . '" fill = "' . $brush . '" />';
                break;
            case 1:
                $svg_code .= '<ellipse cx="' . $p_x / 2 . '" cy ="' . $p_y / 2 . '" rx="' . $p_x / 2 . '" ry="' . $p_y / 2 . '" fill = "' . $brush . '" />';
                break;
            case 2:
                $svg_code .= '<rect x="0" y="0" width="' . $p_x . '" height="' . $p_y . '" fill="' . $brush . '" />';
                break;
            case 3:
                if ($p_x > $p_y){
                    $p_x = $p_y;
                } else {
                    $p_y = $p_x;
                }
                $svg_code .= '<rect x="0" y="0" width="' . $p_x . '" height="' . $p_y . '" fill="' . $brush . '" />';
                break;
        }
        
        $svg_code .= '</svg>';
        echo $svg_code;
    }
?>

<p>
</body>
</html>