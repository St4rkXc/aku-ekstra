@extends('layouts.app')
@section('content')
    {{-- Code starts here --}}
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content bg-[#F3F3F3] ">
            {{-- ? Page Content --}}
            <div class="w-full px-8 py-4"> {{-- ? Main Container --}}
                <header class="w-full">
                    <div class="flex gap-4 items-center">
                        <label for="my-drawer-2" class="mybutton-primary drawer-button rounded-[6px] lg:hidden p-3 flex justify-center items-center"><span class="solar-widget text-white text-2xl"></span></label>
                        <p class="text-text text-2xl lg:text-3xl font-bold">Robotics</p>
                        <div class="hidden lg:flex flex-col  ">
                            <p class="text-text/60 text-xs">12:00 Pm</p> {{-- Waktu --}}
                            <p class="text-text/60 text-xs">Friday, 16 December 2023</p> {{-- Date --}}
                        </div>
                    </div>
                </header>
                {{-- * Uppersection --}}
                <div class="flex flex-col 2xl:flex-row gap-4 mt-6">
                    {{-- * Attendance --}}
                    <div class="bg-white rounded-sm py-12 px-4 w-full 2xl:w-[35%] flex justify-center items-center">
                        <div class="flex flex-col items-center gap-8">
                            <p class="text-primary text-xl font-bold">Today's Attendance</p>
                            <div class="flex flex-col md:flex-row justify-evenly items-center gap-12 w-full ">
                                <div class="flex flex-col items-center">
                                    <p class="text-3xl text-text font-bold">24</p>
                                    <p class="text-xs text-text/50 font-semibold">Present</p>
                                </div>
                                <div class="flex flex-col items-center">
                                    <p class="text-3xl text-text font-bold">24</p>
                                    <p class="text-xs text-text/50 font-semibold">Leave Req.</p>
                                </div>
                                <div class="flex flex-col items-center">
                                    <p class="text-3xl text-text font-bold">24</p>
                                    <p class="text-xs text-text/50 font-semibold">Unknown</p>
                                </div>
                            </div>
                            <div class="">
                                <a href="/attendance" class="mybutton-primary rounded-dmd flex justify-center gap-2"><span class="ic-plus text-xl"></span>Add Attendance</a>
                            </div>
                        </div>
                    </div>
                    {{-- * Chart --}}
                    <div class="bg-white rounded-sm p-8 w-full 2xl:w-[65%]">
                        <div class="flex flex-col md:flex-row justify-between items-center">
                            <p class="text-primary text-lg md:text-xl font-bold">Attendance Frequency</p>
                            <select id="timeframeSelect" class="select bg-transparent focus:outline-none focus:border-none font-bold">
                                <option value="month" selected>This Month</option>
                                <option value="week">This Week</option>
                            </select>
                        </div>
                        <div class="mt-4 h-[450px] 2xl:h-[320px]">
                            <canvas id="attendanceChart" class=" h-full "></canvas>
                        </div>
                    </div>
                </div>
                <div class="mt-7 p-8 bg-white rounded-sm max-h-[1000px] ">
                    <div class="flex flex-col xl:flex-row justify-between gap-4">
                        <div class="flex gap-2 ">
                            <input type="text" class="bg-[#F1F1F5] rounded-[12px] w-full xl:w-96 py-3 px-4 placeholder:text-xxs font-medium focus:outline-none" placeholder="Search Name">
                            <button class="flex justify-center items-center mybutton-primary p-4 rounded-dmd"> Clear </button>
                        </div>
                        <button class="mybutton-primary rounded-dmd flex justify-center items-center gap-3"onclick="student_add.showModal()"><span class="ic-plus text-base"></span> Add Student</button>
                    </div>
                    <div class="overflow-x-auto mt-8 max-h-[800px]">
                        <table class=" w-full table table-pin-rows table-pin-cols table-xs lg:table-lg">
                            <thead class="">
                                <tr class="text-left" ">
                                    <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100 ">Number</th>
                                    <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100">Student Name</th>
                                    <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100">Date Joined</th>
                                    <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100">Points</th>
                                    <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100 ">Actions</th>
                                </tr>
                            </thead>
                            <tbody> {{-- ? Tabel Data --}}
                                <tr class="border-b border-t-0">
                                    <td class="p-4 text-text">1</td>
                                    <td class="p-4 text-text">Alice Smith</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">2</td>
                                    <td class="p-4 text-text">Dione Stark</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">2</td>
                                    <td class="p-4 text-text">Dione Stark</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">2</td>
                                    <td class="p-4 text-text">Dione Stark</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">2</td>
                                    <td class="p-4 text-text">Dione Stark</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">2</td>
                                    <td class="p-4 text-text">Dione Stark</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">2</td>
                                    <td class="p-4 text-text">Dione Stark</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">2</td>
                                    <td class="p-4 text-text">Dione Stark</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">2</td>
                                    <td class="p-4 text-text">Dione Stark</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">2</td>
                                    <td class="p-4 text-text">Dione Stark</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 text-text">3</td>
                                    <td class="p-4 text-text">Ayam Kambing</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="p-4 text-text">4</td>
                                    <td class="p-4 text-text">Alice Smith</td>
                                    <td class="p-4 text-text">2022-10-16</td>
                                    <td class="p-4 text-text">100</td>
                                    <td class="p-4 flex space-x-2">
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center">
                                            <div class="solar-eye text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex justify-center items-center" onclick="student_edit.showModal()"">
                                            <div class="solar-edit text-xl"></div>
                                        </button>
                                        <button class="p-2 rounded bg-red-100 text-red-600 hover:bg-red-200 flex justify-center items-center">
                                            <div class="solar-delete text-xl"></div>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- ? Drawer --}}
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="menu bg-white min-h-full w-[350px] p-8">
                <div class="flex gap-4 items-center">
                    <img src="{{ asset('Images/logo.png') }}" class="h-10 w-10" alt="">
                    <p class="text-text text-2xl font-bold">Gastix</p>
                </div>
                {{-- ? Classroom Section --}}
                <div class="flex justify-between items-center mt-12">
                    <p class="text-text/80 font-black text-xs">Classroom</p>
                    <div class="dropdown dropdown-left ">
                        <div tabindex="0" role="button"
                            class=" px-4 rounded-[4px] py-2 bg-gray-200 w-fit h-fit flex items-center justify-center active:bg-primary active:text-white duration-200   "><span
                                class="solar-menudots text-base p-0 m-0"></span></div>
                        <ul tabindex="0"
                            class="dropdown-content menu bg-base-100 rounded-[8px] z-[1] w-60 p-4 shadow-lg space-y-2 ">
                            <li><a class="p-4 justify-center text-text font-bold"onclick="classroom_edit.showModal()">Edit Classroom</a></li>
                            <li><a class="p-4 bg-primary text-white hover:bg-primary justify-center font-bold"
                                    onclick="classroom_add.showModal()""><span class="ic-plus text-base"></span>Add
                                    Classroom</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col pl-1 space-y-2 w-full mt-6">
                    <a href="" class="sidebar-classroom hover:bg-primary/90">Robotics</a>
                    <a href="" class="sidebar-classroom bg-transparent hover:bg-gray-200 text-text">Web Development</a>
                    <a href="" class="sidebar-classroom bg-transparent hover:bg-gray-200 text-text">Animation</a>
                </div>
            </div>
        </div>
    </div>
    {{-- ? ------------------------------------ Modal ------------------------------------ --}}
    {{-- * Modal Add Classroom --}}
    <dialog id="classroom_add" class="modal">
        <div class="modal-box">
            <h3 class="text-base font-bold text-center">Add Classroom</h3>
            <form action="" class="mt-4" id="addclassroomform">
                <input type="text" class="w-full modal-input" placeholder="Enter Classroom Name" required> {{-- Add Classroom input --}}
                <button class="mybutton-primary w-full mt-4 rounded-[6px]">Add Classroom</button>
            </form>
            {{-- ? Modal Close button --}}
            <form method="dialog">
                <button class="mybutton-secondary rounded-[6px] w-full mt-2" id="addclassroomclose">Cancel</button>
            </form>
        </div>
    </dialog>
    {{-- * Modal Edit Classroom --}}
    <dialog id="classroom_edit" class="modal">
        <div class="modal-box">
            <h3 class="text-base font-bold text-center">Edit Classroom Name</h3>
            <form action="" class="mt-4" id="editclassroomform">
                <input type="text" class="w-full modal-input" placeholder="Enter New Classroom Name" required> {{-- Change Classroom name input --}}
                <button class="mybutton-primary w-full mt-4 rounded-[6px]">Rename Classroom</button>
            </form>
            {{-- ? Modal Close button --}}
            <form method="dialog" >
                <button class="mybutton-secondary rounded-[6px] w-full mt-2" id="editclassroomclose">Cancel</button>
            </form>
        </div>
    </dialog>
    {{-- * Modal Add Studnet --}}
    <dialog id="student_add" class="modal">
        <div class="modal-box">
            <h3 class="text-base font-bold text-center">Add Student</h3>
            <form action="" class="mt-4" id="addstudentform">
                <p class="text-xxs text-text/60 font-bold mb-1">Name</p>
                <input type="text" class="w-full modal-input mb-4" placeholder="Student Name" required> {{-- Student Name input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Student Id Number</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Student id Number" required> {{-- Student Name input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Phone Number</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Phone Number" required> {{-- Student Name input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Date Joined</p>
                <input type="date" class="w-full modal-input mb-4" placeholder="Date Joined" required> {{-- Student Name input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Points</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Points" required> {{-- Student Name input --}}
                <button class="mybutton-primary w-full mt-4 rounded-[6px]" type="submit">Add Student</button>
                {{-- <button class="mybutton-secondary w-full mt-4 rounded-[6px]" type="reset">Add Student</button> --}}
            </form>
            {{-- ? Modal Close button --}}
            <form method="dialog" >
                <button class="mybutton-secondary rounded-[6px] w-full mt-2" id="addstudentclose" ">Cancel</button>
            </form>
        </div>
    </dialog>
    {{-- * Modal Edit Studnet --}}
    <dialog id="student_edit" class="modal">
        <div class="modal-box">
            <h3 class="text-base font-bold text-center">Edit Student</h3>
            <form action="" class="mt-4" id="editstudentform">
                <p class="text-xxs text-text/60 font-bold mb-1">Name</p>
                <input type="text" class="w-full modal-input mb-4" placeholder="Student Name" > {{-- Student Name input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Student Id Number</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Student id Number" > {{-- Student Name input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Phone Number</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Phone Number" > {{-- Student Name input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Date Joined</p>
                <input type="date" class="w-full modal-input mb-4" placeholder="Date Joined" > {{-- Student Name input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Points</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Points" > {{-- Student Name input --}}
                <button class="mybutton-primary w-full mt-4 rounded-[6px]" type="submit">Add Student</button>
                {{-- <button class="mybutton-secondary w-full mt-4 rounded-[6px]" type="reset">Add Student</button> --}}
            </form>
            {{-- ? Modal Close button --}}
            <form method="dialog" >
                <button class="mybutton-secondary rounded-[6px] w-full mt-2" id="editstudentclose" ">Cancel</button>
            </form>
        </div>
    </dialog>
    
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const ctx = document.getElementById("attendanceChart").getContext("2d");
            const monthData = {
                labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
                data: [300, 400, 350, 500]
            };
            const weekData = {
                labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                data: [70, 90, 113, 95, 132, 103, 97]
            };
            
            const attendanceChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: monthData.labels,
                    datasets: [
                        {
                            label: "Attendance",
                            data: monthData.data,
                            borderColor: "rgba(42, 94, 220, 1)",
                            backgroundColor: "rgba(42, 94, 220, 0.2)",
                            borderWidth: 2,
                            tension: 0.2,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(42, 94, 220, 1)",
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: "bottom",
                        },
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false,
                            },
                        },
                        y: {
                            ticks: {
                                maxTicksLimit: 5,
                            },
                            grid: {
                                display: true,
                                drawBorder: false,
                            },
                            beginAtZero: true,
                        },
                    },
                },
            });
        
            function updateChartData(timeframe) {
                if (timeframe === "month") {
                    attendanceChart.data.labels = monthData.labels;
                    attendanceChart.data.datasets[0].data = monthData.data;
                } else {
                    attendanceChart.data.labels = weekData.labels;
                    attendanceChart.data.datasets[0].data = weekData.data;
                }
                attendanceChart.update();
            }
        
            document.getElementById("timeframeSelect").addEventListener("change", (event) => {
                updateChartData(event.target.value);
            });
        });
        </script>
@endsection



