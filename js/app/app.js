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
		"click .item": "getId"
	},

	initialize: function( options ){
		this.render({"settings": app.settings.toJSON(), "filds": app.dictionary.toJSON()});

    this.edit = $(".table-nav .btn-edit");
    this.remove = $(".table-nav .btn-remove");

	},

	render: function(data){
    var scope = this;
    this.$el.html(this.template(data));
    this.fixTableHeader();

    $(window).resize(function() {
      scope.fixTableHeader();
    });

	},

  fixTableHeader: function() {
    var th_dic = this.$el.find(".table-dictionary th");
    var th_fix = this.$el.find(".table-fix th");

    _.each(th_dic, function (th, key) {
      $(th_fix[key]).width($(th).width());
    });
  },

	getId: function(event){
		var id = $(event.target).parent("tr").data("id");
		this.showCard(id);
		this.setCurrentRow(id);
	},

	showCard: function(id) {
		var model = app.dictionary.get( id );
		var cards = new App.Viws.Cards( { "model": model } );
    this.changeLayout();
	},

  changeLayout: function() {
    var scope = this;
    var $table_block = $(".table-content");
    var $card_block = $(".cards-content");
//    var w = $("#content .wrapper-content").width();
    var h = $("#content .wrapper-content").height();

    var block_height = parseInt((h-75-35)/2, 10);


    $table_block.css( "height", block_height+"px" ); // высота контентной части + высота блока управления списком
    $table_block.css( "bottom", "auto" ); // высота контентной части + высота блока управления списком
    $card_block.css( "height",  block_height+"px" );

    $card_block.removeClass("hidden");

    $(window).resize(function() {
      scope.changeLayout();
    });
  },

  setCurrentRow: function(id) {
		this.$el.find(".current").removeClass("current");
		this.$el.find(".item-"+id).addClass("current");
	}

});

App.Viws.Cards = Backbone.View.extend({

	template: JST[ "cards" ],

  el: ".cards-content",

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

		this.$el.html(this.template({ "settings": app.settings.toJSON(), "filds": model.toJSON(), "not_in_group": not_in_group }));

	}

});

$(function(){

  app.config = {};


	app.router = new App.Router();
  Backbone.history.start();

});