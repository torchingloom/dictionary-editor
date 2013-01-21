window.JST = {};
window.JST['dictionary'] = _.template(''+
  '<% var type = "content-widescreen"; if (settings.display_type === 1) { type = "content-horizotal" }; if (settings.display_type === 2) { type = "content-vertical" }; %>'+

  '<table class="table table-fix table-striped  table-condensed" >'+
    '<thead>'+
    '<tr class="">'+
    '<th><input type="checkbox" ></th>'+
    '<th></th>'+
    '<% _.each( settings.fields_in_list, function(key) {%>'+
      '<th><%= settings["fields"][key]["title"] %></th>'+
    '<% }); %>'+
    '</tr>'+
    '</thead>'+
  '</table>'+

  '<div class="wrapper-table-dictionary">'+
  '<table class="table table-striped  table-condensed table-dictionary" >'+
    '<thead>'+
      '<tr class="">'+
        '<th><input type="checkbox" ></th>'+
        '<th></th>'+
        '<% _.each( settings.fields_in_list, function(key) {%>'+
        '<th><%= settings["fields"][key]["title"] %></th>'+
        '<% }); %>'+
      '</tr>'+
    '</thead>'+
    '<tbody>'+
    '<% _.each( filds, function(fild) {%>'+
      '<tr data-id="<%= fild.id %>" class="item-<%= fild.id %>">'+
        '<td><input type="checkbox"></td>'+
        '<td>'+
          '<button class="btn btn-mini" type="button">'+
            '<i class="icon-pencil"></i>'+
          '</button>'+
        '</td>'+
    '<% _.each( settings.fields_in_list, function(key) {%>'+
        '<td class="item"><%= fild[key] %></td>'+
    '<% }); %>'+
      '</tr>'+
    '<% }); %>'+
    '</tbody>'+
  '</table>'+
  '</div>'+
''
);

window.JST['cards'] = _.template(''+
  '<div class="wrapper-cards">'+
    ''+
    ''+
    ''+
    '</form>'+
    '<% _.each( not_in_group, function( fild, key ){ %>'+
      '<%= JST[ fild["type"] ]( { settings: fild, value: filds[key]  } ) %>'+
    '<% }); %>'+

    '<% _.each( settings.fieldsets, function( fieldset ){ %>'+
      '<fieldset>'+
        '<legend><%= fieldset.title %></legend>'+

    '<% _.each( fieldset.fields, function( key ){ %>'+
        '<%= JST[ settings["fields"][key]["type"] ]( { settings: settings["fields"][key], value: filds[key]  } ) %>'+
    '<% }); %>'+

      '</fieldset>'+

  '<% }); %>'+

    '</form>'+
  '</div>'+
''
);


window.JST['int'] = _.template(''+
    '<p>'+
    '<label for=""><%= settings["title"]  %></label>'+
    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
    '<input type="text" value="<%= value %>" disabled="disabled"  />'+
    '<% } else { %>'+
    '<input type="text" value="<%= value %>"  />'+
    '<% }; %>'+
    '</p>'+
'');

window.JST['float'] = _.template(''+
    '<p>'+
    '<label for=""><%= settings["title"]  %></label>'+
    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
    '<input type="text" value="<%= value %>" disabled="disabled"  />'+
    '<% } else { %>'+
    '<input type="text" value="<%= value %>"  />'+
    '<% }; %>'+
    '</p>'+
'');

window.JST['varchar'] = _.template(''+
    '<p>'+
    '<label for=""><%= settings["title"]  %></label>'+
    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
    '<input type="text" value="<%= value %>" disabled="disabled"  />'+
    '<% } else { %>'+
    '<input type="text" value="<%= value %>"  />'+
    '<% }; %>'+
    '</p>'+
    '');

window.JST['textarea'] = _.template(''+
    '<div>'+
    '<label for=""><%= settings["title"]  %></label>'+
    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
    '<textarea disabled="disabled" ><%= value %></textarea>'+
    '<% } else { %>'+
    '<textarea ><%= value %></textarea>'+
    '<% }; %>'+
    '</div>'+
    '');
window.JST['date'] = _.template(''+
    '<p class="input-append date datepicker" data-date="<%= value %>" data-date-format="yyyy-mm-dd">'+
      '<label for=""><%= settings["title"]  %></label>'+
    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
      '<input type="text" value="<%= value %>">'+
      '<span class="add-on"><i class="icon-calendar"></i></span>'+
    '<% } else { %>'+
      '<input type="text" value="<%= value %>">'+
      '<span class="add-on"><i class="icon-calendar"></i></span>'+
    '<% }; %>'+
    '</p>'+
    '');
window.JST['dictchoice'] = _.template(''+
    '');
window.JST['сhoice'] = _.template(''+
    '');
window.JST['radio'] = _.template(''+
    '<div>'+
    ''+
    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
    '<input type="radio" value="<%= value %>" disabled="disabled" class="date"  />'+
    '<% } else { %>'+
    '<input type="radio" value="<%= value %>" class="date" />'+
    '<% }; %>'+
	'<label for=""><%= settings["title"]  %></label>'+
    ''+
    '</div>'+
    '');
window.JST['checkbox'] = _.template(''+
    '<div>'+
    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
    '<input type="checkbox" value="<%= value %>" disabled="disabled" class="date"  />'+
    '<% } else { %>'+
    '<input type="checkbox" value="<%= value %>" class="date" />'+
    '<% }; %>'+
	'<label for=""><%= settings["title"]  %></label>'+
    '</div>'+
    '');