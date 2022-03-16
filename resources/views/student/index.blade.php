<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All student list</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        a{
            color: #f7fafc;
            padding: 10px 20px;
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
</head>
<body>
<div>
    <div><h1>All students list</h1> <a href="{{route('students.create')}}" style="background: green; margin-bottom: 15px;display: block;
    width: 10%;">Create new student</a></div>
    <div>
{{--        {{dd($students)}}--}}
        <table>
            <tr>
                <th>#SL</th>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Image</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>Active</td>
                <td>image</td>
                <td>{{$student->password}}</td>
                <td>
                    <a href="{{route('students.edit', $student->id)}}" style="background: yellow">Edit</a>
                    <form action="{{route('students.destroy', $student->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" style="background: red; color: #ffffff">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>
