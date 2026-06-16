@extends('layouts.app')

@section('title', 'Profile')

@section('content')

        <img src="img/mainvisual.jpg" alt="Profile Image" class="object-cover w-full h-[500px]  mb-16">
        <section>
            <h2 class="text-center text-3xl font-bold underline mb-18">About</h2>
            <div class="flex gap-8 px-48 mb-16 max-sm:flex-col max-sm:px-16 max-sm:items-center">
                <img src="img/about.jpg" alt="Profile Image" class="object-cover w-[100px] h-[100px] rounded-full mt-2">
                <div>
                    <h3 class="text-xl font-bold mb-2">KAKERU MIYAUCHI</h3>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-center text-3xl font-bold underline mb-18">Bicycle</h2>
            <ul class="flex gap-2 justify-center flex-wrap mb-16 max-sm:px-4 ">
                <li class="max-sm:text-center">
                    <img src="img/bicycle1.jpg" alt="Bicycle Image"
                        class="object-cover w-[300px] h-[200px] mb-4 max-sm:w-full max-sm:h-auto">
                    <h3>タイトル</h3>
                    <p class="mb-4">テキストテキストテキスト</p>
                </li>
                <li class="max-sm:text-center">
                    <img src="img/bicycle2.jpg" alt="Bicycle Image"
                        class="object-cover w-[300px] h-[200px] mb-4 max-sm:w-full max-sm:h-auto">
                    <h3>タイトル</h3>
                    <p class="mb-4">テキストテキストテキスト</p>
                </li>
                <li class="max-sm:text-center">
                    <img src="img/bicycle3.jpg" alt="Bicycle Image"
                        class="object-cover w-[300px] h-[200px] mb-4 max-sm:w-full max-sm:h-auto">
                    <h3>タイトル</h3>
                    <p class="mb-4">テキストテキストテキスト</p>
                </li>
            </ul>
        </section>
    </main>

@endsection
