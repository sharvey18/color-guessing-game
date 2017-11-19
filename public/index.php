<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Color Guessing Game</title>
    <link rel="stylesheet" href="/sass/app.min.css">
  </head>
  <body>
    <h1>The Great
      <br />
      <span id="colorDisplay">RGB</span>
      <br />
      Color Guessing Game
    </h1>

    <div id="stripe">
      <button id="reset">New Colors</button>
      <span id="message"></span>
      <button class="mode">Easy</button>
      <button class="mode selected">Hard</button>
    </div>

    <div id="container">
      <div class="square"></div>
      <div class="square"></div>
      <div class="square"></div>
      <div class="square"></div>
      <div class="square"></div>
      <div class="square"></div>
    </div>

    <script src="js/colorGame.js" charset="utf-8"></script>
  </body>
</html>
