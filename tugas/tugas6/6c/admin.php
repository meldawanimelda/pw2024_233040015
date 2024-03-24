
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vh;
            color: white;
            background-color: #5678;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            text-align: center;
            background-color: #345;
            width: 80%;
            height: 80%;
            font-size: 1.5rem;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 20px
        }

        button {
            font-size: 1.2rem;
            background-color: lightskyblue;
            border-radius: 10px;
            padding: 5px;
            border: 2px solid white;
            width: 100px;
            cursor: pointer;
        }

        button:hover{
            background-color:#789;
        }
        a {
            text-decoration: none;
            color: black;
        }

        p {
            color: red;
        }

        .profile {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            background-image: url(zaii.jpg) ;
            background-size: cover;
            background-position: center;
            border: 3px solid lightblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="profile"></div>
            <h2>Selamat Datang </h2>
            <button><a href="Login.php">Logout</a></button>
        </div>
    </div>
</body>
</html>