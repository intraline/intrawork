<!DOCTYPE>
<html>
<title>IntraWork</title>
    <head>
    </head>
    <body>
    <h1>Üdvözli az IntraWork</h1>
    <?php

include_once './dashboard/Dashboard.php';


$d = new Dashboard();


$arr = $d->getData();

    foreach($arr as $item){
        echo '<label>'.$item['nev'].'</label>'.'<br/>';

    }

?>        
    </body>
</html>