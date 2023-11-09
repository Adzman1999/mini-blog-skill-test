<x-layout>
    @unless (count($blogs) == 0)
        @foreach ($blogs as $blog)
            <x-card class="p-10 max-w-lg mx-auto mt-5">
                <header class="text-start mb-3">
                    <h1 class="text-2xl font-bold mb-1 capitalize">{{ $blog->title }}</h1>
                </header>
                <h2>{{ $blog->content }}</h2>
                <div class="flex gap-1 items-align">
                    <h2>Date:</h2>
                    <h2>{{ \Carbon\Carbon::parse($blog->create_at)->format('jS \of F Y h:i:s A') }}</h2>
                </div>

                <hr class="mt-3 mb-3" />
                <div class="flex items-aligns gap-2">
                    <form method="POST" action="/blogs/{{ $blog->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-[#C62828] rounded-sm text-white px-5 py-1" type="submit">DELETE</button>
                    </form>

                    <a class="bg-[#2C7930] rounded-sm text-white px-5 py-1" href="/blogs/{{ $blog->id }}/edit">EDIT</a>
                </div>
            </x-card>
        @endforeach
    @else
        <x-card class="p-10 max-w-lg mx-auto mt-5">
            <header class="text-center mb-3">
                <h1 class="text-2xl font-bold mb-1 text-[#C62828]">NO BLOG FOUND</h1>
            </header>

        </x-card>
    @endunless
    <x-card class="p-10 max-w-lg mx-auto mt-4">
        <a class="bg-[#2196F3] rounded-sm text-white px-5 py-1" href="{{ route('blogs.create') }}">CREATE NEW
            POST</a>
    </x-card>

</x-layout>
