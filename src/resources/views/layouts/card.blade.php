@props(['title', 'Hour', 'description'])
<li class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-center">
  <p class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</p>
  <h3 class="font-bold tracking-wide text-4xl">{{ $Hour }}</h3>
  <p class="  text-gray-700 dark:text-gray-400 text-xl font-bold">時間</p>
</li>