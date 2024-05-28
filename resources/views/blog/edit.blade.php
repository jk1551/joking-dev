@extends('layouts.app')

@section('content')
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-800">
            <div class="mb-8">
                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                    Edit Blog Post
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Update the details of your blog post below.
                </p>
            </div>

            <form action="{{ route('blog.update', $blog->id) }}" method="POST">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    <div class="mb-4">
                        <ul class="list-disc list-inside text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Grid -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                    <div class="sm:col-span-3">
                        <label for="title" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Title
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <input id="title" name="title" type="text" class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400" value="{{ $blog->title }}" required>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="content" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Content
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <textarea id="content" name="content" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400" rows="6" required>{{ $blog->content }}</textarea>
                    </div>


                    <div class="form-group">
                        <label for="tags">Tags:</label>
                        <select name="tags[]" id="tags" multiple class="form-control">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}" {{ $blog->tags->contains($tag->id) ? 'selected' : '' }}>
                                    {{ $tag->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!--
                    <div class="sm:col-span-3">
                        <label for="tags" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Tags
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <input id="tags" name="tags" type="text" class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400" value="{{ implode(',', $blog->tags->pluck('name')->toArray()) }}">
                        <small class="text-gray-500 dark:text-neutral-400">Separate tags with commas</small>
                    </div>
                    -->
                </div>
                <!-- End Grid -->

                <div class="mt-5 flex justify-end gap-x-2">
                    <a href="{{ route('blog.index') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                        Cancel
                    </a>
                    <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
@endsection
