<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        nav {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            column-gap: 10px;
        }

        nav * {
            text-decoration: none;
            color: black;
            background: lightgray;
            padding: 5px 10px;
            border-radius: 10px;
            transition: 0.125s ease-in-out;
        }

        nav a:hover {
            background: gray;
            color: white;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/new">New Post</a>
    </nav>
    <main>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <label for="title">Title</label>
            <input required type="text" name="title" id="title">
            <label for="content">Content</label>
            <textarea required name="content" id="content" cols="30" rows="10"></textarea>
            <input type="submit" value="Submit Post">
        </form>
    </main>
</body>

</html>
