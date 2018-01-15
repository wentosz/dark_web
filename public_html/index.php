<?php
$skin="light";
    if(isset($_GET['skin']) and $_GET['skin']=="light")
    {
        $skin="light";
    }
 else if(isset($_GET['skin']) and $_GET['skin']=="dark")
    {
        $skin="dark";
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Dark web</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo $skin; ?>.css">
    </head>
    <body>
        <div><h1>Világos?!</h1></div>
        <div><p>Ez egy dark üzemmódot támogató oldal!</p></div>
        <a href="?skin=light" >világos</a>
        <a href="?skin=dark" >sötét</a>
    </body>
</html>

