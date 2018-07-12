@extends('layouts.app')
@section('content')
<div class="container">
        <div id="treeview"></div>
              <a href="{{ route('view')}}" class="btn btn-md btn-primary pull-right"> view all</a></div>


@endsection
@section('js')

<script>
        $(document).ready(function(){
            $.ajax({
                url:"http://localhost/zadania/public/index",
                method:"get",
                dataType:"json",
                success: function(data){
                    $('#treeview').treeview({data:data});
                }
            })
        });
    </script>

@endsection