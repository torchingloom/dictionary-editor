var App = {};

App.Router = {};

App.Router = Backbone.Router.extend({

  routes: {
    ":catalog": "catalog"
  },

  initialize: function() {

  },

  catalog: function(catalog) {
    console.log(catalog);
  }

});


$(function(){

  var app = {};
  app.routr = new App.Router();
  Backbone.history.start();

});