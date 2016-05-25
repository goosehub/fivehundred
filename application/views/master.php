<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Five Hundred Internal Server Error</title>
	<link rel="stylesheet" href="resources/libraries/highlightjs-9.4.0.min.css">
	<link rel="stylesheet" href="resources/styles/<?php echo strtolower(str_replace(' ', '-', $syntaxes[$current_syntax])); ?>.css">
	<link rel="stylesheet" href="resources/style.css">
</head>
<body>
<pre><code>
	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;Five Hundred Internal Server Error&lt;/title&gt;
		&lt;link rel=&quot;stylesheet&quot; href=&quot;resources/libraries/highlightjs-9.4.0.min.css&quot;&gt;
		&lt;link rel=&quot;stylesheet&quot; href=&quot;resources/styles/<?php echo strtolower(str_replace(' ', '-', $syntaxes[$current_syntax])); ?>.css&quot;&gt;
		&lt;link rel=&quot;stylesheet&quot; href=&quot;resources/style.css&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;

	&lt;span id=&quot;create&quot;&gt;<span id="create">create</span>&lt;/span&gt;
	<form action="create" method="post">
		<label for="">Code</label>
		<textarea name="code"></textarea>
		<label for="">Title [a-zA-Z0-9-_]</label>
		<input type="text" name="title"/>

		<input type="submit" value="Submit"/>
	</form>

	&lt;pre&gt;&lt;code&gt;
	<?php foreach ($codes as $code) { ?>
		&lt;a href="<?php echo $code['title']; ?>"&gt;<a href="<?php echo $code['title']; ?>"><?php echo $code['title']; ?></a>&lt;/a&gt;
	<?php } ?>&lt;/code&gt;&lt;/pre&gt;

	&lt;a href="https://github.com/goosehub/fivehundred"&gt;<a href="https://github.com/goosehub/fivehundred">GitHub</a>&lt;/a&gt;

	&lt;script src=&quot;resources/libraries/jquery-2.2.0.min.js&quot;&gt;&lt;/script&gt;
	&lt;script src=&quot;resources/libraries/highlightjs-9.4.0.min.js&quot;&gt;&lt;/script&gt;
	&lt;script src=&quot;resources/script.js&quot;&gt;&lt;/script&gt;
	&lt;/body&gt;
	&lt;/html&gt;
</code></pre>
<script src="resources/libraries/jquery-2.2.0.min.js"></script>
<script src="resources/libraries/highlightjs-9.4.0.min.js"></script>
<script src="resources/script.js"></script>
</body>
</html>