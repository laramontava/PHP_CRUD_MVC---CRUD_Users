<html>
    <head>
        <title>Título</title>
        
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="view/css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="view/css/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="view/css/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="view/css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="view/css/style.css">
        <script src="model/validate.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript">
          $(function() {
			$('#datebirthday').datepicker({
			dateFormat: 'dd/mm/yy', 
			changeMonth: true, 
			changeYear: true,
			minDate:"-116y",
			maxDate:"-18y",
		    });
          });
        </script>
    </head>
    <body>