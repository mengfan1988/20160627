<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./jquery-3.0.0.min.js"></script>
		<style>
		div{
			width:100px;
			height:100px;
			background-color:red;
			float:left;
			border:1px solid red;
			margin:0px 5px;
		}
		.colored{
			background-color:blue;
		}
		</style>
    </head>
    <body>
	<button id='run'>run</button>
	<div></div>
	<div id='move'></div>
	<div></div>
        
        <script>
                    $(function(){
					$('button').click(function(){
						$("div:animated").toggleClass('colored');
						function animatedIt(){
							$("#move").slideToggle("slow",animatedIt);
						}
						animatedIt();
					})
					})
          
        </script>
    </body>
</html>
