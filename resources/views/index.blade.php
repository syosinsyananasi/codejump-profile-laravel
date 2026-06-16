<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite(['resources/css/app.css'])
</head>

<body class="max-w-[960px] mx-auto p-4%">
    <header class="flex justify-between items-center px-32 py-4">
        <h1 class="text-3xl text-white bg-black px-4 py-1.5">Profile</h1>
        <nav>
            <ul class="flex gap-4 ">
                <li>About</li>
                <li>Bicycle</li>
            </ul>
        </nav>
    </header>
    <main>
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

    <footer>
        <p class="flex justify-center mb-8">&copy; 2020 Profile</p>
    </footer>
</body>

</html>
