@extends('layouts.layout-master')

@section('content')

<div class="container bg-light p-5 rounded">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-10">Welcome to {{ config('app.name') }}</h1>
            <p></p>
            <br>
            <div class="input-group mb-3">
                <input
                    type="text"
                    name="search"
                    id="search"
                    value="{{ request()->get('search') }}"
                    class="form-control"
                    placeholder="Search Student..."
                    aria-label="Search"
                    aria-describedby="button-addon2">
                <button class="btn btn-primary" id="button-addon2" onclick="clearSearch();">clear</button>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Registered On</th>
                    <th scope="col">Identification No</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody id="studentTBody">

                @forelse($students as $key => $student)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td><a href="/student/viewDetails/{{ $student->id }}">{{$student->Name}} {{$student->Surname}}</a></td>
                        <td>{{$student->RegisteredOn}}</td>
                        <td>{{$student->IdentificationNo}}</td>
                        <td>
                            <a href="/student/edit/{{ $student->id }}" class="btn btn-outline-primary">Edit</a>
                            <form method="POST" action="/student/delete/{{$student->id}}">
                                {{ method_field('delete') }}
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td><p class="text-warning">No Data available</p></td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <label>Create new Student data</label>
            <a href="/student/createStudent" class="btn btn-outline-success">Create Student</a>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('student/search')}}',
            data:{'search':$value},
            success:function(data){
                console.log(data);
                $('body').html(data);
            }
        });
    })
</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

    function clearSearch()
    {
        $('#search').val('');
    }
</script>
@endsection
