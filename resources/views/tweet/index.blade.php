<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>投稿フォーム</h1>
    <p>投稿フォーム</p>
    @if(session('feedback.success'))
        <p style="color: green">{{ session('feedback.success')}}</p>
    @endif
        <form action="{{ route('tweet.create')}}" method="post">
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力"></textarea>
            <button type="submit">投稿</button>
            @error('tweet')
            <p style="color: red;">{{ $message }}</p>
            @enderror
        </form>
    <div>
        @foreach($tweets as $tweet)
            <details>
                <summary>{{ $tweet->content}}</summary>
                <div>
                    <a href="{{ route('tweet.update.index',['tweetId' => $tweet->id])}}">編集</a>
                    <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">削除</button>
                    </form>
                </div>
            </details>
            <p>{{ $tweet->content}}</p>
        @endforeach
    </div>
    
</body>
</html>