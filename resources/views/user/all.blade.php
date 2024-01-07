@extends('user.layout')

<h1>All User</h1>
<h2>Curent date {{ date('Y.m.d') }}</h2>
<p><input type="text" value="{{ $value1 }}"></p><br>
<p style="color: {{ $color }}">Text <input type="text" value="{{ $value2 }}"></p><br>
<p><input type="text" value="{{ $value3 }}"></p><br>
