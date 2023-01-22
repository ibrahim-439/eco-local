@props(['disabled' => false])

<div class="text-center w-max ">
    <!-- Photo File Input -->


    <label class="text-gray-700 text-sm font-bold mb-2 " for="imgInp">
        {{$title??''}}
        {{--{{dd($accepte)}}--}}
        <input style="display: none"  id="imgInp"
            {{ $attributes->merge(['type' => 'file', 'class' => '','name'=>'file','accept'=>'']) }}
        />

        <div class="text-center">
            <!-- Current Profile Photo -->
            <div class="mt-2" >
                <img id="blah"
                     {{ $attributes->merge(['src' => asset('images/default.jpg'),"class"=>"w-40 h-40 m-auto rounded-full shadow"]) }}
                     >
            </div>
        </div>
    </label>

</div>
