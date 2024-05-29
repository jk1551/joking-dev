@extends('layouts.guest')

@section('title', 'Contact')

@section('content')
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
                    Contact me
                </h1>
            </div>
        </div>

        <div class="mt-12 max-w-lg mx-auto">
            <!-- Card -->
            <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-neutral-700">
                <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-neutral-200">
                    Fill in the form
                </h2>

                @if(session('success'))
                    <p>{{ session('success') }}</p>
                @endif

                @if ($errors->any())
                    <div class="error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 lg:gap-6">
                        <div>
                            <label for="name" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Name</label>
                            <input type="text" name="name" id="name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ old('title') }}" required>
                            @error('name')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Email</label>
                            <input type="email" name="email" id="email" autocomplete="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="messages" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Message</label>
                            <textarea id="messages" name="messages" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>{{ old('message') }}</textarea>
                            @error('messages')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6 grid">
                        <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Send inquiry</button>
                    </div>
                </form>
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
