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

        section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin: 20px;
        }

        article {
            border: 1px solid black;
            padding: 5px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/new">New Post</a>
    </nav>
    <main>
        @if (isset($posts))
            <section>
                @foreach ($posts as $post)
                    <article>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->content }}</p>
                        <a href="/post/{{ $post->post_id }}">Read more</a>
                    </article>
                @endforeach
            </section>
        @else
            <h3>No post available</h3>
        @endif
    </main>
</body>

</html>
