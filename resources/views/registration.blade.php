@extends('layouts.register')









@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    @if(session('success'))
                         <div class="alert alert-success">
                          {{ session('success') }}
                          </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="panel-heading ">Fill all Info</div>
                    <div class="panel-body">
                        <form method="post" action="{{ url('/registration') }}" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <h4 class="color-secondary text-center mt-3">Room Related info </h4>
                            </div>
                            <div class="form-group row px-1  m-1">
                                <label class="col-sm-2 control-label" for="room">Room no.:</label>
                                <select name="room" id="room" class="col-sm-8 form-control"
                                    onChange="getSeater(this.value);">
                                    <option value="">Select Room</option>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->room_no }}">{{ $room->room_no }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="seater">Seater:</label>
                                <input type="text" name="seater" id="seater" class="col-sm-8 form-control"
                                    readonly="true">

                            </div>
                            <div class="lead text-center font-bold" id="seat-availability-message"></div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="fpm">Fees Per Month:</label>
                                <input type="text" name="fpm" id="fpm" class="col-sm-8 form-control"
                                    readonly="true">
                            </div>

                            <div class="form-group">
                                <h4 class="color-secondary text-center mt-3">Personal info </h4>
                            </div>
                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="course">Course:</label>
                                <select name="course" id="course" class="col-sm-8 form-control">
                                    <option value="">Select Course</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->course_sn }}">{{ $course->course_fn }}</option>
                                    @endforeach
                                </select>

                            </div>


                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="fname">First Name:</label>
                                <input type="text" name="fname" id="fname" class="col-sm-8 form-control" required>
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="mname">Middle Name:</label>
                                <input type="text" name="mname" id="mname" class="col-sm-8 form-control">
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="lname">Last Name:</label>
                                <input type="text" name="lname" id="lname" class="col-sm-8 form-control" required>
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="gender">Gender:</label>
                                <select name="gender" class="col-sm-8 form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="contact">Contact No:</label>
                                <input type="tel" name="contact" id="contact" class="col-sm-8 form-control" required>
                            </div>
                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="cnic">CNIC No:</label>
                                <input type="Number" maxlength="13" name="cnic" id="cnic" class="col-sm-8 form-control" required>
                                @error('cnic')
                                    <span class="text-danger text-center">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="email">Email id:</label>
                                <input type="email" name="email" id="email" class="col-sm-8 form-control"
                                    onBlur="checkAvailability()" required>
                                <span id="user-availability-status" style="font-size:12px;"></span>
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="econtact">Emergency Contact:</label>
                                <input type="tel" maxlength="12" name="econtact" id="econtact" class="col-sm-8 form-control"
                                    required>
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="gname">Guardian Name:</label>
                                <input type="text" name="gname" id="gname" class="col-sm-8 form-control"
                                    required>
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="grelation">Guardian Relation:</label>
                                <input type="text" name="grelation" id="grelation" class="col-sm-8 form-control"
                                    required>
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="gcontact">Guardian Contact no:</label>
                                <input type="tel" maxlength="12" name="gcontact" id="gcontact" class="col-sm-8 form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <h4 class="color-secondary text-center mt-3">Address </h4>
                            </div>
                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="address">Address:</label>
                                <textarea rows="5" name="address" id="address" class="col-sm-8 form-control" required></textarea>
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="city">City:</label>
                                <input type="text" name="city" id="city" class="col-sm-8 form-control"
                                    required>
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="state">State:</label>
                                <select name="state" id="state" class="col-sm-8 form-control">
                                    <option value="">Select State</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Sindh">Sindh</option>
                                    <option value="Balochistan">Balochistan</option>
                                    <option value="KPK">KPK</option>
                                    <option value="GB">GB</option>
                                    <option value="AK">AK</option>
                                </select>
                            </div>

                            <div class="form-group row px-1 m-1">
                                <label class="col-sm-2 control-label" for="pincode">Pincode:</label>
                                <input type="Number" maxlength="6" name="pincode" id="pincode" class="col-sm-8 form-control"
                                    required>
                            </div>


                            <!-- Add other form fields -->

                            <div class="col-sm-6 col-sm-offset-4">
                                <button class="btn btn-default" type="button">Cancel</button>
                                <input type="submit" id="submit-button" name="submit" value="Register" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>

    $(document).ready(function() {
    $('#room, #seater').on('input', function() {
        var roomno = $('#room').val();
        var seater = $('#seater').val();

        if (roomno && seater) {
            $.ajax({
                url: '/check-seat-availability',
                type: 'POST',
                data: { roomno: roomno, seater: seater },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#seat-availability-message').html(response.message).css('color', 'green');
                    // Enable the submit button
                    $('#submit-button').prop('disabled', false);
                },
                error: function(xhr) {
                    $('#seat-availability-message').html(xhr.responseJSON.message).css('color', 'red');
                    // Disable the submit button
                    $('#submit-button').prop('disabled', true);
                }
            });
        }
    });
});




        function getSeater(val) {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');


            $.ajax({
                type: "POST",
                url: "{{ route('get.seater') }}",
                data: {
                    roomid: val,
                    _token: csrfToken
                }, // Include the CSRF token
                success: function(data) {
                    $('#seater').val(data);
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('get.fees') }}",
                data: {
                    rid: val,
                    _token: csrfToken
                },
                success: function(data) {
                    $('#fpm').val(data);
                }
            });
        }

            function checkAvailability() {
                $("#loaderIcon").show();
                jQuery.ajax({
                    url: "check_availability.php",
                    data: 'roomno=' + $("#room").val(),
                    type: "POST",
                    success: function(data) {
                        $("#room-availability-status").html(data);
                        $("#loaderIcon").hide();
                    },
                    error: function() {}
                });
            }
        </script>
@endsection
