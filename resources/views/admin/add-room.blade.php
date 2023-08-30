@extends('layouts/admin')

@section('content')
<div class="ts-main-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Add a Room</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    @if(session('msg'))
                                    <p style="color: red">{{ session('msg') }}</p>
                                    @endif
                                    <form method="post" action="{{ route('admin/add-room') }}" class="form-horizontal">
                                        @csrf
                                        <div class="hr-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Select Seater</label>
                                            <div class="col-sm-8">
                                                <select name="seater" class="form-control" required>
                                                    <option value="">Select Seater</option>
                                                    <option value="1">Single Seater</option>
                                                    <option value="2">Two Seater</option>
                                                    <option value="3">Three Seater</option>
                                                    <option value="4">Four Seater</option>
                                                    <option value="5">Five Seater</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Room No.</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="rmno" id="rmno" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Fee(Per Student)</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="fee" id="fee" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <input class="btn btn-primary" type="submit" name="submit" value="Create Room">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
