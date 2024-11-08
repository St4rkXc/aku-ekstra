<!DOCTYPE html>
<html lang="en" data-theme="mytheme">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    @vite('resources/css/iconify.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" href="{{ asset('Images/logo.png') }}">
    <style>
        html {
            scroll-behavior: smooth;
            font-family: Manrope;
            overflow-x: hidden
        }
    </style>
</head>

<body class="duration-300">
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content bg-[#F3F3F3] ">
            {{-- ? Page Content --}}
            @yield('content')
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
                <button class="mybutton-primary w-full mt-4 rounded-[6px]">Add Classroom</button> {{-- Add Classroom Button --}}
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
                <button class="mybutton-primary w-full mt-4 rounded-[6px]">Rename Classroom</button> {{-- Rename Button --}}
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
                <input type="number" class="w-full modal-input mb-4" placeholder="Student id Number" required> {{-- Student ID input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Phone Number</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Phone Number" required> {{-- Student Phone input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Date Joined</p>
                <input type="date" class="w-full modal-input mb-4" placeholder="Date Joined" required> {{-- Student Date input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Points</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Points" required> {{-- Student Points input --}}
                <button class="mybutton-primary w-full mt-4 rounded-[6px]" type="submit">Add Student</button> {{-- Add Student Button --}}
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
                <input type="number" class="w-full modal-input mb-4" placeholder="Student id Number" > {{-- Student ID input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Phone Number</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Phone Number" > {{-- Student Phone input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Date Joined</p>
                <input type="date" class="w-full modal-input mb-4" placeholder="Date Joined" > {{-- Student Date input --}}
                <p class="text-xxs text-text/60 font-bold mb-1">Points</p>
                <input type="number" class="w-full modal-input mb-4" placeholder="Points" > {{-- Student Points input --}}
                <button class="mybutton-primary w-full mt-4 rounded-[6px]" type="submit">Edit Student</button> {{-- Edit Confirmation Button --}}
            </form>
            {{-- ? Modal Close button --}}
            <form method="dialog" >
                <button class="mybutton-secondary rounded-[6px] w-full mt-2" id="editstudentclose" ">Cancel</button>
            </form>
        </div>
    </dialog>
    {{-- * Modal Delete Studnet --}}
    <dialog id="student_delete" class="modal">
        <div class="modal-box">
            <div class="flex gap-5 items-center">
                <div class="p-4 rounded-sm bg-red-100 text-red-500 flex justify-center items-center">
                    <div class="solar-delete text-[40px]"></div>
                </div>
                <div class="flex flex-col ">
                    <p class="text-base text-text font-semibold">Delete Student</p>
                    <p class="text-xs text-text/70 font-normal">Are you sure want to delete <Span>Alice Smith</Span>?</p> {{-- Sesuaiin sama student namenya --}}
                </div>
            </div>
            <div class="flex gap-2 mt-5 w-full"">
                <form action="" class="flex-1">
                    <button class="mybutton-secondary bg-red-200 text-red-500 w-full rounded-dsm">Delete</button> {{-- Delete acction button --}}
                </form>
                <form method="dialog" class="flex-1" >
                    <button class="mybutton-secondary rounded-dsm w-full ">Cancel</button>  {{-- ? Modal Close button --}}
                </form>
            </div>
        </div>
    </dialog>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@vite('resources/js/app.js')

</html>
