@extends('frontend.master')
@section('content')
<section class=" dark:bg-sky-800">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Panol Room</h1>
            <p class="max-w-2xl mb-6 font-bold text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                PPM Building Near Purchase and Logistic office. <br />
                <span class="text-rose-500">Seat up to 8 People.</span>
            </p>
            <button>
                Book
            </button>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{URL('assets/image/panol.jpg')}}" alt="mockup">
        </div>
    </div>
</section>

<!-- Form input  -->
 {{-- @if(seesion('content'))
    <div class="bg-green-100 text-green-700 p-3 rounded">
        {{session('success')}}
    </div>
@endif --}}
<div class="room-booking p-10  ">
<div class="place-item-center  grid justify-items-start md:justify-items-center ">
    <form action="{{ route('room-detial.store') }}" method="POST" class="w-full max-w-3xl drop-shadow-md bg-white mt-10 mb-10 rounded-md grid-cols-6">
        @csrf
        <div class="p-5">
            <div class="mb-5">
                <p class="text-center text-2xl">Booking Form</p>
            </div>

            <div class="mb-5">
                <label for="room" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Room selected <span class="text-rose-700">*</span></label>
                <select id="room" name="room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Panol Room</option>
                </select>
            </div>

            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Name <span class="text-rose-600">*</span></label>
                <input type="text" id="name" name="staff_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required />
            </div>

            <div class="mb-5">
                <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Staff ID <span class="text-rose-600">*</span></label>
                <input type="number" id="id" name="staff_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>

            <div class="mb-5">
                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Staff Department<span class="text-rose-700">*</span></label>
                <select id="department" name="staff_department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose Department</option>
                    <option value="IT">IT</option>
                    <!-- Add other departments as needed -->
                </select>
            </div>

            <div class="mb-5">
                <label for="meeting_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Meeting Type <span class="text-rose-600">*</span></label>
                <div class="mx-auto grid grid-cols-2 gap-4">
                    <div class="flex items-center mb-4">
                        <input id="meeting" type="radio" value="meeting" name="meeting_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="meeting" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Meeting</label>
                    </div>
                    <div class="flex items-center">
                        <input id="training" type="radio" value="training" name="meeting_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="training" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Training</label>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Brief Description of Meeting Agenda</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
            </div>

            <div class="mb-5">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Date <span class="text-rose-600">*</span></label>
                <input type="date" id="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>

            <div class="mb-5 grid grid-cols-2 gap-4">
                <div>
                    <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Start Time <span class="text-rose-600">*</span></label>
                    <input type="time" id="start_time" name="start_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div>
                    <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">End Time <span class="text-rose-600">*</span></label>
                    <input type="time" id="end_time" name="end_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book</button>
        </div>
    </form>
</div>

<div class="mb-5 text-2xl">
    <p class="text-center">Panol Room Bookend</p>
</div>

    <div class="relative overflow-x-auto  sm:rounded-lg mt-10 mb-10 ">
        <table class="w-full rounded-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Staff name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Room
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time Start
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time End
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($panols as $Panolroom) --}}
                {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Name
                    </th>
                    <td class="px-6 py-4">
                        Panol Room
                    </td>
                    <td class="px-6 py-4">
                        28/10/2024
                    </td>
                    <td class="px-6 py-4">
                        12:00pm
                    </td>
                    <td class="px-6 py-4">
                        3:00 pm
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                    <td class="px-6 py-4">
                        3:00 pm
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                    <td class="px-6 py-4">
                        3:00 pm
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                    </td>
                </tr> --}}
                <tr>
                    {{-- <td class="py-2 px-4 border-b">{{ $booking->staff_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $booking->room }}</td>
                    <td class="py-2 px-4 border-b">{{ $booking->date }}</td>
                    <td class="py-2 px-4 border-b">{{ \Carbon\Carbon::parse($booking->start_time)->format('h:i A') }}</td>
                    <td class="py-2 px-4 border-b">{{ \Carbon\Carbon::parse($booking->end_time)->format('h:i A') }}</td> --}}
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>

</div>


<!-- End of form input -->

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
@endsection
