<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styles -->
  @vite('resources/css/app.css')
  <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
  <div class="grid grid-cols-5 p-10">
    <nav class="col-span-1 row-span-full border-r-2">
      <ul class="space-y-2">
        <li><a @class(['underline text-lg', 'font-bold' => request()->is('/')]) href="/">Home</a></li>
        <li><a @class(['underline text-lg', 'font-bold' => request()->is('counter')]) href="/counter">Counter</a></li>
        <li><a @class(['underline text-lg', 'font-bold' => request()->is('todo')]) href="/todo">Todo</a></li>
      </ul>
    </nav>
    <div class="col-start-2 col-end-6 place-items-center">
      <div class="container mx-auto max-w-3xl">
        {{ $slot }}
      </div>
    </div>
  </div>
</body>

</html>
