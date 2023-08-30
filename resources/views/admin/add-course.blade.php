@extends('layouts/admin')

@section('content')
<div class="ts-main-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Add Courses</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Add Courses</div>
                                <div class="panel-body">
                                    @if(session('msg'))
                                    <p style="color: red">{{ session('msg') }}</p>
                                    @endif
                                    <form method="post" action="{{ route('admin/add-course') }}" class="form-horizontal">
                                        @csrf
                                        <div class="hr-dashed"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Course Code</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="" name="cc" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Course Name (Short)</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="cns" id="cns" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Course Name (Full)</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="cnf" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <input class="btn btn-primary" type="submit" name="submit" value="Add Course">
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
