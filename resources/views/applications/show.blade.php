<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $application->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-lg bg-white shadow">
                <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                <div class="bg-white p-6">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <div class="sm:flex sm:space-x-5">
                            <div class="flex-shrink-0">
                                <img class="mx-auto h-20 w-20 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/2048px-No_image_available.svg.png" alt="{{ $application->name}}">
                            </div>
                            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{ $application->name}}</p>
                                <p class="text-sm font-medium text-gray-600">Appllied in {{ $application->department->name}}</p>
                            </div>
                        </div>
                        <div class="mt-5 flex justify-center sm:mt-0">
                            @if($application->supportive_document)
                                <a href="{{ $application->supportive_document->getUrl() }}" target="__blank" class="flex items-center justify-center rounded-md bg-red-800 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-red-800 hover:bg-red-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    View Document
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 divide-y divide-gray-200 border-t border-gray-200 bg-gray-50 sm:grid-cols-3 sm:divide-x sm:divide-y-0">
                    <div class="px-6 py-5 text-center text-sm font-medium">
                        <span class="flex items-center justify-center  px-3 py-2 text-sm font-semibold text-gray-800">

                            {{ $application->email }}
                        </span>
                    </div>
                    <div class="px-6 py-5 text-center text-sm font-medium">
                        <span class="flex items-center justify-center  px-3 py-2 text-sm font-semibold text-gray-800">

                            {{ $application->phone }}
                        </span>
                    </div>
                    <div class="px-6 py-5 text-center text-sm font-medium">
                        <span class="flex items-center justify-center  px-3 py-2 text-sm font-semibold text-gray-800">

                            {{ $application->type->getLabel() }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg bg-white shadow mt-6">
                <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                <div class="bg-white p-6">
                    {{ $application->biography }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
