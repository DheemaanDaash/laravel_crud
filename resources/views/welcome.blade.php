<?php 
$all_data = DB::table('data')->get();
$i = 1;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Laravel crud Operation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body style="background-image: linear-gradient(to right, #9796f0, #fbc7d4);">
<h1 style="color:#E6E6E6; margin-top: 100px; margin-bottom: 50px" class="text-center" >Laravel CRUD Operation</h1>
<hr>
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <button  type="button" class="btn btn-success btn-lg btn-block" style="margin-bottom: 50px" data-toggle="modal" data-target="#exampleModal">Create New</button>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($all_data as $row) { ?>
              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$row->name}}</td>
                <td>{{$row->address}}</td>
                <td>{{$row->email}}</td>
                <td>
                  <a href="{{url('Edit/'.$row->id)}}" class="btn btn-secondary">Edit</a>
                  <a href="{{url('Delete/'.$row->id)}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <?php $i++;}?>
            </tbody>

          </table>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color:#383F45;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="color:#E6E6E6">Laravel CRUD | Create New</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form method="post" action="{{ url('Add_data') }}">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1" style="color:#E6E6E6">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required="">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1" style="color:#E6E6E6">Address</label>
                <input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Address" required="">
              </div>

              <div class="form-group">
               <label for="exampleInputPassword1" style="color:#E6E6E6">Email</label>
               <input name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" required="">
             </div>
             <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
           </form>
         </div>
       </div>
     </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
 </html>