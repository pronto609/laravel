@extends('user.layout')

<h1>All User</h1>
<h2>Curent date {{ date('Y.m.d') }}</h2>
@if(count($users) > 1 && isset($users[0]->email))
<table>
    <thead>
    <tr>
        <td>name</td>
        <td>email</td>
        <td>age</td>
        <td>salary</td>
    </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
           <tr>
               <td>{{ $user->name }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->age }}</td>
               <td>{{ $user->salary }}</td>
           </tr>
        @endforeach
    </tbody>
</table>
@else
    <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@endif
