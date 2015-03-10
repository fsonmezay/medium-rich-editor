var current = $('.active').attr('data-target');
buttons = current.split(',');
var editor = new MediumEditor('.editable', {
	buttonLabels: 'fontawesome',
	buttons : buttons,
});

$(function () {
  $('.editable').mediumInsert({
    editor: editor,
    beginning: true,
    addons: {
      images: {},
     // maps: {},
      embeds:{}//,
     // tables: {}
      
    }
  });
});
console.log('Loaded');