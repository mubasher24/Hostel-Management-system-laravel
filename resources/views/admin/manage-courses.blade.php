@extends('layouts/admin')

@section('content')
    <div class="container">
        <h2>Manage Courses</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Course Code</th>
                    <th>Course Name(Short)</th>
                    <th>Course Name(Full)</th>
                    <th>Reg Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $key => $course)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $course->course_code }}</td>
                        <td>{{ $course->course_sn }}</td>
                        <td>{{ $course->course_fn }}</td>
                        <td>{{ $course->created_at }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}"><i class="fa fa-edit"></i></a>
                            <form method="POST" action="{{ route('courses.delete', $course->id) }}" onsubmit="return confirm('Do you want to delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="fa fa-close"></i></button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
