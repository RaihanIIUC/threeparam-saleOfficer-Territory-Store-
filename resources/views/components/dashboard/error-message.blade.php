<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-20 px-10">
                <div class="card">
                    <x-toaster />

                    <div class="flex  justify-start">

                        <div class="grow h-14 ">
                            <p>Error Message Table
                        </div>

                    </div>

                    <div class="card-body">
                        <livewire:error-datatables searchable="sl,message_text,error_report,mobile_number,msg_date"
                            exportable />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
