@extends('layouts.app')

@section('content')
<div class="content">
    <form action="/edit/{{ $employee->id }}" method="post">
        @csrf
        @method('patch')
        <input type="text" name="name" value="{{ $employee->name }}" placeholder="名前">
        <br>
        <input type="text" name="email" value="{{ $employee->email }}" placeholder="メールアドレス">
        <br>
        <input type="number" name="age" value="{{ $employee->age }}" placeholder="年齢">
        <br>
        <input type="radio" name="department" value="営業" {{ $employee->department == '営業' ? 'checked' : '' }}> 営業
        <input type="radio" name="department" value="開発" {{ $employee->department == '開発' ? 'checked' : '' }}> 開発
        <input type="radio" name="department" value="総務" {{ $employee->department == '総務' ? 'checked' : '' }}> 総務
        <input type="radio" name="department" value="人事" {{ $employee->department == '人事' ? 'checked' : '' }}> 人事
        <br>
        <input type="date" name="joined_date" value="{{ $employee->joined_date }}">
        <br>
        <input type="submit" value="送信">
    </form>
</div>
@endsection
