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

	<script type="text/javascript" src="ipAccessRestrictions_files/jquery-1.htm"></script>
	<script type="text/javascript" src="ipAccessRestrictions_files/jquery-ui.htm"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			if ($.browser.msie && parseInt($.browser.version) < 10) {
				$('#header H1, #header .currentime').each(function() {
					var el = $(this);
					el.append($('<ins />').text(el.text()));
				});
			}

			if ($.browser.msie && parseInt($.browser.version) < 9) {
				$('#tables tbody').each(function() {
					$('tr:odd', this).addClass('even');
				});
			}

			var showErrorMessage = function (el, er, ep) {
				el.closest('#form').find('SPAN.error').css({
					top  : -9999,
					left : -9999
				});

				er.css({
					top  : ep.top - er.outerHeight(true) - 6,
					left : ep.left - 10
				});
			};

			var hideErrorMessage = function (er) {
				er.css({
					top  : -9999,
					left : -9999
				});
			};

			$('#form INPUT.error, #form SELECT.error').each(function(i) {
				var el = $(this),
						ep = el.position(),
						er = el.next();

				if (!el.next().is('SPAN.error')) er = el.parent().find('SPAN.error');

				if (i == 0) {
					er.css({
						top  : ep.top - er.outerHeight(true) - 6,
						left : ep.left - 10
					});
				}

				$(el).bind({
					'focusin mouseenter': function() {
						showErrorMessage(el, er, ep);
					},
					'focusout mouseleave': function() {
						hideErrorMessage(er);
					},
					keypress: function() {
						hideErrorMessage(er);
					}
				});
			});

			$("#dialog-applicationInfo").dialog({
				autoOpen: false,
				modal: false,
				minHeight: 230,
				minWidth: 500,
				buttons: {
					Закрыть: function() {
						$(this).dialog("close");
					}
				}
			});

			$('#aboutBoxLink').click(function(event) {
				event.preventDefault();
				$("#dialog-applicationInfo").load("/seclimits/about.htm");
				$("#dialog-applicationInfo").dialog("open");
				return false;
			});
		});

	</script>


	<script type="text/javascript" src="ipAccessRestrictions_files/jquery.htm"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#dateFrom, #dateTo").datepicker({
				changeMonth:true,
				changeYear:true
			});
			$("#dateFrom, #dateTo").datepicker($.datepicker.regional[ "ru" ]);

			$(".deleteForm").live('submit', function () {
				return confirm("Удалить ограничение доступа?");
			});
		});
	</script>

	<link rel="stylesheet" href="js/treeview/jquery.treeview.css" />
	<script src="js/treeview/jquery.js" type="text/javascript"></script>
	<script src="js/treeview/jquery.cookie.js" type="text/javascript"></script>
	<script src="js/treeview/jquery.treeview.js" type="text/javascript"></script>
	<script src="js/treeview/demo.js" type="text/javascript"></script>


	<script type="text/javascript">

		$(document).ready(function () {

			var head = $('#tables table thead TR');

			$('.wrapper_head').append('<div class="fixed_head"><table></table></div>');

			head.find('TH').each(function() {

				var el = $(this);

				el.css({
					width : el.width()
				});

			}).end().clone().appendTo('.fixed_head table').end();

			$("#jsmith").click(function(){

				if($('.cont_table').hasClass('scroll') && $('.cont_item').hasClass('select')){

					$('.cont_table').removeClass('scroll');
					$('.cont_item').removeClass('select');

				}else{

					$('.cont_table').addClass('scroll');
					if($('.cont_item').height() > 100){
						$('.cont_item').addClass('select');
					}else{
						$('.cont_item').addClass('select');

							$('.cont_table').css('height', $('.cont_right').height() - $('.cont_item').height() - $('.cont_table_bar').height() - 70 + "px");

							$(window).resize(function(){
								var height = $(window).height();
								$('.cont_table').css('height', $('.cont_right').height() - $('.cont_item').height() - $('.cont_table_bar').height() - 70 + "px") + height;
						});
					}

				}

			});

			$("#jsmith_curt").click(function(){

				if($('.cont_item').hasClass('select') && $('.cont_right').hasClass('curt')){

					$('.cont_right').removeClass('curt');

					$('.cont_item').removeClass('select');

				}else{

					$('.cont_right').addClass('curt');
					$('.right_top_cont').css('width', $('.right_top_cont').width() - 390 + "px");


					$(window).resize(function(){
						var width = $(window).width();

						$('.right_top_cont').css('width', $('.cont_right').width() - $('.cont_item').width() - 90 + "px") + width;
					});

					$('.cont_table').addClass('scroll');
					$('.cont_item').addClass('select');

					$('.cont_table').css('height', $('.cont_right').height() - 96 + "px");

					$(window).resize(function(){
						var height = $(window).height();
						$('.cont_table').css('height', $('.cont_right').height() - 96 + "px") + height;
					});


				}



			});

		});

	</script>

</head>

<body>
<div id="main">
<div id="header">
	<div class="header clearfix">
		<h1>Ввод параметров операций на денежном и валютном рынке</h1>

		<p class="currentime">11.01.2013</p>
	</div>
	<div class="menu clearfix">
		<ul>

			<li class="selected"><a href="http://portale.msd.local:7777/seclimits/admin/ipAccessRestrictions.htm">Права доступа</a></li>
			<li class=""><a href="http://portale.msd.local:7777/seclimits/admin/ipAccessArchive.htm">Архив прав доступа</a></li>

		</ul>

		<p class="metalinks">
			<a href="http://portale.msd.local:7777/seclimits/logout.htm">Выход</a>

			&nbsp;|&nbsp;<a href="#" id="aboutBoxLink">О программе</a>

		</p>
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

	<div class="cont_right">

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

</div>



</div>
</div>

<div id="footer">
	Версия: 1.1.0-SNAPSHOT
</div>


<div aria-labelledby="ui-id-1" role="dialog" tabindex="-1" style="display: none; outline: 0px none; z-index: 1000; position: absolute;" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable ui-dialog-buttons"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span class="ui-dialog-title" id="ui-id-1">О программе</span><a role="button" class="ui-dialog-titlebar-close ui-corner-all" href="#"><span class="ui-icon ui-icon-closethick">close</span></a></div><div class="ui-dialog-content ui-widget-content" id="dialog-applicationInfo">
	<h3>Загрузка...</h3>
	<br>
	<img id="loadingAjax" src="ipAccessRestrictions_files/ajax-loader.gif" alt="Идет загрузка...">

</div><div style="z-index: 1000;" class="ui-resizable-handle ui-resizable-n"></div><div style="z-index: 1000;" class="ui-resizable-handle ui-resizable-e"></div><div style="z-index: 1000;" class="ui-resizable-handle ui-resizable-s"></div><div style="z-index: 1000;" class="ui-resizable-handle ui-resizable-w"></div><div style="z-index: 1000;" class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ui-icon-grip-diagonal-se"></div><div style="z-index: 1000;" class="ui-resizable-handle ui-resizable-sw"></div><div style="z-index: 1000;" class="ui-resizable-handle ui-resizable-ne"></div><div style="z-index: 1000;" class="ui-resizable-handle ui-resizable-nw"></div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" type="button"><span class="ui-button-text">Закрыть</span></button></div></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>