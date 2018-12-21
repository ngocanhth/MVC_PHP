<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="csrf-token" content="pPpLIMl8sEXSYoFuR1lS4qISDrmjzKOmR6N1w0FR"> -->
    <title>MVC PHP</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="<?php echo BASE_URL;?>public/library/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL;?>public/css/style.css" rel="stylesheet">
    <script type="text/javascript" scr="<?php echo BASE_URL;?>library/js/bootstrap.min.js"></script>
    
</head>
<body>
	<div class="container">
		<article>
	        <?php echo $content ?>
	    </article>
	</div>
</body>
</html>

