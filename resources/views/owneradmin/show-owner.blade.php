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
                <h2>Show Owner Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/owner-list') }}">Back</a>
            </div>
        </div>
    </div>
<table class="table table-bordered">
    
       
<tr>
    <td>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name </strong>
    </td>
    <td>
                {{ $powner->fname }}
    </td>
            </div>
        </div>
</tr>
        
<tr>   
    <td>    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name </strong>
    </td>
    <td>
                {{ $powner->lname }}
    </td>
            </div>
        </div>
</tr>  
<tr>  
    <td> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email  </strong>
    </td>
    <td>
                {{ $powner->email }}
    </td>
            </div>
        </div>
</tr> 
<tr>
    <td> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIC No  </strong>
    </td>
    <td>
                {{ $powner->nic }}
    </td>
            </div>
        </div>
</tr>
<tr>
    <td>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact No  </strong>
    </td>
    <td>
                {{ $powner->contact }}
    </td>
            </div>
        </div>
</tr>
<tr>
    <td>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address  </strong>
    </td>
    <td>
                {{ $powner->address }}
    </td>
            </div>
        </div>
</tr>
<tr>
    <td>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Business Registration  </strong>
    </td>
    <td>
                <img src="/images/{{ $powner->image }}" width="300px">
    </td>
            </div>
        </div>
</tr>
<tr>
    <td>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password  </strong>
    </td>
    <td>
                {{ $powner->password }}
    </td>
            </div>
        </div>
</tr>
<tr>
    <td>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password  </strong>
    </td>
    <td>
                {{ $powner->repassword }}
    </td>
            </div>
        </div>
</tr>

    
</table>
</div>
    
</body>
</html>