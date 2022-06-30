<!DOCTYPE HTML>
<html>

<head>
    <script src="js/trein.js"></script>
  <style>
    #train {
      position: relative;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <img id="train" src="image/sjorsziek1.jpg">
  
  
  


  <script>
    train.onclick = function() {
      let start = Date.now();

      let timer = setInterval(function() {
        let timePassed = Date.now() - start;

        train.style.left = timePassed / 5 + 'px';

        if (timePassed > 2000) clearInterval(timer);

      }, 20);
    }
  
  </script>

  


</body>

</html>