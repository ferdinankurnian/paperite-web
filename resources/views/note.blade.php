<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes - Paperite</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="assets/paperiteicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<body class="bg-[#e76127] h-screen flex flex-col">
    <div class="flex flex-col p-2 gap-2 flex-grow">
        <!-- Navbar -->
        <div class="flex items-stretch justify-between h-[35px]">
            <div class="h-full flex items-center">
                <a class="bg-white grid p-2 rounded-full" href="">
                    <span style="font-size:18px" class="material-symbols-outlined">thumbnail_bar</span>
                </a>
            </div>
            <div class="h-full flex items-center">
                <a href="" class="bg-white grid px-4 py-1 rounded-full font-['Courgette'] text-[#e94c08]">Paperite</a>
            </div>
            <div class="h-full flex items-center gap-2">
                <a class="bg-white h-full grid items-center p-2 rounded-full" href="">
                    <img src="assets/viewbars.png" width="18" height="18" alt="Viewbars">
                </a>
                <a class="flex h-full">
                    <img class="h-full w-full rounded-full" src="assets/pfp.png" alt="Profile">
                </a>
            </div>
        </div>

        <!-- Content Section -->
        <div class="flex-grow">
            <div class="flex gap-2 h-full">
                <div class="w-[4rem] flex flex-col justify-between bg-white p-3 rounded-md">
                    <div class="flex flex-col gap-2">
                        <a href=""
                            class="h-[40px] bg-[#e76127] rounded-md w-full grid items-center justify-center text-white">
                            <span class="material-symbols-outlined">note_stack</span>
                        </a>
                        <!-- <a href=""
                            class="h-[40px] rounded-md w-full grid items-center justify-center hover:text-[#7f2e0a]">
                            <span class="material-symbols-outlined">groups</span>
                        </a> -->
                        <a href=""
                            class="h-[40px] rounded-md w-full grid items-center justify-center hover:text-[#7f2e0a]">
                            <span class="material-symbols-outlined">notifications</span>
                        </a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <a href=""
                            class="h-[40px] rounded-md w-full grid items-center justify-center hover:text-[#7f2e0a]">
                            <span class="material-symbols-outlined">local_activity</span>
                        </a>
                        <a href=""
                            class="h-[40px] rounded-md w-full grid items-center justify-center hover:text-[#7f2e0a]">
                            <span class="material-symbols-outlined">settings</span>
                        </a>
                    </div>
                </div>
                <div class="w-[20rem] flex flex-col gap-2 bg-white p-4 rounded-md">
                    <div class="flex flex-row justify-between items-center">
                        <a href="" class="flex flex-row items-center">
                            <h1 class="text-xl font-semibold">All Notes</h1>
                            <span style="font-size:15px;" class="material-symbols-outlined">keyboard_arrow_down</span>
                        </a>
                        <a href="" class="">
                            <span style="font-size:20px;" class="material-symbols-outlined">edit_square</span>
                        </a>
                    </div>
                    <div class="bg-[#e7e7e7] flex items-center px-2 gap-2 rounded-md h-9">
                        <span style="font-size:18px;color:#5c5c5c" class="material-symbols-outlined">search</span>
                        <input type="text" class="flex-grow bg-[#e7e7e7] outline-none" name="search-note"
                            id="search-note" placeholder="Search note..">
                    </div>
                    <div class="divide-y divide-gray-300 flex flex-col">
                        <a href="" class="py-2">
                            <div class="hover:bg-[#ededed] p-3 rounded-md w-full">
                                <div class="flex justify-between">
                                    <h1 class="font-semibold text-sm truncate">Item 1, ini adalah judul dari item ke satu</h1>
                                    <span style="font-size:18px;color:#e76127" class="material-symbols-outlined">keep</span>
                                </div>
                            </div>
                        </a>
                        <a href="" class="py-2">
                            <div class="hover:bg-[#ededed] p-3 rounded-md w-full">
                                <div class="flex justify-between">
                                    <h1 class="font-semibold text-sm truncate">Item 2, ini adalah judul dari item ke dua</h1>
                                    <span style="font-size:18px;color:#e76127" class="material-symbols-outlined">keep</span>
                                </div>
                                <p class="text-xs line-clamp-2 text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </a>
                        <a href="" class="py-2">
                            <div class="hover:bg-[#ededed] p-3 rounded-md w-full">
                                <div class="flex justify-between">
                                    <h1 class="font-semibold text-sm truncate">Item 3, ini adalah judul dari item ke tiga</h1>
                                    <!-- <span style="font-size:18px;color:#e76127" class="material-symbols-outlined">keep</span> -->
                                </div>
                                <p class="text-xs line-clamp-2 text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <div class="flex flex-row gap-1 mt-2">
                                    <div class="border-2 border-amber-600 text-amber-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # work
                                    </div>
                                    <div class="border-2 border-red-600 text-red-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # progress
                                    </div>
                                    <div class="border-2 border-blue-600 text-blue-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # time
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="py-2">
                            <div class="hover:bg-[#ededed] p-3 rounded-md w-full">
                                <div class="flex justify-between">
                                    <h1 class="font-semibold text-sm truncate">Item 3, ini adalah judul dari item ke tiga</h1>
                                    <!-- <span style="font-size:18px;color:#e76127" class="material-symbols-outlined">keep</span> -->
                                </div>
                                <p class="text-xs line-clamp-2 text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <div class="flex flex-row gap-1 mt-2">
                                    <div class="border-2 border-amber-600 text-amber-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # work
                                    </div>
                                    <div class="border-2 border-red-600 text-red-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # progress
                                    </div>
                                    <div class="border-2 border-blue-600 text-blue-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # time
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="py-2">
                            <div class="hover:bg-[#ededed] p-3 rounded-md w-full">
                                <div class="flex justify-between">
                                    <h1 class="font-semibold text-sm truncate">Item 3, ini adalah judul dari item ke tiga</h1>
                                    <!-- <span style="font-size:18px;color:#e76127" class="material-symbols-outlined">keep</span> -->
                                </div>
                                <p class="text-xs line-clamp-2 text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <div class="flex flex-row gap-1 mt-2">
                                    <div class="border-2 border-amber-600 text-amber-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # work
                                    </div>
                                    <div class="border-2 border-red-600 text-red-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # progress
                                    </div>
                                    <div class="border-2 border-blue-600 text-blue-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # time
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="py-2">
                            <div class="hover:bg-[#ededed] p-3 rounded-md w-full">
                                <div class="flex justify-between">
                                    <h1 class="font-semibold text-sm truncate">Item 3, ini adalah judul dari item ke tiga</h1>
                                    <!-- <span style="font-size:18px;color:#e76127" class="material-symbols-outlined">keep</span> -->
                                </div>
                                <p class="text-xs line-clamp-2 text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <div class="flex flex-row gap-1 mt-2">
                                    <div class="border-2 border-amber-600 text-amber-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # work
                                    </div>
                                    <div class="border-2 border-red-600 text-red-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # progress
                                    </div>
                                    <div class="border-2 border-blue-600 text-blue-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # time
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="py-2">
                            <div class="hover:bg-[#ededed] p-3 rounded-md w-full">
                                <div class="flex justify-between">
                                    <h1 class="font-semibold text-sm truncate">Item 3, ini adalah judul dari item ke tiga</h1>
                                    <!-- <span style="font-size:18px;color:#e76127" class="material-symbols-outlined">keep</span> -->
                                </div>
                                <p class="text-xs line-clamp-2 text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <div class="flex flex-row gap-1 mt-2">
                                    <div class="border-2 border-amber-600 text-amber-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # work
                                    </div>
                                    <div class="border-2 border-red-600 text-red-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # progress
                                    </div>
                                    <div class="border-2 border-blue-600 text-blue-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # time
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="py-2">
                            <div class="hover:bg-[#ededed] p-3 rounded-md w-full">
                                <div class="flex justify-between">
                                    <h1 class="font-semibold text-sm truncate">Item 3, ini adalah judul dari item ke tiga</h1>
                                    <!-- <span style="font-size:18px;color:#e76127" class="material-symbols-outlined">keep</span> -->
                                </div>
                                <p class="text-xs line-clamp-2 text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <div class="flex flex-row gap-1 mt-2">
                                    <div class="border-2 border-amber-600 text-amber-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # work
                                    </div>
                                    <div class="border-2 border-red-600 text-red-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # progress
                                    </div>
                                    <div class="border-2 border-blue-600 text-blue-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # time
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="py-2">
                            <div class="hover:bg-[#ededed] p-3 rounded-md w-full">
                                <div class="flex justify-between">
                                    <h1 class="font-semibold text-sm truncate">Item 3, ini adalah judul dari item ke tiga</h1>
                                    <!-- <span style="font-size:18px;color:#e76127" class="material-symbols-outlined">keep</span> -->
                                </div>
                                <p class="text-xs line-clamp-2 text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <div class="flex flex-row gap-1 mt-2">
                                    <div class="border-2 border-amber-600 text-amber-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # work
                                    </div>
                                    <div class="border-2 border-red-600 text-red-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # progress
                                    </div>
                                    <div class="border-2 border-blue-600 text-blue-800 px-2 py-[2px] text-[10px] rounded-md">
                                        # time
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="flex-grow bg-white p-4 rounded-md">
                    Content 2
                </div>
                <div class="bg-white p-2 rounded-md">
                    Content 3
                </div>
            </div>
        </div>
    </div>
</body>

</html>