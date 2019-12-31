<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel repository service pattern</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Example Project With Laravel Repository Service pattern</h4>
                <p class="card-text">
                <div class="alert alert-info" role="alert">
                <span class="badge badge-info">More References about Repository Pattern</span>
                <div class="list-group">
                    <a href="https://medium.com/@Dewey92/repository-pattern-what-e47ddee3364d" class="list-group-item list-group-item-action">@Dewey92</a>
                    <a href="https://bosnadev.com/2015/03/07/using-repository-pattern-in-laravel-5/?utm_source=prettus-l5-repository&utm_medium=readme&utm_campaign=prettus-l5-repository" class="list-group-item list-group-item-action">bosnadev.com</a>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Body</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($post as $data)
                            <tr>
                                <td scope="row">{{$data->id}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->body}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
