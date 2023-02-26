<!DOCTYPE html>
<html lang="en">
<head>
    <title>Owner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Owner Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('indexOwner') }}">Back</a>
            </div>
        </div>
    </div>
<form action="{{ route('updateOwner',$powner->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name : </strong>
                <input type="text" name="fname" value="{{ $powner->fname }}" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name : </strong>
                <input type="text" name="lname" value="{{ $powner->lname }}" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email : </strong>
                <input type="text" name="email" value="{{ $powner->email }}" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIC No : </strong>
                <input type="text" name="nic" value="{{ $powner->nic }}" class="form-control" placeholder="NIC No">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact No : </strong>
                <input type="text" name="contact" value="{{ $powner->contact }}" class="form-control" placeholder="Contact No">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address : </strong>
                <input type="text" name="address" value="{{ $powner->address }}" class="form-control" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Business Registration : </strong>
                <input type="file" name="image" class="form-control" placeholder="Business Registration">
                <img src="/images/{{ $powner->image }}" width="300px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password : </strong>
                <input type="text" name="password" value="{{ $powner->password }}" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password : </strong>
                <input type="text" name="repassword" value="{{ $powner->repassword }}" class="form-control" placeholder="Confirm Password">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>
    
</body>
</html>