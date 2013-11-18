<?php
$grade = $_POST["arr"];

foreach($arr['picture'] as $array){
$picture = $array;
echo <<<EOHTML
<html>
<head>
<link rel="stylesheet" href="css/styles.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/jquery.transit.min.js"></script>
<body>
<a class="cylink" href="main.php">Home</a><br/>
<br/>
<img id="image" border="0" src="$picture"  width="304" height="228">
<br/>

</body>
</html>
EOHTML;

}
?>
