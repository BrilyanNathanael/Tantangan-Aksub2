<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/employee.css">
    <title>Edit Employee</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h2>Edit Employee</h2>
            <form action="/edit/{{$emplo->id}}" method="post">
                @csrf
                @method('put')
                <label for="Name">Name</label>
                <input type="text" id="Name" name="name" value="{{$emplo->name}}">
                <label for="age">Age</label>
                <input type="text" id="age" name="age" value="{{$emplo->age}}">
                <label for="position">Position</label>
                <input type="text" id="position" name="position" value="{{$emplo->position}}">
                <label for="company">Company</label>
                <select name="company" id="company" style="border-radius:10px;background-color:white;border:1px solid white;">
                    @foreach($company as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>