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
    app.dictionary = new App.Collections.Dictionary( { name: catalog, from: 0, count: 100  } );

    $.when( app.settings.fetch(), app.dictionary.fetch() ).done(function(){
      app.view = new App.Viws.Dictionary( { settings: app.settings, data:app.dictionary } );
      // console.log(app.settings.toJSON(), app.dictionary.toJSON());
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
    "click .item": "showCard"
  },

  initialize: function( options ){
    this.settings = _.extend( {}, options.settings.toJSON() );
    this.data = _.extend( {}, options.data.toJSON() );

    this.model_settings = options.settings;
    this.collection_data = options.data;
    this.render({"settings": this.settings, "filds": this.data});

  },

  render: function(data){
    this.$el.html(this.template(data));
  },

  showCard: function(event) {
    model = this.collection_data.get($(event.target).parent("tr").data("id"));
    this.cards = new App.Viws.Cards({ model: model, settings: this.model_settings });
  }

});

App.Viws.Cards = Backbone.View.extend({

  template:  JST[ "cards" ],
  el: ".content-item",

  initialize: function( options ){
    this.model = options.model;
    this.settings = options.settings;
    this.render();
  },

  render: function() {
    this.$el.html(this.template( { data: this.model.toJSON(), settings: this.settings.toJSON() } ));
  }

});

$(function(){

  app.router = new App.Router();
  Backbone.history.start();

});