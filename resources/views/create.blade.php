@extends('layouts.app')

@section('content')
<body>
    <div class="container">

        <form action={{route('store')}} method = "POST" class="col s12">
            {{csrf_field()}}

            <div class="form-group">
                <label for="name"> Name</label>
                <input  id="name" name="name" type="text" class="form-control">
                </div>

            <div class="form-group">
                <label for="job"> Job</label>
                <input  id="job" name="job" type="text" class="form-control">
                </div>

            <div class="form-group">
                <label for="salary">salary</label>
                <input   id="salary" name="salary" type="text" class="form-control">
                </div>

            <div class="form-group">
                <label for="resumed">Resumed Work On</label>
                <input
                id="resumed"  placeholder="Y-M-D" name="resumed" type="text" class="form-control">
                </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="action">Create
                </button>

                </div>

            </form>
          </div>

</body>
@endsection
