<x-admin-layout>
        <div class="grid grid-cols-2 gap-6">
            <!-- tarjeta 1-->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    @if (Auth::user()->profile_photo_path)
                        <img class="h-8 w-8 rounded-full object-cover" src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                    @else
                        <img class="h-8 w-8 rounded-full object-cover" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    @endif

                    <div class="ml-4 flex-1">
                        <h2 class="text-lg font-semibold">
                            Bienvenid@, {{ auth()->user()->name }}
                        </h2>
                    </div>
                </div>
            </div>
            <!-- tarjeta 2-->
            <div class="bg-white rounded-lg shadow-sm p-6">

            </div>
        </div>
</x-admin-layout>
