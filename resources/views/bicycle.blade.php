@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<section>
    <img src="{{ asset('img/bicycle1.jpg') }}" alt="Profile Image" class="object-cover w-full h-[500px]  mb-16 px-16 max-sm:h-[300px]">
    <div class="flex flex-col text-left px-20">
        <h2 class="text-left text-2xl font-bold  mb-4">タイトルタイトル1</h2>
        <p class="text-left mb-16">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
    <p class="text-center mb-16"><a href="{{ url('index') }}">トップに戻る</a></p>
</section>

@endsection