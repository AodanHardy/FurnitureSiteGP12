<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interior</title>

  <style>

.grid-container {
  margin: 0 auto;
  max-width: 1200px; /* adjust as necessary */
}



    /* create a grid with rows of three images */
    .grid-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
      /*font-weight: bold...  in dec box*/
      font-weight: 450;
    }

    /* add buffer between header and footer */
    body {
      margin: 50px 0;
      /*background-color: grey !important;*//*change background color*/

    }

    /* make images scale to the size of the browser window */
    img {
  max-width: 75%;
  height: auto;
  object-fit: cover;
  max-height: 300px;
  border: 5px solid orange;
  border-radius: 50%;
}



    button.buy-now {
  background-color: green;
  color: black;
}

.description-box {
  width: 350px;
  height: 150px;
  overflow-x: scroll;
}

.description-box::-webkit-scrollbar {
  display: none;
}



.buy-now {
  background-color: orange;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 18px;
  font-weight: bold;
  transition: background-color 0.3s ease-in-out;
}

.buy-now:hover {
  background-color: #ff9900;
  cursor: pointer;
}


  </style>


</head>
<body>


  <?php include 'inc/header.php'; ?>
  <div style="background-color: black; color: yellow; padding: 10px; text-align: center;">
    Welcome to the Furniture Shop you are on the Interior Furniture page!
  </div>
  <br></br>

  <div class="grid-container">
    <div>
      <img src="images/pool_1.jpg" alt="Image 1">
      <br></br>
      <div class="description-box" style="width: 350px; height: 150px; overflow: scroll;">
      
        <p style="padding-right: 5px;">
          The luxurious pool is the perfect addition to any backyard oasis. Measuring 25 feet by 50 feet, this pool is large enough for swimming laps or relaxing with friends and family. The pool features a state-of-the-art filtration system and is made from high-quality materials that are built to last. Whether you're looking to cool off on a hot summer day or want to add some value to your property, this pool is the perfect choice.
        </p>
      </div>

       <button class="buy-now">
       <a href="index.php" style="color: black;">
    Buy Now for <span style="color: orange;">&pound;900</span>
  </a>
</button>
    </div>

    
    <div>
      <img src="images/garden_shed_white.jpg" alt="Image 2">
      <br></br>
      <div class="description-box" style="width: 350px; height: 150px; overflow: scroll;">
        <p style="padding-right: 5px;">
          The luxurious pool is the perfect addition to any backyard oasis. Measuring 25 feet by 50 feet, this pool is large enough for swimming laps or relaxing with friends and family. The pool features a state-of-the-art filtration system and is made from high-quality materials that are built to last. Whether you're looking to cool off on a hot summer day or want to add some value to your property, this pool is the perfect choice.
        </p>
      </div>
      <button class="buy-now">
  <a href="index.php" style="color: black;">
    Buy Now for <span style="color: orange;">&pound;200</span>
  </a>
</button>

    </div>
    <div>
      <img src="images/patio_image_1.jpg" alt="Image 3">
      <br></br>
      <div class="description-box" style="width: 350px; height: 150px; overflow: scroll;">
        <p style="padding-right: 5px;">
          The luxurious pool is the perfect addition to any backyard oasis. Measuring 25 feet by 50 feet, this pool is large enough for swimming laps or relaxing with friends and family. The pool features a state-of-the-art filtration system and is made from high-quality materials that are built to last. Whether you're looking to cool off on a hot summer day or want to add some value to your property, this pool is the perfect choice.
        </p>
      </div>
      <button class="buy-now">
      <a href="index.php" style="color: black;">
    Buy Now for <span style="color: orange;">&pound;800</span>
  </a>
    </div>
    <div>
      <img src="images/patio_image_2.jpg" alt="Image 4">
      <br></br>
      <div class="description-box" style="width: 350px; height: 150px; overflow: scroll;">
        <p style="padding-right: 5px;">
          The luxurious pool is the perfect addition to any backyard oasis. Measuring 25 feet by 50 feet, this pool is large enough for swimming laps or relaxing with friends and family. The pool features a state-of-the-art filtration system and is made from high-quality materials that are built to last. Whether you're looking to cool off on a hot summer day or want to add some value to your property, this pool is the perfect choice.
        </p>
      </div>      <button class="buy-now">
        
      <a href="index.php" style="color: black;">
    Buy Now for <span style="color: orange;">&pound;200</span>
  </a>
    </div>
    <div>
      <img src="images/patio_image_2.jpg" alt="Image 4">
      <br></br>
      <div class="description-box" style="width: 350px; height: 150px; overflow: scroll;">
        <p style="padding-right: 5px;">
          The luxurious pool is the perfect addition to any backyard oasis. Measuring 25 feet by 50 feet, this pool is large enough for swimming laps or relaxing with friends and family. The pool features a state-of-the-art filtration system and is made from high-quality materials that are built to last. Whether you're looking to cool off on a hot summer day or want to add some value to your property, this pool is the perfect choice.
        </p>
      </div>      <button class="buy-now">
      <a href="index.php" style="color: black;">
    Buy Now for <span style="color: orange;">&pound;400</span>
  </a>
    </div>
    <div>
      <img src="images/tableAndChairs.jpg" alt="Image 6">
      <br></br>
      <div class="description-box" style="width: 350px; height: 150px; overflow: scroll;">
        <p style="padding-right: 5px;">
          The luxurious pool is the perfect addition to any backyard oasis. Measuring 25 feet by 50 feet, this pool is large enough for swimming laps or relaxing with friends and family. The pool features a state-of-the-art filtration system and is made from high-quality materials that are built to last. Whether you're looking to cool off on a hot summer day or want to add some value to your property, this pool is the perfect choice.
        </p>
      </div>      <button class="buy-now">
      <a href="index.php" style="color: black;">
    Buy Now for <span style="color: orange;">&pound;100</span>
  </a>
    </div>
    <div>
      <img src="images/pool_1.jpg" alt="Image 7">
      <br></br>
      <div class="description-box" style="width: 350px; height: 150px; overflow: scroll;">
        <p style="padding-right: 5px;">
          The luxurious pool is the perfect addition to any backyard oasis. Measuring 25 feet by 50 feet, this pool is large enough for swimming laps or relaxing with friends and family. The pool features a state-of-the-art filtration system and is made from high-quality materials that are built to last. Whether you're looking to cool off on a hot summer day or want to add some value to your property, this pool is the perfect choice.
        </p>
      </div>      <button class="buy-now">
      <a href="index.php" style="color: black;">
    Buy Now for <span style="color: orange;">&pound;250</span>
  </a>      
    </div>
    <div>
      <img src="images/patio_image_2.jpg" alt="Image 8">
      <br></br>
      <div class="description-box" style="width: 350px; height: 150px; overflow: scroll;">
        <p style="padding-right: 5px;">
          The luxurious pool is the perfect addition to any backyard oasis. Measuring 25 feet by 50 feet, this pool is large enough for swimming laps or relaxing with friends and family. The pool features a state-of-the-art filtration system and is made from high-quality materials that are built to last. Whether you're looking to cool off on a hot summer day or want to add some value to your property, this pool is the perfect choice.
        </p>
      </div>      <button class="buy-now">
      <a href="index.php" style="color: black;">
    Buy Now for <span style="color: orange;">&pound;1200</span>
  </a>    </div>
  <div>
      <img src="images/patio_image_2.jpg" alt="Image 8">
      <br></br>
      <div class="description-box" style="width: 350px; height: 150px; overflow: scroll;">
        <p style="padding-right: 5px;">
          The luxurious pool is the perfect addition to any backyard oasis. Measuring 25 feet by 50 feet, this pool is large enough for swimming laps or relaxing with friends and family. The pool features a state-of-the-art filtration system and is made from high-quality materials that are built to last. Whether you're looking to cool off on a hot summer day or want to add some value to your property, this pool is the perfect choice.
        </p>
      </div>      <button class="buy-now">
      <a href="index.php" style="color: black;">
    Buy Now for <span style="color: orange;">&pound;1200</span>
  </a>    </div>

  <br><br>
  </div>

  <?php include 'inc/footer.php'; ?>
</body>
</html>