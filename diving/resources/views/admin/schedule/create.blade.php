<x-log-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Log Register') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{ route('admin.log.store'); }}" method="POST" >
                        @csrf
                        <section class="text-gray-600 body-font relative">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="md:w-5/6 mx-auto">
                                    <div class="flex flex-wrap">
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="log_date" class="scrollSlideLeftTrigger" >{{ __('Dive Date') }}</label>
                                            <div class="log-content ">
                                                <input type="date" id="log_date" name="log_date" value="{{ old('log_date') }}" >
                                                <p id="log_date_err_msg" style="display: none;" class="error" ></p>
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="entry_time" class="scrollSlideLeftTrigger" >潜水時間</label>
                                            <div class="log-content">
                                                <div class="flex items-center">
                                                    <div class="w-1/3 pr-1 flex-col">
                                                        <span>潜水開始時間</span>
                                                        <input type="time" id="entry_time" name="entry_time" value="{{ old('entry_time') }}" >
                                                    </div>
                                                    <div class="w-1/3 pr-1 flex-col">
                                                        <span>潜水終了時間</span>
                                                        <input type="time" id="exit_time" name="exit_time" value="{{ old('exit_time') }}" >
                                                    </div>
                                                    <div class="w-1/3 pr-1 flex-col">
                                                        <span>潜水時間</span>
                                                        <input type="time" id="swim_time" name="swim_time" value="{{ old('swim_time') }}" >
                                                    </div>
                                                </div>
                                                <p id="swim_time_err_msg" style="display: none;" class="error" >ｄｄ</p>
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label class="scrollSlideLeftTrigger" >エントリー</label>
                                            <div class="log-content items-center">
                                                <div class="input-radios flex">
                                                    @foreach(\App\Consts\Common::ENTRY_LIST as $entryKey => $entryValue)
                                                        {{ Form::radio('entry', $entryKey, old('entry') == $entryKey ? true: false,
                                                            [ 'class' => 'radio-button', 'id' => 'radio-' . $entryValue ]
                                                        )}}
                                                        <label for="radio-{{ $entryValue }}" >
                                                            <div class="input-radio" >
                                                                <div class="icon walk-icon">
                                                                    <x-common.svg.list pattern="entry" :value="$entryKey"/>
                                                                </div>
                                                                <span class="radio-button__icon" >{{ __($entryValue) }}</span>
                                                            </div>
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label class="scrollSlideLeftTrigger" >天気</label>
                                            <div class="log-content flex items-center">
                                                <div class="input-radios flex flex-wrap ">
                                                    @foreach(\App\Consts\Common::WETHER_LIST as $wetherKey => $wetherValue)
                                                        {{ Form::radio( 'wether', $wetherKey, old('wether')== $wetherKey ? true: false,
                                                            ['class' => 'radio-button', 'id' => 'radio-' . $wetherValue]
                                                        )}}
                                                        <label for="radio-{{ $wetherValue }}" >
                                                            <div class="input-radio" >
                                                                <div class="icon walk-icon">
                                                                    <x-common.svg.list pattern="wether" :value="$wetherKey"/>
                                                                </div>
                                                                <span class="radio-button__icon" >{{ __($wetherValue) }}</span>
                                                            </div>
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label class="scrollSlideLeftTrigger" >波</label>
                                            <div class="log-content flex items-center">
                                                <div class="input-radios flex flex-wrap ">
                                                    @foreach(\App\Consts\Common::WAVE_LIST as $waveKey => $waveValue)
                                                        {{ Form::radio( 'wave', $waveKey, old('wave')== $waveKey ? true: false,
                                                            ['class' => 'radio-button', 'id' => 'radio-' . $waveValue]
                                                        )}}
                                                        <label for="radio-{{ $waveValue }}" >
                                                            <div class="input-radio" >
                                                                <div class="icon walk-icon">
                                                                    <x-common.svg.list pattern="wave" :value="$waveKey"/>
                                                                </div>
                                                                <span class="radio-button__icon" >{{ __($waveValue) }}</span>
                                                            </div>
                                                        </label>
                                                    @endforeach
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label class="scrollSlideLeftTrigger" >流れ</label>
                                            <div class="log-content flex items-center">
                                                <div class="input-radios flex flex-wrap ">
                                                    @foreach(\App\Consts\Common::FLOW_LIST as $flowKey => $flowValue)
                                                            {{ Form::radio( 'flow', $flowKey, old('flow')== $flowKey ? true: false,
                                                                ['class' => 'radio-button', 'id' => 'radio-' . $flowValue]
                                                            )}}
                                                            <label for="radio-{{ $flowValue }}" >
                                                                <div class="input-radio" >
                                                                    <div class="icon walk-icon">
                                                                        <x-common.svg.list pattern="flow" :value="$flowKey"/>
                                                                    </div>
                                                                    <span class="radio-button__icon" >{{ __($flowValue) }}</span>
                                                                </div>
                                                            </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label class="scrollSlideLeftTrigger" >風</label>
                                            <div class="log-content flex items-center">
                                                <div class="input-radios flex flex-wrap ">
                                                    @foreach(\App\Consts\Common::WIND_LIST as $windKey => $windValue)
                                                            {{ Form::radio( 'wind', $windKey, old('wind')== $windKey ? true: false,
                                                                ['class' => 'radio-button', 'id' => 'radio-' . $windValue]
                                                            )}}
                                                            <label for="radio-{{ $windValue }}" >
                                                                <div class="input-radio" >
                                                                    <div class="icon walk-icon">
                                                                        <x-common.svg.list pattern="wind" :value="$windKey"/>
                                                                    </div>
                                                                    <span class="radio-button__icon" >{{ __($windValue) }}</span>
                                                                </div>
                                                            </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="max_water_depth" class="scrollSlideLeftTrigger" >水深</label>
                                            <div class="log-content flex items-center">
                                                <div class="flex w-1/2 items-center">
                                                    最大
                                                    <div class="flex pr-1 w-1/2">
                                                        <input type="number" id="max_water_depth" name="max_water_depth" value="{{ old('max_water_depth') }}" >
                                                    </div>
                                                    m
                                                </div>
                                                <div class="flex w-1/2 items-center">
                                                    平均
                                                    <div class="flex pr-1 w-1/2">
                                                        <input type="number" id="average_water_depth" name="average_water_depth" value="{{ old('average_water_depth') }}" >
                                                    </div>
                                                    m
                                                </div>
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="start_pressure" class="scrollSlideLeftTrigger" >残圧</label>
                                            <div class="log-content flex items-center">
                                                <div class="w-1/3 pr-1 flex-col">
                                                    <span>開始</span>
                                                    <div class="flex items-end" >
                                                        <input type="number" id="start_pressure" name="start_pressure" value="{{ old('start_pressure') }}" class="w-4/6" step="10" >bar
                                                    </div>
                                                </div>
                                                <div class="w-1/3 pr-1 flex-col">
                                                    <span>終了</span>
                                                    <div class="flex items-end" >
                                                        <input type="number" id="end_pressure" name="end_pressure" value="{{ old('end_pressure') }}" class="w-4/6" step="10" >bar
                                                    </div>
                                                </div>
                                                <div class="w-1/3 pr-1 flex-col">
                                                    <span>使用量</span>
                                                    <div class="flex items-end" >
                                                        <input type="number" id="amount_pressure" name="amount_pressure" value="{{ old('amount_pressure') }}" class="w-4/6" step="10" >bar
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="" class="scrollSlideLeftTrigger" >気温</label>
                                            <div class="log-content flex items-center">
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="" class="scrollSlideLeftTrigger" >水温</label>
                                            <div class="log-content flex items-center">
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="" class="scrollSlideLeftTrigger" >ガス</label>
                                            <div class="log-content flex items-center">
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="" class="scrollSlideLeftTrigger" >タンク</label>
                                            <div class="log-content flex items-center">
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="" class="scrollSlideLeftTrigger" >スーツ</label>
                                            <div class="log-content flex items-center">
                                            </div>
                                        </div>
                                        <div class="log-row scrollSlideRightTrigger">
                                            <label for="" class="scrollSlideLeftTrigger" >ウエイト</label>
                                            <div class="log-content flex items-center">
                                            </div>
                                        </div>







                                        <div class="p-2 w-full mt-4 flex justify-around">
                                            <button onclick="location.href='{{ route('admin.customers.index'); }}'" type="button" class="bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                                            <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-log-layout>
