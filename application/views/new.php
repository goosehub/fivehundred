<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New</title>
	<link rel="stylesheet" href="resources/libraries/highlightjs-9.4.0.min.css">
	<link rel="stylesheet" href="resources/styles/<?php echo str_replace(' ', '-', $syntaxes[$current_syntax]); ?>.css">
	<link rel="stylesheet" href="resources/style.css">
</head>
<body>

<pre><code>
	<?php var_dump($_POST); ?>
</code></pre>

<script src="resources/libraries/jquery-2.2.0.min.js"></script>
<script src="resources/libraries/highlightjs-9.4.0.min.js"></script>
<script src="resources/script.js"></script>
</body>
</html>