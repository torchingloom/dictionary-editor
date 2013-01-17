window.JST = {};
window.JST['dictionary'] = _.template(''+
  '<% var type = "" %>'+

  '<div class="content content-horizotal">'+
    '<div class="content-list">'+

  '<div class="cont_table_bar right clearfix">'+
    '<span title="кнопка">кнопка</span>'+
    '<span title="кнопка">кнопка</span>'+
    '<span title="кнопка">кнопка</span>'+
    '<span title="кнопка">кнопка</span>'+
  '</div>'+

  '<div class="cont_table_bar left clearfix">'+
    '<span title="кнопка">кнопка</span>'+
    '<span title="кнопка">кнопка</span>'+
    '<span title="кнопка">кнопка</span>'+
    '<span title="кнопка">кнопка</span>'+
  '</div>'+

  '<div class="wrapper_head">'+
  '<div class="cont_table">'+


    '<table class="table table-striped">'+
      '<thead>'+
        '<tr>'+
    '<% _.each( settings.fields, function(item) {%>'+
          '<th><%= item.title %></th>'+
    '<% }); %>'+
        '</tr>'+
      '</thead>'+
      '<tbody>'+
    '<% _.each( filds, function(fild) {%>'+
        '<tr data-id="<%= fild.id %>">'+
      '<% _.each( fild, function(value) {%>'+
          '<td class="item"><%= value %></td>'+
      '<% }); %>'+
        '</tr>'+
    '<% }); %>'+
      '</tbody>'+
    '</table>'+

    '</div>'+
    '</div>'+

  '</div>'+

  '<div class="content-item">'+
    'Выберете строку'+
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
              '<input type="text" value="<%= data[key] %>" />'+
            '</p>'+
  '<% }); %>'+

          '</fieldset>'+
'<% }); %>'+

        '</div>'+
      '</form>'+
    '</div>'+
  '</div>'
);