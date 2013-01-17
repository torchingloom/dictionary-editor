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

    this.on( "reset", function(data) {
      console.log(data.toJSON());
    });

    this.fetch();
  }

});

App.Models.Settings = Backbone.Model.extend({

  url: function() {
    return "/dict-meta.json.php?dict=" + this.name;
  },

  initialize: function( options ){
    console.log("App.Models.Settings");
    this.name = options.name;

    this.on( "change", function(data) {
      console.log(data.toJSON());
    });

    this.fetch();
  }

});




$(function(){

  app.router = new App.Router();
  Backbone.history.start();

});