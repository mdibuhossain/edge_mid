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

        .post {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 50%;
            margin: 0 auto;
            background: rgb(227, 229, 247);
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .comment-list {
            border-radius: 10px;
        }

        .comment-list ul {
            list-style-type: none;
            padding: 0;
        }

        .comment-list ul li {
            background: white;
            padding: 5px;
            border-radius: 5px;
            margin: 5px 0;
        }

        .comment-section {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            border-radius: 10px;
            background: rgb(189, 180, 180) !important;
        }
    </style>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/new">New Post</a>
    </nav>
    <main>
        <div class="post">
            @php
                $comments = $post->toArray()['comment'];
            @endphp
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
            <div class="comment-section">
                <form action="/post/{{ $id }}" method="POST">
                    @csrf
                    <label for="comment">Comment</label>
                    <input required name="content" id="comment" cols="30" rows="10"></input>
                    <input type="submit" value="Submit Comment">
                </form>
                @if (isset($comments))
                    <div class="comment-list">
                        <ul>
                            @foreach ($comments as $comment)
                                <li>{{ $comment['content'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </main>
</body>

</html>
