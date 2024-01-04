<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Class</title>
</head>
<body>
    @auth
    <p>You are logged in successfully!!</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>

    <div style="border: 3px solid black;">
        <h3>Create a new post</h3>
        <form action="/create-post" method="POST">
            @csrf
            <input name="title" type="text" placeholder="Enter post title" />
            <textarea name="body" type="text" placeholder="Write a message"></textarea>
            <button>Save post</button>
        </form>
    </div>
    <br />
    <div style="border: 3px solid black;">
        <h3>All Posts</h3>
        @foreach($posts as $post)
            <div style="background-color: gray; padding: 10px; margin: 10px;">
                <h3>{{$post['title']}}</h3>
                {{$post['body']}}
                <p><a href='/edit-post/{{$post->id}}'>Edit</a></p>
                <form action="/delete-post/{{$post->id}}" method="DELETE">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        @endforeach
    </div>

    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="Enter fullname" />
            <input name="email" type="text" placeholder="Enter email" />
            <input name="password" type="password" placeholder="Enter password" />
            <button>Register</button>
        </form>
    </div>
    <br />
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="Enter fullname" />
            <input name="loginpassword" type="password" placeholder="Enter password" />
            <button>Login</button>
        </form>
    </div>
    @endauth

</body>
</html>