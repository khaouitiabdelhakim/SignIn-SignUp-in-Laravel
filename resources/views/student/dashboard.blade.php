@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->username}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
    </tr>
  </tbody>
</table>
        @endauth

    </div>
@endsection