<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{URL('assets/css/backend.css')}}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/5041c59df8.js" crossorigin="anonymous"></script>
    <title>Meeting-Room-Booking</title>
</head>
<body>
    <nav class="bg-white  dark:bg-sky-700">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
          <a href="" class="flex items-center">
            <img src="{{URL('assets/image/Logo_PPM.jpg')}}"
              class=" item-left h-20 img-fluid ${1|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
              alt="" />
          </a>

          <div class="flex items-center space-x-6 rtl:space-x-reverse">

            <div>
              <button type="button"
                class="text-sky-800 mt-2 bg-sky-300 hover:bg-sky-800 hover:text-white border-2 border-sky-800  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-sky-300 dark:hover:bg-sky-500 focus:outline-none dark:focus:ring-sky-800">Login</button>
            </div>
          </div>
        </div>
      </nav>
      @yield('content')
</body>
</html>
