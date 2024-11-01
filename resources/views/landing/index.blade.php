@extends('layouts.app')
@section('content')
    {{-- Code starts here --}}
    <x-navbar></x-navbar>
    <header class="w-screen h-screen pt-28 pb-4 px-0  md:px-4">
        <div
            class="w-full h-full rounded-none  md:rounded-lg flex flex-col justify-center items-center space-y-4 mx-auto "style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('Images/Hero.png') }}) center center / cover no-repeat;">
            <p class="text-3xl  md:text-5xl text-white font-bold w-full md:w-3/4 text-center mx-auto">Manage Extraculicular With Gastix </p>
            <div class="flex flex-col md:flex-row gap-3 mx-auto">
                <a href="#" class="mybutton-primary ">Get Started</a>
                <a href="#" class="mybutton-secondary bg-white ">Watch Demo</a>
            </div>
        </div>
    </header>
    <section id="about" class="container mx-auto py-[100px] px-4 md:px-0 ">
        <div class="flex flex-col 2xl:flex-row justify-normal 2xl:justify-between gap-y-4 ">
            <div class="flex flex-col w-full 2xl:max-w-[45%]">
                <p class="h1text text-3xl lg:text-4xl text-center 2xl:text-start">What Makes Us <span class="text-primary">Best?</span></p>
                <p class="font-normal text-xs text-sectext/80 text-center 2xl:text-start">Italic star duplicate italic library plugin bold. Stroke
                    rectangle ellipse content link star component comment ellipse. </p>
            </div>
            <div class="hidden md:flex flex-row gap-x-4 justify-center 2xl:justify-end items-center">
                <div class="flex flex-col w-full md:w-1/4">
                    <p class="text-2xl xl:text-3xl text-text font-semibold">02 mins</p>
                    <p class="font-medium text-sectext">We are faster in payment services</p>
                </div>
                <div class="flex flex-col w-full md:w-1/4">
                    <p class="text-2xl  xl:text-3xl text-text font-semibold">10%</p>
                    <p class="font-medium text-sectext">Cashback in every transaction</p>
                </div>
                <div class="flex flex-col w-full md:w-1/4">
                    <p class="text-2xl  xl:text-3xl text-text font-semibold">200%</p>
                    <p class="font-medium text-sectext">We have massive success rate</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 mt-16">
            {{-- Card 1 --}}
            <div class="uppercard group">
                <div class="flex justify-between items-center">
                    <div class="solar-usergroup text-4xl text-primary group-hover:text-white duration-200"></div>
                    <div
                        class="solar-arrow text-2xl text-primary group-hover:text-white duration-200 group-hover:rotate-45">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
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
                <div class="flex flex-col gap-2">
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
                <div class="flex flex-col gap-2">
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
                <div class="flex flex-col gap-2">
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
                <div class="flex flex-col gap-2">
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
                <div class="flex flex-col gap-2">
                    <p class="text-xl text-text font-semibold group-hover:text-white duration-200">Streamlined Task
                        Management</p>
                    <p class="text-xs text-sectext font-normal group-hover:text-white duration-200">Sort tasks by priority,
                        due date, and assignees. Filter tasks by status and tags.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="system" class="py-[100px]">
        <div class="container mx-auto px-4 md:px-0">
            <div class="text-center flex flex-col justify-center items-center gap-2">
                <p class="h1text w-full xl:w-1/2 leading-tight">What We Provide To <span class="text-primary">Improve </span> School?
                </p>
                <p class="subh1text">Italic star duplicate italic library plugin bold. Stroke rectangle ellipse content link
                    star component comment ellipse. </p>
            </div>
            <div class="w-full h-[500px] mt-16 hidden md:block">
                <img src="{{ asset('Images/Devider.png') }}" alt="" class="rounded-md h-full ">
            </div>
            <div class="mt-14 grid grid-cols-1 lg:grid-cols-2 gap-5">
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
        <div class="container mx-auto px-4 md:px-0">
            <div class="flex flex-col lg:flex-row justify-between ">
                <div class="w-full lg:w-1/2">
                    <p class="h1text leading-tight text-center lg:text-start ">What They Say About <span class="text-primary">Us?</span></p>
                </div>
                <div class="w-full lg:w-[40%] flex flex-col gap-4">
                    <p class="subh1text text-center lg:text-start">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est corrupti quam iusto cupiditate illo aliquid fuga autem enim animi rerum.</p>
                    <a href="" class="mybutton-secondary hidden lg:inline-block w-fit">See All Testimonials</a>

                </div>
            </div>
            <div class="swiper mt-16">
                <div class="swiper-wrapper pb-12">
                    <div class="swiper-slide ">
                        <div class="testicard gap-12">
                            <img src="{{asset('Images/quote.png')}}" alt="" class="h-20 w-20">
                            <div class="flex flex-col gap-6">
                                <p class="italic font-medium text-text/80 text-xs">"Since we started using this platform, our team's efficiency has doubled. The automation features save us countless hours, and we can now focus on strategic initiatives rather than mundane tasks. Highly recommend!"</p>
                                <div class="flex gap-4 items-center">
                                    <div class=" w-12 h-12 rounded-full" style="background: url({{asset('Images/user1.jpg')}}) center center / cover no-repeat"></div>
                                    <div class="flex flex-col gap-1">
                                        <p class="text-text font-semibold ">Daniel Rahoel</p>
                                        <div class="flex gap-1">
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ? Card2 --}}
                    <div class="swiper-slide h-full ">
                        <div class="testicard gap-12">
                            <img src="{{asset('Images/quote.png')}}" alt="" class="h-20 w-20">
                            <div class="flex flex-col gap-6">
                                <p class="italic font-medium text-text/80 text-xs">“This software has been a game-changer for our business. The accuracy of data processing has eliminated errors that used to cost us dearly. We’ve streamlined our operations and improved our bottom line!”</p>
                                <div class="flex gap-4 items-center">
                                    <div class=" w-12 h-12 rounded-full" style="background: url({{asset('Images/user2.jpg')}}) center center / cover no-repeat"></div>
                                    <div class="flex flex-col gap-1">
                                        <p class="text-text font-semibold ">Toesny Flex</p>
                                        <div class="flex gap-1">
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ? Card 3 --}}
                    <div class="swiper-slide ">
                        <div class="testicard gap-12">
                            <img src="{{asset('Images/quote.png')}}" alt="" class="h-20 w-20">
                            <div class="flex flex-col gap-6">
                                <p class="italic font-medium text-text/80 text-xs">“I love how user-friendly the interface is. Onboarding was a breeze, and within days, we were already reaping the benefits of automated workflows. It's an invaluable tool for any growing team.”</p>
                                <div class="flex gap-4 items-center">
                                    <div class=" w-12 h-12 rounded-full" style="background: url({{asset('Images/user3.jpg')}}) center center / cover no-repeat"></div>
                                    <div class="flex flex-col gap-1">
                                        <p class="text-text font-semibold ">Rico Christ</p>
                                        <div class="flex gap-1">
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ? Card 4 --}}
                    <div class="swiper-slide ">
                        <div class="testicard gap-12">
                            <img src="{{asset('Images/quote.png')}}" alt="" class="h-20 w-20">
                            <div class="flex flex-col gap-6">
                                <p class="italic font-medium text-text/80 text-xs">"As a finance manager, accurate data is crucial. This system processes everything flawlessly, allowing us to make informed decisions quickly. I can’t imagine going back to our old ways!"</p>
                                <div class="flex gap-4 items-center">
                                    <div class=" w-12 h-12 rounded-full" style="background: url({{asset('Images/user4.jpg')}}) center center / cover no-repeat"></div>
                                    <div class="flex flex-col gap-1">
                                        <p class="text-text font-semibold ">Mohard Monuica</p>
                                        <div class="flex gap-1">
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ? Card 5 --}}
                    <div class="swiper-slide ">
                        <div class="testicard gap-12">
                            <img src="{{asset('Images/quote.png')}}" alt="" class="h-20 w-20">
                            <div class="flex flex-col gap-6">
                                <p class="italic font-medium text-text/80 text-xs">"What impressed me the most is the integration capabilities. Our existing tools work seamlessly with this platform, making it easy to transition without disrupting our workflow."</p>
                                <div class="flex gap-4 items-center">
                                    <div class=" w-12 h-12 rounded-full" style="background: url({{asset('Images/user5.jpg')}}) center center / cover no-repeat"></div>
                                    <div class="flex flex-col gap-1">
                                        <p class="text-text font-semibold ">Dione Stark</p>
                                        <div class="flex gap-1">
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                            <div class="solar-star text-xs text-primary"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </div> 
            <a href="" class="mybutton-secondary block w-fit mx-auto mt-12">See All Testimonials</a>
            </div>
        </div>
    </section>

    <section id="faq" class="py-[100px]">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6 px-4 md:px-0">
            <div class="flex flex-col w-full lg:w-3/4"> 
                <p class="h2text leading-tight text-center lg:text-start">Frequently Asked <span class="text-primary">Question</span></p>
                <p class="subh1text mt-3 text-center lg:text-start">Layer text horizontal group outline. Pencil bullet pencil link outline asset variant. Line rectangle clip vertical layout. </p>
                <a href="#" class="mybutton-secondary mt-4 w-fit hidden lg:inline-block">More FAQ's</a>
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
            <a href="#" class="mybutton-secondary mt-4 w-fit block mx-auto lg:hidden">More FAQ's</a>
        </div>
    </section>
    <section id="cta">
        <div class=" xl:container mx-4 xl:mx-auto py-[10px] ">
            <div class="w-full h-[600px]  md:h-[500px] rounded-md flex flex-col justify-center items-center p-4" style="background: url({{ asset('Images/CTA.png') }}) center center / cover no-repeat;"">
                <p class="text-xl lg:text-3xl font-bold text-white w-full  lg:w-3/4 text-center">All-in-One Tool for Hassle-Free Extracurricular Oversight!</p>
                <p class="subh1text text-xs lg:text-base text-white mt-4 text-center">Say goodbye to paperwork and complex tracking. Everything you need for seamless management</p>
                <div class="flex flex-col lg:flex-row justify-center items-center gap-4 mt-4">
                    <a href="" class="mybutton-secondary bg-white">Get In Touch</a>
                    <a href="" class="mybutton-secondary bg-white">See Demo</a>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class=" w-screen px-4 flex justify-center items-center mt-32">
        <div class="w-full bg-primary rounded-md">
            <div class="container mx-auto pt-[100px] pb-[40px] px-12 xl:px-0 ">
                <div class="flex flex-col lg:flex-row justify-between gap-y-12 ">
                    <div class="flex flex-col items-center">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('Images/logo-white.png') }}" alt="" class="w-16 h-16">
                            <p class="text-3xl text-white font-bold">Gastix</p>
                        </div>
                        <p class="text-base text-white font-normal mt-4">hello@gastixe.com</p>
                        <p class="text-base text-white/60 font-light mt-2">+1 (277) 826-4511</p>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-between gap-12">
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
                    <p class="text-xs text-white/60 mt-12 text-center">© 2022 ABC. All Rights Reserved. </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
