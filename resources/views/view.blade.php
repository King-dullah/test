@extends('layouts.app')
@section('content')
                <div class="container">
                    <table class="table table-sm">
                        @php
                            $i = 1;
                        @endphp

                            <thead>
                                    <tr>
                                      <th scope="col">No.</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Job</th>
                                      <th scope="col">Manager</th>
                                      <th scope="col">Resumed</th>
                                      <th scope="col">Salary</th>
                                      <th scope="col"><a href="{{route('create') }}" class="btn btn-md btn-secondary"><i class="fas fa-plus"></i> New </a></th>
                                    </tr>
                                  </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                        <td >{{$i++}}</td>
                                        <td >{{$role->name}}</td>
                                        <td>{{$role->job_title}}</td>
                                        <td> @if(!$role->manager_id)
                                                No manager
                                            @else
                                            @if(!$role->parent)
                                                <b>Manager Sacked</b>
                                            @else
                                                {{$role->parent->name}}
                                                @endif
                                             @endif</td>
                                        <td>{{$role->resumed}}</td>
                                        <td>{{$role->salary}}</td>
                                        <td><a href="{{route('show',['id'=>$role->id]) }}" class="btn btn-sm btn-primary">Show</a>
                                            <a href="{{route('edit',['id'=>$role->id]) }}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="{{ route('destroy',[$role->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>

                                        </td>
                                      </tr>
                                @endforeach
                            </tbody>
                    </table>
                    {{ $roles->links() }}
                </div>
    </body>

@endsection