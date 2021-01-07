@extends('homepage.base')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form action="{{ route('applyStore') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Contact</label>
                    <input type="text" name="contact" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">DOB</label>
                    <input type="date" name="dob" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Gender</label>
                    <input type="text" name="gender" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Nationality</label>
                    <input type="text" name="nationality" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Education</label>
                    <input type="text" name="education" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Skills</label>
                    <input type="text" name="skills" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">School</label>
                    <input type="text" name="school" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="dp" class="form-control">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn tbtn-danger btn-outline w-100" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection