<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Form</title>
</head>
<body>
    <h2>Student Form</h2>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="/student">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>
        <label>Age:</label>
        <input type="number" name="age" value="{{ old('age') }}"><br><br>
        <button type="submit">Submit</button>

    </form>
</body>
</html>