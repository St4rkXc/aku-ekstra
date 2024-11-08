@extends('layouts.dashboard')
@section('content')
    {{-- Code starts here --}}
    <div class="w-full px-8 py-4">
        <div class="bg-white rounded-sm p-8">
            <div class="flex items-center gap-4">
                <a href="/dashboard" class="text-primary p-0 m-0 solar-close  text-2xl"></a> {{-- back button --}}
                <p class="text-2xl font-bold text-text">Edit Attendance</p>
            </div>
            <div class="flex justify-between mt-8">
                <div class="space-x-6 flex justify-center items-center">
                    <p class="text-xl text-text font-semibold">Friday, 16 December 2024</p>
                    <button class="mybutton-secondary rounded-dmd font-bold text-xs flex justify-center items-center gap-2 p-3 px-4 group"><span class="solar-calendar text-2xl text-primary group-active:text-white duration-200 "></span>Change Date</button> {{-- Change date button --}}
                </div>
                <div>
                    <input type="text" class="bg-[#F1F1F5] rounded-[12px] w-full md:w-96 h-full py-3 px-4 placeholder:text-xxs font-medium focus:outline-none" placeholder="Search Name"> {{-- Search name input --}}
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
    
@endsection



