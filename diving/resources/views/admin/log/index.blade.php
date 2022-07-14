<x-log-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Log Management') }}
        </h2>
    </x-slot>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <a href="{{ route('admin.log.create') }}" >
                        <div class="log-management-contents">
                            <svg viewBox="0 0 640 512" class="text-indigo-500 w-12 h-12 mb-3 inline-block" >
                                <path d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3C0 496.5 15.52 512 34.66 512h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM616 200h-48v-48C568 138.8 557.3 128 544 128s-24 10.75-24 24v48h-48C458.8 200 448 210.8 448 224s10.75 24 24 24h48v48C520 309.3 530.8 320 544 320s24-10.75 24-24v-48h48C629.3 248 640 237.3 640 224S629.3 200 616 200z"/>
                            </svg>
                            <h2 class="font-medium text-2xl text-gray-900">ログ登録</h2>
                            <p class="leading-relaxed">新しくログの登録を行います</p>
                        </div>
                    </a>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <a href="{{ route('admin.log.list') }}" >
                        <div class="log-management-contents">
                            <svg viewBox="0 0 640 512" class="text-indigo-500 w-12 h-12 mb-3 inline-block" >
                                <path d="M512 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h448c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM176 128c35.35 0 64 28.65 64 64s-28.65 64-64 64s-64-28.65-64-64S140.7 128 176 128zM272 384h-192C71.16 384 64 376.8 64 368C64 323.8 99.82 288 144 288h64c44.18 0 80 35.82 80 80C288 376.8 280.8 384 272 384zM496 320h-128C359.2 320 352 312.8 352 304S359.2 288 368 288h128C504.8 288 512 295.2 512 304S504.8 320 496 320zM496 256h-128C359.2 256 352 248.8 352 240S359.2 224 368 224h128C504.8 224 512 231.2 512 240S504.8 256 496 256zM496 192h-128C359.2 192 352 184.8 352 176S359.2 160 368 160h128C504.8 160 512 167.2 512 176S504.8 192 496 192z"/>
                            </svg>
                            <h2 class="font-medium text-2xl text-gray-900">ログ一覧</h2>
                            <p class="leading-relaxed">ご自身のログを一覧表示します</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flex flex-wrap text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <a href="{{ route('admin.customers.create') }}" class="" >
                        <div class="log-management-contents">
                            <svg class="w-12 h-12 mb-3 inline-block" x="0px" y="0px" viewBox="0 0 566.93 566.93" style="enable-background:new 0 0 566.93 566.93;">
                                <style type="text/css">
                                    .st0{stroke:#FFFFFF;stroke-miterlimit:10;}
                                    .st1{stroke:#FFFFFF;stroke-width:15;stroke-miterlimit:10;}
                                </style>
                                <path class="st0" d="M176.42,143.15L45.82,76.01c-9.44-4.85-20.67,1.99-20.69,12.6l-0.55,271.12c-0.01,5.33,2.97,10.22,7.71,12.66
                                    l130.59,67.14c9.44,4.85,20.67-1.99,20.69-12.6l0.55-271.12C184.13,150.48,181.16,145.59,176.42,143.15z"/>
                                <path class="st0" d="M534.66,194.56l-130.7-67.19c-9.4-4.83-20.59,1.98-20.62,12.55l-0.55,271.24c-0.01,5.31,2.95,10.18,7.68,12.61
                                    l130.7,67.19c9.4,4.83,20.59-1.98,20.62-12.55l0.55-271.24C542.35,201.86,539.39,196.99,534.66,194.56z"/>
                                <path class="st0" d="M216.39,145.02L346.98,120c8.69-1.66,16.74,5,16.73,13.84l-0.2,274.34c0,6.75-4.8,12.55-11.43,13.82
                                    l-130.59,25.03c-8.69,1.66-16.74-5-16.73-13.84l0.21-274.34C204.97,152.09,209.76,146.29,216.39,145.02z"/>
                                <path class="st1" d="M514.94,149.33h-37.67v-37.67c0-15.14-12.27-27.42-27.42-27.42l0,0c-15.14,0-27.42,12.27-27.42,27.42v37.67
                                    h-37.67c-15.14,0-27.42,12.27-27.42,27.42c0,15.14,12.27,27.42,27.42,27.42h37.67v37.67c0,15.14,12.27,27.42,27.42,27.42l0,0
                                    c15.14,0,27.42-12.27,27.42-27.42v-37.68h37.67c15.14,0,27.42-12.27,27.42-27.42C542.36,161.6,530.09,149.33,514.94,149.33z"/>
                            </svg>


                            <h2 class="font-medium text-2xl text-gray-900">マップ登録</h2>
                            <p class="leading-relaxed">新しく顧客の登録を行います</p>
                        </div>
                    </a>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <a href="{{ route('admin.customerSearch.index') }}" >
                        <div class="log-management-contents">
                                <svg class="w-12 h-12 mb-3 inline-block" x="0px" y="0px" viewBox="0 0 566.93 566.93" style="enable-background:new 0 0 566.93 566.93;">

                                <path class="st0" d="M176.42,143.15L45.82,76.01c-9.44-4.85-20.67,1.99-20.69,12.6l-0.55,271.12c-0.01,5.33,2.97,10.22,7.71,12.66
                                l130.59,67.14c9.44,4.85,20.67-1.99,20.69-12.6l0.55-271.12C184.13,150.48,181.16,145.59,176.42,143.15z"/>
                            <path class="st0" d="M534.66,194.56l-130.7-67.19c-9.4-4.83-20.59,1.98-20.62,12.55l-0.55,271.24c-0.01,5.31,2.95,10.18,7.68,12.61
                                l130.7,67.19c9.4,4.83,20.59-1.98,20.62-12.55l0.55-271.24C542.35,201.86,539.39,196.99,534.66,194.56z"/>
                            <path class="st0" d="M216.39,145.02L346.98,120c8.69-1.66,16.74,5,16.73,13.84l-0.2,274.34c0,6.75-4.8,12.55-11.43,13.82
                                l-130.59,25.03c-8.69,1.66-16.74-5-16.73-13.84l0.21-274.34C204.97,152.09,209.76,146.29,216.39,145.02z"/>

                                </svg>
                            <h2 class="font-medium text-2xl text-gray-900">マップ一覧</h2>
                            <p class="leading-relaxed">名前や電話番号から顧客の検索を行います</p>
                        </div>
                    </a>
                </div>
            </div>





        </div>
    </section>

</x-log-layout>
