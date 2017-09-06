<html>
<head>
    <title>All Post</title>
</head>
<body>
    <form method="post">
        {{csrf_field()}}
        <input type="text" name="title"/><br/>
        <textarea name="content"></textarea><br/>
        <input type="submit" value="Create post"/>
    </form>
</body>
</html>