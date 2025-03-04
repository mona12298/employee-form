@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('create.css') }}">
@endsection

@section('content')
<div class="content">
    <form action="/create" method="post">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="名前">
        <br>
        <input type="text" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
        <br>
        <input type="number" name="age" value="{{ old('age') }}" placeholder="年齢">
        <br>
        <input type="radio" name="department" value="営業" {{ old('department') == '営業' ? 'checked' : '' }}> 営業
        <input type="radio" name="department" value="開発" {{ old('department') == '開発' ? 'checked' : '' }}> 開発
        <input type="radio" name="department" value="総務" {{ old('department') == '総務' ? 'checked' : '' }}> 総務
        <input type="radio" name="department" value="人事" {{ old('department') == '人事' ? 'checked' : '' }}> 人事
        <br>
        <input type="date" value="{{ old('joined_date') }}" name="joined_date">
        <br>
        <input type="submit" value="送信">
    </form>
</div>

@endsection
