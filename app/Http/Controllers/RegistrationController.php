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
            // ... (other validation rules)

            'cnic' => 'required|numeric|unique:student_registrations,cnic',
            'email' => 'required|email|unique:student_registrations,email',
        ]);

        try {
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
            // Handle other exceptions here
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


    // Other methods for managing registrations (edit, update, destroy) can follow similar structure
}

