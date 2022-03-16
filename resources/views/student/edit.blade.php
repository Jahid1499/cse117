<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new student</title>
    <style>
        input{
            margin: 10px 0px;
        }
    </style>
</head>
<body>
<div>
    <div><h1>Fill-up the from for update</h1></div>
</div>

<div>
    <form action="{{route('students.update', $student->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('put')
        <label for="name">Name:</label><br>
        <input type="text" value="{{$student->name}}" name="name" placeholder="Enter your name" required><br>

        <label for="email">Email:</label><br>
        <input type="email"value="{{$student->email}}" name="email" placeholder="Enter your email" required><br>

        <label for="password">Password:</label><br>
        <input type="text" value="{{$student->password}}" name="password" placeholder="Enter your password" required><br>

        <input type="submit" value="Update">
    </form>

    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
</body>
</html>
