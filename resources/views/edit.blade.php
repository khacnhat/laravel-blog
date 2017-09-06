<html>
<head>
    <title>All Post</title>
</head>
<body>
    <form method="post">
        {{csrf_field()}}
        <input type="text" name="title" value="{{$post->title}}"/><br/>
        <textarea name="content">{{$post->content}}</textarea><br/>
        <input type="submit" value="Update post"/>
    </form>
</body>
</html>