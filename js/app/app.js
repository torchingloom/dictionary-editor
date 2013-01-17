var App = {};

App.Router = {};

App.Router = Backbone.Router.extend({

  routes: {
    "help": "catalog"
  },

  initialize: function() {

  },

  catalog: function(id) {
    console.log("asdasdasdas");
  }

});


$(function(){

  var app = {};
  app.routr = new App.Router();
  console.log(Backbone.history.start());

});