<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-20 px-10">
                <div class="card">
                       <div class="flex  justify-start">
                           
                            <div class="grow h-14 ">
                                <p>Voucher Head Table
                            </div>
                       
                        </div>
                    <div class="card-body">
                        <livewire:voucherhead-datatables
                            searchable="sl,sales_officer,territory,store_id,amount,msg_date" exportable />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
