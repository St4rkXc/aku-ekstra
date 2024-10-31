@extends('layouts.app')
@section('content')
    {{-- Code starts here --}}
    <x-navbar></x-navbar>
    <header class="w-screen h-screen pt-28 px-4">
        <div
            class="w-full h-full rounded-lg flex flex-col justify-center items-center space-y-4 mx-auto "style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('Images/Hero.png') }}) center center / cover no-repeat;">
            <p class="text-5xl text-white font-bold w-full md:w-3/4 text-center mx-auto">Manage Extraculicular With Gastix
            </p>
            <div class="flex space-x-3 mx-auto">
                <a href="#" class="mybutton-primary ">Get Started</a>
                <a href="#" class="mybutton-secondary bg-white ">Watch Demo</a>
            </div>
        </div>
    </header>
    <section id="about" class="container mx-auto py-[100px]">
        <div class="flex justify-between">
            <div class="flex flex-col max-w-[45%]">
                <p class="h1text">What Makes Us <span class="text-primary">Best?</span></p>
                <p class="font-normal text-xs text-sectext/80">Italic star duplicate italic library plugin bold. Stroke
                    rectangle ellipse content link star component comment ellipse. </p>
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
                    <div
                        class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45">
                    </div>
                </div>
                <div class="flex flex-col">
                    <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Enhanced Customer
                        Relationship</p>
                    <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Group clip frame plugin
                        mask. Object export text reesizing background scale frame.</p>
                </div>
            </div>
            {{-- Card 2 --}}
            <div class="uppercard group">
                <div class="flex justify-between items-center">
                    <div class="solar-bolt text-4xl text-primary group-hover:text-white duration-200"></div>
                    <div
                        class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45">
                    </div>
                </div>
                <div class="flex flex-col">
                    <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Fully Automate Work
                        System</p>
                    <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Team select thumbnail
                        image select. List pencil vertical layout flatten. Asset scale arrow.</p>
                </div>
            </div>
            {{-- Card 3 --}}
            <div class="uppercard group">
                <div class="flex justify-between items-center">
                    <div class="solar-layer text-4xl text-primary group-hover:text-white duration-200"></div>
                    <div
                        class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45">
                    </div>
                </div>
                <div class="flex flex-col">
                    <p class="text-xl text-text font-semibold group-hover:text-white duration-200">All-in-one Fully
                        Integrated System</p>
                    <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Arrange group slice
                        component move rotate style flatten. Selection opacity pixel stroke scrolling pen fill.</p>
                </div>
            </div>
            {{-- Card 4 --}}
            <div class="uppercard group">
                <div class="flex justify-between items-center">
                    <div class="solar-clipboardtext text-4xl text-primary group-hover:text-white duration-200"></div>
                    <div
                        class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45">
                    </div>
                </div>
                <div class="flex flex-col">
                    <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Automated Report
                        Generation</p>
                    <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Schedule automated
                        report generation. Customize report content and delivery options.</p>
                </div>
            </div>
            {{-- Card 5 --}}
            <div class="uppercard group">
                <div class="flex justify-between items-center">
                    <div class="solar-courseup text-4xl text-primary group-hover:text-white duration-200"></div>
                    <div
                        class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45">
                    </div>
                </div>
                <div class="flex flex-col">
                    <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Efficient Data Analysis
                    </p>
                    <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Graph generate chart
                        analytics dashboard. Data export visualization insights trends.</p>
                </div>
            </div>
            {{-- Card 6 --}}
            <div class="uppercard group">
                <div class="flex justify-between items-center">
                    <div class="solar-clipboardcheck text-4xl text-primary group-hover:text-white duration-200"></div>
                    <div
                        class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45">
                    </div>
                </div>
                <div class="flex flex-col">
                    <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Streamlined Task
                        Management</p>
                    <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Sort tasks by priority,
                        due date, and assignees. Filter tasks by status and tags.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="system" class="py-[100px]">
        <div class="container mx-auto">
            <div class="text-center flex flex-col justify-center items-center gap-2">
                <p class="h1text w-1/2 leading-tight">What We Provide To <span class="text-primary">Improve </span> School?
                </p>
                <p class="subh1text">Italic star duplicate italic library plugin bold. Stroke rectangle ellipse content link
                    star component comment ellipse. </p>
            </div>
            <div class="w-full h-[500px] mt-16">
                <img src="{{ asset('Images/Devider.png') }}" alt="" class="rounded-md hidden lg:block">
            </div>
            <div class="mt-14 grid grid-cols-2 gap-5">
                <div class="middlecard">
                    <p class="text-2xl text-text font-bold">For Student</p>
                    <p class="text-text/60 text-xs font-medium">Lorem ipsum dolor sit amet consectetur. Eget sit nec vel
                        fermentum dictum vel pharetra. Sem non pulvinar fames sagittis adipiscing tincidunt pellentesque. Eu
                        quam tempus sit pellentesque nisi eget. Viverra vestibulum sed molestie eu.</p>
                    <a href="#" class="flex items-center text-primary gap-2 group">
                        <p class="text-xs font-bold">Learn More</p>
                        <div
                            class="solar-arrow text-primary text-xl rotate-45 group-hover:rotate-0 group-hover:translate-x-2 duration-300 ">
                        </div>
                    </a>
                </div>
                <div class="middlecard">
                    <p class="text-2xl text-text font-bold">For K-12</p>
                    <p class="text-text/60 text-xs font-medium">Lorem ipsum dolor sit amet consectetur. Eget sit nec vel
                        fermentum dictum vel pharetra. Sem non pulvinar fames sagittis adipiscing tincidunt pellentesque. Eu
                        quam tempus sit pellentesque nisi eget. Viverra vestibulum sed molestie eu.</p>
                    <a href="#" class="flex items-center text-primary gap-2 group">
                        <p class="text-xs font-bold">Learn More</p>
                        <div
                            class="solar-arrow text-primary text-xl rotate-45 group-hover:rotate-0 group-hover:translate-x-2 duration-300 ">
                        </div>
                    </a>
                </div>
                <div class="middlecard">
                    <p class="text-2xl text-text font-bold">For Higher Ed</p>
                    <p class="text-text/60 text-xs font-medium">Lorem ipsum dolor sit amet consectetur. Eget sit nec vel
                        fermentum dictum vel pharetra. Sem non pulvinar fames sagittis adipiscing tincidunt pellentesque. Eu
                        quam tempus sit pellentesque nisi eget. Viverra vestibulum sed molestie eu.</p>
                    <a href="#" class="flex items-center text-primary gap-2 group">
                        <p class="text-xs font-bold">Learn More</p>
                        <div
                            class="solar-arrow text-primary text-xl rotate-45 group-hover:rotate-0 group-hover:translate-x-2 duration-300 ">
                        </div>
                    </a>
                </div>
                <div class="middlecard">
                    <p class="text-2xl text-text font-bold">For Proffesionals</p>
                    <p class="text-text/60 text-xs font-medium">Lorem ipsum dolor sit amet consectetur. Eget sit nec vel
                        fermentum dictum vel pharetra. Sem non pulvinar fames sagittis adipiscing tincidunt pellentesque. Eu
                        quam tempus sit pellentesque nisi eget. Viverra vestibulum sed molestie eu.</p>
                    <a href="#" class="flex items-center text-primary gap-2 group">
                        <p class="text-xs font-bold">Learn More</p>
                        <div
                            class="solar-arrow text-primary text-xl rotate-45 group-hover:rotate-0 group-hover:translate-x-2 duration-300 ">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="testi" class="py-[100px]">

    </section>

    <section id="faq" class="py-[100px]">
        <div class="container mx-auto grid grid-cols-2 gap-4">
            <div class="flex flex-col w-3/4"> 
                <p class="h2text  leading-tight">Frequently Asked <span class="text-primary">Question</span></p>
                <p class="subh1text mt-3">Layer text horizontal group outline. Pencil bullet pencil link outline asset variant. Line rectangle clip vertical layout. </p>
                <a href="#" class="mybutton-secondary mt-4 w-fit">More FAQ's</a>
            </div>
            <div class="space-y-4">
                <div class="bg-base-200 collapse collapse-plus rounded-sm border border-black/10 ">
                    <input type="radio" class="peer" name="my-accordion-1" />
                    <div class="collapse-title bg-base-100 peer-checked:bg-primary peer-checked:text-white text-primary flex items-center group space-x-2">
                        <div class="solar-user text-icon"></div>
                        <p class="text-text textpeer font-semibold text-xs">Who can use Gastix?</p>
                    </div>
                    <div class="collapse-content bg-base-100 peer-checked:bg-primary peer-checked:text-white">
                        <p class=" text-xs font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, soluta veritatis? Ea doloribus distinctio commodi officiis veniam tempore natus sed.</p>
                    </div>
                </div>
                <div class="bg-base-200 collapse collapse-plus rounded-sm border border-black/10 ">
                    <input type="radio" class="peer" name="my-accordion-1"  />
                    <div class="collapse-title bg-base-100 peer-checked:bg-primary peer-checked:text-white text-primary flex items-center group space-x-2">
                        <div class="solar-question text-icon"></div>
                        <p class="text-text textpeer font-semibold text-xs">What is Gastix?</p>
                    </div>
                    <div class="collapse-content bg-base-100 peer-checked:bg-primary peer-checked:text-white">
                        <p class=" text-xs font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim earum quia veniam officiis! Hic, omnis sequi repellat molestias asperiores quae illum temporibus odio impedit praesentium adipisci harum, aspernatur nam labore!</p>
                    </div>
                </div>
                <div class="bg-base-200 collapse collapse-plus rounded-sm border border-black/10 ">
                    <input type="radio" class="peer" name="my-accordion-1" />
                    <div class="collapse-title bg-base-100 peer-checked:bg-primary peer-checked:text-white text-primary flex items-center group space-x-2">
                        <div class="solar-userhandup text-icon"></div>
                        <p class="text-text textpeer font-semibold text-xs">Does Gastix user friendly?</p>
                    </div>
                    <div class="collapse-content bg-base-100 peer-checked:bg-primary peer-checked:text-white">
                        <p class=" text-xs font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, soluta veritatis? Ea doloribus distinctio commodi officiis veniam tempore natus sed.</p>
                    </div>
                </div>
                <div class="bg-base-200 collapse collapse-plus rounded-sm border border-black/10 ">
                    <input type="radio" class="peer" name="my-accordion-1" />
                    <div class="collapse-title bg-base-100 peer-checked:bg-primary peer-checked:text-white text-primary flex items-center group space-x-2">
                        <div class="solar-starfall text-icon"></div>
                        <p class="text-text textpeer font-semibold text-xs">Does Gastix automated with AI?</p>
                    </div>
                    <div class="collapse-content bg-base-100 peer-checked:bg-primary peer-checked:text-white">
                        <p class=" text-xs font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, soluta veritatis? Ea doloribus distinctio commodi officiis veniam tempore natus sed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cta">
        <div class="container mx-auto py-[10px]">
            <div class="w-full h-[500px] rounded-md flex flex-col justify-center items-center" style="background: url({{ asset('Images/CTA.png') }}) center center / cover no-repeat;"">
                <p class="text-3xl font-bold text-white w-3/4 text-center">All-in-One Tool for Hassle-Free Extracurricular Oversight!</p>
                <p class="subh1text text-base text-white mt-4">Say goodbye to paperwork and complex tracking. Everything you need for seamless management</p>
                <div class="flex justify-center items-center gap-4">
                    <a href="" class="mybutton-secondary bg-white mt-4">Get In Touch</a>
                    <a href="" class="mybutton-secondary bg-white mt-4">See Demo</a>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class=" w-screen px-4 flex justify-center items-center mt-32">
        <div class="w-full bg-primary rounded-md">
            <div class="container mx-auto pt-[100px] pb-[40px]">
                <div class="flex justify-between ">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('Images/logo-white.png') }}" alt="" class="w-16 h-16">
                            <p class="text-3xl text-white font-bold">Gastix</p>
                        </div>
                        <p class="text-base text-white font-normal mt-4">hello@gastixe.com</p>
                        <p class="text-base text-white/60 font-light mt-2">+1 (277) 826-4511</p>
                    </div>
                    <div class="flex justify-between gap-12">
                        <div class="flex flex-col">
                            <p class="text-base text-white font-bold">Navigate</p>
                            <li class="list-none mt-2 space-y-2 ">
                                <ul><a href="" class="footerlink">Home</a></ul>
                                <ul><a href="" class="footerlink">Demo</a></ul>
                                <ul><a href="" class="footerlink">Company</a></ul>
                                <ul><a href="" class="footerlink">Pricing</a></ul>
                                <ul><a href="" class="footerlink">Profile</a></ul>
                            </li>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-base text-white font-bold">System</p>
                            <li class="list-none mt-2 space-y-2 ">
                                <ul><a href="" class="footerlink">Dashboard</a></ul>
                                <ul><a href="" class="footerlink">Poppers</a></ul>
                                <ul><a href="" class="footerlink">Careers</a></ul>
                                <ul><a href="" class="footerlink">Documentation</a></ul>
                            </li>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-base text-white font-bold">Legal</p>
                            <li class="list-none mt-2 space-y-2 ">
                                <ul><a href="" class="footerlink">Terms of Services</a></ul>
                                <ul><a href="" class="footerlink">Privacy Policy</a></ul>
                                <ul><a href="" class="footerlink">Cookies Policy</a></ul>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="h-[1px] w-full bg-white/20 mt-20"></div>
                <div class="flex justify-center items-center">
                    <p class="text-xs text-white/60 mt-12">© 2022 ABC. All Rights Reserved. </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
