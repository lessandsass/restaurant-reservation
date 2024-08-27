<x-guest-layout>
    <section class="mt-8 bg-white">

        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                TODAY'S SPECIALITY</h2>
        </div>

        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">

                @foreach($category->menus as $menu)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">

                        <img
                            class="w-full h-48"
                            src="{{ Storage::url($menu->image) }}"
                            alt="Image"
                        />

                        <div class="px-6 py-4">
                            <a
                                href="{{ route('categories.show', $menu->id) }}"
                            >
                                <h4
                                    class="mb-3 text-xl font-semibold tracking-tight text-green-500 hover:text-green-500 uppercase"
                                >
                                    {{ $menu->name }}
                                </h4>
                            </a>
                            <p class="leading-normal text-gray-700">
                                {{ $menu->description }}
                            </p>
                            <p class="leading-normal text-green-700">
                                {{ $menu->price }}
                            </p>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>

</x-guest-layout>
