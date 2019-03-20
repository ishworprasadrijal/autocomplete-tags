<?php /*
  Author : Ishwor Prasad Rijal
  Description : Autocomplete tags
  Contact : ishworsws@gmail.com
  Profile : https://github.com/ishworprasadrijal
  */
 ?>
<!doctype html>
<html lang="en">
	<head>
		<title>Autocomplete tags</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

		<script src="src/jquery.tagsinput-revisited.js"></script>
		<link rel="stylesheet" href="src/jquery.tagsinput-revisited.css" />

		<style>
			*{box-sizing:border-box}html{height:100%;margin:0}body{min-height:100%;font-family:Roboto;margin:0;background-color:#fafafa}.container{margin:150px auto;max-width:960px}label{display:block;padding:20px 0 5px 0}
		</style>
	</head>
	<body>
		<div class="container">
			<center><h1>Autocomplete Tags </h1></center>
				<hr/>

			<form id="form" action="index.php" method="POST">
				<h2>Autocomplete tags with js array </h2>
				<input id="myEmailList" name="emails" type="text" value="ishorprasadrijal@gmail.com">
			</form>
		



			<form action="index.php" method="POST">
				<h2>Autocomplete tags with ajax</h2>
				<input id="ajax_ac" name="emails" type="text" value="Nepal">
			</form>
		
		

		<br><br><br>
		<hr/>


		<b> For more help, <a href="mailto:ishworsws@gmail.com"> Mail </a> , contact or hire <a href="https://github.com/ishworprasadrijal">Ishwor Prasad Rijal </a>. Thanks!</b>
			
		</div>

		<script type="text/javascript">
			$(function() {
				$('#myEmailList').tagsInput({
					'autocomplete': {
						source: ["abc@ipr.com", "bcd@ipr.com", "cde@ipr.com", "def@ipr.com", "efg@ipr.com", "fgh@ipr.com", "ghi@ipr.com", "hij@ipr.com", "ijk@ipr.com", "jkl@ipr.com", "klm@ipr.com", "lmn@ipr.com", "mno@ipr.com", "nop@ipr.com", "opq@ipr.com", "pqr@ipr.com", "qrs@ipr.com", "rst@ipr.com", "stu@ipr.com", "tuv@ipr.com", "uvw@ipr.com", "vwx@ipr.com", "wxy@ipr.com", "xyz@ipr.com"]
					}
				});

				$('#ajax_ac').tagsInput({
					'autocomplete': {
				        source: function(request, response){
				        	return $.ajax({
				        		url:'https://github.com/ishworprasadrijal/autocomplete-tags/countries.php',
				        		dataType:'json',
				        		success: function (data) {
			                        response($.ui.autocomplete.filter(data, request.term));
			                    },
				        	})
				        }
					}
				});
			});
		</script>
	</body>
</html>
<script>