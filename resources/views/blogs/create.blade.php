<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-start mb-3">
            <h2 class="text-2xl font-bold uppercase mb-1">Create a Post!</h2>
        </header>

        <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{ old('title') }}" placeholder="Enter Title" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="content"
                    value="{{ old('content') }}" placeholder="Enter Content" />

                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-2">
                <button class="bg-[#26A69A] text-white rounded py-2 px-4">
                    POST
                </button>


            </div>
        </form>
    </x-card>
</x-layout>
