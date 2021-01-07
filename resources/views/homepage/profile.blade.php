@extends('homepage.base')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <img src="{{ asset('upload/'.$student->dp) }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h2>{{ $student->name }}</h2>
                    <table class="table-bordered">
                        <tr>
                            <th>Gender</th>
                            <td>{{ $student->gender }}</td>
                        </tr>   
                        <tr>
                            <th>Contact</th>
                            <td>{{ $student->contact }}</td>
                        </tr> 
                        <tr>
                            <th>Skills</th>
                            <td>{{ $student->skills }}</td>
                        </tr> 
                        <tr>
                            <th>Education</th>
                            <td>{{ $student->education }}</td>
                        </tr>  
                        <tr>
                            <th>School</th>
                            <td>{{ $student->school }}</td>
                        </tr> 
                        <tr>
                            <th>DOB</th>
                            <td>{{ $student->dob }}</td>
                        </tr>                     

                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="container bg-secondary text-white">
                <h2 class="display-4">Welcome in Student Portal</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis id optio nisi illo tenetur labore velit doloribus, animi delectus fugit saepe voluptatibus perferendis harum eligendi, tempora, sapiente dolor quis quas.</p>
            </div>
        </div>
    </div>
</div>
    
@endsection