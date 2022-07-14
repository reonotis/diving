<x-log-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Log List') }}
        </h2>
    </x-slot>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="log-section" >
                @foreach ($logs as $log)
                    <x-admin.log.list :log="$log" />
                @endforeach
            </div>
        </div>
    </section>

</x-log-layout>
