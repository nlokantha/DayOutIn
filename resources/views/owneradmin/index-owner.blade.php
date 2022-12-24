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
                <h2>Owner Register</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
                <a class="btn btn-success" href="{{ url('register-owner') }}">Create New Property Owner</a>
            </div>
        </div>
    </div>

    <!-- Owner Added successfully -->
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>fname</th>
            <th>lname</th>
            <th>email</th>
            <th>nic</th>
            <th>contact</th>
            <th>address</th>
            <th>image</th>
            <th>password</th>
            <th>repassword</th>
            <th>Aproval</th>
            <th>Action</th>
        </tr>
        @foreach($powners as $powner)
        <tr>
            <td>{{ $powner->id }}</td>
            <td>{{ $powner->fname }}</td>
            <td>{{ $powner->lname }}</td>
            <td>{{ $powner->email }}</td>
            <td>{{ $powner->nic }}</td>
            <td>{{ $powner->contact }}</td>
            <td>{{ $powner->address }}</td>
            <td><img src="/images/{{ $powner->image }}" width ="80px"></td>
            <td>{{ $powner->password }}</td>
            <td>{{ $powner->repassword }}</td>
            <td>   
            <form action="{{ route('destroyOwner',$powner->id) }}" method="POST"> 
                @if($powner->iscompleted)
                <button class="btn btn-success">completed</button>
                @else
                <button class="btn btn-warning">Not completed</button>
                @endif
            </td>
            <td>
                @if(!$powner->iscompleted)
                <a href="/approveowner{{$powner->id}}" class="btn btn-dark">Approval</a>
                @else
                <a href="/notapproveowner{{$powner->id}}" class="btn btn-dark">Cancel Approval</a>
                @endif
               
                <a class="btn btn-info" href="{{ route('showOwner',$powner->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('editOwner',$powner->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach 
    </table>

    
    </div>
    
</body>
</html>