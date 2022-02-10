<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
            display: flex;
        }
        li {
            margin-right: 1em;
        }
    </style>
</head>
<body>
    <header>
        <ul>
            @foreach ($headerLink as $link)
                <li><a href="">{{ $link }}</a></li>
            @endforeach
        </ul>
    </header>
    <h1>My Homepage</h1>
</body>
</html>
