{{-- webapp --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            学習時間記録アプリ
        </h2>
    </x-slot>
    <x-slot name="modalButton">
        <button type="button"
            class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
            data-modal-target="defaultModal" data-modal-toggle="defaultModal">学習時間記録</button>
    </x-slot>
    <x-slot name="slot">
        {{-- 各card.blade.phpを呼び出したい --}}
        @include('layouts.card', [
            'title' => '今日',
            'Hour' => $todayHour,
        ])
        @include('layouts.card', [
            'title' => '今月',
            'Hour' => $currentMonthHour,
        ])
        @include('layouts.card', [
            'title' => '合計',
            'Hour' => $totalHour,
        ])
    </x-slot>
    <x-slot name="barChart">
        @include('layouts.barChart', [
            'barChart' => 'barChart',
        ])
    </x-slot>
    <x-slot name="paiChart">
        @include('layouts.paiChart.medium', [
            'subTitle' => 'コンテンツ学習時間',
            'paiChart' => 'mediumChart',
        ])
        @include('layouts.paiChart.language', [
            'subTitle' => '学習言語時間',
            'paiChart' => 'languageChart',
        ])
    </x-slot>
</x-app-layout>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full h-96">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 h-96">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-2 border-b rounded-t dark:border-gray-600 text-center">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white text-center justify-center align-middle">
                    登録画面
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="" method="POST">
                <div class="p-6 flex w-[calc(100%-1rem)]">
                    <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        {{-- 学習日 --}}
                        <div></div>
                        {{-- 学習言語 --}}
                        <div>
                            <div class="modal_lang">
                                <label for="html"class="lang"></label>
                                <input type="checkbox" id="html" value="HTML">HTML
                            </div>
                        </div>
                        {{-- 学習媒体 --}}
                        <div></div>
                    </div>
                    <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="defaultModal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">登録</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js" defer></script>
<script src="{{asset("scripts/checkbox.js")}}"></script>
