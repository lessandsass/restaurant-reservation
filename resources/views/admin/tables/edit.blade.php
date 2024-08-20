<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tables') }}
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
                    <form
                        method="POST"
                        action="{{ route('admin.tables.update', $table->id) }}"
                    >
                        @csrf
                        @method('PUT')

                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-300"> Name </label>

                            <div class="mt-1">
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ $table->name }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                />
                            </div>

                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-5">
                            <label for="guest_number" class="block text-sm font-medium text-gray-300"> Guest Number </label>
                            <div class="mt-1">
                                <input
                                    type="text"
                                    id="guest_number"
                                    name="guest_number"
                                    value="{{ $table->guest_number }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                />
                            </div>

                            @error('guest_number')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-5">
                            <label for="status" class="block text-sm font-medium text-gray-300">Status</label>
                            <div class="mt-1">
                                <select
                                    class="form-multiselect block w-full bg-slate-600 rounded-lg"
                                    id="status"
                                    name="status"
                                >
                                @foreach(App\Enums\TableStatus::cases() as $status)
                                    <option
                                        value="{{ $status->value }}"
                                        @selected($table->status->value == $status->value)
                                        class="inline-block"
                                    >
                                        {{ $status->name }}
                                    </option>
                                @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="sm:col-span-6 mt-5">
                            <label for="location" class="block text-sm font-medium text-gray-300">Location</label>
                            <div class="mt-1">
                                <select
                                    class="form-multiselect block w-full bg-slate-600 rounded-lg"
                                    id="location"
                                    name="location"
                                >
                                    @foreach(App\Enums\TableLocation::cases() as $location)
                                    <option
                                        value="{{ $location->value }}"
                                        @selected($table->location->value == $location->value)
                                        class="inline-block"
                                    >
                                        {{ $location->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-6 pt-5">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-800 rounded-lg"
                            >
                                Update Table
                            </button>
                        </div>

                    </form>

                </div>
                {{-- Copied from the link that is provided in the tutorial --}}
            </div>

        </div>
    </div>
</x-admin-layout>
