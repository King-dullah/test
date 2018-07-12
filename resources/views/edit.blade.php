@extends('layouts.app')

@section('content')
<body>
    <div class="container">

        <form action={{route('update',[$role->id])}} method = "POST" class="col s12">
            {{csrf_field()}}

            <div class="form-group">
                    <label for="name"> Name</label>
                    <input value="{{$role->name}}" id="name" name="name" type="text" class="form-control">
                    </div>

                <div class="form-group">
                    <label for="job"> Job</label>
                    <input value="{{$role->job_title}}" id="job" name="job" type="text" class="form-control">
                    </div>

                <div class="form-group">
                    <label for="salary">salary</label>
                    <input value="{{$role->salary}}" id="salary" name="salary" type="text" class="form-control">
                    </div>

                <div class="form-group">
                    <label for="resumed">Resumed Work On</label>
                    <input value="{{$role->resumed}}" id="resumed"   name="resumed" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="manager">Manager</label>
                    <input value=
                                @if(!$role->manager_id)
                                "No manager"
                            @else
                            @if(!$role->parent)
                                "Manager Sacked"
                            @else
                                {{$role->parent->name}}
                                @endif
                            @endif
                        id="manager"   type="text" class="form-control">
                        <input type="hidden" name="manager" value="{{$role->manager_id}}">
                    </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="action">Update
                    </button>

                </div>

            </form>
        </div>

</body>
@endsection


