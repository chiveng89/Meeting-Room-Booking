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
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="room-booking p-10  ">
<div class="place-item-center  grid justify-items-start md:justify-items-center ">
    <form action="{{ route('room-detial.store') }}" method="GET" class="w-full max-w-3xl drop-shadow-md bg-white mt-10 mb-10 rounded-md grid-cols-6">
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
                    <option value="Account">Account</option>
                    <option value="Marketing">Marketing</option>
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
    <div class="m-popup bg-white shadow w-16">
        <div class="">
            <i class="fa-regular fa-circle-check" style="color: #1cca47;"></i>
        </div>
        <div class="">
            <p></p>
        </div>
    </div>
</div>

<div class="mb-5 text-2xl">
    <p class="text-center">Panol Room Bookend</p>
</div>

    <div class="relative overflow-x-auto  sm:rounded-lg mt-10 mb-10 ">
        <table class="w-full rounded-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

            <tbody>
                <thead>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Panol
                        </th>
                        <td class="px-6 py-4">
                            Name
                        </td>
                        <td class="px-6 py-4">
                            Date
                        </td>
                        <td class="px-6 py-4">
                            Start Time
                        </td>
                        <td class="px-6 py-4">
                            End Time
                        </td>
                        <td class="px-6 py-4">
                            Action
                        </td>
                        {{-- <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                        </td> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($panols as $panol)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $panol->room }}</td>
                        <td class="px-6 py-4">{{ $panol->staff_name }}</td>
                        <td class="px-6 py-4">{{ $panol -> date }}</td>
                        <td class="px-6 py-4">{{ $panol -> start_time }}</td>
                        <td class="px-6 py-4">{{ $panol -> end_time }}</td>
                        <td class="px-6 py-4">
                            <a href="#" onclick="showDetails({{$panol->id}})" class="text-blue-600 hover:underline">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                </tr>
                <tr>

                </tr> --}}

            </tbody>
        </table>
    </div>
    <div id="detailModal" class="fixed inset-0 hidden z-50 overflow-y-auto bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto mx-auto mt-20">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Booking Details</h3>
                    <div class="mt-4">
                        <p><strong>Name:</strong> <span id="modalStaffName"></span></p>
                        <p><strong>Staff ID:</strong> <span id="modalStaffId"></span></p>
                        <p><strong>Department:</strong> <span id="modalStaffDepartment"></span></p>
                        <p><strong>Room:</strong> <span id="modalRoom"></span></p>
                        <p><strong>Date:</strong> <span id="modalDate"></span></p>
                        <p><strong>Start Time:</strong> <span id="modalStartTime"></span></p>
                        <p><strong>End Time:</strong> <span id="modalEndTime"></span></p>
                        <p><strong>Meeting Type:</strong> <span id="modalMeetingType"></span></p>
                        <p><strong>Description:</strong> <span id="modalDescription"></span></p>
                    </div>
                </div>
                <div class="flex justify-end p-4">
                    <button onclick="closeModal()" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End of form input -->

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script>
    const bookings = @json($panols); // Get existing bookings for the room

document.getElementById('date').addEventListener('change', function() {
    const selectedDate = this.value;
    const selectedRoom = document.getElementById('room').value;

    // Clear previous options
    document.getElementById('start_time').innerHTML = '';
    document.getElementById('end_time').innerHTML = '';

    // Filter bookings for the selected room and date
    const conflicts = bookings.filter(booking =>
        booking.date === selectedDate && booking.room === selectedRoom
    );

    // Populate start time dropdown
    const allTimes = generateTimeOptions(); // Function to generate all time options (you need to implement this)

    allTimes.forEach(time => {
        // If there's a conflict, disable the start time
        if (!conflicts.some(booking => booking.start_time === time)) {
            const option = document.createElement('option');
            option.value = time;
            option.textContent = time;
            document.getElementById('start_time').appendChild(option);
        }
    });

    // Populate end time dropdown (this will depend on your requirements)
    // Make sure to implement similar logic to check for end time conflicts based on start_time selection
});

function generateTimeOptions() {
    const times = [];
    // Generate a list of times from your desired range (e.g., 8:00 AM to 5:00 PM)
    for (let hour = 8; hour < 18; hour++) {
        for (let minute = 0; minute < 60; minute += 30) { // Assuming 30-minute intervals
            const time = `${hour}:${minute < 10 ? '0' : ''}${minute}`;
            times.push(time);
        }
    }
    return times;
}
    function openModal(booking) {
        document.getElementById("modalStaffName").innerText = booking.staff_name;
        document.getElementById("modalStaffId").innerText = booking.staff_id;
        document.getElementById("modalStaffDepartment").innerText = booking.staff_department;
        document.getElementById("modalRoom").innerText = booking.room;
        document.getElementById("modalDate").innerText = booking.date;
        document.getElementById("modalStartTime").innerText = booking.start_time;
        document.getElementById("modalEndTime").innerText = booking.end_time;
        document.getElementById("modalMeetingType").innerText = booking.meeting_type;
        document.getElementById("modalDescription").innerText = booking.description;

        document.getElementById("detailModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("detailModal").classList.add("hidden");
    }
</script>
@endsection
