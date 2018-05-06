@extends('layouts.app')

@section('content')
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Welcome Admin

                    </div>
                    <br />
                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                    @endif
                    <table>
                        <tr>
                            <td>Sr. No</td>
                            <td>Email</td>
                            <td>Status</td>
                            <td>Delete</td>

                        </tr>
                        @foreach($user as $value)
                            <tr>
                                <td>{{$value['id']}}</td>
                                <td>{{$value['email']}}</td>
                                <td><a href=""><button>Block</button></a>
                                 <td><a href="">
                                        <form method="post" class=" delete_form" action="{{action('AdminController@destroy',$value['id'])}}">
                                          @csrf
                                            <input type="hidden" name="_method" value="DELETE"><button onclick="">Delete</button></form></a>
                                    </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

       <script>
           $(document).ready(function(){
               $('.delete_form').on('submit', function(){
                   var a;
                   a = confirm("Are you sure you want to delete it?");
                   if(a)
                   {
                       return true;
                   }
                   else
                   {
                       return false;
                   }
               });
           });
       </script>

@endsection
