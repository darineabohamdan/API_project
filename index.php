<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="header"> <h1> Spend some fun time! </h1> </div>
 
<div class=" all">
 <div class="api api1">
<form id="btn">

<h3> Enter X : <input type="text" name="x" id="x"> </h3>
<h3> Enter Y : <input type="text" name="Y" id="y"> </h3>
<button type="submit" value="Submit" class="one">submit</button>

<h1>The answer of equation 2*x +y%2 is:</h1><span id="result"></span> 


<img src="./assets/image1.png">

</form>
    

</div>  
    

<div class="api api2">
<form id="btn2">

<h3>Enter a word:  <input type="text" id="string"> </h3>
<button type="submit" value="submit">Check</button>
<h1>This word is </h1><span id="palindrom"></span>
<img src="./assets/image2.jpg" class="cat"> 
</form>
</div>

<div class="api api3">
<form   id="btn3">    

    <h3>Enter your sentence to remove any extra spaces: <input type="text" id="text1"></h3>
<button type= "submit" value="submit" class="firstbutton">enter</button><br>

<h1>Your sentence becomes:</h1> <span type="text" id="text2"></span>
 <img src="./assets/image3.png">
</form>
</div> 

<div class="api api4">
<form  id="btn4">
<h3>Enter a password of more than 8 characters that contains both alphabets and digits: <input type="text" 
id="password"></h3>
<button type="submit" value="submit">Continue</button>
<h1>Your password </h1> <span type="text" id="text"></span>
 <img src="./assets/image4.jpg">

</form>
</div> 

    <script src="function.js" type="text/javascript"></script> 
   <!--  <script src="function2.js" type="text/javascript"></script>
    <script src="function3.js" type="text/javascript"></script> -->
    <!-- <script src="function4.js" type="text/javascript"></script> !-->
</div>
</body>
</html>