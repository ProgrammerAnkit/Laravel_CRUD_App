<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        li {
            list-style-type: none;
            display: list-item;
            color: white;
            padding: 13px;
            float: left;
            display: inline-block;

        }

        .navbar_list {
            background-color: black;
            padding: 0;
            margin: 0;
            overflow: hidden;
        }

        .navbar {
            display: block;
        }

        li.a:hover {
            background-color: gray;
            color: black;
        }
    </style>

    <title>Document</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar_elements">
            <ul class="navbar_list">
                <li class="a">HOME</li>
                <li class="a">ABOUT US</li>
                <li class="a">CONTACT US</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <form action="{{ url('/student_details') }}" method="POST">
            {{ csrf_field() }}
            First name:<br>
            <input type="text" name="firstname" value=""><br>
            Last name:<br>
            <input type="text" name="lastname" value=""><br><br>
            <button type="submit">submit</button>
        </form>

    </div>

</body>

</html>