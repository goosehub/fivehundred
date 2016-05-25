<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $code['title']; ?></title>
	<link rel="stylesheet" href="resources/libraries/highlightjs-9.4.0.min.css">
	<link rel="stylesheet" href="resources/styles/<?php echo strtolower(str_replace(' ', '-', $syntaxes[$current_syntax])); ?>.css">
	<link rel="stylesheet" href="resources/style.css">
</head>
<body>

<pre><code>
<?php if ($validation_errors) { echo $validation_errors;  } else { echo htmlentities($code['code']); } ?>
</code></pre>

<script src="resources/libraries/jquery-2.2.0.min.js"></script>
<script src="resources/libraries/highlightjs-9.4.0.min.js"></script>
<script src="resources/script.js"></script>
</body>
</html>