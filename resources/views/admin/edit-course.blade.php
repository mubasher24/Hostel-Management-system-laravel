@extends('layouts.admin')

@section('content')

    <div class="container">

        <h2>Edit Course</h2>

        <form method="post" action="{{ route('courses.update', $course->id) }}">
            @csrf
            @method('PUT') <!-- Add this line to specify the PUT method -->

            <div class="form-group">
                <label>Course Code</label>
                <input type="text" name="course_code" class="form-control" value="{{ $course->course_code }}">
            </div>

            <div class="form-group">
                <label>Course Name (Short)</label>
                <input type="text" name="course_sn" class="form-control" value="{{ $course->course_sn }}">
            </div>

            <div class="form-group">
                <label>Course Name (Full)</label>
                <input type="text" name="course_fn" class="form-control" value="{{ $course->course_fn }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Course</button>

        </form>

    </div>

@endsection
