@extends('layouts.dashboard')
@section('content')
    {{-- Code starts here --}}
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
    
    
@endsection



