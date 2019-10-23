<html>
<head><title>Black Or White Game</title>
</head>
<body>
<style>
 body {
 text-align: Center;
 margin: 0 auto;
 }
 h1 {
 font-size: 50px;
 color: black;
 font-family: arial;
 background: red;
 }
 
 h2 {
 font-size: 30px;
 color: black;
 font-family: arial;
 
 h3 {
 font-size: 40px;
 color: black;
 font-family: arial;

</style>

<h1>Black Or White Game by Gabriel Bejarasco Set B</h1>
</br>
<h2>Your Guess:</h2>
</br>

<div>
 <button type="button">Black</button>
 </br>
 </br>
 <button type="button">White</button>
 </br>
 </br>
 <button type="submit">Spin the Roullete</submit>
 </br>
</div>

<h3>Roullete spin to:</h3>
</br>

<script>

 function yourGuess()
{
var guess1 = document.getElementById("guess").value;
var guess2 = 501;
var newGuess = Math.floor(guess2);
var n = 0;

if (newGuess < guess1) {
    yourReturn = "Your are too low!!!"
}
else {
    if (newGuess > guess1) {
        yourReturn = "You are too high!!!"
    }
    else {
        yourReturn = "Correct, You are the winner!!!"
    }       
}
}
</script>
</body>
</html>
