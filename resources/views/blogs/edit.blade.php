<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-start mb-3">
            <h2 class="text-2xl font-bold uppercase mb-1">Edit Post</h2>
        </header>

        <form method="POST" action="/blogs/{{ $blog->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-sm mb-2">Enter New Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{ $blog->title }}" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="content" class="inline-block text-sm mb-2">Enter New Content</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="content"
                    value="{{ $blog->content }}" placeholder="Enter Content" />

                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-2">
                <button class="bg-[#26A69A] text-white rounded py-2 px-4">
                    SAVE
                </button>


            </div>
        </form>
    </x-card>
</x-layout>

<script>
    const inputFields = document.querySelectorAll('input[type="text"]');
    inputFields.forEach(inputField => {
        inputField.addEventListener('focus', () => {
            inputField.parentNode.querySelector('label').classList.add('text-[#26A69A]');
        });
        inputField.addEventListener('blur', () => {
            if (!inputField.value) {
                inputField.parentNode.querySelector('label').classList.remove('text-[#26A69A]');
            }
        });
    });
</script>
