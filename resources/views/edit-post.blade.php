<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edgSe">
    <title>Document</title>
</head>
<body>
    <h3>Edit</h3>
    <form action="/edit-post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}" />
        <textarea name="body" id="" cols="30" rows="10">{{$post->body}}</textarea>
        <button>Save Changes</button>
    </form>
</body>
</html>