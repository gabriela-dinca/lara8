<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Post</title>
    <link rel="stylesheet" href="/app.css"></link>
</head>
<body>
    <article>
        <h1><?= $post->title ?></h1>
        <p><?= $post->body ?></p>
    </article>
    <a href="/">Go Back</a>
</body>
</html>
