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
                    <!-- component -->
                    <div class="flex items-center  p-12">
                        <!-- Author: FormBold Team -->
                        <!-- Learn More: https://formbold.com -->
                        <div class=" w-full max-w">
                            <form action="https://formbold.com/s/FORM_ID" method="POST">
                                <div class="mb-5 flex">
                                    <label
                                        for="name"
                                        class="mb-3 block text-base font-medium text-[#07074D]"
                                    >
                                        Full Name
                                    </label>
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        placeholder="Full Name"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    />
                                </div>
                                <div class="mb-5">
                                    <label
                                        for="email"
                                        class="mb-3 block text-base font-medium text-[#07074D]"
                                    >
                                        Email Address
                                    </label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        placeholder="example@domain.com"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    />
                                </div>
                                <div class="mb-5">
                                    <label
                                        for="subject"
                                        class="mb-3 block text-base font-medium text-[#07074D]"
                                    >
                                        Subject
                                    </label>
                                    <input
                                        type="text"
                                        name="subject"
                                        id="subject"
                                        placeholder="Enter your subject"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    />
                                </div>
                                <div class="mb-5">
                                    <label
                                        for="message"
                                        class="mb-3 block text-base font-medium text-[#07074D]"
                                    >
                                        Message
                                    </label>
                                    <textarea
                                        rows="4"
                                        name="message"
                                        id="message"
                                        placeholder="Type your message"
                                        class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    ></textarea>
                                </div>
                                <div>
                                    <button
                                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
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
