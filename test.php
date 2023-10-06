<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <button id="plusButton" style="font-size: 40px;">+</button>

  <div id="container">
    <div id="template">
      <div>
        <input type="text" placeholder="Enter text">
        <input type="text" placeholder="Enter text">
      </div>
    </div>
  </div>

  <style>

    #template {
      display: none;
      border: 2px solid black;
      border-radius: 2px;
      width: 300px;
      padding: 10px;
      margin: 0 auto;
      margin-top: 20px;
    }

  </style>


  <script>

    
    const container = document.getElementById("container");
    const plusButton = document.getElementById('plusButton');

    plusButton.addEventListener('click', function() {

      const templateDiv = document.getElementById("template");
      const newDiv = templateDiv.cloneNode(true);

      newDiv.style.display = "block";


      container.appendChild(newDiv);
    });


  </script>

</body>

</html>