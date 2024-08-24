<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a
                    href="{{ route('admin.categories.index') }}"
                    class="px-4 py-2 bg-indigo-600 hover:bg-indigo-800 text-white rounded-lg"
                >
                    Admin Categories Page
                </a>
            </div>

            <div class="m-2 p-2">
                {{-- Copied from the link that is provided in the tutorial --}}
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10 text-white">
                    <form
                        method="POST"
                        action="{{ route('admin.categories.update', $category->id) }}"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        @method('PUT')

                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                            <div class="mt-1">
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="block w-full appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                    value="{{ $category->name }}"
                                />
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>

                            <div>
                                <img
                                    src="{{ Storage::url($category->image) }}"
                                    alt="image"
                                    class="w-32"
                                >
                            </div>

                            <div class="mt-1">
                                <input type="file" id="image" name="image" class="block w-full appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base text-white leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>

                        <div class="sm:col-span-6 pt-5">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea name="description" id="description" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm">{{ $category->description }}</textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-6 pt-5">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-800 rounded-lg"
                            >
                                Update Category
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</x-admin-layout>
