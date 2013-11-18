<?php
$grade = $_POST["arr"];

foreach($arr as $array){
$picutre = $array['picture'];
echo <<<EOHTML
<html>
<head>
<link rel="stylesheet" href="css/styles.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/jquery.transit.min.js"></script>
<body>
<a class="cylink" href="main.php">Home</a><br/>
<br/>
<img id="image" border="0" src="$array['picture']"  width="304" height="228">
<br/>

</body>
</html>
EOHTML;

}
?>
