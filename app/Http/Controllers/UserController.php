<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
//        $users = DB::table('users')->select('name', 'email as user_email')->get();
//        $users = DB::table('users')->where('age', '<=', 31)->get();
//        $users = DB::table('users')
//            ->where('age', '>', 20)
//            ->where('age', '<', 40)
//            ->get();
//        $users = DB::table('users')
//            ->where('age', '=', 31)
//            ->orWhere('id', '>', 4)
//            ->get();
//        $users = DB::table('users')
//            ->where('age', '=', 31)
//            ->orWhere('salary', '>', 3000)
//            ->orWhere('id', '>', 7)
//            ->get();
//        $users = DB::table('users')
//            ->where('salary', '>', 3000)
//            ->orWhere(function (Builder $query) {
//                $query->where('age', '>=20')
//                    ->where('age', '<=', 30);
//            })
//            ->get();
//        $users = DB::table('users')
//            ->orWhere(function (Builder $query) {
//                $query
//                    ->where('salary', '>=', 500)
//                    ->where('salary', '<=', 1000);
//            })
//            ->orWhere(function (Builder $query) {
//                $query->where('age', '>=20')
//                    ->where('age', '<=', 30);
//            })
//            ->get();
//        $users = DB::table('users')
//            ->orWhere(function (Builder $query) {
//                $query
//                    ->where('salary', '>=', 500)
//                    ->where('salary', '<=', 1000);
//            })
//            ->orWhere(function (Builder $query) {
//                $query->where('age', '>=20')
//                    ->where('age', '<=', 30);
//            })
//            ->get();
//        $users = DB::table('users')->where('id', '=', 3)->first();
//        $users = DB::table('users')->pluck('name');
//        dd($users);
//        $users = DB::table('users')->whereBetween('age', [30, 40])->get();
//        $users = DB::table('users')->whereNotBetween('age', [30, 40])->get();
//        $users = DB::table('users')->whereIn('id', [1, 2, 3, 5])->get();
//        $users = DB::table('users')->whereNotIn('id', [1, 2, 3, 5])->get();
//        dd($users);
//        $users = DB::table('users')->whereId(3)->get()->toArray();
//        $users = DB::table('users')->whereName('John')->get()->toArray();
//        dd($users->getItems());
//        $users = DB::table('users')->whereIdOrAge(3, 20)->get()->toArray();
//        $users = DB::table('users')->orderBy('age', 'desc')->get();
//        $users = DB::table('users')->orderBy('salary', 'desc')->get();
//        $users = DB::table('users')
//            ->where('age', '>', '30')
//            ->oldest()->get();
//        $users = DB::table('users')->oldest('age')->get();
//        $users = DB::table('users')->where('age', '>', 30)->latest('age')->get();
//        $users = DB::table('users')->inRandomOrder()->get();
//        $users = DB::table('users')->first();
//        $users = DB::table('users')->whereBetween('age', [20, 30])->inRandomOrder()->get();
//        $users = DB::table('users')->whereBetween('age', [20, 30])->inRandomOrder()->first();
//        $users = DB::table('users')->whereBetween('age', [20, 30])->take(3)->get();
//        $users = DB::table('users')->take(5)->get();
//        $users = DB::table('users')->skip(4)->take(10)->get();
//        $users = DB::table('users')->whereBetween('age', [18, 40])->skip(2)->take(10)->get();
//        $users = DB::table('users')->insertGetId([
//            'name' => 'John Koha',
//            'email' => 'johnkoha@gmail.com',
//            'age' => 62,
//            'salary' => 3200
//        ]);
//        $users = DB::table('users')->insert([
//            [
//                'name' => 'John Loma',
//                'email' => 'johnloma@gmail.com',
//                'age' => 63,
//                'salary' => 3300
//            ],
//            [
//                'name' => 'John Dem',
//                'email' => 'johndem@gmail.com',
//                'age' => 65,
//                'salary' => 3400
//            ],
//        ]);
//        dd($users);
//        DB::table('users')->where('id', 41)
//            ->update([
//               'age' => 70
//            ]);
//        DB::table('users')->where('age', '>', 60)
//            ->update([
//                'salary' => 4000
//            ]);
//        DB::table('users')->where('id', 42)->increment('age');
//        DB::table('users')->where('id', 43)->decrement('age');
//        DB::table('users')->where('age', '>', 60)->increment('salary', 50);
        $users = DB::table('posts')->leftJoin('users', 'posts.author_id', '=', 'users.id')
        ->get();
        dd($users);
        return view('user.all', ['title' => 'User All', 'users' => $users]);
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
