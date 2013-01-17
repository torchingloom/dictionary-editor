<!DOCTYPE html>
<!--[if IE 7]><html class="lte-ie9 lte-ie8 ie7" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 8]><html class="lte-ie9 lte-ie8 ie8" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 9]><html class="lte-ie9 ie9" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if gte IE 9]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"><!--<![endif]--><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>SecLims - Редактирование/просмотр прав доступа / Пользователь : admin</title>

	<link href="css/reset.css" type="text/css" rel="stylesheet">
	<link href="js/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="css/default.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="js/treeview/jquery.treeview.css" />

   	<script src="js/jquery.js" type="text/javascript"></script>
   	<script src="js/jquery.cookie.js" type="text/javascript"></script>
   	<script src="js/treeview/jquery.treeview.js" type="text/javascript"></script>
   	<script src="js/treeview/demo.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/custom.js"></script>

</head>

<body>
<div id="main">
<div id="header">
	<div class="header clearfix">
		<h1>Ввод параметров операций на денежном и валютном рынке</h1>
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

			<div class="menu_viewtab clearfix">
				<span title="подробный вид">подробный вид</span>
				<span title="подробный вид">подробный вид</span>
			</div>

			<ul id="red" class="treeview-red tab">
				<li>
					<span>Справочник - 1</span>

					<ul>
						<li><span>Страны</span></li>
						<li><span>Города</span></li>
						<li><span>Округа</span></li>
						<li><span>Районы</span></li>
					</ul>

				</li>
				<li><span>Справочник - 2</span></li>
				<li><span>Справочник - 3</span></li>
				<li><span>Справочник - 4</span></li>
			</ul>

		</div>

	</div>

	<div class="cont_right vertical">

	<!--<div class="horizontal_view">

		<div class="right_top_cont">
			<div class="cont_table_bar right clearfix">
				<span title="кнопка">кнопка</span>
				<span title="кнопка">кнопка</span>
				<span title="кнопка">кнопка</span>
				<span title="кнопка">кнопка</span>
			</div>

			<div class="cont_table_bar left clearfix">
				<span title="кнопка">кнопка</span>
				<span title="кнопка">кнопка</span>
				<span title="кнопка">кнопка</span>
				<span title="кнопка">кнопка</span>
			</div>

			<div class="wrapper_head">
			<div class="cont_table">

				<table>
					<thead>
					<tr>
						<th><input type="checkbox"></th>
						<th>&nbsp;</th>
						<th>Пользователь</th>
						<th>IP-адрес</th>
						<th>Дата начала периода</th>
						<th>Дата окончания периода</th>
						<th>&nbsp;</th>
					</tr>

					</thead>
					<tbody>

						<tr>
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="91" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td><a id="jsmith">jsmith</a></td>
							<td>127.0.0.1</td>
							<td>01.12.2012 00:00</td>
							<td>01.12.2016 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="91" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td><a id="jsmith_curt">jsmith</a></td>
							<td>172.29.1.121</td>
							<td>05.11.2012 00:00</td>
							<td>31.12.2019 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.121</td>
							<td>05.11.2012 00:00</td>
							<td>31.12.2019 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.121</td>
							<td>05.11.2012 00:00</td>
							<td>31.12.2019 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.121</td>
							<td>05.11.2012 00:00</td>
							<td>31.12.2019 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.121</td>
							<td>05.11.2012 00:00</td>
							<td>31.12.2019 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.121</td>
							<td>05.11.2012 00:00</td>
							<td>31.12.2019 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.121</td>
							<td>05.11.2012 00:00</td>
							<td>31.12.2019 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.122</td>
							<td>01.11.2012 00:00</td>
							<td>30.11.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="41" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.175</td>
							<td>01.01.2013 00:00</td>
							<td>01.01.2020 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="94" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.18</td>
							<td>01.11.2012 00:00</td>
							<td>30.11.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="21" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>192.168.245.26</td>
							<td>01.12.2012 00:00</td>
							<td>31.12.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="20" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.175</td>
							<td>01.01.2013 00:00</td>
							<td>01.01.2020 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="94" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.18</td>
							<td>01.11.2012 00:00</td>
							<td>30.11.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="21" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>192.168.245.26</td>
							<td>01.12.2012 00:00</td>
							<td>31.12.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="20" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.175</td>
							<td>01.01.2013 00:00</td>
							<td>01.01.2020 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="94" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.18</td>
							<td>01.11.2012 00:00</td>
							<td>30.11.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="21" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>192.168.245.26</td>
							<td>01.12.2012 00:00</td>
							<td>31.12.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="20" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.175</td>
							<td>01.01.2013 00:00</td>
							<td>01.01.2020 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="94" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.18</td>
							<td>01.11.2012 00:00</td>
							<td>30.11.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="21" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>192.168.245.26</td>
							<td>01.12.2012 00:00</td>
							<td>31.12.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="20" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.175</td>
							<td>01.01.2013 00:00</td>
							<td>01.01.2020 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="94" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.18</td>
							<td>01.11.2012 00:00</td>
							<td>30.11.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="21" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>192.168.245.26</td>
							<td>01.12.2012 00:00</td>
							<td>31.12.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="20" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.175</td>
							<td>01.01.2013 00:00</td>
							<td>01.01.2020 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="94" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.18</td>
							<td>01.11.2012 00:00</td>
							<td>30.11.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="21" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>192.168.245.26</td>
							<td>01.12.2012 00:00</td>
							<td>31.12.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="20" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.175</td>
							<td>01.01.2013 00:00</td>
							<td>01.01.2020 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="94" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.18</td>
							<td>01.11.2012 00:00</td>
							<td>30.11.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="21" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>192.168.245.26</td>
							<td>01.12.2012 00:00</td>
							<td>31.12.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="20" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.175</td>
							<td>01.01.2013 00:00</td>
							<td>01.01.2020 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="94" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>172.29.1.18</td>
							<td>01.11.2012 00:00</td>
							<td>30.11.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="21" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

						<tr class="">
							<td><input type="checkbox"></td>
							<td class="edit_but">
								<form class="editForm"
									  action="/seclimits/admin/editRestriction.htm"
									  method="get">
									<input type="hidden" value="62" name="id"/>
									<input type="submit" value=" " class="editButton" title="Редактировать"/>
								</form>
							</td>
							<td>jsmith</td>
							<td>192.168.245.26</td>
							<td>01.12.2012 00:00</td>
							<td>31.12.2013 23:59</td>
							<td>

								<form class="deleteForm"
									  action="/seclimits/admin/deleteRestriction.htm"
									  method="post">
									<input type="hidden" value="20" name="id"/>
									<input type="submit" value=" " class="deleteButton" title="Удалить"/>
								</form>

							</td>
						</tr>

					</tbody>
				</table>
			</div>
			</div>
		</div>

		<div class="cont_item">

			<form>
				<div class="card_item">

					<div class="cont_table_bar right clearfix">
						<span title="кнопка"> >>></span>
						<span title="кнопка"><<< </span>
					</div>

					<div class="cont_table_bar left clearfix">
						<span title="кнопка">сохранить</span>
						<span title="кнопка">отмена</span>
					</div>

					<fieldset>

						<legend>Группа 1</legend>

						<p>
							<label for="">Название карточки:</label>
							<input type="text">
						</p>
						<p>
							<label for="">Втрое называние:</label>
							<input type="text">
						</p>

					</fieldset>

					<fieldset>

						<legend>Группа 2</legend>

						<p>
							<label for="">Календарь:</label>
							<input type="text">
						</p>
						<p>
							<label for="">Тип:</label>
							<select>
								<option>Карточка с бубенцами</option>
								<option>Карточка обыкновенная</option>
								<option>Карточка перекидная</option>
								<option>Карточка без подложки</option>
							</select>
						</p>

					</fieldset>

					<fieldset>

						<legend>Группа 2.1</legend>

						<p>
							<input type="checkbox">
							<label for="">Отметить карточку как новую</label>
						</p>
						<p>
							<input type="checkbox">
							<label for="">Добавить в избранное</label>
						</p>

						<p>
							<input type="checkbox">
							<label for="">Что-то очень важное без отлагательное</label>
						</p>

					</fieldset>

					<fieldset>

						<legend>Группа 3</legend>

						<p>
							<label for="">Описание карточки:</label>
							<textarea placeholder="Добавить описаине к карточке..."></textarea>
						</p>


					</fieldset>

					<p>Все права &copy;</p>

					</div>
				</form>

			</div>

		</div> -->

 		<div class="vertical_view clearfix">

			 <div class="vv_right">

				 <div class="cont_item">

					 <form>
						 <div class="card_item">

							 <div class="cont_table_bar right clearfix">
								 <span title="кнопка"> >>></span>
								 <span title="кнопка"><<< </span>
							 </div>

							 <div class="cont_table_bar left clearfix">
								 <span title="кнопка">сохранить</span>
								 <span title="кнопка">отмена</span>
							 </div>

							 <fieldset>

								 <legend>Группа 1</legend>

								 <p>
									 <label for="">Название карточки:</label>
									 <input type="text">
								 </p>
								 <p>
									 <label for="">Втрое называние:</label>
									 <input type="text">
								 </p>

							 </fieldset>

							 <fieldset>

								 <legend>Группа 2</legend>

								 <p>
									 <label for="">Календарь:</label>
									 <input type="text">
								 </p>
								 <p>
									 <label for="">Тип:</label>
									 <select>
										 <option>Карточка с бубенцами</option>
										 <option>Карточка обыкновенная</option>
										 <option>Карточка перекидная</option>
										 <option>Карточка без подложки</option>
									 </select>
								 </p>

							 </fieldset>

							 <fieldset>

								 <legend>Группа 2.1</legend>

								 <p>
									 <input type="checkbox">
									 <label for="">Отметить карточку как новую</label>
								 </p>
								 <p>
									 <input type="checkbox">
									 <label for="">Добавить в избранное</label>
								 </p>

								 <p>
									 <input type="checkbox">
									 <label for="">Что-то очень важное без отлагательное</label>
								 </p>

							 </fieldset>

							 <fieldset>

								 <legend>Группа 3</legend>

								 <p>
									 <label for="">Описание карточки:</label>
									 <textarea placeholder="Добавить описаине к карточке..."></textarea>
								 </p>


							 </fieldset>

							 <p>Все права &copy;</p>

						 </div>
					 </form>

				 </div>

			 </div>

			 <div class="vv_left">

					<div class="right_top_cont">
						<div class="cont_table_bar right clearfix">
							<span title="кнопка">кнопка</span>
							<span title="кнопка">кнопка</span>
							<span title="кнопка">кнопка</span>
							<span title="кнопка">кнопка</span>
						</div>

						<div class="cont_table_bar left clearfix">
							<span title="кнопка">кнопка</span>
							<span title="кнопка">кнопка</span>
							<span title="кнопка">кнопка</span>
							<span title="кнопка">кнопка</span>
						</div>

						<div class="wrapper_head">
						<div class="cont_table">

							<table>
							<thead>
							<tr>
								<th><input type="checkbox"></th>
								<th>&nbsp;</th>
								<th>Пользователь</th>
								<th>IP-адрес</th>
								<th>Дата начала периода</th>
								<th>Дата окончания периода</th>
								<th>&nbsp;</th>
							</tr>

							</thead>
							<tbody>

							<tr>
								<td><input id="ckeck" type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="91" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td><a id="jsmith">jsmith</a></td>
								<td>127.0.0.1</td>
								<td>01.12.2012 00:00</td>
								<td>01.12.2016 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="91" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td><a id="jsmith_curt">jsmith</a></td>
								<td>172.29.1.121</td>
								<td>05.11.2012 00:00</td>
								<td>31.12.2019 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.121</td>
								<td>05.11.2012 00:00</td>
								<td>31.12.2019 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.121</td>
								<td>05.11.2012 00:00</td>
								<td>31.12.2019 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.121</td>
								<td>05.11.2012 00:00</td>
								<td>31.12.2019 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.121</td>
								<td>05.11.2012 00:00</td>
								<td>31.12.2019 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.121</td>
								<td>05.11.2012 00:00</td>
								<td>31.12.2019 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.121</td>
								<td>05.11.2012 00:00</td>
								<td>31.12.2019 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.122</td>
								<td>01.11.2012 00:00</td>
								<td>30.11.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="41" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.175</td>
								<td>01.01.2013 00:00</td>
								<td>01.01.2020 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="94" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.18</td>
								<td>01.11.2012 00:00</td>
								<td>30.11.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="21" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>192.168.245.26</td>
								<td>01.12.2012 00:00</td>
								<td>31.12.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="20" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.175</td>
								<td>01.01.2013 00:00</td>
								<td>01.01.2020 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="94" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.18</td>
								<td>01.11.2012 00:00</td>
								<td>30.11.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="21" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>192.168.245.26</td>
								<td>01.12.2012 00:00</td>
								<td>31.12.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="20" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.175</td>
								<td>01.01.2013 00:00</td>
								<td>01.01.2020 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="94" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.18</td>
								<td>01.11.2012 00:00</td>
								<td>30.11.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="21" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>192.168.245.26</td>
								<td>01.12.2012 00:00</td>
								<td>31.12.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="20" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.175</td>
								<td>01.01.2013 00:00</td>
								<td>01.01.2020 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="94" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.18</td>
								<td>01.11.2012 00:00</td>
								<td>30.11.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="21" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>192.168.245.26</td>
								<td>01.12.2012 00:00</td>
								<td>31.12.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="20" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.175</td>
								<td>01.01.2013 00:00</td>
								<td>01.01.2020 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="94" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.18</td>
								<td>01.11.2012 00:00</td>
								<td>30.11.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="21" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>192.168.245.26</td>
								<td>01.12.2012 00:00</td>
								<td>31.12.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="20" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.175</td>
								<td>01.01.2013 00:00</td>
								<td>01.01.2020 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="94" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.18</td>
								<td>01.11.2012 00:00</td>
								<td>30.11.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="21" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>192.168.245.26</td>
								<td>01.12.2012 00:00</td>
								<td>31.12.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="20" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.175</td>
								<td>01.01.2013 00:00</td>
								<td>01.01.2020 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="94" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.18</td>
								<td>01.11.2012 00:00</td>
								<td>30.11.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="21" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>192.168.245.26</td>
								<td>01.12.2012 00:00</td>
								<td>31.12.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="20" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.175</td>
								<td>01.01.2013 00:00</td>
								<td>01.01.2020 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="94" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>172.29.1.18</td>
								<td>01.11.2012 00:00</td>
								<td>30.11.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="21" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							<tr class="">
								<td><input type="checkbox"></td>
								<td class="edit_but">
									<form class="editForm"
										  action="/seclimits/admin/editRestriction.htm"
										  method="get">
										<input type="hidden" value="62" name="id"/>
										<input type="submit" value=" " class="editButton" title="Редактировать"/>
									</form>
								</td>
								<td>jsmith</td>
								<td>192.168.245.26</td>
								<td>01.12.2012 00:00</td>
								<td>31.12.2013 23:59</td>
								<td>

									<form class="deleteForm"
										  action="/seclimits/admin/deleteRestriction.htm"
										  method="post">
										<input type="hidden" value="20" name="id"/>
										<input type="submit" value=" " class="deleteButton" title="Удалить"/>
									</form>

								</td>
							</tr>

							</tbody>
						</table>

						</div>
						</div>
					</div>

				 </div>

			</div>

	</div>

</div>



</div>
</div>

<div id="footer">
	Версия: 1.1.0-SNAPSHOT
</div>