@extends('layouts.admin')


@section('content')
<div class="ts-main-content">

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title" style="margin-top:4%">Dashboard</h2>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body bg-primary text-light p-2">
                                    <div class="stat-panel text-center">
                                        <?php
                                            $studentCount = DB::table('student_registrations')->count(); // Fetch student count from the database
                                        ?>
                                        <div class="stat-panel-number h1">{{ $studentCount }}</div>
                                        <div class="stat-panel-title text-uppercase">Students</div>
                                    </div>
                                </div>
                                <div class="panel-footer bg-secondary p-1 bg-opacity-50">
                                <a href="{{ url('manage') }}" class="block-anchor panel-footer text-white">
                                    Full Detail <i class="fa fa-arrow-right"></i>
                                </a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body bg-success text-light p-2">
                                    <div class="stat-panel text-center">
                                        <?php
                                            $roomCount = DB::table('rooms')->count(); // Fetch student count from the database
                                        ?>
                                        <div class="stat-panel-number h1">{{ $roomCount }}</div>
                                        <div class="stat-panel-title text-uppercase">Total Rooms</div>
                                    </div>
                                </div>
                                <div class="panel-footer bg-secondary p-1 bg-opacity-50">
                                <a href="{{ url('manage-rooms') }}" class="block-anchor panel-footer text-white">
                                    Full Detail <i class="fa fa-arrow-right"></i>
                                </a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body bg-info text-light p-2">
                                    <div class="stat-panel text-center">
                                        <?php
                                            $coursesCount = DB::table('courses')->count(); // Fetch student count from the database
                                        ?>
                                        <div class="stat-panel-number h1">{{ $coursesCount }}</div>
                                        <div class="stat-panel-title text-uppercase">Total Courses</div>
                                    </div>
                                </div>
                                <div class="panel-footer bg-secondary p-1 bg-opacity-50">
                                <a href="{{ url('manage-courses') }}" class="block-anchor panel-footer text-white">
                                    Full Detail <i class="fa fa-arrow-right"></i>
                                </a></div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
