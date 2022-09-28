    <form wire:submit.prevent="submit">

        <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">
            {{--  ! first flex for title tex and ( cancel button and save button )  --}}

            <div class="pb-6 border-b border-coolGray-100">

                <div class="flex flex-wrap items-center justify-between -m-2">
                    <div class="w-full md:w-auto p-2">
                        <h2 class="text-coolGray-900 text-lg font-semibold">Add New Sales Officers</h2>
                    </div>
                    <div class="w-full md:w-auto p-2">
                        <div class="flex flex-wrap justify-between -m-1.5">
                            <div class="w-full md:w-auto p-1.5">
                                <a href={{ route('cancel') }}
                                    class="flex flex-wrap justify-center w-full px-4 py-2 font-medium text-sm text-coolGray-500 hover:text-coolGray-600 border border-coolGray-200 hover:border-coolGray-300 bg-white rounded-md shadow-button">
                                    <p>Cancel</p>
                                </a>
                            </div>
                            <div class="w-full md:w-auto p-1.5">
                                <button type="submit"
                                    class="flex flex-wrap justify-center w-full px-4 py-2 bg-green-500 hover:bg-green-600 font-medium text-sm  border border-green-500 rounded-md shadow-button">
                                    <p>Save</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{--  ! item id label and input box code  --}}
            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Territory</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <input wire:model="territory"
                                class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input"
                                type="text" placeholder="CTG/DHAKA">
                            @error('territory') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </div>


            {{-- ! item name label and item name input code  --}}
            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Mobile No</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <input wire:model="mobile_number"
                                class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input"
                                type="text" placeholder="RAMNA">
                            @error('mobile_number') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                    </div>
                </div>
            </div>


            {{-- ! item name label and item name input code  --}}
            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Sales Officer Id</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <input wire:model="short_name"
                                class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input"
                                type="text" placeholder="Thana">
                            @error('short_name') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                    </div>
                </div>
            </div>



            {{-- ! item name label and item name input code  --}}
            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Full Name</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <input wire:model="full_name"
                                class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input"
                                type="text" placeholder="District">
                            @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                    </div>
                </div>
            </div>



        </div>

    </form>
