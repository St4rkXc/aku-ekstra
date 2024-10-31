<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <nav class="fixed w-screen z-40 px-4 mt-4">
		<div class="navbar bg-transparent  mx-auto w-full border bg-white border-black/15 rounded-md px-8 py-4">
			<div class="navbar-start flex items-center space-x-4">
                <div class="dropdown dropdown-s">
					<div tabindex="0" role="button" class="btn bg-white border text-primary lg:hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
						</svg>
					</div>
					<ul tabindex="0"
						class="menu menu-sm dropdown-content rounded-box z-[1] mt-3 w-72 bg-primary p-2 shadow-xl border border-white/20 space-y-2">
						<li><a href="" class="text-white font-semibold hover:bg-base-100/30 duration-500 p-4">Home</a></li>
						<li><a href="#about" class="text-white font-semibold hover:bg-base-100/30 duration-500 p-4">About</a></li>
						<li><a href="#gallery" class="text-white font-semibold hover:bg-base-100/30 duration-500 p-4">Gallery</a></li>
						<li><a href="#book" class="text-white font-semibold hover:bg-base-100/30 duration-500 p-4">Ticket</a></li>
					</ul>
				</div>
				<div class="flex items-center">
                    <img src="{{ asset('Images/logo.png') }}" alt="" class="w-8 h-8">
                    <a class="text-text text-xl ml-5 font-bold">Gastix</a>
                </div>
			</div>
            <div class="navbar-center flex space-x-6">
                <a class="hidden lg:block text-text font-semibold" href="/">Home</a>
                <a class="hidden lg:block text-text navbar-link" href="#"">Product</a>
                <a class="hidden lg:block text-text navbar-link" href="#gallery">Company</a>
                <a class="hidden lg:block text-text navbar-link" href="#book">Features</a>
                <a class="hidden lg:block text-text navbar-link" href="#book">Profile</a>
            </div>
			<div class="navbar-end flex space-x-3">
                <a href="#" class="mybutton-primary hidden lg:block">Sign Up</a>
                <a href="#" class="mybutton-secondary hidden lg:block">Login</a>
			</div>
		</div>
	</nav>
</div>