<x-dashboard-layout>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Dashboard') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item font-bold"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active text-white">Starter Page</li>
                </ol>
            </div>
        </div>
    </x-slot>

    <div class="bg-white shadow-sm rounded-lg">
        <div class="p-6 text-gray-900 d-flex justify-content-center">
            <img src="{{Vite::asset('resources/img/svg/logo-color.svg')}}" class="img-fluid w-25" alt="Invoice Logo" />  
        </div>
    </div>
</x-dashboard-layout>
