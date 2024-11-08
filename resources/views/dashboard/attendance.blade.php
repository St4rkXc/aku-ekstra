@extends('layouts.app')
@section('content')
    {{-- Code starts here --}}
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content bg-[#F3F3F3] ">
            {{-- ? Page Content --}}
            <div class="w-full px-8 py-4">
                <div class="bg-white rounded-sm p-8">
                    <div class="flex items-center gap-4">
                        <a href="/dashboard" class="text-primary p-0 m-0 solar-close  text-2xl"></a>
                        <p class="text-2xl font-bold text-text">Edit Attendance</p>
                    </div>
                    <div class="flex justify-between mt-8">
                        <div class="space-x-6 flex justify-center items-center">
                            <p class="text-xl text-text font-semibold">Friday, 16 December 2024</p>
                            <button class="mybutton-secondary rounded-dmd font-bold text-xs flex justify-center items-center gap-2 p-3 px-4 group"><span class="solar-calendar text-2xl text-primary group-active:text-white duration-200 "></span>Change Date</button>
                        </div>
                        <div>
                            <input type="text" class="bg-[#F1F1F5] rounded-[12px] w-full md:w-96 h-full py-3 px-4 placeholder:text-xxs font-medium focus:outline-none" placeholder="Search Name">
                        </div>
                    </div>
                    <div class="mt-8">
                        <div class="overflow-x-auto">
                            <table class="w-full table table-pin-rows table-pin-cols table-lg">
                                <thead class="">
                                    <tr class="text-left" ">
                                        <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100 ">Number</th>
                                        <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100">Student Name</th>
                                        <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100">Attendance</th>
                                        <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100">Present</th>
                                        <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100 ">Leave</th>
                                        <th class="p-4 py-5 font-semibold text-text text-xxs bg-blue-100 ">Unknown</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-4 text-text">1</td>
                                        <td class="p-4 text-text">Alexandra Delacruz</td>
                                        <td class="p-4 text-text">Present</td>
                                        <form action="">
                                            <td class=""><input type="radio"  value="present"  name="data-1" class="checkbox rounded-dsm checkbox-primary text-white "  /></td>
                                            <td class=""><input type="radio" value="leave" name="data-1"  class="checkbox rounded-dsm checkbox-warning text-white " /></td>
                                            <td class=""><input type="radio" value="unknown"  name="data-1"  class="checkbox rounded-dsm checkbox-error text-white " /></td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <td class="p-4 text-text">1</td>
                                        <td class="p-4 text-text">Alexandra Delacruz</td>
                                        <td class="p-4 text-text">Present</td>
                                        <form action="">
                                            <td class=""><input type="radio"  value="present"  name="data-1" class="checkbox rounded-dsm checkbox-primary text-white "  /></td>
                                            <td class=""><input type="radio" value="leave" name="data-1"  class="checkbox rounded-dsm checkbox-warning text-white " /></td>
                                            <td class=""><input type="radio" value="unknown"  name="data-1"  class="checkbox rounded-dsm checkbox-error text-white " /></td>
                                        </form>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
            <form action="" class="mt-4">
                <input type="text" class="w-full modal-input" placeholder="Enter Classroom Name" required> {{-- Add Classroom input --}}
                <button class="mybutton-primary w-full mt-4 rounded-[6px]">Add Classroom</button>
            </form>
            {{-- ? Modal Close button --}}
            <form method="dialog">
                <button class="mybutton-secondary rounded-[6px] w-full mt-2">Cancel</button>
            </form>
        </div>
    </dialog>
    {{-- * Modal Student Classroom --}}
    <dialog id="classroom_edit" class="modal">
        <div class="modal-box">
            <h3 class="text-base font-bold text-center">Edit Classroom Name</h3>
            <form action="" class="mt-4">
                <input type="text" class="w-full modal-input" placeholder="Enter New Classroom Name" required> {{-- Add Student input --}}
                <button class="mybutton-primary w-full mt-4 rounded-[6px]">Rename Classroom</button>
            </form>
            {{-- ? Modal Close button --}}
            <form method="dialog" >
                <button class="mybutton-secondary rounded-[6px] w-full mt-2">Cancel</button>
            </form>
        </div>
    </dialog>
    
@endsection



