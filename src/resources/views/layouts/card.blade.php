@props(['title', 'todayHour', 'description'])
<li class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
  <a href="#">
      <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</p>
  </a>
  <h3 class="">{{ $todayHour }}</h3>
  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $description }}</p>
</li>