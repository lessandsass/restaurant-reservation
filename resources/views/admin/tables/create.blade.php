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
                    href="{{ route('admin.tables.index') }}"
                    class="px-4 py-2 bg-indigo-600 hover:bg-indigo-800 text-white rounded-lg"
                >
                    Admin Tables Page
                </a>
            </div>

            <div class="m-2 p-2">
                {{-- Copied from the link that is provided in the tutorial --}}
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10 text-white">
                    <form enctype="multipart/form-data">

                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700"> Name </label>
                            <div class="mt-1">
                                <input type="text" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700"> Image </label>
                            <div class="mt-1">
                                <input type="file" id="image" wire:model="newImage" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base text-white leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>

                        <div class="sm:col-span-6 pt-5">
                            <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea id="body" rows="3" wire:model.lazy="body" class="shadow-sm focus:ring-indigo-500 appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-6 pt-5">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-800 rounded-lg"
                            >
                                Store
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</x-admin-layout>
