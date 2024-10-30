@extends('layouts.app')
@section('content')
{{-- Code starts here --}}
<x-navbar></x-navbar>
<header class="w-screen h-screen pt-28 px-4">
    <div class="w-full h-full rounded-xl flex flex-col justify-center items-center space-y-4 "style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('Images/Hero.png') }}) center center / cover no-repeat;">
        <p class="text-5xl text-white font-bold w-full md:w-3/4 text-center mx-auto">Manage Extraculicular With Gastix</p>
        <div class="flex space-x-3 mx-auto">
            <a href="#" class="mybutton-primary ">Get Started</a>
            <a href="#" class="mybutton-secondary bg-white ">Watch Demo</a>
        </div>
    </div>
</header>
<section id="about" class="container mx-auto py-[100px]">
    <div class="flex justify-between">
        <div class="flex flex-col max-w-[45%]">
            <p class="text-4xl text-sectext font-bold">What Makes Us <span class="text-primary">Best?</span></p>
            <p class="font-normal text-xs text-sectext/80">Italic star duplicate italic library plugin bold. Stroke rectangle ellipse content link star component comment ellipse. </p>
        </div>
        <div class="flex gap-x-4 justify-end items-center">
            <div class="flex flex-col w-1/4">
                <p class="text-3xl text-text font-semibold">02 mins</p>
                <p class="font-medium text-sectext">We are faster in payment services</p>
            </div>
            <div class="flex flex-col w-1/4">
                <p class="text-3xl text-text font-semibold">10%</p>
                <p class="font-medium text-sectext">Cashback in every transaction</p>
            </div>
            <div class="flex flex-col w-1/4">
                <p class="text-3xl text-text font-semibold">200%</p>
                <p class="font-medium text-sectext">We have massive success rate</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-5 mt-16">
        {{-- Card 1 --}}
        <div class="uppercard group">
            <div class="flex justify-between items-center">
                <div class="solar-usergroup text-4xl text-primary group-hover:text-white duration-200"></div>
                <div class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45"></div>
            </div>
            <div class="flex flex-col">
                <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Enhanced Customer Relationship</p>
                <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Group clip frame plugin mask. Object export text reesizing background scale frame.</p>
            </div>
        </div>
        {{-- Card 2 --}}
        <div class="uppercard group">
            <div class="flex justify-between items-center">
                <div class="solar-bolt text-4xl text-primary group-hover:text-white duration-200"></div>
                <div class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45"></div>
            </div>
            <div class="flex flex-col">
                <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Fully Automate Work System</p>
                <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Team select thumbnail image select. List pencil vertical layout flatten. Asset scale arrow.</p>
            </div>
        </div>
        {{-- Card 3 --}}
        <div class="uppercard group">
            <div class="flex justify-between items-center">
                <div class="solar-layer text-4xl text-primary group-hover:text-white duration-200"></div>
                <div class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45"></div>
            </div>
            <div class="flex flex-col">
                <p class="text-xl text-text font-semibold group-hover:text-white duration-200">All-in-one Fully Integrated System</p>
                <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Arrange group slice component move rotate style flatten. Selection opacity pixel stroke scrolling pen fill.</p>
            </div>
        </div>
        {{-- Card 4 --}}
        <div class="uppercard group">
            <div class="flex justify-between items-center">
                <div class="solar-clipboardtext text-4xl text-primary group-hover:text-white duration-200"></div>
                <div class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45"></div>
            </div>
            <div class="flex flex-col">
                <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Automated Report Generation</p>
                <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Schedule automated report generation. Customize report content and delivery options.</p>
            </div>
        </div>
        {{-- Card 5 --}}
        <div class="uppercard group">
            <div class="flex justify-between items-center">
                <div class="solar-courseup text-4xl text-primary group-hover:text-white duration-200"></div>
                <div class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45"></div>
            </div>
            <div class="flex flex-col">
                <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Efficient Data Analysis</p>
                <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Graph generate chart analytics dashboard. Data export visualization insights trends.</p>
            </div>
        </div>
        {{-- Card 6 --}}
        <div class="uppercard group">
            <div class="flex justify-between items-center">
                <div class="solar-clipboardcheck text-4xl text-primary group-hover:text-white duration-200"></div>
                <div class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45"></div>
            </div>
            <div class="flex flex-col">
                <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Streamlined Task Management</p>
                <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Sort tasks by priority, due date, and assignees. Filter tasks by status and tags.</p>
            </div>
        </div>
    </div>
</section>
@endsection