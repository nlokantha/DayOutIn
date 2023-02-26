<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Query Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/contact-list') }}">Back</a>
            </div>
        </div>
    </div>
<table class="table table-bordered">
    
       
<tr>
    <td>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name </strong>
    </td>
    <td>
                {{ $contact->name }}
    </td>
            </div>
        </div>
</tr>
        
<tr>   
    <td>    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email </strong>
    </td>
    <td>
                {{ $contact->email }}
    </td>
            </div>
        </div>
</tr>  
<tr>  
    <td> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject  </strong>
    </td>
    <td>
                {{ $contact->subject }}
    </td>
            </div>
        </div>
</tr> 
<tr>
    <td> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Message  </strong>
    </td>
    <td>
                {{ $contact->message }}
    </td>
            </div>
        </div>
</tr>

    
</table>
</div>   
</body>
</html>