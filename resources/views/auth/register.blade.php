<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-2">{{ __('Register') }}</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="username"
                        >
                            Username
                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="text"
                               name="username"
                               id="username"
                               value="{{ old('username') }}"
                               required
                               autocomplete="username"
                               autofocus
                        >

                        @error('username')
                        <p class="text-red-500 text-xs - mt-2"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="name"
                        >
                            Name
                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="text"
                               name="name"
                               id="name"
                               value="{{ old('name') }}"
                               required
                               autocomplete="name"
                        >

                        @error('name')
                        <p class="text-red-500 text-xs - mt-2"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="description"
                        >
                            description
                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="text"
                               name="description"
                               id="description"
                               value="{{ old('description') }}"
                               autocomplete="description"
                        >

                        @error('description')
                        <p class="text-red-500 text-xs - mt-2"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="email"
                        >
                            email
                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="text"
                               name="email"
                               id="email"
                               required
                               value="{{ old('email') }}"
                               autocomplete="email"
                        >

                        @error('email')
                        <p class="text-red-500 text-xs - mt-2"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="password"
                        >
                            password
                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="password"
                               name="password"
                               id="password"
                               required
                               autocomplete="new-password"
                        >

                        @error('password')
                        <p class="text-red-500 text-xs - mt-2"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="password_confirmation"
                        >
                            Password Confirmation
                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="password"
                               name="password_confirmation"
                               id="password_confirmation"
                               required
                               autocomplete="new-password"
                        >

                        @error('password_confirmation')
                        <p class="text-red-500 text-xs - mt-2"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                            Submit
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-master>
