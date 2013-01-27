var App = {};
var app = {};

App.Router = {};
App.Collections = {};
App.Models = {};
App.Viws = {};


App.Router = Backbone.Router.extend({

	routes: {
		":catalog": "catalog"
	},

	catalog: function(catalog) {

		app.settings = new App.Models.Settings( { name: catalog } );
		app.dictionary = new App.Collections.Dictionary( { name: catalog, from: 0, count: 100 } );

		$.when( app.settings.fetch(), app.dictionary.fetch() ).done(function(){
			app.view = new App.Viws.Dictionary();
		});

	}
});

App.Collections.Dictionary = Backbone.Collection.extend({

	url: function() {
		var url = "/dict-items.json.php?dict=" + this.name;
		url = (this.from !== '') ? url + "&form=" + this.from : url;
		url = (this.count !== '') ? url + "&count=" + this.count : url;
		return url;
	},

	initialize: function( options ){
		this.name = options.name;
		this.from = options.from || 0;
		this.count = options.count || 100;
	}
});

App.Models.Settings = Backbone.Model.extend({

	url: function() {
		return "/dict-meta.json.php?dict=" + this.name;
	},

	initialize: function( options ){
		this.name = options.name;
	}
});

App.Viws.Dictionary = Backbone.View.extend({

	template: JST[ "dictionary" ],
	el: ".table-content",

	events: {
		"click .item": "getId",
		"click .btn-edit-inline": "editInline",
		"click .btn-cancel-inline": "cancelInline",
		"click .btn-save-inline": "saveInline",
		"click .btn-remove-inline": "removeInline",
		"click .btn-toggleDict": "toggleDict"
	},

  toggleDict: function() {
		$("BODY").toggleClass("fullDict");
		this.changeLayout();
	},

	initialize: function( options ){
		this.render({
			"settings" : app.settings.toJSON(),
			"filds"    : app.dictionary.toJSON()
		});
	},

	render: function(data) {
		var hash = window.location.hash;
		var scope = this;

		$("a.active-dic").removeClass("active-dic").css("font-weight", "normal");
		$('a[href="'+ hash +'"]').css("font-weight", "bold").addClass("active-dic");
		$("#content").addClass("nolayout");

		scope.$el.off('click').empty().append(scope.template(data)); // ну почему догадка анбиндить клик посетила меня только под утро?!?!?

		setTimeout(function() {
			scope.fixTableHeader();
		}, 200);

		scope.resetLayout();

		if ($("#content").hasClass("nolayout")) {
			var throttled = _.throttle( scope.fixTableHeader, 500 );
			$(window).off("resize").on("resize", throttled);
		}

		$(".btn-toggle-bar").removeClass("hidden");
		$("BODY").removeClass("fullCard fullDict");
	},

	fixTableHeader: function() {
		var table_fix = $(".table-fix");
		var table_dic = $(".table-dictionary");
		var th_fix = $("TH", table_fix);
		var th_dic = $("THEAD TH", table_dic);
		var h;

		table_fix.width(table_dic.width());

		_.each(th_dic, function (th, key) {
			$(th_fix[key]).width($(th).width());
		});

		h = table_fix.height() + 10; // ? .table-content pading:10px; margin:-10px; они не учитываются в размер

		//table_dic.find("thead").hide();

		//$(".wrapper-table-dictionary").css( "top", h+"px" );

		//if ($("html").hasClass("ie7")){
		//	var table = $(".table-fix");
		//	table.width( table.width() - 37 ); //двигаем на скрол для интернет эксплорера
		//}

		// --- Вернул скрываемый хедер таблицы. От этого и глюки и рендер говно.
	},

	getId: function(event){
		var id = $(event.target).parent("tr").data("id");
		var type_view = app.settings.get("display_type");
		if (type_view !== 3) {
			this.showCard(id);
			this.setCurrentRow(id);
		} else {
			this.editInline(event);
		}
	},

	showCard: function(id) {
		var model = app.dictionary.get( id );
		var cards = new App.Viws.Cards( { "model": model } );
		this.changeLayout();
	},

	resetLayout: function(){
		var $table_block = $(".table-content");
		var $card_block = $(".cards-content");

		$table_block.attr( "style", "" );
		$card_block.attr( "style", "").addClass("hidden");

		$("#content").removeClass("nolayout horizontal vertical").addClass("nolayout");
	},

	changeLayout: function() {
		var type_view = app.settings.get("display_type");
		var scope = this;
		var $table_block = $(".table-content");
		var $card_block = $(".cards-content");
		var h = $("#content .wrapper-content").height();
		var w = $("#content .wrapper-content").width();
		var c;
		var fullCard = $("BODY").hasClass("fullCard");
		var fullDict = $("BODY").hasClass("fullDict");
		var block_height = parseInt((h - 43) / 2, 10); // * странные магические числа = 75 - высота блока с кноп. (Изменить и Удалить), 35 это поправка на пaддинг у блоков
		var block_width = parseInt((w + 23) / 2, 10); // * странные магические числа = 75 - высота блока с кноп. (Изменить и Удалить), 35 это поправка на пaддинг у блоков

		$("#content").removeClass("nolayout horizontal vertical");

		switch(type_view) {
			case 1: {
				//horizontal view
				$(".content").addClass("horizontal");

				$table_block.css({
					display : [fullCard ? "none" : "block"],
					height  : [fullDict ? "auto" : block_height + "px"],
					bottom  : [fullDict ? "10px" : "auto"]
				});

				$card_block.css({
					display : [fullDict ? "none" : "block"],
					height  : [fullCard ? "auto" : block_height + "px"],
					top     : [fullCard ? "10px" : "auto"]
				}).removeClass("hidden");

				$(".btn-toggleDict").removeClass("hidden");

				app.view.fixTableHeader();
				break;
			}
			case 2:{
				//vertical view
				$(".content").addClass("vertical");

				$table_block.css({
					display : [fullCard ? "none" : "block"],
					right   : [fullDict ? "11px" : block_width + "px"]
				});

				$card_block.css({
					display : [fullDict ? "none" : "block"],
					left    : [fullCard ? "10px" : block_width + "px"],
					top     : 10
				}).removeClass("hidden");

				$(".btn-toggleDict").removeClass("hidden");

				app.view.fixTableHeader();
				break;
			}
			case 3: {
				app.view.fixTableHeader();
				break;
			}
			default:{
				console.error("No table view!");
				app.view.fixTableHeader();
			}
		}

		var throttled = _.throttle( app.view.changeLayout, 500 );
		$(window).off("resize").on("resize", throttled);
	},

	editInline: function(event) {
		var tr = $(event.target).closest("tr");
		var td = tr.find("td.item");

		tr.find(".btn-edit-inline").addClass("hidden");
		tr.find(".btn-remove-inline").addClass("hidden");
		tr.addClass("edit");

		_.each(td, function(item){
			var cell = $(item);

			cell.width(cell.width()).html('<input class="inline-fld" style="" value="'+cell.text()+'" />');
		});

		$(".table-content").delegate(".inline-fld", "click", function(e) {
			e.stopPropagation();
			e.preventDefault();
		});
	},

	cancelInline: function(event) {
		//заглушка
		this.saveInline(event);
	},

	saveInline: function(event) {
		var tr = $(event.target).closest("tr");
		var td = tr.find("td.item");
		tr.find(".btn-edit-inline").removeClass("hidden").end().find(".btn-remove-inline").removeClass("hidden");

		tr.removeClass("edit");

		_.each(td, function(item) {
			var cell = $(item);
			var input = cell.find("input");
			var val = cell.text(input.val());
			cell.attr("style", "");
		});
	},

	removeInline: function(event) {
		$(event.target).closest("tr").hide();
	},

	setCurrentRow: function(id) {
		this.$el.find(".current").removeClass("current");
		this.$el.find(".item-"+id).addClass("current");
	}
});

App.Viws.Cards = Backbone.View.extend({

	template: JST[ "cards" ],
	el: ".cards-content",
	events: {
		"click .btn-edit"       : "toEdit",
		"click .btn-save"       : "toSave",
		"click .btn-cancel"     : "toCancel",
		"click .btn-toggleCard" : "toggleCard"
	},

	toggleCard: function() {
		$("BODY").toggleClass("fullCard");
		app.view.changeLayout();
	},

	initialize: function( options ){
		this.render( options.model );
	},

	render: function(model) {
		var not_in_group = _.extend( {}, app.settings.toJSON().fields );
		var fieldsets = app.settings.toJSON().fieldsets;

		_.each(fieldsets, function(fieldset){
			_.each(fieldset.fields, function(key){
				delete not_in_group[key];
			});
		});

		this.$el.off('click').empty().append(this.template({ // я идиот, убейте меня кто-нибудь! сраный клик навешивался с каждой новой карточкой
			"settings"     : app.settings.toJSON(),
			"filds"        : model.toJSON(),
			"not_in_group" : not_in_group
		}));

		//$("BODY").removeClass("fullCard fullDict"); //вот хрен его знает... решим позже
	},

	toEdit: function() {
		var edit_well = this.$el.find(".edit-well");
		var save_well = this.$el.find(".save-well");
		var inputs = this.$el.find("input");
		var textarea = this.$el.find("textarea");

		edit_well.addClass("hidden");
		save_well.removeClass("hidden");

		_.each(inputs, function( item ){
			var $item = $(item);
			if ($item.data("readonly") === false) {
				$item.removeAttr( "disabled" );
			};
		});

		//TODO fix убрать дублирование кода
		_.each(textarea, function( item ){
			var $item = $(item);
			if ($item.data("readonly") === false) {
				$item.removeAttr( "disabled" );
			}
		});
	},

	toSave: function(){
		var edit_well = this.$el.find(".edit-well");
		var save_well = this.$el.find(".save-well");
		var inputs = this.$el.find("input");
		var textarea = this.$el.find("textarea");
		var isValid = true;

		_.each(inputs, function( item ){
			var $item = $(item);
			if ($item.val() == "") {
				$item.parents(".control-group").addClass("error");
				isValid = false;
			}
		});

		if (isValid) {
			edit_well.removeClass("hidden");
			save_well.addClass("hidden");

			this.$el.find(".error").removeClass("error");


			_.each(inputs, function( item ){
				var $item = $(item);
				if ($item.data("readonly") === false) {
					$item.attr( "disabled","disabled" );
				}
			});

			//TODO fix убрать дублирование кода
			_.each(textarea, function( item ){
				var $item = $(item);
				if ($item.data("readonly") === false) {
					$item.attr( "disabled","disabled" );
				}
			});
		}
	},

	toCancel: function(){
		var edit_well = this.$el.find(".edit-well");
		var save_well = this.$el.find(".save-well");
		var inputs = this.$el.find("input");
		var textarea = this.$el.find("textarea");

		edit_well.removeClass("hidden");
		save_well.addClass("hidden");


		_.each(inputs, function( item ){
			var $item = $(item);
			if ($item.data("readonly") === false) {
				$item.attr( "disabled","disabled" );
			}
		});

		//TODO fix убрать дублирование кода
		_.each(textarea, function( item ){
			var $item = $(item);
			if ($item.data("readonly") === false) {
				$item.attr( "disabled","disabled" );
			}
		});
	}
});

$(function() {
	app.config = {};
	app.router = new App.Router();
	Backbone.history.start();

	$('A[href="#"]').click(function(e) {
		e.preventDefault();
	});

	$('.btn-toggle-bar').click(function(e) {
		$('BODY').toggleClass('nobar');

		if ($('#content').hasClass('nolayout')) {
			app.view.fixTableHeader();
		} else {
			app.view.changeLayout();
		}
	});

	$('#treeDiv').tree({
		data      : data,
		saveState : false,
		autoEscape: false,
		autoOpen  : 0
	});

});