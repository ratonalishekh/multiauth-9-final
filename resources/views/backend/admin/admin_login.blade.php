<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Login Form</title>
  </head>
  <body>
    
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('error-msg'))
      <p class="text-danger">{{ Session::get('error-msg')}}</p>
    @endif
      <form action="{{ url('admin-login') }}" class="mt-5" method="post">
        @csrf
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" value="Admin Login" class="btn btn-success mt-3">
        </div>
      </form>
    </div>
  </div>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>