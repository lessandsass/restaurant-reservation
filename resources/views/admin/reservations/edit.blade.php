<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a
                    href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 bg-indigo-600 hover:bg-indigo-800 text-white rounded-lg"
                >
                    Admin Reservations Page
                </a>
            </div>

            <div class="m-2 p-2">
                {{-- Copied from the link that is provided in the tutorial --}}
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10 text-white">
                    <form
                        method="POST"
                        action="{{ route('admin.reservations.update', $reservation->id) }}"
                    >
                        @csrf
                        @method('PUT')

                        <div class="sm:col-span-6 mt-5">
                            <label for="first_name" class="block text-sm font-medium text-gray-300"> First Name </label>

                            <div class="mt-1">
                                <input
                                    type="text"
                                    id="first_name"
                                    name="first_name"
                                    value="{{ $reservation->first_name }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                />
                            </div>

                            @error('first_name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-5">
                            <label for="last_name" class="block text-sm font-medium text-gray-300"> Last Name </label>

                            <div class="mt-1">
                                <input
                                    type="text"
                                    id="last_name"
                                    name="last_name"
                                    value="{{ $reservation->last_name }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                />
                            </div>

                            @error('last_name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-5">
                            <label for="email" class="block text-sm font-medium text-gray-300"> Email </label>

                            <div class="mt-1">
                                <input
                                    type="text"
                                    id="email"
                                    name="email"
                                    value="{{ $reservation->email }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                />
                            </div>

                            @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-5">
                            <label for="tel_number" class="block text-sm font-medium text-gray-300"> Phone number </label>

                            <div class="mt-1">
                                <input
                                    type="text"
                                    id="tel_number"
                                    name="tel_number"
                                    value="{{ $reservation->tel_number }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                />
                            </div>

                            @error('tel_number')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-5">
                            <label for="res_date" class="block text-sm font-medium text-gray-300"> Reservation Date </label>

                            <div class="mt-1">

                                <input
                                    type="datetime-local"
                                    name="res_date"
                                    min="2024-06-14 00:00:00"
                                    max="2034-06-16 00:00:00"
                                    id="res_date"
                                    value="{{ $reservation->res_date }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                />

                            </div>

                            @error('res_date')
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
                                    value="{{ $reservation->guest_number }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-600 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                />
                            </div>

                            @error('guest_number')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-5" >
                            <label for="table_id" class="block text-sm font-medium text-gray-300">Table</label>
                            <div class="mt-1">
                                <select
                                    class="form-multiselect block w-full bg-slate-600 rounded-lg"
                                    id="table_id"
                                    name="table_id"
                                >
                                    @foreach($tables as $table)
                                        <option
                                            value="{{ $table->id }}"
                                            class="inline-block"
                                            @selected($table->id == $reservation->table_id)
                                        >
                                            {{ $table->name }}
                                            ({{ $table->guest_number }} Guests)
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('table_id')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-5">
                            <button type="submit"
                                    class="px-4 py-2 bg-indigo-600 hover:bg-indigo-800 rounded-lg"
                            >
                                Update Reservation
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</x-admin-layout>
