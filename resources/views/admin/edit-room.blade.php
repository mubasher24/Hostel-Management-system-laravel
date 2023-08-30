@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Room Details</h2>
    <form method="post" action="{{ route('rooms.update', $room->id) }}" class="form-horizontal">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="col-sm-2 control-label">Seater</label>
            <div class="col-sm-8">
                <input type="text" name="seater" value="{{ $room->seater }}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Fees (PM)</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="fees" value="{{ $room->fees }}">
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <input class="btn btn-primary" type="submit" name="submit" value="Update Room Details">
        </div>
    </form>
</div>
@endsection
