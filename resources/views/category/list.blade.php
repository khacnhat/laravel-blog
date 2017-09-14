<html>
    <head>
        <title>All Post</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Post count</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->posts_count}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>