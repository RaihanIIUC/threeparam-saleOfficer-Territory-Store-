<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-20 px-10">
                <div class="card">
                     <x-toaster />

                    <div class=" card-title ">

                        <div class="flex  justify-between">
                           
                            <div class="grow h-14 ">
                                <p>Sales Officers Table
                            </div>
                            <div class="flex-none ">
                                <a href={{  route('add_sales_officers') }}
                                    class="flex flex-wrap justify-center w-full px-4 py-2 bg-green-500 hover:bg-green-600 font-medium text-sm  border border-green-500 rounded-md shadow-button">
                                    <p>Add Officers</p>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="card-body">
                        <livewire:salesofficer-datatables searchable="territory,mobile,short_name,full_name"
                            exportable />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
