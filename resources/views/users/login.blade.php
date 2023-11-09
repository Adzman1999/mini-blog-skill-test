<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-8">
        <header class="text-start mb-3">
            <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
        </header>

        <form method="POST" action="/users/authenticate">
            @csrf

            <div class="mb-6">
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ old('email') }}" placeholder="Enter Email" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                    value="{{ old('password') }}" placeholder="Enter Password" />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <div class="mb-2 flex gap-2 items-align">
                    <button type="submit" class="bg-[#26A69A] text-white rounded py-2 px-4">
                        LOGIN
                    </button>
                    <a type="submit" class="bg-[#26A69A] text-white rounded py-2 px-4 cursor-pointer"
                        href="{{ route('register') }}">
                        REGISTER
                    </a>
                </div>
                <p>Currently logged out</p>
            </div>
        </form>
    </x-card>
</x-layout>
