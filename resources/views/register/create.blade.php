@extends('layout')
@section('content')
    <section class="px-6 py-6">
        <main class="max-w-lg mx-auto">
            <h1 class="text-center font-bold text-xl">Register!</h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="first_name"
                    >
                        Firstname
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="first_name"
                        id="first_name"
                        value="{{ old('first_name') }}"
                        required
                    >

                    @error('first_name')
                        <p class="text-red-400 text-xs mt-1">{{ $message  }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="last_name"
                    >
                        Lastname
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="last_name"
                        id="last_name"
                        value="{{ old('last_name') }}"
                        required
                    >
                    @error('last_name')
                        <p class="text-red-400 text-xs mt-1">{{ $message  }}</p>
                    @enderror
                </div>

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
                    >
                    @error('username')
                    <p class="text-red-400 text-xs mt-1">{{ $message  }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                    >
                    @error('email')
                        <p class="text-red-400 text-xs mt-1">{{ $message  }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="password"
                        name="password"
                        id="password"
                        required
                    >
                    @error('password')
                    <p class="text-red-400 text-xs mt-1">{{ $message  }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
@endsection
