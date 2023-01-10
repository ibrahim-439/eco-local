<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-2 py-12">
        <div class="max-w-8xl mx-auto ">
            <div class="overflow-hidden ">
                <div class="p-6 text-gray-900 flex justify-between items-center">
                    <h1>{{ __("Users") }}</h1>

                    <div>
                        <button
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                            <a href="{{route('user.create')}}" class="text-sm font-medium leading-none text-white">Add User</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900">
                    <!-- component -->
                    <section class="container mx-auto font-mono">
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full border" id="myTable">

                                    <thead>
                                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b ">
                                            <th class="px-4 py-3 border">id</th>
                                            <th class="px-4 py-3 border">name</th>
                                            <th class="px-4 py-3 border">email</th>
                                        </tr>
                                    </thead>

                                    <tbody class="bg-white ">

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript">
            $('#myTable').DataTable( {
                ajax: "{{route('api:user.index')}}",
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                ]
            } );
        </script>
    @endpush
</x-app-layout>
