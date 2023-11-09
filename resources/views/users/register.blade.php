<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-8">
        <header class="text-start mb-3">
            <h2 class="text-2xl font-bold uppercase mb-1">Registration</h2>
            <P> See the Registration Rules</P>
        </header>

        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">

                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="username"
                    value="{{ old('username') }}" placeholder="Enter username" />

                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ old('email') }}" placeholder="Enter Email" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                    value="{{ old('password') }}" placeholder="Enter Password " />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
                    value="{{ old('password_confirmation') }}" placeholder="Comfirm Password " />

                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-1">
                <button class="bg-[#26A69A] text-white rounded py-2 px-4">
                    REGISTER
                </button>
                <div class="flex gap-2 items-align mt-1">
                    <p>Return to the</p>
                    <a href="{{ route('login') }}" class="text-[#FFB061]">LOGIN PAGE</a>
                </div>

            </div>

        </form>
    </x-card>
</x-layout>
