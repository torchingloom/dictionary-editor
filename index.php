<? include_once 'flesh/__starter.php' ?>
<!DOCTYPE html>
<!--[if IE 7]><html class="lte-ie9 lte-ie8 ie7" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 8]><html class="lte-ie9 lte-ie8 ie8" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 9]><html class="lte-ie9 ie9" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if gte IE 9]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"><!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo Config::get('title') ?></title>

<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/css/font-awesome.css" />
<!--[if IE 7]>
<link rel="stylesheet" href="/css/font-awesome-ie7.min.css">
<![endif]-->
<link rel="stylesheet" type="text/css" href="/js/jqtree.css" />
<link rel="stylesheet" type="text/css" href="/css/main.css" />

</head>

<body>

<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1 class="text-logo"><? echo Config::get('title') ?></h1>

			<p class="currentime"><? echo date('d.m.Y') ?></p>
		</div>
	</div>

	<div class="menu">
		<ul>
			<li class="active"><a href="/">Справочники</a></li>
			<li><a href="#">Метаданные</a></li>
			<li><a href="#">Матрица доступа</a></li>
		</ul>
	</div>

	<div class="main">
		<div class="bar">
			<div class="wrapper-tree">
				<div id="treeDiv"></div>
			</div>

			<button class="btn btn-mini btn-toggle-bar hidden"><i class="icon-chevron-left"></i></button>
		</div>

		<div class="content" id="content">
			<div class="wrapper-content">
				<div class="table-nav well well-small hidden">
					<button class="btn btn-edit btn-mini btn-primary disabled" type="button"><i class="icon-edit"></i> Изменить</button>
					<button class="btn btn-remove btn-mini btn-danger disabled" type="button"><i class="icon-trash"></i> Удалить</button>
				</div>

				<div class="table-content"></div>

				<div class="cards-content hidden"></div>
			</div>
		</div>
	</div>



  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Выбор из справочника городов</h3>
    </div>
    <div class="modal-body">
      <table class="table table-striped  table-condensed table-dictionary table-another-dictionary">
        <thead>
        <tr class="example-head-dic">
          <th><span class="th-text">Наименование</span><i class="icon-sort icon-left"></i><i class="icon-filter icon-right"></i></th>
          <th><span class="th-text">Наименование (анг)</span><i class="icon-sort icon-left"></i><i class="icon-filter icon-right"></i></th>
          <th><span class="th-text">Код страны</span><i class="icon-sort icon-left"></i><i class="icon-filter icon-right"></i></th>
          <th><span class="th-text">Наименование страны</span><i class="icon-sort icon-left"></i><i class="icon-filter icon-right"></i></th>
        </tr>
        </thead>
        <tbody>
        <tr class="item-another-dic">
          <td>Москва</td>
          <td>Moscow</td>
          <td>RF</td>
          <td>Россия</td>
        </tr>
        <tr class="item-another-dic">
          <td>Лондон</td>
          <td>London</td>
          <td>GB</td>
          <td>Великобритания</td>
        </tr>
        <tr class="item-another-dic">
          <td>Вашингтон</td>
          <td>ashington</td>
          <td>US</td>
          <td>США</td>
        </tr>
        <tbody>
      </table>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Выбрать</button>
      <button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
    </div>
  </div>

	<div class="footer">
		<p class="cop">Версия: 1.1.0-SNAPSHOT</p>
	</div>
</div>


<script type="text/javascript" src="/js/jquery.js"></script>

<script type="text/javascript" src="/js/tree.jquery.js"></script>
<script type="text/javascript" src="/tree-data.json.php"></script>

<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/lodash.js"></script>
<script type="text/javascript" src="/js/backbone.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>

<script type="text/javascript" src="/js/app/template/main.js"></script>
<script type="text/javascript" src="/js/app/app.js"></script>

</body>
</html>