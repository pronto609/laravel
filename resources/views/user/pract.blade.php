@extends('user.layout')
<h1>Practicum</h1>
<ul>
    @forelse($links as $link)
        <li><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></li>
    @empty
        <li>No links</li>
    @endforelse
</ul>

@if(is_array($employees))
    <table>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        @foreach($employees as $employee)
            @if($employee['salary'] > 2000)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    @foreach($employee as $val)
                        <td>{{ $val }}</td>
                    @endforeach
                </tr>
            @endif
        @endforeach
    </table>
@endif

@if(isset($users) && is_array($users))
    <table>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Бан</th>
        </tr>
        @foreach($users as $user)
            <tr style="color: {{ $user['banned'] ? 'red' : 'green' }}">
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                <td>{{ $user['banned'] ? 'Забанен' : 'Активен' }}</td>
            </tr>
        @endforeach
    </table>
@endif
<ul>
    @foreach($inputArr as $value)
        <li><input name="name{{ $loop->iteration }}" type="text" value="{{ $value }}"></li>
    @endforeach
</ul>

<ul>
    @foreach($arrDate as $day)
        <li style="color: {{ $day == date('j') ? 'red' : 'green' }}">{{ $day }}</li>
    @endforeach
</ul>

