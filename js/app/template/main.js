window.JST = {};
window.JST['dictionary'] = _.template(''+
  '<% var type = "content-widescreen"; if (settings.display_type === 1) { type = "content-horizotal" }; if (settings.display_type === 2) { type = "content-vertical" }; %>'+

  '<table class="table table-fix table-striped  table-condensed" >'+
    '<thead>'+
    '<tr class="">'+
    '<th style="width:20px"><input type="checkbox" ></th>'+
    '<th style=""></th>'+
    '<% _.each( settings.fields_in_list, function(key) {%>'+
      '<th><%= settings["fields"][key]["title"] %> <i class="icon-filter"></i> <i class="icon-sort icon-left"></i></th>'+
    '<% }); %>'+
    '</tr>'+
    '</thead>'+
  '</table>'+

  '<div class="wrapper-table-dictionary">'+
  '<table class="table table-striped  table-condensed table-dictionary" >'+
    '<thead>'+
      '<tr class="">'+
        '<th style="width:20px"><input type="checkbox" ></th>'+
        '<th style="width:20px"></th>'+
        '<% _.each( settings.fields_in_list, function(key) {%>'+
        '<th><%= settings["fields"][key]["title"] %></th>'+
        '<% }); %>'+
      '</tr>'+
    '</thead>'+
    '<tbody>'+
    '<% _.each( filds, function(fild) {%>'+
      '<tr data-id="<%= fild.id %>" class="item-<%= fild.id %>">'+
        '<td><input type="checkbox"></td>'+
        '<td class="wrapper-inline-edit-btns">'+
          '<button class="btn btn-mini btn-edit-inline" type="button" alt="Изменить">'+
            '<i class="icon-pencil"></i>'+
          '</button>'+

          '<div class="edit-nav-group">'+
            '<button class="btn btn-mini btn-save-inline" type="button" alt="Сохранить изменения">'+
              '<i class="icon-save"></i>'+
            '</button>'+
            '<button class="btn btn-mini btn-cancel-inline" type="button" alt="Отменить изменения">'+
              '<i class="icon-remove"></i>'+
            '</button>'+
          '</div>'+
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
    '<div class="well edit-well">'+
      '<button class="btn btn-mini btn-edit" type="button">Изменить</button>'+
    '</div>'+
    '<div class="well save-well hidden">'+
      '<button class="btn btn-mini btn-save btn-primary" type="button">Сохранить</button> '+
      '<button class="btn btn-mini btn-cancel" type="button">Отмена</button>'+
    '</div>'+

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
    '<div class="small-fld">'+
      '<label for=""><%= settings["title"]  %></label>'+
      '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
      '<input type="text" value="<%= value %>" disabled="disabled" data-readonly="true" />'+
      '<% } else { %>'+
      '<input type="text" value="<%= value %>" disabled="disabled" data-readonly="false" />'+
      '<% }; %>'+
    '</div>'+
'');

window.JST['float'] = _.template(''+
    '<div class="small-fld">'+
      '<label for=""><%= settings["title"]  %></label>'+
      '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
      '<input type="text" value="<%= value %>" disabled="disabled" data-readonly="true" />'+
      '<% } else { %>'+
      '<input type="text" value="<%= value %>" disabled="disabled" data-readonly="false" />'+
      '<% }; %>'+
    '</div>'+
'');

window.JST['varchar'] = _.template(''+
    '<div class="small-fld control-group">'+
      '<label for=""><%= settings["title"]  %></label>'+
      '<div class="controls">'+
        '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
        '<input type="text" value="<%= value %>" disabled="disabled" data-readonly="true" />'+
        '<% } else { %>'+
        '<input type="text" value="<%= value %>" disabled="disabled" data-readonly="false" />'+
        '<% }; %>'+
        '<span class="help-inline"><p class="text-error">Введие текст в обязательное поле</p><p class="text-bolt">&nbsp;</p></span>'+
      '</div>'+
    '</div>'+
    '');

window.JST['textarea'] = _.template(''+
    '<div>'+
    '<label for=""><%= settings["title"]  %></label>'+
    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
    '<textarea  disabled="disabled" data-readonly="true"><%= value %></textarea>'+
    '<% } else { %>'+
    '<textarea disabled="disabled" data-readonly="false" ><%= value %></textarea>'+
    '<% }; %>'+
    '</div>'+
    '');
window.JST['date'] = _.template(''+
    '<p class="input-append date datepicker" data-date="<%= value %>" data-date-format="yyyy-mm-dd">'+
      '<label for=""><%= settings["title"]  %></label>'+
    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
      '<input type="text" value="<%= value %>" disabled="disabled" data-readonly="true">'+
      '<span class="add-on"><i class="icon-calendar"></i></span>'+
    '<% } else { %>'+
      '<input type="text" value="<%= value %>" disabled="disabled" data-readonly="false">'+
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
    '<% console.log(settings, value) %>'+

  '<% _.each( settings.choice, function( text ){ %>'+
    '<label class="radio">'+

    '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
      ' <input type="radio" class="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked data-readonly="true" disabled="disabled"> <%= text  %>'+
    '<% } else { %>'+
      ' <input type="radio" class="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked disabled="disabled" data-readonly="false"> <%= text  %>'+
    '<% }; %>'+
    '</label>'+

    '<% }); %>'+

    '</div>'+
    '');
window.JST['checkbox'] = _.template(''+
    '<label class="checkbox inline">'+
      '<% if( settings["readonly"] !== undefined && settings["readonly"] ) { %>'+
      '<input type="checkbox" class="checkbox" id="inlineCheckbox3" value="option3" disabled="disabled" data-readonly="true"> <%= settings["title"]  %>'+
      '<% } else { %>'+
      '<input type="checkbox" class="checkbox" id="inlineCheckbox3" value="option3" disabled="disabled" data-readonly="false"> <%= settings["title"]  %>'+
      '<% }; %>'+
    '</label>'+
    '');