@extends('layouts.student')

@section('content')
    <div class="container">
        <div class="row justify-content-center py-5">


            <div class="container">
                @if (auth()->check())
                    @php
                        $userEmail = auth()->user()->email;
                        $registeredStudent = \App\Models\StudentRegistration::where('email', $userEmail)->first();
                    @endphp

                    @if ($registeredStudent)
                        <p>You have already booked your slot</p>
                        <p>Your details:</p>
                        <ul>
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="6">
                                            <h3 class="text-center">Room Related Info</h3>
                                        </th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>Apply Date :</th>
                                        <th colspan="2">Room no :</th>
                                        <th>Seater :</th>
                                        <th colspan="2" class="text-center">Fees Per Month :</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>{{ $registeredStudent->created_at }}</td>
                                        <td colspan="2">{{ $registeredStudent->room }}</td>
                                        <td>{{ $registeredStudent->seater }}</td>
                                        <td colspan="2" class="text-center">{{ $registeredStudent->fpm }}</td>

                                    </tr>
                                    <tr class="text-center">
                                        <th colspan="6" class="text-center">
                                            <h4 class="text-danger">Personal Info</h4>
                                        </th>
                                    </tr>
                                    <tr class="text-center">
                                        <td><b>Full Name :</b></td>
                                        <td colspan="2">{{ $registeredStudent->fname }} {{ $registeredStudent->mname }}
                                            {{ $registeredStudent->lname }}</td>
                                        <td><b>Email :</b></td>
                                        <td colspan="2">{{ $registeredStudent->email }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><b>Contact No. :</b></td>
                                        <td>{{ $registeredStudent->contact }}</td>
                                        <td><b>Gender :</b></td>
                                        <td>{{ $registeredStudent->gender }}</td>
                                        <td><b>Course :</b></td>
                                        <td>{{ $registeredStudent->course }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><b>Emergency Contact No. :</b></td>
                                        <td>{{ $registeredStudent->econtact }}</td>
                                        <td><b>Guardian Name :</b></td>
                                        <td>{{ $registeredStudent->gname }}</td>
                                        <td><b>Guardian Relation :</b></td>
                                        <td>{{ $registeredStudent->grelation }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><b>Guardian Contact No. :</b></td>
                                        <td colspan="5">{{ $registeredStudent->gcontact }}</td>
                                    </tr>
                                    <tr>
                                        <th colspan="6" class="text-center text-secondary">
                                            <h4>Address</h4>
                                        </th>
                                    </tr>
                                    <tr class="text-center">
                                        <td><b>Correspondence Address</b></td>
                                        <td colspan="2">{{ $registeredStudent->address }}</td>
                                        <td>{{ $registeredStudent->city }}</td>
                                        <td>{{ $registeredStudent->state }}</td>
                                        <td>{{ $registeredStudent->pincode }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </li>
                            <!-- Add other details here -->
                        </ul>
                    @else

                        <a class="text-danger display-4 lead" href="{{ route('registration.form') }}">Please click here to Register and  view your Details </a>
                    @endif
                @endif
            </div>
        </div>
    </div>

@endsection
