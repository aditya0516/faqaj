@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Welcome Admin

                    </div>

                    <table>
                        <tr>
                            <td>Sr. No</td>
                            <td>Email</td>
                            <td>Action</td>

                        </tr>
                        @foreach($allusers as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->email}}</td>
                                <td><a href=""><button>Edit</button></a>&nbsp;<a href=""><button>Delete</button></a> </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
@endsection
