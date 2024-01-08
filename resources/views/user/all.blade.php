@extends('user.layout')

<h1>All User</h1>
<h2>Curent date {{ date('Y.m.d') }}</h2>
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
