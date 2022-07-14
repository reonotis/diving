<x-schedule-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Schedule Management') }}
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <x-flash-massege class="mb-4" />


            <div class="w-full" >
                <select name="calendar-select" id="calendar-select" >
                    @foreach ($monthList as $month)
                        <option value="{{ $month }}" <?php echo ($month == $selectMonth)? " selected" : ""; ?> >{{ wordwrap($month, 4, '年', true) }}月</option>
                    @endforeach

                </select>
            </div>

            <div class="w-full" >
                <div class="calendar-contents" >
                    <div class="flex flex-wrap calendar-width" >
                        @foreach(\App\Consts\Common::WEEK_LIST as $weekKey => $weekValue)
                            <div class="calendar-one-day calendar-one-day-content calendar-week <?php if($weekKey == 0) echo "calendar-week-sunday"; ?> <?php if($weekKey == 6) echo "calendar-week-saturday"; ?>" >{{ $weekValue }}</div>
                        @endforeach
                    </div>
                    <div class="flex flex-wrap calendar-width" >
                        @foreach ($dayList as $day)
                            <div class="calendar-one-day calendar-one-day-content day-content <?php if($day['date'] == date('Y-m-d')){ echo " today";} ?> " id="{{ $day['date'] }}">
                                <div class="w-full text-center <?php if($day['date'] == date('Y-m-d')){ echo " today";} ?>" >
                                    {{  date('j', strtotime($day['date'])) }}
                                </div>
                                <div class="" >
                                    @if(!empty($day['schedule']))
                                        @foreach($day['schedule'] as $schedule)
                                            <div class="calendar-schedule" id="schedule_{{ $schedule->id }}" >
                                                {{ $schedule->title }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>



        </div>
    </section>
    <section class="schedule-create-form-area" id="schedule-create-form-area" style="display: none;" >
        <div class="schedule-create-form-mask" id="schedule-create-form-mask" ></div>
        <div class="schedule-create-form" id="schedule-create-form" >
            {{ Form::open(['method'=>'post', 'route' => 'admin.schedule.store']) }}

                <div class="flex w-full mb-4" >
                    <div class="schedule-create-label" >日付</div>
                    <div class="schedule-create-content" >
                        <div class="w-48" >
                            <input type="date" name="date" id="date" >
                        </div>
                    </div>
                </div>
                <div class="flex w-full mb-4" >
                    <div class="schedule-create-label" >コース</div>
                    <div class="schedule-create-content" >

                        <input type="text" name="course_name" list="course_name" placeholder="テキスト入力" autocomplete="off" >
                        <datalist id="course_name">
                            @foreach($courseList as $course)
                                <option value="{{ $course->course_name }}" >
                            @endforeach
                        </datalist>
                        <a href="" >コースがない場合はこちら</a>
                    </div>
                </div>
                <div class="flex w-full mb-4" >
                    <div class="schedule-create-label" >日数</div>
                    <div class="schedule-create-content" >
                        <div class="flex w-20 items-center" >
                            <input type="number" name="days" >日
                        </div>
                    </div>
                </div>
                <div class="flex w-full mb-4" >
                    <div class="schedule-create-label" >定員</div>
                    <div class="schedule-create-content" >
                        <div class="flex w-20 items-center" >
                            <input type="number" name="capacity" >名
                        </div>
                    </div>
                </div>
                <div class="flex w-full mb-4" >
                    <div class="schedule-create-label" >参加者</div>
                    <div class="schedule-create-content" >
                        <div class="flex flex-wrap w-full items-center" id="selectedCustomerArea" >
                            <input type="hidden" name="participantList" id="participantList" value="" >
                        </div>
                        <div class="flex w-64 items-center" >
                            <input type="text" class="w-20" name="participant" id="participant" >
                            <div class="p-2 w-full" >
                                <button type="button" id="search_customer" value="検索" class="text-white bg-indigo-500 border-0 py-2 px-8" >検索</button>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-full items-center" id="selectionCustomerArea" ></div>
                    </div>
                </div>

                <div class="p-2 w-full mt-4 flex justify-around">
                    <button onclick="closeScheduleCreateForm();" type="button" class="bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg">キャンセル</button>
                    <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" >登録</button>
                </div>
            {{ Form::close() }}
        </div>
    </section>

    <section>
        <div class="schedule-detail-mask" id="schedule_detail_mask" style="display: none;" >
            <div class="schedule-detail" id="schedule_detail" >
                <div class="flex schedule-detail-contents" >
                    <div class="schedule-detail-title" >日付</div>
                    <div class="schedule-detail-content" id="scheduleDataDate" ></div>
                </div>
                <div class="flex" >
                    <div class="schedule-detail-title" >コース名</div>
                    <div class="schedule-detail-content" id="scheduleDataTitle" ></div>
                </div>
                <div class="flex" >
                    <div class="schedule-detail-title" >定員</div>
                    <div class="schedule-detail-content" id="scheduleDataCapacity" ></div>
                </div>

            </div>
        </div>
    </section>
</x-log-layout>
