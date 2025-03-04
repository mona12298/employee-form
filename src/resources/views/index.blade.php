@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('index.css') }}">
@endsection

@section('content')
<table>
    <tr>
        <th>名前</th>
        <th>メール</th>
        <th>年齢</th>
        <th>部署</th>
        <th>入社日</th>
        <th>ボタン</th>
    </tr>
    @foreach ($employees as $employee)
    <tr>
        <td>{{ $employee['name'] }}</td>
        <td>{{ $employee['email'] }}</td>
        <td>{{ $employee['age'] }}</td>
        <td>{{ $employee['department'] }}</td>
        <td>{{ $employee['joined_date'] }}</td>
        <td>
            <form action="/edit/{{ $employee->id }}" method="get">
            @csrf
            <button>編集</button>
            </form>
            <form action="/{{ $employee->id }}" method="post">
            @csrf
            @method('delete')
            <button>削除</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
