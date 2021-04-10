<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>

  @include("navbar")
  
    @if($layout == 'index')
    <div class="container-fluid">
        <div class= "row">
            <section class="col-md-5">
                @include("studentlist")
            </section>
            <section class="col"></section>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid">
    <div class="row">
        <section class="col">
            @include("studentlist")
        </section>
        <section class="col">
            <form action="{{url('/store')}}" method="POST">
            @csrf 
                <div class="form-group">
                    <label>CNE</label>
                    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                </div>
                <br>
                <div class="form-group">
                    <label>First Name</label>
                    <input name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                </div>
                <br>
                <div class="form-group">
                    <label>Second Name</label>
                    <input name="secondName" type="text" class="form-control" placeholder="Enter Second Name">
                </div>
                <br>
                <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="text" class="form-control" placeholder="Enter Age">
                </div>
                <br>
                <div class="form-group">
                    <label>Speciality</label>
                    <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                </div>
                <br>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
        </section>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col">
        
            </section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col">
            <form action="{{url('/update/'.$student->id)}}" method="POST">
            @csrf 
                <div class="form-group">
                    <label>CNE</label>
                    <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                </div>
                <br>
                <div class="form-group">
                    <label>First Name</label>
                    <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                </div>
                <br>
                <div class="form-group">
                    <label>Second Name</label>
                    <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" placeholder="Enter Second Name">
                </div>
                <br>
                <div class="form-group">
                    <label>Age</label>
                    <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter Age">
                </div>
                <br>
                <div class="form-group">
                    <label>Speciality</label>
                    <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                </div>
                <br>
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
            </section>
        </div>
    </div>
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
