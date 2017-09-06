<html>
<head>
    <title>All Post</title>
</head>
<body>
    <h2>Are you sure?</h2>
    <form method="post">
        {{csrf_field()}}
        <input type="text" name="title" value="{{$post->title}}" disabled/><br/>
        <textarea name="content" disabled="disabled">{{$post->content}}</textarea><br/>
        <input type="submit" value="Delete post"/>
    </form>
</body>
</html>