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
    <div class="container">
        <div class="card mt-5 w-50">
            <div class="card-header">파일 업로드</div>
            <div class="card-body">
              <form action="{{route('upload.uploadfile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">파일을 선택하세요.</label>
                    <input type="file" class="form-control" name="file" id="file">
                </div>
                <button type="submit" class="btn btn-success mt-3">업로드</button>
              </form>  
            </div>

        </div>
    </div>
</body>
</html>