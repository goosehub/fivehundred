<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Five Hundred Internal Server Error</title>

	<!-- jQuery CDN -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- highlighter.js CDN -->
	<!-- Primary -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/styles/default.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/highlight.min.js"></script>
	<!-- Alt -->
	<!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/highlight.js/9.4.0/styles/default.min.css"> -->
	<!-- <script src="//cdn.jsdelivr.net/highlight.js/9.4.0/highlight.min.js"></script> -->

</head>
<body>

<!-- Page content -->
<pre><code id="code" class="html">
	&lt;html&gt; Five Hundred Internal Server_Error &lt;/html&gt;
</code></pre>

<!-- Init Highlighter JS -->
<script>
	$(document).ready(function() {
	  $('pre code').each(function(i, block) {
	    hljs.highlightBlock(block);
	    name = 'html';
	    value = 'dracula';
	    ignore_illegals = true;
	    hljs.highlight(name, value, ignore_illegals);
	  });
	});
</script>

</body>
</html>