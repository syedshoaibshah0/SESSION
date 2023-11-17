<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }

        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #2196F3;
            color: white;
        }

        .topnav .login-container {
            float: right;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
            width: 120px;
        }

        .topnav .login-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            color: white;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .login-container button:hover {
            background-color: green;
        }

        @media screen and (max-width: 600px) {
            .topnav .login-container {
                float: none;
            }

            .topnav a,
            .topnav input[type=text],
            .topnav .login-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }
    </style>
</head>

<body>
    <?php


    session_start();


    echo "This my general data";
    if (isset($_SESSION["username"])) {

        // echo "<h1>welcome in our website ".$_SESSION["username"]."</h1>";
        // echo "<b>favourite hobby ".$_SESSION["HOBBY"]."</b>";
    
        echo "<h1>welcome in our website </h1>";

        // NAVBAR
        echo "<div class='topnav'>
<a class='active' href='#home'>Home</a>
<a href='#about'>About</a>
<a href='#contact'>Contact</a>
<div class='login-container'>
  <form action='/action_page.php'>
    <button type='submit'><a href='LOGOUT.PHP'><a href='LOGOUT.PHP'>LogOUT</a></button>
  </form>
</div>
</div>";
        // CARD USERNAME HOBBY
        echo "<div class='d-flex justify-content-center'>
        <div class='card' style='width: 18rem; margin-left: 28px;'>
          <img src='data:image/jpeg;base64,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' class='card-img-top'>
          <div class='card-body'>
            <h5 class='card-title'><h1>Toyota Land Cruiser V8</H1>
            </h5>
            <p class='card-text'> 'The Land Cruiser V8 has never wanted for much in terms of quality, performance, luxury and unmissable road presence. Now current model goes even further in terms of sharper design inside and out, more creature comforts and advanced handling technologies for exceptional off-road capabilities. Here’s what you can expect from Toyota’s new flagship 4×4…';

            </p>
            <a href='#' class='btn btn-primary'>Go somewhere</a>
          </div>
        </div>
        </div>";
        // LOGOUT BOTTON
        echo "<div class='d-grid gap-2' style='margin-top: 10px;'>
        <button  type='submit'><a href='LOGOUT.PHP'>LogOUT</a></button>
      </div>";



    }



    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>