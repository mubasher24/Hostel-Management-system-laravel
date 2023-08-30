@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Manage Rooms</h2>
    <div class="panel panel-default">
        <div class="panel-heading">All Room Details</div>
        <div class="panel-body">
            <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Seater</th>
                        <th>Room No.</th>
                        <th>Fees (PM)</th>
                        <th>Posting Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $key => $room)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $room->seater }}</td>
                        <td>{{ $room->room_no }}</td>
                        <td>{{ $room->fees }}</td>
                        <td>{{ $room->posting_date }}</td>
                        <td>
                            <a href="{{ route('rooms.edit', $room->id) }}"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('rooms.delete', $room->id) }}" onclick="return confirm('Do you want to delete?')"><i class="fa fa-close"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
