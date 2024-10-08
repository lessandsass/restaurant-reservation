<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tables') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end m-2 p-2">
                <a
                    href="{{ route('admin.tables.create') }}"
                    class="px-4 py-2 bg-indigo-600 hover:bg-indigo-800 text-white rounded-lg"
                >
                    New Table
                </a>
            </div>

            {{-- copy from the flowbite's defaults table --}}
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guest Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Location
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Edit / Delete
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($tables as $table)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $table->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $table->guest_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $table->status->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $table->location->name }}
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex justify-between">
                                <a
                                    href="{{ route('admin.tables.edit', $table->id) }}"
                                    class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded-lg"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('admin.tables.destroy', $table->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure?');"
                                    class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>

                </table>
            </div>
            {{-- copy from the flowbite's defaults table --}}

        </div>
    </div>
</x-admin-layout>
