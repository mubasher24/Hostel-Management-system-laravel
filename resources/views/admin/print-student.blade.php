<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Print student</title>
</head>
<body>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Student Details</h2>


                    <div class="printable-details">
                        <h3 class="section-title">Room Related Info</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>Apply Date</th>
                                <td>{{ $student->created_at }}</td>
                                <th>Room No.</th>
                                <td>{{ $student->room }}</td>
                                <th>Seater</th>
                                <td>{{ $student->seater }}</td>
                                <th>Fees PM</th>
                                <td>{{ $student->fpm }}</td>
                            </tr>
                        </table>

                        <h4 class="section-title text-danger">Personal Info</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td>{{ $student->fname }} {{ $student->mname }} {{ $student->lname }}</td>
                                <th>Email</th>
                                <td>{{ $student->email }}</td>
                                <th>Contact No.</th>
                                <td>{{ $student->contact }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $student->gender }}</td>
                                <th>Course</th>
                                <td>{{ $student->course }}</td>
                                <th>Emergency Contact No.</th>
                                <td>{{ $student->econtact }}</td>
                            </tr>
                            <tr>
                                <th>Guardian Name</th>
                                <td>{{ $student->gname }}</td>
                                <th>Guardian Relation</th>
                                <td>{{ $student->grelation }}</td>
                                <th>Guardian Contact No.</th>
                                <td colspan="3">{{ $student->gcontact }}</td>
                            </tr>
                        </table>


                        <table class="table table-bordered">
                            <tr>
                                <th>Correspondence Address</th>
                                <td colspan="2">{{ $student->address }}</td>
                                <th>City</th>
                                <td>{{ $student->city }}</td>
                                <th>State</th>
                                <td>{{ $student->state }}</td>
                                <th>Pincode</th>
                                <td>{{ $student->pincode }}</td>
                            </tr>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <script>
        // Automatically trigger the print dialog when the page loads
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>


