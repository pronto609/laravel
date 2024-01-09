@extends('user.layout')

<h1>All User</h1>
<h2>Curent date {{ date('Y.m.d') }}</h2>
@if(count($users) > 1 && isset($users[0]->email))
<table>
    <thead>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>age</td>
        <td>salary</td>
        <td>created at</td>
    </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
           <tr>
{{--               {{ dd($user) }}--}}
               <td>{{ $user->id }}</td>
               <td>{{ $user->name }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->age }}</td>
               <td>{{ $user->salary }}</td>
               <td>{{ $user->created_at }}</td>
           </tr>
        @endforeach
    </tbody>
</table>
@else
    <ul>
        @foreach($users as $user)
{{--            {{ dd($user->name) }}--}}
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
@endif
