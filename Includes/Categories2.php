<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    /* --------- Card Animation ---------- */
    .card:not(:empty):hover,
    .card:not(:empty):focus {
      z-index: 1;
      color: #fff;
      background: #ea124f;
      opacity: 1;
      transform: scale(1.15);
      cursor: pointer;
    }

    .card:not(:empty):hover:after,
    .card:not(:empty):focus:after {
      opacity: 1;
    }

    .card:not(:empty):hover:before,
    .card:not(:empty):focus:before {
      opacity: 0;
    }

    .card {
      padding: 10px;
      border-radius: 0px;
      background: aliceblue;
      background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(175, 175, 175));
      opacity: 0.9;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      transition: all 0.6s cubic-bezier(0.33, 1, 0.68, 1);
      transition-property: background, transform, color, opacity;
      
    }


    /* margin: auto;
  padding: 2em;
  border-radius: 1em;
  border: 1px solid rgba(255, 255, 255, 0.5);
  text-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
  background: rgba(255, 255, 255, 0.2);
  -webkit-backdrop-filter: blur(20px);
          backdrop-filter: blur(20px);
  transform: perspective(500px);
  backdrop-filter: blur(20px);
  transform-style: preserve-3d; */

    .card:not(:empty):before {
      box-shadow: -2px 2px 8px 2px rgba(0, 0, 0, 0.2);
    }

    .card:empty {
      opacity: 0.3;
    }

    .card:before,
    .card:after {
      content: "";
      position: absolute;
      border-radius: 0px;
      z-index: -1;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      transition: opacity 0.4s cubic-bezier(0.33, 1, 0.68, 1);
    }

    .card:after {
      box-shadow: -20px 20px 12px 6px rgba(0, 0, 0, 0.2);
      opacity: 0;
    }

    /* --------- Grid ---------- */
    .grid {
      width: 100%;
      height: 100%;
      padding: 30px;
      margin: 0px;
      background: aliceblue;
      display: grid;
      overflow: hidden;
      grid-template-columns: repeat(5, 1fr);
      grid-template-rows: repeat(4, 1fr);
      grid-gap: 20px;
    }

    .item1 {
      grid-area: 1/1/3/3;
    }

    .item2 {
      grid-area: 3/3/4/4;
    }

    .item2.card:hover,
    .item2.card:focus {
      background: #00005c;
    }

    .item3 {
      grid-area: 4/1/5/4;
    }

    .item4 {
      grid-area: 1/3/2/5;
    }

    .item5 {
      grid-area: 2/4/3/5;
    }

    .item6 {
      grid-area: 3/4/4/5;
    }

    .item7 {
      grid-area: 3/4/5/5;
    }

    .item7.card:hover {
      background: navy;
    }


    .item8 {
      grid-area: 1/5/2/6;
    }

    .item8.card:hover,
    .item8.card:focus {
      background: #f57b51;
    }

    .item9 {
      grid-area: 2/5/3/6;
    }

    .item10 {
      grid-area: 3/5/4/6;
    }

    .item10.card:hover {
      background: #e385ff;
    }


    .item11 {
      grid-area: 4/5/5/6;
    }

    .item11.card:hover,
    .item11.card:focus {
      background: #00a8cc;
    }

    .content {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    /*--------- Layout -------- */
    *,
    *:before,
    *:after {
      position: relative;
      box-sizing: border-box;
    }

    #CatContainer{
      height: 100%;
      width: 100%;
      margin: 0;
      padding: 0;
    }

    #CatContainer {
      font-family: "PT Sans", sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .CatHeading{
      /* margin: 2.2rem 1.05rem; */
      margin: auto;
      text-align: center;
      line-height: 1.2;
      font-size: 1.2rem;
      font-family: "Jost", sans-serif;
    }

    .CatHeading h2 {
      font-size: 1.5em;
      text-align: center;
    }


    /* --------- Responsive ---------- */
    @media only screen and (max-width: 800px) {
      .grid {
        display: block;
        overflow-y: scroll;
      }

      .item1 {
        grid-area: 1/1/2/3;
      }
      .item3 {
        display: none;
      }

      .card {
        grid-area: auto;
        text-align: left;
      }

      .card:empty {
        display: none;
      }
    }
  </style>

</head>

<body>

  <div id="CatContainer">
  <main class="grid">
    <section class="content item1">
      <h2 class= "CatHeading" style="font-size: 3.02rem" >Books Categories</h2>

      <label class= "CatHeading">Select your City: 

      <select name="cars" id="cars">
      <option value="volvo">All</option>
      <option value="saab">City 1</option>
      <option value="mercedes">City 2</option>
      <option value="audi">City 3</option>
      </select>
      </label>

      <p style= "text-align: center;">Select the type of book that you want to purchase today</p>
    </section>
    
    <section class="card item2">
      <h2 class= "CatHeading">Competitive Exams<h2>
    </section>

    <section class="card item3"></section>

    <section class="card item4"><h2 class= "CatHeading">11th & 12th class<h2></section>

    <section class="card item5">
      <h2 class= "CatHeading">1st class- 6th class<h2>
    </section>

    <section class="card item7"> <h2 class= "CatHeading"> Government Jobs Preparation <h2></section>

    <section class="card item8">
      <h2 class= "CatHeading">College and University books<h2>
    </section>
    <section class="card item9"><h2 class= "CatHeading">6st class-10th class<h2></section>
    <section class="card item10"><h2 class= "CatHeading">Nobles<h2></section>
    <section class="card item11">
      <h2 class= "CatHeading">Others<h2>
    </section>
  </main>
</div>
</body>

</html>