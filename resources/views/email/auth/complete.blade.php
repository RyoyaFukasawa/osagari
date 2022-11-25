<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

</head>

<body>
    <p>
        <br />
        {{ $content->name }}さん<br />
        <br />
        osagariにご登録いただきありがとうございます。<br>
        会員登録が完了しました。
        <br>
        osagariを開く<br>
        <a href="http://localhost/home">http://localhost/home</a>
        <br />
        <br />
        ■お問い合わせ■<br />
        ＜メールでのお問い合わせ＞<br />
        <a href="mailto:md201108@senshu-u.jp">md201108@senshu-u.jp</a>
        <br />
    </p>
</body>

</html>
