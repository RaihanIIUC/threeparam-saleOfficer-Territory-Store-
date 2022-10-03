<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-20 px-10">
                <div class="card">
                    <x-toaster />

                    <div class=" card-title ">

                        <div class="flex  justify-between ">
                          
                            <div class="grow h-14 ">
                                <p>Territory with Number Table
                            </div>
                            <div class="flex-none  ">
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
