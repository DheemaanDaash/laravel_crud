<!DOCTYPE html>
<html>
<head>
    <title>Laravel crud Operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-image: linear-gradient(to right, #9796f0, #fbc7d4);">
<h1 class="text-center" style="color:#E6E6E6; margin-top: 100px; margin-bottom: 50px" >Laravel CRUD | Edit</h1>
<hr>
  <div class="container">
      <div class="row">
          <div class="col-md-10">
              <form method="post" action="{{ url('Update_data') }}">
                  @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1" style="color:#E6E6E6";>Name</label>
                      <input type="hidden" name="id" value="{{$data->id}}">
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required="" value="{{$data->name}}">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1" style="color:#E6E6E6">Address</label>
                      <input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Address" required="" value="{{$data->address}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1" style="color:#E6E6E6">Email</label>
                      <input name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" required="" value="{{$data->email}}">
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
              </form>
          </div>
      </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>