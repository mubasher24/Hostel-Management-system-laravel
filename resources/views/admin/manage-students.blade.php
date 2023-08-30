@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="text-center display-3">All Registered Students Data</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact no</th>
            <th>Room no</th>
            <th>Registeration Date</th>
            <th>Address</th>
            <th>CNIC NO</th>
            <th colspan="2">Action</th>
        </tr>

        @foreach($data as $new)
        <tr>
            <td>{{$new->id}}</td>
            <td>{{$new->fname}}</td>
            <td>{{$new->email}}</td>
            <td>{{$new->contact}}</td>
            <td>{{$new->room}}</td>
            <td>{{ $new->created_at->format('Y-m-d') }}</td>
            <td>{{$new->address}}</td>
            <td>{{$new->cnic}}</td>


            <td>
            <a href="/student-details" class="btn btn-outline-primary" title="View Full Details"><i class="fa fa-desktop"></i> View</a>
        </td>     <td><a href="{{url('/trash/'.$new->id)}}"><button onclick="return confirm('Are you sure you want to delete this data')" class="btn btn-outline-danger">Delete</button></a></td>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
