<? include_once 'flesh/__starter.php' ?>
<!DOCTYPE html>
<!--[if IE 7]><html class="lte-ie9 lte-ie8 ie7" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 8]><html class="lte-ie9 lte-ie8 ie8" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 9]><html class="lte-ie9 ie9" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if gte IE 9]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"><!--<![endif]--><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><? echo Config::get('title') ?></title>

	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="js/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
  <link rel="stylesheet" type="text/css" href="/js/xtree/js/xtree.css" />

</head>
<body>

<div id="main">

	<div id="header">
		<div class="header clearfix">
			<h1><? echo Config::get('title') ?></h1>
			<p class="currentime"><? echo date('d.m.Y') ?></p>
		</div>
		<div class="menu clearfix">
			<ul>
			</ul>
		</div>
	</div>

	<div id="body" class="clearfix">
		<div id="tables" class="cont clearfix">
			<div class="cont_left">
				<div class="menu_cont">
		      <div id="treeDiv"></div>
				</div>
			</div>

			<div class="cont_right horizontal">


				<div class="content content-horizotal hidden">
					<div class="content-list"></div>
					<div class="content-item"></div>
				</div>

				<div class="content content-vertical hidden">
					<div class="content-list col"></div>
					<div class="content-item col"></div>
				</div>

				<div class="content content-widescreen ">
					<div class="content-list"></div>
				</div>

			</div>

		</div>
	</div>

</div>

<div id="footer">
	Версия: 1.1.0-SNAPSHOT
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="/js/xtree/js/xtree.js"></script>
<script type="text/javascript" src="/js/xtree/js/xmlextras.js"></script>
<script type="text/javascript" src="/js/xtree/js/xloadtree.js"></script>
<script type="text/javascript" src="/js/xtree-starter.js"></script>

<script type="text/javascript" src="js/lodash.js"></script>
<script type="text/javascript" src="js/backbone.js"></script>

<script type="text/javascript" src="js/app/app.js"></script>

</body>
</html>