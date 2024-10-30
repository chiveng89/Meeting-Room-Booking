@extends('frontend.master')
@section('content')
<div class="mx-auto max-w-screen-xl">
    <h1 class="text-4xl font-black text-gray-600  py-10 ">Meeting Room Booking</h1>
  </div>
<!-- Card booking  -->
  <div  class="p-4 mb-10 border-2 border-gray-200 border-dashed rounded-lg dark:border-sky-700 mt-14 mx-auto max-w-screen-xl">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-4">
      <div class="card_room w-full bg-white border border-sky-200 rounded-lg shadow dark:bg-gray-100 dark:border-sky-600">
        <a href=/room-detial">
          <img class="w-full object-cover rounded-t-lg" src="{{URL('assets/image/kirum.jpg')}}" alt="" />
        </a>
        <div class="p-5">
          <a href="/room-detial">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-sky-900 ">
              Kirum Meeting Room
            </h5>
          </a>
          <p class="mb-3 font-normal text-white-700 dark:text-sky-500">
            PPM Building Near Purchase and Logistic office. <br />
            <span class="text-rose-500">Seat up to 10 People.</span>
          </p>
          <a href="/room-detial" class="btn_book inline-flex items-center px-3 py-2 text-sm font-medium text-center border border-sky-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-400 text-gray-900 dark:bg-sky-300 hover:text-white dark:hover:bg-sky-700 dark:focus:ring-sky-800">
            <button type="button">
              Book Now
            </button>
          </a>
        </div>
      </div>

      <div class="card_room w-full bg-white border border-sky-200 rounded-lg shadow dark:bg-gray-100 dark:border-sky-700">
        <a href="/room-detial">
          <img class="w-full object-cover rounded-t-lg" src="{{URL('assets/image/panol.jpg')}}" alt="" />
        </a>
        <div class="p-5">
          <a href="/room-detial">
            <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-sky-900 ">
              PANOL Meeting Room
            </h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-sky-500">
            PPM Building Near Purchase and Logistic office. <br />
            <span class="text-rose-500">Seat up to 8 People.</span>
          </p>
          <a href="/room-detial" class="btn_book inline-flex items-center px-3 py-2 text-sm font-medium text-center border border-sky-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-400 text-gray-900 dark:bg-sky-300 hover:text-white dark:hover:bg-sky-700 dark:focus:ring-sky-800">
            <button type="button">
              Book Now
            </button>
          </a>
        </div>
      </div>

      <div class="card_room w-full bg-white border border-sky-200 rounded-lg shadow dark:bg-gray-100 dark:border-sky-700">
         <a href="/room-detial">
          <img class="w-full object-cover rounded-t-lg" src="{{URL('assets/image/kinal.jpg')}}" alt="" />
        </a>
        <div class="p-5">
          <a href="/room-detial">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-sky-900 ">
              KINAL Meeting Room
            </h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-sky-500">
            PPM Building Near HR Office. <br />
            <span class="text-rose-500">Seat up to 30 People.</span>
          </p>
          <a href="/room-detial" class="btn_book inline-flex items-center px-3 py-2 text-sm font-medium text-center border border-sky-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-400 text-gray-900 dark:bg-sky-300 hover:text-white dark:hover:bg-sky-700 dark:focus:ring-sky-800">
            <button type="button">
              Book Now
            </button>
          </a>

        </div>
      </div>

      <div   class="card_room w-full bg-white border border-sky-200 rounded-lg shadow dark:bg-gray-100 dark:border-sky-700">
        <!-- <div class="label">
          <span>Booked By HR</span>
          <span>Today 2AM - 5AM</span>
        </div> -->
        <a href="/room-detial">
          <img class="w-full object-cover rounded-t-lg" src="{{URL('assets/image/confirel.jpg')}}" alt="" />
        </a>
        <div class="p-5">
          <a href="/room-detial">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-sky-900 ">
              Confirel Show Room
            </h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-sky-500">
            Confirel Building G Floor <br />
            <span class="text-rose-500">Seat up to 30 People.</span>
          </p>
          <a href="/room-detial" class="btn_book inline-flex items-center px-3 py-2 text-sm font-medium text-center border border-sky-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-400 text-gray-900 dark:bg-sky-300 hover:text-white dark:hover:bg-sky-700 dark:focus:ring-sky-800">
            <button type="button">
              Book Now
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
<!-- end of card booking  -->
@endsection
