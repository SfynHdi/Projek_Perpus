<!DOCTYPE HTML>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: 0;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            height: 100vh;
            background-image: url(https://i.pinimg.com/564x/fb/84/e8/fb84e8dc4fe3f24b8ee06383a44ddd9f.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        p {
            color: white;
            font-family: 'Open Sans', sans-serif;
            padding-top: 10px;
        }

        h1 {
            text-align: center;
            padding-left: 100px;
            padding-bottom: 20px;
        }

        a {
            color: white;
            font-family: 'Open Sans', sans-serif;
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px 25px;
            width: 300px;

            background-color: rgba(0, 0, 0, .7);
            box-shadow: 0 0 10px rgba(255, 255, 255, .3);
        }

        .container h1 {
            text-align: left;
            color: #fafafa;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid #752BEA;
        }

        .container label {
            text-align: left;
            color: #90caf9;
        }

        .container form input {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #752BEA;
            color: #fff;
            font-size: 20px;
        }

        .container form button {
            width: 100%;
            height: 40px;
            padding: 5px 0;
            border: none;
            background-color: #752BEA;
            font-size: 18px;
            color: #fafafa;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form>
            <label>Username</label>
            <br>
            <input type="text">
            <br>
            <label>Email</label>
            <br>
            <input type="text">
            <br>
            <label>Password</label>
            <br>
            <input type="password">
            <br>
            <button>Register</button>
            <p> Sudah punya akun?
                <a href="/">Login di sini</a>
            </p>
        </form>
    </div>
</body>

</html>