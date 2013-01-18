window.JST = {};
window.JST['dictionary'] = _.template(''+
  '<% var type = "content-widescreen"; if (settings.display_type === 1) { type = "content-horizotal" }; if (settings.display_type === 2) { type = "content-vertical" }; %>'+

  '<div class="cont_table_bar right clearfix">'+
    '<span title="кнопка">кнопка</span>'+
  '</div>'+

  '<div class="cont_table_bar left clearfix">'+
    '<span title="кнопка">кнопка</span>'+
    '<span title="кнопка">кнопка</span>'+
  '</div>'+

  '<div class="content <%= type %>">'+
    '<div class="content-list">'+


  '<div class="wrapper_head">'+
  '<div class="cont_table">'+

    '<table class="table table-striped table-bordered table-fixed-header">'+


      '<thead>'+
        '<tr>'+
        '<th><input type="checkbox" class="main"></th>'+
    '<% _.each( settings.fields_in_list, function(key) {%>'+
      '<th><%= settings["fields"][key]["title"] %></th>'+
    '<% }); %>'+
        '<th></th>'+
        '</tr>'+
      '</thead>'+


      '<tbody>'+
    '<% _.each( filds, function(fild) {%>'+
        '<tr data-id="<%= fild.id %>" class="item-<%= fild.id %>">'+
          '<td><input type="checkbox"></td>'+
    '<% _.each( settings.fields_in_list, function(key) {%>'+
          '<td class="item"><%= fild[key] %></td>'+
    '<% }); %>'+
        '<td><div class="btn-group"><button class="btn btn-mini" type="button"><i class="icon-pencil"></i></button><button class="btn btn-mini" type="button"><i class="icon-remove"></i></button><button class="btn btn-mini" type="button"><i class="icon-edit"></i></button></div></button></td>'+
        '</tr>'+
    '<% }); %>'+

      '</tbody>'+
    '</table>'+

    '</div>'+
    '</div>'+

  '</div>'+

  '<div class="content-item">'+
    '<div class="card_item">'+
    'Выберете строку'+
    '</div>'+
  '</div>'+

'</div>'
);

window.JST['cards'] = _.template(''+
  '<div class="cards">'+
    '<div class="cont_item">'+
      '<form>'+
        '<div class="card_item">'+
          '<div class="cont_table_bar right clearfix">'+
            '<span title="кнопка"> >>></span>'+
            '<span title="кнопка"><<< </span>'+
          '</div>'+

          '<div class="cont_table_bar left clearfix">'+
            '<span title="кнопка">сохранить</span>'+
            '<span title="кнопка">отмена</span>'+
          '</div>'+

'<% _.each( settings.fieldsets, function( fieldset ){ %>'+

          '<fieldset>'+
            '<legend><%= fieldset.title %></legend>'+
  '<% _.each( fieldset.fields, function( key ){ %>'+
            '<p>'+
              '<label for=""><%= settings["fields"][key]["title"]  %></label>'+
              '<input type="text" value="<%= filds[key] %>" />'+
            '</p>'+
  '<% }); %>'+

          '</fieldset>'+
'<% }); %>'+

        '</div>'+
      '</form>'+
    '</div>'+
  '</div>'
);