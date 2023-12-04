<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Area Calculator</title>
    <style>
      *, *::before, *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      header {
        background: linear-gradient(90deg, blue, red);
      }

      #title {
        color: white;
        padding-block: 10px;
        padding-left: 5px;
      }

      #content-container {
        border: 1px solid black;
        width: 30%;
        min-width: 250px;
        margin: 50px auto;
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 15px;
        background-color: rgb(210, 215, 211);
        font-size: 20px;
      }

      #content-container > * {
        margin-top: 30px; 
        width: 100%;
      }

      .input-row {
        display: flex;
        justify-content: space-between;
      }

      .input-row input {
        padding-left: 2px;
        flex: 1;
        max-width: 60%;
      }

      #btn-calc {
        border: none;
        padding: 10px 15px;
        background-color: rgb(108, 122, 137);
        color: white;
        border-radius: 15px;
        cursor: pointer;
        width: 50%;
        transition: ease-in-out .3s;
        font-size: 20px;
        margin-top: 50px;
      }

      #btn-calc:hover {
        color: rgb(108, 122, 137);
        background-color: white;
      }

      #answer {
        text-align: center;
      }

    </style>
  </head>
  <body>
    <?php 
    $clicked = false;
    if(isset($_POST['submit'])) {
      $height = $_POST['height'];
      $width = $_POST['width'];

      $result = calculate($height, $width);
      $clicked = true;
    }
    function calculate($height, $width) {
      return $height * $width;
    }
    ?>

    <header>
      <h1 id="title">Rectangle Area Calculator</h1>
    </header>

    <form id="content-container" method="post" action="calculator.php">
      <div class="input-row">
        <label for="height">Height: </label>
        <input type="number" name="height" id="height" required step=".001" min="0.001" max="10000">
      </div>
      <div class="input-row">
        <label for="width">Width: </label>
        <input type="number" name="width" id="width" required step=".001" min="0.001" max="10000">
      </div>
      <button id="btn-calc" type="submit" name="submit">Calculate</button>
    </form>
    <div>
      <?php
      if($clicked) {
        echo "
          <h2 id='answer'>The area of a rectangle with a width of $width and height of $height is $result</h2>
        ";
      } 
      ?>
    </div>
  </body>
</html>