<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{route('posts.index')}}">All Posts</a>
        <a href="{{route('posts.create')}}">Add New Post</a>
    </div>

    <div>
        @yield('content')
    </div>

</body>
</html>
