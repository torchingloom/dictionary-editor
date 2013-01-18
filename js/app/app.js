var App = {};
var app = {};

App.Router = {};
App.Collections = {};
App.Models = {};
App.Viws = {};


App.Router = Backbone.Router.extend({
  routes: {
    ":catalog": "catalog",
    ":catalog/:id": "catalog"
  },
  catalog: function(catalog, id) {

    app.settings = new App.Models.Settings( { name: catalog } );
    app.dictionary = new App.Collections.Dictionary( { name: catalog, from: 0, count: 100  } );

    $.when( app.settings.fetch(), app.dictionary.fetch() ).done(function(){
      app.view = new App.Viws.Dictionary( {"curent": id} );
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
  template:  JST[ "dictionary" ],
  el: ".cont_right",

  events: {
    "click .item": "getId"
  },

  initialize: function( options ){
    this.render({"settings": app.settings.toJSON(), "filds": app.dictionary.toJSON()});
  },

  render: function(data){
    this.$el.html(this.template(data));

    var head = $('table thead TR');
    $('.wrapper_head').append('<div class="fixed_head"><table class="table table-striped table-bordered table-main"></table></div>');

    head.find('TH').each(function() {
      var el = $(this);
      el.css({
        width : el.width()
      });
    }).end().clone().appendTo('.fixed_head table').end();

  },

  getId: function(event){
    var id = $(event.target).parent("tr").data("id");
    this.showCard(id);
    this.setCurrentRow(id);
  },

  showCard: function(id) {
    var model = app.dictionary.get( id );
    var cards = new App.Viws.Cards( { "model": model } );
  },
  setCurrentRow: function(id) {
    this.$el.find(".row-current-view").removeClass("row-current-view");
    this.$el.find(".item-"+id).addClass("row-current-view");
  }

});

App.Viws.Cards = Backbone.View.extend({

  template:  JST[ "cards" ],
  el: ".content-item",

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

  app.router = new App.Router();
  Backbone.history.start();

});