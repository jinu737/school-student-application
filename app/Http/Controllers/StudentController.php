<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::all();
        $students = json_decode($students);

        return view('home', ['students' => $students]);
    }

    public function showList()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function display($id)
    {
        $student = Student::find($id);
        $students = json_decode($student);

        return view('student.viewDetails', ['student' => $students]);
    }

    public function searchStudent(Request $request)
    {
        $students = Student::all();
        if($request->search != ''){
            $students = Student::where('name','LIKE','%'.$request->search.'%')
                ->orWhere('surname','LIKE','%'.$request->search.'%')
                ->get();
        }

        $students = json_decode($students);

        return view('home', ['students' => $students]);
        /*return response()->json([
            'students' => $students
        ]);*/
    }

    public function createStudent()
    {
        return view('student.create');
    }

    public function create(Request $request)
    {
        $student = new Student();

        $student->name = $request->Name;
        $student->surname = $request->Surname;
        $student->identificationno = $request->IdentificationNo;
        $student->country = $request->Country;
        $student->dateofbirth = $request->DateOfBirth;
        $student->registeredon = $request->RegisteredOn;

        $student->save();

        return redirect('/')->with('infoMessage', 'The student has been saved.');
    }

    public function editStudent(int $studentId)
    {
        $student = Student::find($studentId);
        $students = json_decode($student);

        return view('student.edit', ['students' => $students]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->name = $request->Name;
        $student->surname = $request->Surname;
        $student->identificationno = $request->IdentificationNo;
        $student->country = $request->Country;
        $student->dateofbirth = $request->DateOfBirth;
        $student->registeredon = $request->RegisteredOn;

        $student->save();

        return redirect('/student/viewDetails/'.$id)->with('infoMessage', 'The student has been saved.');
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/')->with('infoMessage', 'Student deleted succuessfully');
    }
}
