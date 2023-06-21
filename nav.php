 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
            background-color: rgb(240, 236, 236);
        }
        .nav{
            height: 400px;
            width: 300px;
            border: 2px solid black;
            float: right;
        }
        .nav ul{
            display: flex;
            flex-direction: column;
        }
        .nav ul li{
            
            align-items: center;
            margin-top: 20px;
        }
        .nav ul li a{
            justify-content: center;
            align-items: center;
            margin-left: 20px;
           

        }
    </style>
  </head>
  <body>
    <div class="nav">
        <ul>
            <button></button>
      <li><a href="">Home</a></li>
      <li><a href="">About</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">Services</a></li>
        </ul>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>