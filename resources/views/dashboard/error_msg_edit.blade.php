<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-20 px-10">
                <section class="bg-coolGray-50 py-4">
                    <div class="container px-4 mx-auto">

                        <div class="p-6 bg-red-50 border-l-4 border-red-500 rounded-r-lg" id="alert_remover_2">
                            <div class="flex">
                                <div class="w-auto">
                                    <span class="w-auto inline-block mr-2">
                                        <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM10 15C9.4 15 9 14.6 9 14C9 13.4 9.4 13 10 13C10.6 13 11 13.4 11 14C11 14.6 10.6 15 10 15ZM11 10C11 10.6 10.6 11 10 11C9.4 11 9 10.6 9 10V6C9 5.4 9.4 5 10 5C10.6 5 11 5.4 11 6V10Z"
                                                fill="#E85444"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full">
                                    <div class="flex mb-2">
                                        <h3 class="text-red-800 font-medium">{!! $data->error_report !!}</h3>

                                    </div>

                                </div>
                            </div>
                        </div>






                        <form action="{{ route('errors.resend',['id'=> $data->id]) }}" method="POST">

                            @csrf
                            <div
                                class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">
                                {{--  ! first flex for title tex and ( cancel button and save button )  --}}

                                <div class="pb-6 border-b border-coolGray-100">

                                    <div class="flex flex-wrap items-center justify-between -m-2">
                                        <div class="w-full md:w-auto p-2">
                                            <h2 class="text-coolGray-900 text-lg font-semibold">Edit Your Error Message
                                            </h2>
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
                                                        <p>Resend</p>
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
                                                <p class="text-sm text-coolGray-800 font-semibold">Error Msg</p>
                                            </div>
                                            <div class="w-full md:flex-1 p-3">
                                                <input value={{ $data->sms_text }}
                                                    class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input"
                                                    type="text" name="sms_text">
                                                @error('sms_text') <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>



                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
