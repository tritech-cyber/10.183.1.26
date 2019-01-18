<?php
//$_SESSION['pagename'] = "index-ssl";
//include "db/pushhits.php";
	//require_once("session.php");
//	require_once("class.user.php");
	//$auth_user = new USER();
	
	//$user_id = $_SESSION['user_session'];
	
//	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
//	$stmt->execute(array(":user_id"=>$user_id));
	
//userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<html>
<head>
<title>0001 1100</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/icebowl.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">
<script>
var images = ['pict1.png', 'pict2.png', 'pict3.png'];
    
function getRandomImage(imgAr, path) {
    path = path || 'img/'; // default path here
    var num = Math.floor( Math.random() * imgAr.length );
    var img = imgAr[ num ];
    var imgStr = '<img src="' + path + img + '" alt = "">';
    document.write(imgStr); document.close();
}
</script>

</head>

<body>
<?php include "nav.html" ;

	// these variables are used by am.php and pm.php
	$amurl = array('icebowl.ioe','zulu.ioe');
	$pmurl = array('icebowl.ioe','zulu.ioe');
	//				  red       green     blue       yellow     cyan     magenta   orange     green2   violet    magenta2   blue2     green3   dark gray  light gray   tan     tan2
	$ncolor = array('#B35050','#50B350' ,'#5050B3' ,'#B3B350','#50B3B3','#B350B3','#DC7F32','#32DC7F','#7F32DC' ,'#DC327F','#327FDC','#7FDC32','#505050','#B3B3B3','#FDF6E3' ,'#FFEDBF');
	$fcolor = array('#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#000',	'#000');
	
	?>

<div class="row">
	<div class="col-2">
		<script type="text/javascript">getRandomImage(images, 'img/')</script>
	</div> <!-- end col -->
	<div class="col-3">
			<?php include "am.php" ?>	
	</div> <!-- end col -->
	<div class="col-3">
			<?php include "pm.php" ?>	
	</div> <!-- end col -->
</div><!-- end row -->
<div class="row">
	
</div>
</html>
