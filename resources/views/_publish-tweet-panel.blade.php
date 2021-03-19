<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            class="w-full p-4"
            placeholder="What's up doc?"
            required

        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src={{ current_user()->avatar }}
                alt=""
                width="50"
                height="50"
                class="rounded-full mr-2">
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-10 text-sm h-10 text-white"
                autofocus
            >
                Tweet-a-roo!
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
