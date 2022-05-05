<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Create an annonce

    <div class="card">
        <div class="card-body">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('annonces')}}">
           @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" id="titre" name="titre" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">name </label>
              <textarea name="name" class="form-control" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</body>
</html>
