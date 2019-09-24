<html>
<head><title>Number Guessing Game</title>
<style>
	html {
	font-family: Arial;
	}
	body {
	text-align: center;
	color: White;
	background-image: url("rasta.jpg");
	}
</style>
</head>

<body>
	<h1 style="font-size: 500%;">Guess The Number</h1>
	<p style=" font-size: 200%;">Try Guessing the number we have randomly selected from 1-10</p>

<div class="form"> 
	<label for="guessField">Enter a guess: </label> 
    	<input type = "text" id = "guessField" class = "guessField"> 
   	<input type = "submit" value = "Submit guess" 
           class = "guessSubmit" id = "submitguess"> 
</div> 


<script type = "text/javascript"> 
  
	var y = Math.floor(Math.random() * 10 + 1); 
      
	var guess = 0; 
      
	document.getElementById("submitguess").onclick = function(){ 
          
	var x = document.getElementById("guessField").value; 
  
   	if(x == y) 
   	{     
       		alert("Congratulations! You Guess it Right"); 
  	} 
   	else if(x > y)
   	{     
       		guess++; 
       		alert("Your guess is too high"); 
   	}
	else if(x<y)
	{
		guess++;
		alert("Your guess is too low");
	}
   	else
   	{ 
       		guess++; 
       		alert("Your guess is not a number") 
   	} 
} 
</script> 
</body> 
</html>                 
</script>
</body>
</html>
