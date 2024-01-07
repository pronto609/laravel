<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return 'Show user!';
    }

    public function pract()
    {
        $links = $this->links();
        $employees = $this->employees();
        $users = $this->users();
        $inputArr = range(1, 3);
//        dump(date('j'));
//        dd(date('t'));
        $arrDate = range(1, date('t'));
        return view('user.pract', [
            'title' => 'Practicum',
            'links' => $links,
            'employees' => $employees,
            'users' => $users,
            'inputArr' => $inputArr,
            'arrDate' => $arrDate
        ]);
    }

    private function users()
    {
        return [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];
    }

    private function employees()
    {
        return [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];
    }

    private function links()
    {
        return [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];
    }

    public function all()
    {
        $inputData = ['value1' => 'Value1', 'value2' => 'Value2', 'value3' => 'Value3', 'color' => 'red'];
        return view('user.all', array_merge(['title' => 'User All'], $inputData));
    }

    public function name($name)
    {
        $data = $this->userData()[$name] ?? 'no data';
        $location = $this->userLocation()[$name] ?? 'no location';
        $str = '<b>text</b>';
        $arr = range(1,5);
        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
        ];
        return isset($this->userData()[$name]) ?
            view('user.name',
            [
                'title' => 'User name!',
                'user' => $data,
                'location' => $location,
                'str' => $str,
                'arr' => $arr,
                'employees' => $employees
            ]
            ) : 'no data!';
    }

    public function fullname($name, $surname)
    {
        return 'Show user name: ' . $name . ' ' . $surname;
    }

    private function userData()
    {
        return [
            'user1' => ['name' => 'Name1', 'age'=>'11', 'salary' => '2000'],
            'user2' => ['name' => 'Name2', 'age'=>'12', 'salary' => '3000'],
            'user3' => ['name' => 'Name3', 'age'=>'13', 'salary' => '4000'],
            'user4' => ['name' => 'Name4', 'age'=>'14', 'salary' => '5000'],
            'user5' => ['name' => 'Name5', 'age'=>'15', 'salary' => '6000'],
        ];
    }

    private function userLocation()
    {
        return [
            'user1' => ['city' => '', 'country'=>'Country1'],
            'user2' => ['city' => 'City2', 'country'=>''],
            'user3' => ['city' => 'City3', 'country'=>'Country4'],
            'user4' => ['city' => 'City1', 'country'=>'Country1'],
        ];
    }
}