<x-admin.wrapper>
    <x-slot  name="title">
        <div class="flex justify-between items-center">
            <h2 class="inline-block text-2xl sm:text-3xl  text-slate-900   block sm:inline-block flex">
                {{ __('Create role') }}
            </h2>
        </div>
    </x-slot>


    <div class="w-full py-2 bg-white overflow-hidden">

        <form method="POST" action="{{ route('role.store') }}">
        @csrf

            <div class="py-2">
                <x-admin.form.label for="name" class="{{$errors->has('name') ? 'text-red-400' : ''}}">{{ __('Name') }}</x-admin.form.label>

                <x-admin.form.input id="name" class="{{$errors->has('name') ? 'border-red-400' : ''}}"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    />
            </div>

            <div class="py-2">
                <h3 class="inline-block text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight py-4 block sm:inline-block flex">Permissions</h3>
                <div class="grid grid-cols-4 gap-4">
                    @forelse ($permissions as $key=>$category)

                        <p class="col-span-12 sm:col-span-12
                        inline-block text-xl sm:text-2xl text-slate-900 tracking-tight pt-4 block sm:inline-block flex">
                            {{$key}}</p>

                    @foreach ($category as $permission)
                        <div class="col-span-4 sm:col-span-2 md:col-span-1">
                            <label class="form-check-label">
                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                {{ $permission->name }}
                            </label>
                        </div>
                        @endforeach
                    @empty
                        ----
                    @endforelse
                </div>
            </div>

            <div class="flex justify-end mt-4">
                <x-admin.form.button>{{ __('Create') }}</x-admin.form.button>
            </div>
        </form>
    </div>
</x-admin.wrapper>
