@extends('layouts.layout-master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/" class="btn btn-outline-primary btn-sm">Go back to Home</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Student Details</h1>
                    <hr>

                    <table class="table">
                        <tr>
                            <th scope="col">Student ID</th>
                            <td>{{ $student->id }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Student Name</th>
                            <td>{{ $student->Name }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Student Surname</th>
                            <td>{{ $student->Surname }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Student Country</th>
                            <td>{{ $student->Country }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Student Identification No</th>
                            <td>{{ $student->IdentificationNo }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Date Of Birth</th>
                            <td>{{ $student->DateOfBirth }}</td>
                        </tr>
                        <tr>
                            <th scope="col">Student Registered On</th>
                            <td>{{ $student->RegisteredOn }}</td>
                        </tr>
                    </table>
                    <a href="/student/edit/{{ $student->id }}" class="btn btn-outline-warning">Edit Student</a>
                </div>
            </div>
        </div>
    </div>

@endsection

