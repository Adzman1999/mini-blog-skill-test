@if (Route::has('login'))
    <div class="flex items-align justify-between bg-[#4267B2] p-4">
        <h1 class="text-white text-lg font-bold">MiniBlog</h1>
        @auth
            <div class="flex gap-3 items-align">
                <p class="text-white">Hi {{ auth()->user()->username }}!</p>
                <a href="{{ url('/') }}" class="font-semibold text-white">Home</a>
                <form class="inline hidden lg:block" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="font-semibold text-white">
                        Logout
                    </button>
                </form>
            </div>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-white">Login</a>
        @endauth
    </div>
@endif
