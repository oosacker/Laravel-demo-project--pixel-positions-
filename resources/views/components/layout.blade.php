<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pixel Positions</title>
  @Vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white">
  <div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
      <div class="flex items-center">
        <a href="">
          <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
        </a>
      </div>

      <div class="space-x-6 font-bold">
        <a class="" href="">Jobs</a>
        <a class="" href="">Careers</a>
        <a class="" href="">Salaries</a>
        <a class="" href="">Companies</a>
      </div>

      <div>Post a Job</div>
    </nav>

    <main class="mt-10 max-w-[986px]">
      {{ $slot }}
    </main>
  </div>
</body>

</html>