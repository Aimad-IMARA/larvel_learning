<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - testing</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        header,
        footer {
            width: 100%;
            float: left;
            padding: 15px;
            background-color: rgb(46, 46, 46);
        }

        footer>ul {
            margin: 15px;
            list-style: none;
            float: right;
        }

        footer>ul>li {
            margin-left: 10px;
            float: left;
            color: #f1f1f1;
        }

        header>h1 {
            color: rgb(154, 3, 3);
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .content {
            background-color: #f1f1f1;
            height: 500px;
            float: left;
            width: 100%;
        }

        .content>form {
            position: relative;
            width: 50%;
            margin: auto;
            top: 25%;
        }

        table {
            width: 100%;
            font-style: oblique;
        }

        input {
            width: 70%;
            height: 30px;
            padding: 5px;
            border: 2px solid slategrey;
            border-radius: 5px;
            float: right;
        }

        .link {
            color: aliceblue;
        }

        .link:hover {
            color: red;
        }

        tr {
            height: 50px;
        }

        button[type=submit] {
            background-color: grey;
            color: crimson;
            height: 30px;
            width: 40%;
            border-radius: 5px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            font-style: bold;
        }

        button[type=submit]:hover {
            background-color: azure;
            color: black;

        }
    </style>
</head>

<body>
    <header>
        <h1>
            Learning Laravel in here
        </h1>
    </header>
    @auth
        <p>Conrats you're logged!</p>
        <a href="/logout">Click here to logout</a>
    @else
        <div class="content">
            <form action="/register">
                @csrf
                <table>
                    <tr>
                        <td>
                            <label for="name">Name :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Your name.." name="name" id="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email :</label>
                        </td>
                        <td>
                            <input type="email" placeholder="Your email.." name="email" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password :</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Your password.." name="password" id="password">
                        </td>
                    </tr>
                    <tr style="text-align:center">
                        <td colspan="2"> <button type="submit">Register</button></td>
                    </tr>
                </table>
            </form>
        </div>
    @endauth

    <footer>
        <ul>
            <li><a href="#" class="link">TWITTER</a></li>
            <li><a href="#" class="link">FACEBOOK</a></li>
            <li><a href="#" class="link">LINKD IN</a></li>
        </ul>
    </footer>
</body>

</html>