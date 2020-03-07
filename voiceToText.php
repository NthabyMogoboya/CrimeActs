<!--<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>

-->

<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style type="text/css">
    body
    {
        background-image:url(https://www.drcone.com/wp-content/uploads/2014/10/mic1.jpg); 
        background-size: cover; 
        background-attachment: fixed;
        }
	.myClass
	{
		font-size: 3em;
		margin:0;
		padding:0;
		text-align: center;
		font-family: 'arial'	
		}
    .output{
		font-size: 2em;
		margin:0;
		padding:0;
		text-align: center;
		font-family: 'arial'
	}
</style>

<script>
	var recognition = new webkitSpeechRecognition();
	recognition.continuous = true;
	//recognition.interimResults = true;
	function start(){
		recognition.onresult = function(event) { 
			console.log(event);
			var output = document.getElementById("output");
			output.innerHTML = "";
			for(var i=0; i<event.results.length; i++){
				output.innerHTML = output.innerHTML + event.results[i][0].transcript;
			}
		}
		recognition.start();
	}
</script>

</head>
<body>
	
    <div class="MyClass">
		<h1>Speech to text</h1>
    	<p> Use voice to text in English if you're injured!!! </p>
		<input id = "bStart" type = "button" class="btn btn-success" value = "Start / Stop" onclick = "start();"></input>
	</div>
	<div class="output" id = "output"></div>
	
</body>
</html>