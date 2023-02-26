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
                <h2>Customer Register List</h2>
            </div>
           <!-- Serach start -->
           <div class="pull-right" style="margin-bottom:10px;">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <form action="/customer-list" method="GET">
                            <table>
                                <tr>
                                    <td><input type="search" id="search" name="search" class="form-control" ></td>
                                    <td><button type="submit" class="btn btn-secondary">Search</button></td>
                                    <td><a class="btn btn-info" href="{{ url('/manageusers') }}">Back</a></td>
                                </tr>
                            </table>    
                        </form>
                    </div>
                </div>
            </div>
    <!-- search end -->
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
            <th>fname</th>
            <th>lname</th>
            <th>email</th>
            <th>nic</th>
            <th>contact</th>
            <th>address</th>
            <th>password</th>
            <th>repassword</th>
            <th>Aproval</th>
            <th>Action</th>

        </tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->fname }}</td>
            <td>{{ $customer->lname }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->nic }}</td>
            <td>{{ $customer->contact }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->password }}</td>
            <td>{{ $customer->repassword }}</td>
            <td>
            @if($customer->iscompleted)
                <button class="btn btn-success">completed</button>
                @else
                <button class="btn btn-warning">Not completed</button>
                @endif
            </td>
            <td>
              <form action="{{ route('destroyCustomer',$customer->id) }}" method="POST">
                @if(!$customer->iscompleted)
                <a href="/approve{{$customer->id}}" class="btn btn-dark">Approval</a>
                @else
                <a href="/notapprove{{$customer->id}}" class="btn btn-dark">Cancel Approval</a>
                @endif

            <a class="btn btn-info" href="{{ route('showCustomer',$customer->id) }}">Show</a> 
            <a class="btn btn-primary" href="{{ route('editCustomer',$customer->id) }}">Edit</a> 

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