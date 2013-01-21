<? include_once 'flesh/__starter.php' ?>
<!DOCTYPE html>
<!--[if IE 7]><html class="lte-ie9 lte-ie8 ie7" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 8]><html class="lte-ie9 lte-ie8 ie8" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 9]><html class="lte-ie9 ie9" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if gte IE 9]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"><!--<![endif]--><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><? echo Config::get('title') ?></title>

	<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/css/xtree.css" />
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
<!--	<link rel="stylesheet" type="text/css" href="/css/base.css" />-->

<!--	<link rel="stylesheet" type="text/css" href="/css/select2.css" />-->
<!--	<link rel="stylesheet" type="text/css" href="/css/default.css" />-->

</head>
<body>

<div class="wrap">
  <div class="header">
    <div class="logo">
      <h1 class="text-logo"><? echo Config::get('title') ?></h1>
      <p class="currentime"><? echo date('d.m.Y') ?></p>
    </div>
  </div>

  <div class="main">
    <div class="bar">
      <div class="wrapper-tree">
        <div id="treeDiv"></div>
      </div>
    </div>
    <div class="content" id="content">
      <div class="wrapper-content">
        <div class="table-nav well">
          <button class="btn btn-edit btn-mini btn-primary disabled" type="button">Изменить</button>
          <button class="btn btn-remove btn-mini btn-danger disabled" type="button">Удалить</button>
        </div>
        <div class="table-content"></div>
        <div class="cards-content hidden"></div>
      </div>
    </div>
  </div>

  <div class="footer">
    <p class="cop">Версия: 1.1.0-SNAPSHOT</p>
  </div>
</div>


<script type="text/javascript" src="/js/jquery.js"></script>


<!--xtree-->
<script type="text/javascript" src="/js/xtree/js/xtree.js"></script>
<script type="text/javascript" src="/js/xtree/js/xmlextras.js"></script>
<script type="text/javascript" src="/js/xtree/js/xloadtree.js"></script>
<script type="text/javascript" src="/js/xtree-starter.js"></script>
<!--xtree-->

<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="js/lodash.js"></script>
<script type="text/javascript" src="js/backbone.js"></script>


<!--<script type="text/javascript" src="/js/jquery.cookie.js"></script>-->
<!--<script type="text/javascript" src="/js/custom.js"></script>-->
<!--<script type="text/javascript" src="/js/select2.js"></script>-->

<script type="text/javascript" src="js/app/template/main.js"></script>
<script type="text/javascript" src="js/app/app.js"></script>

</body>
</html>