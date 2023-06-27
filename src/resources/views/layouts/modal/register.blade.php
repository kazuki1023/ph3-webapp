<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkbox.css') }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
</head>

<body class="">
    <div
        class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-start flex">
        <div class="relative w-full max-w-2xl h-[calc(100%-1rem)]">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
                <!-- Modal header -->
                <div class="flex items-start p-2 border-b rounded-t dark:border-gray-600 text-center gap-6">
                    <h3
                        class="text-xl font-semibold text-gray-900 dark:text-white text-center justify-center align-middle">
                        登録画面
                    </h3>
                    <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="defaultModal">
                    <a href="http://localhost/dashboard" class="ml-auto w-auto">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </a>
                    </button>  
                </div>
                <!-- Modal body -->
                <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-5 flex ">
                        <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400 w-1/2">
                            {{-- 学習日 --}}
                            <div class="relative max-w-sm">
                                <h4 class="font-medium mb-1">学習日</h4>
                                <input type="date" name="date" id="date"
                                    class="w-full px-4 py-2 border rounded-lg" name="date">
                            </div>
                            {{-- 学習言語 --}}
                            <div>
                                <h4 class="font-medium mb-1">学習言語選択</h4>
                                <div class="flex flex-wrap gap-1">
                                    @foreach ($languages as $language)
                                        <div class="modal_lang w-max">
                                            <label for="lang_{{ $language->id }}"class="lang"></label>
                                            <input type="checkbox" id="lang_{{ $language->id }}"
                                                value="{{ $language->id }}" name="lang[]">{{ $language->name }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- 学習媒体 --}}
                            <div>
                                <h4 class="font-medium mb-1">学習媒体選択</h4>
                                <div class="flex flex-wrap gap-1">
                                    @foreach ($media as $medium)
                                        <div class="modal_medium">
                                            <label for="medium_{{ $medium->id }}"class="medium"></label>
                                            <input type="checkbox" id="medium_{{ $medium->id }}"
                                                value="{{ $medium->id }}" name="media[]">{{ $medium->content }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400 w-1/2 ">
                            {{-- 学習時間 --}}
                            <div class="mb-6">
                                <h4 for="studyHours"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">学習時間</h4>
                                <select id="studyHours"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="studyHours">
                                    <option selected>学習時間を選択してね</option>
                                    @for ($i = 1; $i <= 24; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            {{-- コメント --}}
                            <div class="">
                                <h4 for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    コメント</h4>
                                <textarea id="message" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="コメントあれば"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center space-x-2 border-gray-200 rounded-b dark:border-gray-600 justify-center mb-1">
                        <button data-modal-hide="defaultModal" type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js" defer></script>
<script src="{{ asset('scripts/checkbox.js') }}"></script>

</body>

</html>
