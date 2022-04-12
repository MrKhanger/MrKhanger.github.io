<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap" rel="stylesheet">

    <style>

html *,
html *:before,
html *:after {
  box-sizing: inherit;
}

/* body {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
  background-color: #e6e6e6;
} */

.WhyUscontainer {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 100%;
  margin: 20px 0 80px;
}

.WhyUscard {
  width: 300px;
  margin: 10px;
  background-color: white;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
}
.WhyUscard:hover .WhyUscard__caption {
  top: 50%;
  transform: translateY(-50%);
}
.WhyUscard:hover .WhyUscard__image {
  transform: translateY(-10px);
}
.WhyUscard:hover .WhyUscard__thumb::after {
  top: 0;
}
.WhyUscard:hover .WhyUscard__snippet {
  margin: 20px 0;
  
}
.WhyUscard__thumb {
  position: relative;
  max-height: 400px;
  overflow: hidden;
  margin: 0px;
}
@media (min-width: 1024px) {
  .WhyUscard__thumb {
    max-height: 360px;
    margin: 0px;
  }
}
.WhyUscard__thumb::after {
  position: absolute;
  top: 0;
  display: block;
  content: "";
  width: 100%;
  height: 100%;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 40%, rgba(255, 255, 255, 0) 100%);
  transition: 0.3s;
}
@media (min-width: 1024px) {
  .WhyUscard__thumb::after {
    top: calc(100% - 140px);
  }
}
.WhyUscard__image {
  height: 360px;
  width: 100%;
  border-radius: 0px;
  transition: 0.5s ease-in-out;
}
.WhyUscard__caption {
  position: absolute;
  top: 50%;
  z-index: 1;
  padding: 0 20px;
  color: white;
  transform: translateY(-50%);
  text-align: center;
  transition: 0.3s;
}
@media (min-width: 1024px) {
  .WhyUscard__caption {
    top: calc(100% - 110px);
    transform: unset;
  }
}
.WhyUscard__title {
  display: -webkit-box;
  max-height: 85px;
  overflow: hidden;
  font-family: "Playfair Display", serif;
  font-size: 23px;
  line-height: 28px;
  text-shadow: 0px 1px 5px black;
  text-overflow: ellipsis;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}
.WhyUscard__snippet {
  display: -webkit-box;
  max-height: 150px;
  margin: 20px 0;
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  line-height: 20px;
  text-overflow: ellipsis;
  transition: 0.5s ease-in-out;
  -webkit-line-clamp: 10;
  -webkit-box-orient: vertical;
}
@media (min-width: 1024px) {
  .WhyUscard__snippet {
    margin: 60px 0;
  }
}
.WhyUscard__button {
  display: none;
  padding: 10px 20px;
  color: white;
  border: 1px solid white;
  font-family: "Roboto", sans-serif;
  font-size: 12px;
  text-transform: uppercase;
  text-decoration: none;
  transition: 0.3s;
}
.WhyUscard__button:hover {
  color: black;
  background-color: white;
}

#WhySellHead {
    font-size: 2.2rem;
    color: black;
    margin: 30px 0px 30px 0;
    text-align: center;
}

    </style>
</head>
<body>

<h2 id="WhySellHead" >Why to Resell your books?</h2>
    

<div class="WhyUscontainer">
	<div class="WhyUscard">
		<figure class="WhyUscard__thumb">
			<img src="https://cdn.pixabay.com/photo/2015/07/27/20/16/book-863418_960_720.jpg" alt="Picture by Kyle Cottrell" class="WhyUscard__image">
			<figcaption class="WhyUscard__caption">
				<h2 class="WhyUscard__title">Used books are Environment friendly</h2>
				<p class="WhyUscard__snippet">Choosing second hand books is an easy and smart way to conserve natural resources. It is important to use material which can be easily reduced, reuse and recycle. And the used books save trees, raw material and contributes in saving environment.</p>
				<a href="" class="WhyUscard__button">Read more</a>
			</figcaption>
		</figure>
	</div>

	<div class="WhyUscard">
		<figure class="WhyUscard__thumb">
			<img src="https://cdn.pixabay.com/photo/2019/11/20/19/08/confused-4640878_960_720.jpg" alt="Picture by Nathan Dumlao" class="WhyUscard__image">
			<figcaption class="WhyUscard__caption">
				<h2 class="WhyUscard__title">Second hand books are cheaper than new books</h2>
				<p class="WhyUscard__snippet">In India, there are so many students who can't afford new books. Plus, buying used books online saves time, money, effort and provides knowledge at the same time. People and especially students who are preparing for competitive exams can purchase second hand books online at low cost as compared to new books. </p>
				<a href="" class="WhyUscard__button">Read more</a>
			</figcaption>
		</figure>
	</div>

	<div class="WhyUscard">
		<figure class="WhyUscard__thumb">
			<img src="https://cdn.pixabay.com/photo/2018/07/01/20/01/music-3510326_960_720.jpg" alt="Picture by Daniel Lincoln" class="WhyUscard__image">
			<figcaption class="WhyUscard__caption">
				<h2 class="WhyUscard__title">Used Books encourage people in reading</h2>
				<p class="WhyUscard__snippet">It is obvious in nature that people end up neglecting books. They don't love reading the fresh and tight papers of new book. But these second hand books make the reading environment and motivate people in reading. These books attract people towards themselves and generate some kind of desire in them to read the book.</p>
				<a href="" class="WhyUscard__button">Read more</a>
			</figcaption>
		</figure>
	</div>

	<div class="WhyUscard">
		<figure class="WhyUscard__thumb">
			<img src="https://cdn.pixabay.com/photo/2018/02/02/14/41/counting-3125587_960_720.jpg" alt="Picture by Daniel Lincoln" class="WhyUscard__image">
			<figcaption class="WhyUscard__caption">
				<h2 class="WhyUscard__title">Make money with the books you don't need </h2>
				<p class="WhyUscard__snippet">There are tens of books that we do not need or we have been promoted to the new class. So, why do we 
                    keep those books with us, when there are so many people out there who want those books. So, when your sell your books to them. You can definitely make a lot of money.</p>
				<a href="" class="WhyUscard__button">Read more</a>
			</figcaption>
		</figure>
	</div>
</div>

</body>
</html>