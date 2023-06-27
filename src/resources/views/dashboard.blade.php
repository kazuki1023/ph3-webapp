{{-- webapp --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            学習時間記録アプリ
        </h2>
    </x-slot>
    <x-slot name="modalButton">
        <a href="http://localhost/register">
            <button type="button"
            class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
            data-modal-target="defaultModal" data-modal-toggle="defaultModal">学習時間記録</button>
        </a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js" defer></script>
<script src="{{ asset('scripts/checkbox.js') }}"></script>
