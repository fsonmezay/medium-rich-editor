  console.log($('.active').attr('data-target'));
  var current = $('.active').attr('data-target');
  buttons = current.split(',');
  console.log(buttons);
  /*var buttonsSimple = ['bold', 'italic', 'underline', 'strikethrough'];
  var buttonsBasic  = ['bold', 'italic', 'underline', 'strikethrough', 'anchor', 'header1', 'header2', 'pre', 'quote'];
  var buttonsAdvanced = ['bold', 'italic', 'underline', 'strikethrough',  'anchor', 'header1', 'header2', 'header3', 'pre', 'quote', 'orderedlist', 'unorderedlist', 'indent', 'outdent', 'justifyLeft', 'justifyCenter', 'justifyFull', 'justifyRight'];
 */
     var editor = new MediumEditor('.editable', {
    	buttonLabels: 'fontawesome',
    	buttons : buttons,
    });

    $(function () {
      $('.editable').mediumInsert({
        editor: editor,
        beginning: false,
        addons: {
          images: {}
        }
      });
    });
    console.log('Loaded');