{{-- webapp --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        {{-- 各card.blade.phpを呼び出したい --}}
        @include('layouts.card', [
            'title' => '今日',
            'description' => 'Card Description',
        ])
        @include('layouts.card', [
            'title' => '今月',
            'description' => 'Card Description',
        ])
        @include('layouts.card', [
            'title' => '合計',
            'description' => 'Card Description',
        ])
    </x-slot>
    <x-slot name="paiChart">
        {{-- 各card.blade.phpを呼び出したい --}}
        @include('layouts.paiChart', [
            'subTitle' => 'コンテンツ学習時間',
        ])
        @include('layouts.paiChart', [
            'subTitle' => '学習時間',
        ])
    </x-slot>
    <x-slot name="barChart">
        {{-- 各card.blade.phpを呼び出したい --}}
        @include('layouts.barChart')
    </x-slot>

</x-app-layout>
