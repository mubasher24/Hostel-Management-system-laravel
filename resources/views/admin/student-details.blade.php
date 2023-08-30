@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row" id="print">
            <div class="col-md-12">
                <h2 class="page-title" style="margin-top:4%">Rooms Details</h2>
                <div class="panel panel-default">
                    <div class="panel-heading">All Room Details</div>
                    <div class="panel-body">
                        @foreach ($data as $student)
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th colspan="6" ><h3>Room Related Info</h3></th>
                                </tr>
                                <tr class="text-center">
                                    <th>Apply Date :</th>
                                    <th colspan="2">Room no :</th>
                                    <th>Seater :</th>
                                    <th>Fees PM :</th>
                                    <th>Print</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>{{ $student->created_at }}</td>
                                    <td colspan="2">{{ $student->room }}</td>
                                    <td>{{ $student->seater }}</td>
                                    <td>{{ $student->fpm }}</td>
                                    <td>
                                        <a href="{{ route('print.student', ['id' => $student->id]) }}" target="_blank" class="btn btn-primary">Print</a>
                                    </td>


                                </tr>
                                <tr class="text-center">
                                    <th colspan="6" class="text-center"><h4 class="text-danger">Personal Info</h4></th>
                                </tr>
                                <tr class="text-center">
                                    <td><b>Full Name :</b></td>
                                    <td colspan="2">{{ $student->fname }} {{ $student->mname }} {{ $student->lname }}</td>
                                    <td><b>Email :</b></td>
                                    <td colspan="2">{{ $student->email }}</td>

                                </tr>
                                <tr class="text-center">
                                    <td><b>Contact No. :</b></td>
                                    <td>{{ $student->contact }}</td>
                                    <td><b>Gender :</b></td>
                                    <td>{{ $student->gender }}</td>
                                    <td><b>Course :</b></td>
                                    <td>{{ $student->course }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td><b>Emergency Contact No. :</b></td>
                                    <td>{{ $student->econtact }}</td>
                                    <td><b>Guardian Name :</b></td>
                                    <td>{{ $student->gname }}</td>
                                    <td><b>Guardian Relation :</b></td>
                                    <td>{{ $student->grelation }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td><b>Guardian Contact No. :</b></td>
                                    <td colspan="5">{{ $student->gcontact }}</td>
                                </tr>
                                <tr>
                                    <th colspan="6" class="text-center text-secondary"><h4>Address</h4></th>
                                </tr>
                                <tr class="text-center">
                                    <td><b>Correspondence Address</b></td>
                                    <td colspan="2">{{ $student->address }}</td>
                                    <td>{{ $student->city }}</td>
                                    <td>{{ $student->state }}</td>
                                    <td>{{ $student->pincode }}</td>
                                </tr>
                            </tbody>
                        </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script>
    function printStudentDetails(id) {
        console.log(`Printing details for student with ID: ${id}`);

        let printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Student Details</title></head><body>');
        printWindow.document.write(document.getElementById(`student-details-${id}`).innerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        printWindow.onload = function() {
            printWindow.print();
            printWindow.close();
        };
    }
</script>



@endsection
