@extends('layouts.app')
@section('content')
    {{-- Code starts here --}}
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content bg-[#F3F3F3] ">
            {{-- ? Page Content --}}
            <div class="w-full px-8 py-8"> {{-- ? Main Container --}}
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

                <div class="flex gap-4 mt-6">
                    {{-- * Attendacne --}}
                    <div class="bg-white rounded-sm py-12 w-[35%] flex justify-center items-center">
                        <div class="flex flex-col items-center gap-8">
                            <p class="text-primary text-xl font-bold">Today's Attendance</p>
                            <div class="flex justify-between items-center gap-12">
                                <div class="flex flex-col items-center">
                                    <p class="text-3xl text-text font-bold">24</p>
                                    <p class="text-base text-text/50 font-semibold">Present</p>
                                </div>
                                <div class="flex flex-col items-center">
                                    <p class="text-3xl text-text font-bold">24</p>
                                    <p class="text-base text-text/50 font-semibold">Present</p>
                                </div>
                                <div class="flex flex-col items-center">
                                    <p class="text-3xl text-text font-bold">24</p>
                                    <p class="text-base text-text/50 font-semibold">Present</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <button class="mybutton-secondary rounded-dmd">View Attendance</button>
                                <button class="mybutton-primary rounded-dmd flex justify-center gap-2"><span class="ic-plus text-xl"></span>Add Attendance</button>
                            </div>
                        </div>
                    </div>
                    {{-- * Chart --}}
                    <div class="bg-white rounded-sm p-8 w-[65%]">
                        <div class="flex justify-between">
                            <p class="text-primary text-xl font-bold">Attendance Frequency</p>
                            <select id="timeframeSelect" class="select bg-transparent focus:outline-primary font-bold">
                                <option value="month" selected>This Month</option>
                                <option value="week">This Week</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <canvas id="attendanceChart" class="h-[320px]"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ? Drawer --}}
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="menu bg-base-100 min-h-full w-[350px] p-8">
                <!-- Sidebar content here -->
                <div class="flex gap-4 items-center">
                    <img src="{{ asset('Images/logo.png') }}" class="h-10 w-10" alt="">
                    <p class="text-text text-2xl font-bold">Gastix</p>
                </div>
                {{-- ? Classroom Section --}}
                <div class="flex justify-between items-center mt-12">
                    <p class="text-text/80 font-black text-xs">Classroom</p>
                    <div class="dropdown dropdown-left ">
                        <div tabindex="0" role="button"
                            class=" px-4 rounded-[4px] py-2 bg-gray-200 w-fit h-fit flex items-center justify-center"><span
                                class="solar-menudots text-base p-0 m-0"></span></div>
                        <ul tabindex="0"
                            class="dropdown-content menu bg-base-100 rounded-[8px] z-[1] w-60 p-4 shadow-lg space-y-2 ">
                            <li><a class="p-4 justify-center text-text font-bold">Edit Classroom</a></li>
                            <li><a class="p-4 bg-primary text-white hover:bg-primary justify-center font-bold"
                                    onclick="classroom_add.showModal()""><span class="ic-plus text-base"></span>Add
                                    Classroom</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col pl-2 space-y-2 w-full mt-6">
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
            <form method="dialog mt-2">
                <button class="mybutton-secondary rounded-[6px] w-full mt-2">Cancel</button>
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
                            label: "Bookings",
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

{{-- ! Ini Button buat buka drawwernya --}}

