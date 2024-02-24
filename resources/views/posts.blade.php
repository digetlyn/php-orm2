<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container w-50">
        <table class="table mt-5">
            <tr>
                <td>Id</td>
                <td>Subject</td>
                <td>Name</td>
            </tr>
            @foreach($posts AS $post)   
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->subject}}</td>
                <td>{{$post->name}}</td>
            </tr>
            @endforeach
        </table>

        {{$posts->links()}}
    </div>
    
</body>
</html>