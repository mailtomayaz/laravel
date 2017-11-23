@extends('layout.app')
   @section('content')
<div class="row">
       <h1>Messages</h1>
                @if(count($messages) > 0)
                <table class="table table-bordered">
                    <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    </thead>
                @foreach($messages as $message)
               <tr class="">
                    <td class="">{{$message->username}}</td>
                    <td class="">{{$message->useremail}}</td>
                    <td class="">{{$message->usermessage}}</td>

                 </tr>
                @endforeach
                </table>
                @endif
                
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                
                @endif
                
                
            </div>
   @endsection