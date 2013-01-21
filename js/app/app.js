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
//    this.edit = $(".table-nav .btn-edit");
//    this.remove = $(".table-nav .btn-remove");
	},

	render: function(data){
    var scope = this;
    this.$el.html(this.template(data));
    this.fixTableHeader();
    this.resetLayout();

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

    if ($("html").hasClass("lte-ie9")){
      var table = this.$el.find(".table-fix");
      table.width( table.width() - 32 );
    }
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

  resetLayout: function(){
    var $table_block = $(".table-content");
    var $card_block = $(".cards-content");

    $table_block.attr( "style", "" );
    $card_block.attr( "style", "")
      .addClass("hidden");
  },

  changeLayout: function() {
    var type_view = app.settings.get("display_type");

    var scope = this;
    var $table_block = $(".table-content");
    var $card_block = $(".cards-content");
    var h = $("#content .wrapper-content").height();
    var w = $("#content .wrapper-content").width();
    var block_height = parseInt((h-75-35)/2, 10); // * странные магические числа = 75 - высота блока с кноп. (Изменить и Удалить), 35 это поправка на пaддинг у блоков
    var block_width = parseInt((w+23)/2, 10); // * странные магические числа = 75 - высота блока с кноп. (Изменить и Удалить), 35 это поправка на пaддинг у блоков


    switch(type_view)
    {
      case 1: {
        //horizontal view
        $table_block.css( "height", block_height+"px" );
        $table_block.css( "bottom", "auto" );
        $card_block.css( "height",  block_height+"px" );

        $card_block.removeClass("hidden");
        break;
      }
      case 2:{
        //vertical view
        $table_block.css( "right", block_width+"px" );
        $card_block.css( "left",  block_width+"px" );
        $card_block.css( "top",  "75px" );

        $card_block.removeClass("hidden");

        this.fixTableHeader();
        break;
      }
      case 3: {
        break;
      }
      default:{
        console.error("No table view!");
      }
    }

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

  events: {
    "click .btn-edit": "toEdit",
    "click .btn-save": "toSave",
    "click .btn-cancel": "toCancel"
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

		this.$el.html(this.template({ "settings": app.settings.toJSON(), "filds": model.toJSON(), "not_in_group": not_in_group }));

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
        $item.removeAttr( "disabled" )
      };
    });

    //TODO fix убрать дублирование кода
    _.each(textarea, function( item ){
      var $item = $(item);
      if ($item.data("readonly") === false) {
        $item.removeAttr( "disabled" )
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

$(function(){

  app.config = {};

	app.router = new App.Router();
  Backbone.history.start();

});