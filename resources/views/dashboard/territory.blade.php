<section class="py-8  text-black">
    <div class="container px-4 mx-auto overflow-hidden">
        <img class="ml-11 w-1/2 sm:w-auto h-1 sm:h-auto" src="uinel-assets/elements/dashboard-tables/line.svg" alt="">
        <div class="mb-16  border  overflow-hidden rounded-5xl">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full overflow-hidden">
                    <table class="table-auto w-full">

                        <thead>
                            <tr class="" style=" background: gray; ">
                                <td class="relative p-0">
                                    <div class="flex items-center pl-11 h-20 min-w-max border-b ">
                                        <span class="text-sm font-heading font-semibold uppercase">Sl</span>
                                    </div>
                                </td>

                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 min-w-max border-b ">
                                        <span class="text-sm font-heading font-semibold uppercase">Territory</span>
                                    </div>
                                </td>

                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 min-w-max border-b ">
                                        <span class="text-sm font-heading font-semibold uppercase">Union</span>
                                    </div>
                                </td>

                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 min-w-max border-b ">
                                        <span class="text-sm font-heading font-semibold uppercase">Thana</span>
                                    </div>
                                </td>



                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 min-w-max border-b ">
                                        <span class="text-sm font-heading font-semibold uppercase">dist</span>
                                    </div>
                                </td>

                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 min-w-max border-b ">
                                        <span class="text-sm font-heading font-semibold uppercase">division</span>
                                    </div>
                                </td>


                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($territtories as $msg)
                            <tr>
                                <td class="p-0">
                                    <div class="flex items-center pl-11 h-20 min-w-max border-b border-gray-100">
                                        <span class="font-heading font-medium">{{ $msg->id }}</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div
                                        class="flex items-center justify-center p-5 h-20 min-w-max border-b border-gray-100">
                                        <img class="mr-5" src="uinel-assets/images/dashboard-tables/av1.png" alt="">
                                        <div>
                                            {{-- <div class="font-heading font-medium">Reta Havertz</div>  --}}
                                            <div class="text-sm text-darkBlueGray-400 font-heading">
                                                {{ $msg->territory }}
                                            </div>
                                        </div>
                                    </div>
                                </td>


                                <td class="p-0">
                                    <div
                                        class="flex items-center justify-center p-5 h-20 min-w-max border-b border-gray-100">

                                        <span class="text-darkBlueGray-400 font-heading">
                                            {{ $msg->union_name ?? "Null" }}</span>


                                    </div>
                                </td>

                                <td class="p-0">
                                    <div
                                        class="flex items-center justify-center p-5 h-20 min-w-max border-b border-gray-100">

                                        <span class="text-darkBlueGray-400 font-heading">
                                            {{ $msg->thana  ?? "Null"}}</span>


                                    </div>
                                </td>


                                <td class="p-0">
                                    <div
                                        class="flex items-center justify-center p-5 h-20 min-w-max border-b border-gray-100">

                                        <span class="text-darkBlueGray-400 font-heading">
                                            {{ $msg->dist ?? "Null" }}</span>

                                    </div>
                                </td>


                                <td class="p-0">
                                    <div
                                        class="flex items-center justify-center p-5 h-20 min-w-max border-b border-gray-100">

                                        <span class="text-darkBlueGray-400 font-heading">
                                            {{ $msg->division ?? "Null" }}</span>


                                    </div>
                                </td>



                            </tr>


                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-4 items-center justify-between">


            <div class="w-full lg:w-1/3 px-4 mb-10 lg:mb-0">
                <div class="flex items-center">
                    <p class="text-sm font-heading text-darkBlueGray-400">Show</p>
                    <div
                        class="mx-7 h-12 flex items-center px-3 text-lg font-heading font-bold text-darkBlueGray-400 bg-white border border-gray-100 rounded-2xl leading-5">
                        <select class="outline-none font-semibold" name="" id="">
                            <option value="1">10</option>
                            <option value="1">15</option>
                            <option value="1">20</option>
                            <option value="1">100</option>
                        </select>
                    </div>
                    <p class="text-sm font-heading text-darkBlueGray-400">of 309</p>
                </div>
            </div>


            <div class="w-full lg:w-auto px-4 flex items-center justify-center">
                <div class="row">
                    <div class="col-md-12">
                        {{ $territtories->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
