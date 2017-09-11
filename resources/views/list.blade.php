<html>
    <head>
        <title>All Post</title>
    </head>
    <body>
        <a href="{{route("post.add")}}">Create new post</a>
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Content</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->content}}</td>
                    <td><a href="{{route("post.edit", ["id"=>$post->id])}}">edit</a></td>
                    <td><a href="{{route("post.deleteForm", ["id"=>$post->id])}}">delete</a></td>
                </tr>
            @endforeach
        </table>
    </body>
</html>