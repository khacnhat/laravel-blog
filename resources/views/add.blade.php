<html>
<head>
    <title>All Post</title>
</head>
<body>
    <form method="post">
        {{csrf_field()}}
        <input type="text" name="title"/><br/>
        <textarea name="content"></textarea><br/>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select><br/>
        <input type="submit" value="Create post"/>
    </form>
</body>
</html>