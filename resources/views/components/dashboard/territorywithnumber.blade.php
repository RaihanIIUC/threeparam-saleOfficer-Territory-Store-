<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-20 px-10">
                <div class="card">
                    @if (\Session::has('success'))
                    <div class="p-6 border-l-4 border-green-600 bg-green-500 rounded-r-lg" id="alert_remover"
                        onclick="alert_remover()">
                        <div class="flex items-center">
                            <span class="inline-block mr-2">
                                <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.2 8.3L9.4 13.1C9 13.5 8.4 13.5 8 13.1L5.8 10.9C5.4 10.5 5.4 9.9 5.8 9.5C6.2 9.1 6.8 9.1 7.2 9.5L8.7 11L12.8 6.9C13.2 6.5 13.8 6.5 14.2 6.9C14.6 7.3 14.6 7.9 14.2 8.3Z"
                                        fill="#D1F1E6"></path>
                                </svg>
                            </span>
                            <h3 class="text-white font-medium">{!! \Session::get('success') !!}</h3>
                            <button class="ml-auto">
                                <svg class="text-green-800" width="12" height="12" viewbox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.93341 6.00008L11.1334 1.80008C11.4001 1.53341 11.4001 1.13341 11.1334 0.866748C10.8667 0.600081 10.4667 0.600081 10.2001 0.866748L6.00008 5.06675L1.80008 0.866748C1.53341 0.600081 1.13341 0.600081 0.866748 0.866748C0.600082 1.13341 0.600082 1.53341 0.866748 1.80008L5.06675 6.00008L0.866748 10.2001C0.733415 10.3334 0.666748 10.4667 0.666748 10.6667C0.666748 11.0667 0.933415 11.3334 1.33341 11.3334C1.53341 11.3334 1.66675 11.2667 1.80008 11.1334L6.00008 6.93341L10.2001 11.1334C10.3334 11.2667 10.4667 11.3334 10.6667 11.3334C10.8667 11.3334 11.0001 11.2667 11.1334 11.1334C11.4001 10.8667 11.4001 10.4667 11.1334 10.2001L6.93341 6.00008Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                    </div>


                    @endif
                    <div class=" card-title ">

                        <div class="flex  justify-center items-center">
                            <div class="flex-none w-1/2 ...">

                            </div>
                            <div class="grow h-14 ">
                                <p>Territory with Number Table
                            </div>
                            <div class="flex-none w-1/12  ">
                                <a href={{  route('add_territories_with_num') }}
                                    class="flex flex-wrap justify-center w-full px-4 py-2 bg-green-500 hover:bg-green-600 font-medium text-sm  border border-green-500 rounded-md shadow-button">
                                    <p>Add Territory with Number</p>
                                </a>
                            </div>

                        </div>

                    </div>
                    <div class="card-body">
                        <livewire:territorywithnumber-datatables searchable="id,mobile_number,territory_name,short_name"
                            exportable />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
