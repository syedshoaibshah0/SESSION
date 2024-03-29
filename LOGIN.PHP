<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            color: green;
            font-size: 17px;
            border: none;
            
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


    $_SESSION["username"] = "Toyota Land Cruiser V8";
    $_SESSION["pass"] = "Login123";
    $_SESSION["HOBBY"] = "The Land Cruiser V8 has never wanted for much in terms of quality, performance, luxury and unmissable road presence. Now current model goes even further in terms of sharper design inside and out, more creature comforts and advanced handling technologies for exceptional off-road capabilities. Here’s what you can expect from Toyota’s new flagship 4×4…";


    echo "<div class='topnav'>
<a class='active' href='#home'>Home</a>
<a href='#about'>About</a>
<a href='#contact'>Contact</a>
<div class='login-container'>
  <form action='/action_page.php'>
    <button type='submit'><a href='WELCOME.PHP'>LogIN</a></button>
    <button type='submit'><a href='LOGOUT.PHP'>LogOUT</a></button>
  </form>
</div>
</div>";






    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>