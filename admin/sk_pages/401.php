<?php
require_once("../_class.dba.inc.php");
require_once("../_conf.dba.inc.php");
require_once("../_static.session.inc.php");
validate_session();
?>
<html>
<head>
<title>Unauthorized access</title>
<link rel="stylesheet" type="text/css" media="screen" href="../style.css" />
<?php include('../header.php');?>

</head>
<body class="tos">
<?php include('../sidebar.php');?>
<div id="main-container"><div id="main">
<h1>Unauthorized access...</h1>

</div></div>
<?php include('../footer.php');?>

</body>
</html> 
