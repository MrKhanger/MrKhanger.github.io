<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=PT+Sans+Narrow&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <style>


  .c4{
    display: inline-block;
  }
  h1{
    text-align: left;
    font-weight: bold;
    color: black;
    font-family: "Times new Roman", Times serif;
    padding-top: 5%;
    padding-left: 5%;
    font-size: 2.7rem;
}

  h1 .type4{
    font-size: inherit; 
    overflow: hidden;
    margin-top: 6%;
    border-right: .15em solid orange; 
    font-family: 'PT Sans Narrow', sans-serif;
    white-space: nowrap; 
    font-size: 1.6rem;
    width: 0;
    animation: 
        typing 2s steps(30) forwards,
        blink 1.2s infinite;    
        animation delay: 4s;
  }

   @keyframes typing {
    from { width: 0 }
    to { width: 100% }
  }
  @keyframes blink {
    from { border-color: transparent }
    to { border-color: orange; }
  }

  .banner{
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 570px;
    opacity: 0.8;
    background-color: rgba(0,0,0,0.3);
    margin-bottom: 15px;
}

.banner::before{
    background: url('./Images/BannerPic.jpg') no-repeat center center/cover;
    /* background-image: image(.)) no-repeat center center/cover; */
    content: "";
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
    height: 570px;
    z-index: -1;
    opacity: 1.0;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #b4b7b7;
  color: black;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: black;
  color: white;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
  
#MainSearchBar{
  position: absolute;
  top: 85%;
  z-index: 8;
  width: 100%;
  box-sizing: border-box;
}

.blink {
  animation: blink 0.5s infinite;
}
@keyframes blink{
  to { opacity: .0; }
}
.BannerContent {
	display: flex;
}
.header-sub-title {
  color: blue;
  font-family: 'PT Sans Narrow', sans-serif;
  font-size: 2.1rem;
  padding: 0.1em;
}


</style>
</head>
<body>

<div id= "MainSearchBar"> 

<form id="Search-Bar" class="example" action="/action_page.php" style="margin-left: 5%; margin-right: 5%; max-width: 500px;}">
  <input type="text" placeholder="Search your book here.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
   <div class="banner">
   <br><br> <h1>Welcome to our platform <br> BoooksResell.com<br><br>
   
   <div class="BannerContent">
   <p class="header-sub-title" id="word"></p> <p class="header-sub-title blink">|</p>
   </div>
    <br>
    <div class="c4" id = "BannerBtn"><div class="type4"><a style="border: 2px solid white;
    transition: all 0.6s ease; color: mediumseagreen;" href="#">Start Selling today</a></div></div></h1>
</div> 
    <script>
    const words = ["You can Sell any Old Book..", "You can Buy any Old Book.", "You can fulfill any request.."];
let i = 0;
let timer;

function typingEffect() {
	let word = words[i].split("");
	var loopTyping = function() {
		if (word.length > 0) {
			document.getElementById('word').innerHTML += word.shift();
		} else {
			deletingEffect();
			return false;
		};
		timer = setTimeout(loopTyping, 60);
	};
	loopTyping();
};

function deletingEffect() {
	let word = words[i].split("");
	var loopDeleting = function() {
		if (word.length > 0) {
			word.pop();
			document.getElementById('word').innerHTML = word.join("");
		} else {
			if (words.length > (i + 1)) {
				i++;
			} else {
				i = 0;
			};
			typingEffect();
			return false;
		};
		timer = setTimeout(loopDeleting, 60);
	};
	loopDeleting();
};

typingEffect();
  </script>

</body>
</html>