<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if($errors->any())
         <div>
             <ul>
                 @foreach($errors->all() as $error)
                     <li>
                         {{$error}}
                     </li>
                 @endforeach
             </ul>
         </div>
    @endif
<form method ="POST" action = "/">
    @csrf
    <h2>Add Task for User</h2>
    <p>User's name: <input type="text" name="user" id = "user"></p>
    <p>Task description:<input  type="text" name="desc" id = "desc"></p>
        <input type = "submit" value="Add Task">
</form>

    @if(session('success'))
        <div>
            {{session('success')}}
        </div>
    @endif

<h2>To do list</h2>
@foreach($showAll as $element)
    <div>
        <h3>
            {{$element->user}}
        </h3>
        <p>
            {{$element->desc}}
        </p>
    </div>
@endforeach
</body>
</html>
