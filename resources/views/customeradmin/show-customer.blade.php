<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Customer Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/customer-list') }}">Back</a>
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
                {{ $customer->fname }}
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
                {{ $customer->lname }}
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
                {{ $customer->email }}
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
                {{ $customer->nic }}
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
                {{ $customer->contact }}
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
                {{ $customer->address }}
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
                {{ $customer->password }}
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
                {{ $customer->repassword }}
    </td>
            </div>
        </div>
</tr>

    
</table>
</div>
</body>
</html>