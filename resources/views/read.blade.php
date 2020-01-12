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
        <div class="row">
            <a href="{{ url('/') }}" class="btn btn-info">ADD STUDENT</a>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>sr.no</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name}}</td>
                        <td>{{ $student->last_name }}</td>
                        <td><a href="{{ url('/delete') }}/{{$student->id}}" class="btn btn-danger">Delete</a>
                            <a href="{{ url('/edit') }}/{{$student->id}}" class="btn btn-info">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>


</body>

</html>