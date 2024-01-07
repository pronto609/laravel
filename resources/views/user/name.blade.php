@extends('user.layout')

<h1>User</h1>
@unless($user['age'] > 14)
    <h5>Not Edult!</h5>
@endunless
@foreach($user as $userData)
    <p>{{ $userData }}</p>
@endforeach
<h2>{{ count($user) }}</h2>
<h3>Location</h3>
<p>{{ !empty($location['country']) ? $location['country'] : 'No Country' }}</p>
<p>{{ !empty($location['city']) ? $location['city'] : 'No City' }}</p>
<p>{!! $str !!}</p>
<p>
    @if(is_array($employees))
        <table style="border: 2px">
            @foreach($employees as $key => $elem)
                <tr>
                    @foreach($elem as $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
        @elseif(is_numeric($arr))
            <p>{{ $arr }}</p>
    @endif
</p>
<p>
    @forelse($arr as $elem)
        <p class="{{ $loop->first ? 'first' : ($loop->last ? 'last' : '') }}">index:{{ $loop->index }},
            iteration:{{ $loop->iteration }} -
            {!! $loop->remaining < 3 ? sprintf('<i>%d</i>', $elem) : sprintf('<b>%d</b>', $elem) !!} </p>
        @empty
            <p>No element</p>
    @endforelse
</p>
<p>
@forelse($arr as $elem)
    @continue($elem % 2 === 0)
    <p>{{ $elem }}</p>
    @empty
    <p>No element</p>
@endforelse
</p>
<ul>
    @for ($i = 1; $i <= 10; $i++)
        <li>{{ $i }}</li>
    @endfor
</ul>
@php
    echo __DIR__;
@endphp

