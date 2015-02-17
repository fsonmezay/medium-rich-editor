<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>medium editor | example</title>
  <!--link rel="stylesheet" href="css/normalize.css"-->
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="./css/medium-editor.css">
  <link rel="stylesheet" href="./css/flat.css" id="medium-editor-theme">
  <link rel="stylesheet" href="./css/medium-editor-insert-plugin.css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  
</head>
<body>
  
  <div id="container">
  	<h1>Php</h1>
  	<div class="btn-group" role="group">
	  <button type="button" class="btn btn-sm btn-info active" data-target="buttonsSimple">Simple</button>
	  <button type="button" class="btn btn-sm btn-info" data-target="buttonsBasic">Basic</button>
	  <button type="button" class="btn btn-sm btn-info" data-target="buttonsAdvanced">Advanced</button>
	</div>
	<hr/>
    <div class="editable" data-placeholder="Type some text">
      <p>Donec id elit non mi porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>

      <p>Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam quis risus eget urna mollis ornare vel eu leo. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>

      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Curabitur blandit tempus porttitor. Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

      <p>Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue.</p>
    </div>
  </div>

  <script src="./js/medium-editor.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/medium-editor-insert-plugin.all.js"></script>
  <script>
    
  var buttonsSimple =  ['bold', 'italic', 'underline', 'strikethrough'];
  var buttonsBasic = ['bold', 'italic', 'underline', 'strikethrough', 'anchor', 'header1', 'header2', 'pre', 'quote'];
  var buttonsAdvanced = ['bold', 'italic', 'underline', 'strikethrough',  'anchor', 'header1', 'header2', 'header3', 'pre', 'quote', 'orderedlist', 'unorderedlist', 'indent', 'outdent', 'justifyLeft', 'justifyCenter', 'justifyFull', 'justifyRight'];
 
  var current = buttonsSimple;  
	$( document ).ready(function() {
		current = $( this ).attr('data-target');

		$('.btn').on('click', function () {
			  $('.btn').removeClass('active');
			  $( this ).addClass('active');
			  alert($( this ).attr('data-target'));
			  current = $( this ).attr('data-target');
		  });
	});
  	
	
    var editor = new MediumEditor('.editable', {
    	buttonLabels: 'fontawesome',
    	buttons : current,
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

  </script>
</body>
</html>
