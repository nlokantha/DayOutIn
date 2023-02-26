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
                <h2>Query List</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
                <a class="btn btn-success" href="{{ url('contact') }}">Add New Query</a>
            </div>
        </div>
    </div>

    <!-- Customer Added successfully -->
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>name</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
            <th width="100px">Action</th>
        </tr>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}</td>
            <td>
                <form action="{{ route('showContact',$contact->id) }}" method="POST"> 

                    <a class="btn btn-info" href="{{ route('showContact',$contact->id) }}">Show</a>

                    @csrf
                </form>
            </td>
        </tr>
        @endforeach 
    </table>
    </div>
    
</body>
</html>