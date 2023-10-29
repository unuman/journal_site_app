<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        論文詳細
    </title>
</head>
<body>
    <h1>論文詳細</h1>
    <p>タイトル : {{ $article->title }}</p>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <button onclick="location.href='{{  route('articles.index') }}'">一覧へ戻る</button>
</body>
</html>
