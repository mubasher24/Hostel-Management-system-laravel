<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use App\Models\Course;

use App\Models\StudentRegistration;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        $rooms = Room::all();

            $courses = Course::all();



        return view('registration', compact('rooms', 'courses'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'room' => 'required', // Add validation rules for other fields as needed
            'seater' => 'required',
            'fpm' => 'required',
            'course' => 'required',
            'fname' => 'required',

            'lname' => 'required',
            'gender' => 'required',
            'contact' => 'required|numeric|unique:student_registrations,contact',
            'cnic' => 'required|numeric|unique:student_registrations,cnic',
            'email' => 'required|email|unique:student_registrations,email',
            'econtact' => 'required',
            'gname' => 'required',
            'grelation' => 'required',
            'gcontact' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
        ]);

        try {
            $data = new StudentRegistration;
            $data = new StudentRegistration;
            $data->room = $request->input('room');
            $data->seater = $request->input('seater');
            $data->fpm = $request->input('fpm');
            $data->course = $request->input('course');
            $data->fname = $request->input('fname');
            $data->mname = $request->input('mname');
            $data->lname = $request->input('lname');
            $data->gender = $request->input('gender');
            $data->contact = $request->input('contact');
            $data->cnic = $request->input('cnic');
            $data->email = $request->input('email');
            $data->econtact = $request->input('econtact');
            $data->gname = $request->input('gname');
            $data->grelation = $request->input('grelation');
            $data->gcontact = $request->input('gcontact');
            $data->address = $request->input('address');
            $data->city = $request->input('city');
            $data->state = $request->input('state');
            $data->pincode = $request->input('pincode');

            $data->save();

            return redirect()->route('registration.form')->with('success', 'Registration successful.');
    } catch (\Illuminate\Database\QueryException $e) {
        if ($e->getCode() == 23000) { // Integrity constraint violation
            if (strpos($e->getMessage(), 'student_registrations_cnic_unique') !== false) {
                return back()->withInput()->withErrors(['cnic' => 'CNIC already exists']);
            }
        }

        }
    }

   public function show()
{
    $data = StudentRegistration::all();
    return view('admin.student-details', compact('data'));
}
public function show2()
{
    $data = StudentRegistration::all();
    return view('admin.manage-students', compact('data'));
}
    public function destroy($id){
        $data=StudentRegistration::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function printStudent($id)
{
    $student = StudentRegistration::find($id);
    return view('admin.print-student', compact('student'));
}
public function checkSeatAvailability(Request $request)
{
    $roomno = $request->input('roomno');
    $selectedSeater = $request->input('seater');

    $room = Room::where('room_no', $roomno)->first();

    if (!$room) {
        return response()->json(['message' => 'Invalid room number.'], 400);
    }

    $occupiedSeater = $this->getOccupiedSeats($roomno, $selectedSeater);

    $availableSeater = $room->seater - $occupiedSeater;

    if ($availableSeater <= 0) {
        return response()->json(['message' => 'No seats available.'], 400);
    }

    return response()->json(['message' => $availableSeater . ' Seat(s) available.'], 200);
}

public function getOccupiedSeats($roomno, $selectedSeater)
{
    $occupiedSeats = StudentRegistration::where('room', $roomno)->count();
    $occupiedSeater = ceil($occupiedSeats / $selectedSeater); // Calculate occupied seater count

    return $occupiedSeater;
}


}

