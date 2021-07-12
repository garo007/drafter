@include('include.header')

<link rel="stylesheet" href="{{ asset('/website/css/aplication_form.css' )}}">
<link rel="stylesheet" href="{{ asset('/website/css/investment.css' )}}">
<link rel="stylesheet" type="text/css" href="{{ asset('/website/css/jquery.tagsinput.css' )}}" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />


<main>
    <section class="aplication_form">
        <div class="aplication_form_wrapper">
            <a href='/add/choose-type' class="back_link">
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L0.999999 9L9 17" stroke="#E5D6A0" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>

                Назад</a>
            <h1 class="aplication_form_title">Анкета на продажу бизнеса</h1>
            <div class="aplication_form_items_wrapper">
                <div class="aplication_form_items_titles_wrapper">
                    <p class="aplication_form_items_title afit active" data-id="open_form1" id="opn1">Общая
                        информация</p>
                    <p class="aplication_form_items_title" data-id="open_form2" id="opn2">Сведения о
                        деятельности</p>
                    <p class="aplication_form_items_title" data-id="open_form3" id="opn3">Сведения об объекте</p>
                    <p class="aplication_form_items_title" data-id="open_form4" id="opn4">Сведения об имуществе</p>
                    <p class="aplication_form_items_title" data-id="open_form5" id="opn5">Финансовая информация</p>
                </div>
                <div class="aplication_form_item open" id="open_form1">
                    <form id="multi-file-upload-ajax" method="POST" action="javascript:void(0)" accept-charset="utf-8"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="step1" name="step">
                        <div class="aplication_form_item_first_child">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Название компании</span>
                                <input type="text" class="aplication_form_input" id="name" name="name">
                            </div>


                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Сфера деятельности</span>
                                <select name="category" class="form_select">
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->name }}">
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            {{--                            <div class="aplication_form_inputs_field">--}}
                            {{--                                <span class="aplication_form_input_title">Сфера деятельности</span>--}}
                            {{--                                <input type="text" class="aplication_form_input" id="category" name="category">--}}
                            {{--                            </div>--}}
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Бизнес действующий или приостановлен</span>
                                <select name="status_business" class="form_select" class="aplication_form_input" >
                                        <option value="0">Действующий</option>
                                    <option value="1">Приостановлен</option>
                                </select>
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Причина продажи</span>
                                <input type="text" class="aplication_form_input" id="reason_for_sale"
                                       name="reason_for_sale">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Местонахождение</span>
                                <input type="text" class="aplication_form_input" id="location" name="location" autocomplete="on">
                            </div>
{{--                            <div class="aplication_form_inputs_field">--}}
{{--                                <span class="aplication_form_input_title">Какие объекты находятся рядом</span>--}}
{{--                                <input type="text" class="aplication_form_input" id="objects_are_nearby"--}}
{{--                                       name="objects_are_nearby">--}}
{{--                            </div>--}}

                            <div style="width: 100%;height: 50px;display: flex;justify-content: flex-end;display: none;">
                                <div type="text" id="site" name="site"
                                     style="display: block;max-width: 398px;width: 100%;height: auto;">
                                        <span type="text" name="site" value="test"
                                              style="padding: 2px;padding-left: 12px;padding-right: 21px;border-radius: 15px;box-sizing: border-box;width: auto!Important;display: inline-block;color: #d2be8b;border: 1px solid #d2be8b;position: relative;">

                                        <span class="delete_soc"
                                              style="font-family: 'Open Sans';position: absolute;top: -1px;right: 8px;">x</span>
                                    </span>
                                </div>
                            </div>


                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Сайт,Соц.сети</span>
                                {{--                                <input type="text" class="aplication_form_input aplication_form_input_soc tags" id="site tags_3" name="site">--}}
                                <input id='tags_3' type='text'
                                       class="aplication_form_input aplication_form_input_soc tags" name="site">

                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Ссылка на видео</span>
                                <input id='tags_2' type='text'
                                       class="aplication_form_input aplication_form_input_soc tags" name="site_link">

                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Цена</span>
                                <input type="text" class="aplication_form_input" id="price" name="price">
                            </div>
{{--                            <div class="aplication_form_inputs_field">--}}
{{--                                <span class="aplication_form_input_title">Лого</span>--}}
{{--                                <label for="fileinput_form" class=" write_us_input file_label">--}}

{{--                                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none"--}}
{{--                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path--}}
{{--                                            d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17"--}}
{{--                                            stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"--}}
{{--                                            stroke-linejoin="round"/>--}}
{{--                                        <path--}}
{{--                                            d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z"--}}
{{--                                            stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"--}}
                            {{--                                            stroke-linejoin="round"/>--}}
                            {{--                                        <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"--}}
                            {{--                                              stroke-linejoin="round"/>--}}
                            {{--                                        <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"--}}
                            {{--                                              stroke-linejoin="round"/>--}}
                            {{--                                    </svg>--}}
                            {{--                                    <span class="file_span">Добавить Логотип</span>--}}
                            {{--                                    <input type="file" id="fileinput_form" hidden id="logo" name="logo">--}}
                            {{--                                </label>--}}
                            {{--                            </div>--}}
                            <div class="d-flex">
                                <div class="aplication_form_inputs_field form_inp1"
                                     style="width: 71%;margin-bottom: -24px">
                                    <input type="checkbox" class="area_check_input" name="urgently" hidden
                                           id="check_input_">
                                    <label for="check_input_" class="check_label"></label>
                                    <span class="check_text">
                                    Добавить в срочные
                                </span>
                                </div>
                                <div class="aplication_form_inputs_field form_inp">
                                    <input type="checkbox" class="area_check_input1" name="phone" hidden
                                           id="check_input_1">
                                    <label for="check_input_1" class="check_label1"></label>
                                    <span class="check_text1">
                                    Не принемать звонки
                                </span>
                                </div>

                            </div>


                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Фото</span>
                                <label for="fileinput_form_photo" class=" write_us_input file_label">

                                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17"
                                            stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z"
                                            stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    <span class="file_span">Добавить фотографии</span>
                                    <input type="file" id="fileinput_form_photo" hidden  maxlength="10"  multiple="true"
                                           name="images1[]" accept="image/png, image/gif, image/jpeg">
                                </label>

                            </div>
                            <div class="photo_view1 gallery">

                            </div>
                            <div class="aplication_form_btn_wrapper" id="open_form1">
                                <button class="aplication_form_btn btn_step1">Далее</button>
                            </div>
                        </div>

                    </form>
                    <div class="aplication_form_item_second_child">
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Название компании</p>
                            <p class="aplication_form_input_answer_info" id="business_info_name"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Сфера деятельности</p>
                            <p class="aplication_form_input_answer_info" id="business_info_category"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Бизнес действующий или приостановлен</p>
                            <p class="aplication_form_input_answer_info" id="business_info_status_business"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Причина продажи</p>
                            <p class="aplication_form_input_answer_info" id="business_info_reason_for_sale"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Местонахождение</p>
                            <p class="aplication_form_input_answer_info" id="business_info_location"></p>
                        </div>
                        {{--                        <div class="aplication_form_inputs_answers">--}}
                        {{--                            <p class="aplication_form_input_answer_title">Какие объекты находятся рядом</p>--}}
                        {{--                            <p class="aplication_form_input_answer_info" id="business_info_objects_are_nearby"></p>--}}
                        {{--                        </div>--}}
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Сайт, соцсети</p>
                            <p class="aplication_form_input_answer_info" id="business_info_site"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Ссылка на видео</p>
                            <p class="aplication_form_input_answer_info" id="business_link_site"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Цена</p>
                            <p class="aplication_form_input_answer_info" id="business_info_price"></p>
                        </div>
                        {{--                        <div class="aplication_form_inputs_answers">--}}
                        {{--                            <p class="aplication_form_input_answer_title">Лого</p>--}}
                        {{--                            <p class="aplication_form_input_answer_info"></p>--}}
                        {{--                        </div>--}}
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Добавить в срочные</p>
                            <p class="aplication_form_input_answer_info"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Фото</p>
                            <p class="aplication_form_input_answer_info"></p>
                        </div>
                        <div class="aplication_form_inputs_answer_btn_wrapper">
                            <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                        </div>
                    </div>

                </div>
                <div class="aplication_form_item" id="open_form2">
                    <form id="ajax_step2" method="POST" accept-charset="utf-8">
                        @csrf
                        <input type="hidden" value="step2" name="step">
                        <div class="aplication_form_item_first_child">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Организационно правовая форма</span>
                                <input type="text" class="aplication_form_input" id="organizational_legal_form" name="organizational_legal_form">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Основные направления деятельности предприятия, виды выпускаемой продукции, оказываемых услуг</span>
                                <textarea class="aplication_form_textarea_field" id="description"
                                          name="description"></textarea>
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Количество работников</span>
                                <input type="text" class="aplication_form_input" id="employee_count"
                                       name="employee_count">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Количество руководящего персонала</span>
                                <input type="text" class="aplication_form_input" id="count_management_personnel"
                                       name="count_management_personnel">
                            </div>
                            <div class="aplication_form_btn_wrapper">
                                <button class="aplication_form_btn">Далее</button>
                            </div>
                        </div>
                    </form>
                    <div class="aplication_form_item_second_child">
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Организационно правовая форма</p>
                            <p class="aplication_form_input_answer_info"
                               id="business_info_organizational_legal_form"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Основные направления деятельности
                                предприятия, виды выпускаемой продукции, оказываемых услуг</p>
                            <p class="aplication_form_input_answer_info" id="business_info_description"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Количество работников</p>
                            <p class="aplication_form_input_answer_info" id="business_info_employee_count"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Количество руководящего персонала</p>
                            <p class="aplication_form_input_answer_info"
                               id="business_info_count_management_personnel"></p>
                        </div>
                        <div class="aplication_form_inputs_answer_btn_wrapper">
                            <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                        </div>
                    </div>
                </div>

                <div class="aplication_form_item" id="open_form3">
                    <form id="ajax_step3" method="POST" accept-charset="utf-8">
                        @csrf
                        <input type="hidden" value="step3" name="step">
                        <div class="aplication_form_item_first_child">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Аренда/собственность</span>
                                <select name="area" id="area" class="form_select">
                                    <option value="Аренда">Аренда</option>
                                    <option value="Собственность">Собственность</option>
                                </select>
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Жилое/нежилое</span>
                                <select name="residential_nonresidential" id="residential_nonresidential"
                                        class="form_select">
                                    <option value="Жилое">Жилое</option>
                                    <option value="Нежилое">Нежилое</option>
                                </select>
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Этаж</span>
                                <input type="text" name="floor" id="floor" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_btn_wrapper">
                                <button class="aplication_form_btn">Далее</button>
                            </div>
                        </div>
                    </form>
                    <div class="aplication_form_item_second_child">
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Аренда/собственность</p>
                            <p class="aplication_form_input_answer_info" id="business_info_area"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Жилое/нежилое</p>
                            <p class="aplication_form_input_answer_info"
                               id="business_info_residential_nonresidential"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Этаж</p>
                            <p class="aplication_form_input_answer_info" id="business_info_floor"></p>
                        </div>
                        <div class="aplication_form_inputs_answer_btn_wrapper">
                            <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                        </div>
                    </div>
                </div>
                <div class="aplication_form_item" id="open_form4">
                    <form id="ajax_step4" method="POST" accept-charset="utf-8">
                        @csrf
                        <input type="hidden" value="step4" name="step">

                        <div class="aplication_form_item_first_child">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Перечень объектов недвижимости, которые находятся в собственности</span>
                                <input type="text" class="aplication_form_input" name="subject" id="subject">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Общая  площадь (м²)</span>
                                <input type="text" class="aplication_form_input" name="area_m2" id="area_m2">
                            </div>
                            <div class="aplication_form_inputs_field">
                            <span class="aplication_form_input_title">Перечень оборудования,
                                передаваемого при продаже</span>
                                <input type="text" class="aplication_form_input" name="equipment" id="equipment">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Наличие лицензий, сертификатов</span>
                                <input type="text" class="aplication_form_input" name="licenses" id="licenses">
                            </div>
                            <div class="aplication_form_btn_wrapper">
                                <button class="aplication_form_btn">Далее</button>
                            </div>
                        </div>

                    </form>
                    <div class="aplication_form_item_second_child">
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Перечень объектов недвижимости, которые
                                находятся в собственности</p>
                            <p class="aplication_form_input_answer_info" id="business_info_subject"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Общая площадь (м²)</p>
                            <p class="aplication_form_input_answer_info" id="business_info_area_m2"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Перечень оборудования,передаваемого при
                                продаже</p>
                            <p class="aplication_form_input_answer_info" id="business_info_equipment"></p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Наличие лицензий, сертификатов</p>
                            <p class="aplication_form_input_answer_info" id="business_info_licenses"></p>
                        </div>
                        <div class="aplication_form_inputs_answer_btn_wrapper">
                            <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                        </div>
                    </div>
                </div>
                <div class="aplication_form_item" id="open_form5">
                    <form id="ajax_step5" method="POST" accept-charset="utf-8">
                        @csrf
                        <input type="hidden" value="step5" name="step">

                        <div class="aplication_form_item_first_child">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Средний оборот в месяц, руб.</span>
                                <input type="text" class="aplication_form_input" name="avg_monthly" id="avg_monthly">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Фонд заработной платы, руб.</span>
                                <input type="text" class="aplication_form_input" name="wage_fund" id="wage_fund">
                            </div>
                            <div class="aplication_form_inputs_field">
                            <span class="aplication_form_input_title">
                                Стоимость аренды</span>
                                <input type="text" class="aplication_form_input" id="rent_price" name="rent_price">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Стоимость коммунальных платежей</span>
                                <input type="text" class="aplication_form_input" id="cost_utility_bills"
                                       name="cost_utility_bills">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Операционные расходы, руб.</span>
                                <input type="text" class="aplication_form_input" id="operating_expenses"
                                       name="operating_expenses">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Чистая прибыль в месяц, руб.</span>
                                <input type="text" class="aplication_form_input" id="net_profit_month"
                                       name="net_profit_month">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Срок окупаемости бизнеса</span>
                                <input type="text" class="aplication_form_input" id="business_payback_period"
                                       name="business_payback_period">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Наличие задолжностей, штрафов</span>
                                <input type="text" class="aplication_form_input" id="debts_fines" name="debts_fines">
                            </div>
                            <div class="aplication_form_btn_wrapper">
                                <button class="aplication_form_save_btn">Сохранить</button>
                            </div>
                        </div>
                    </form>
                    <div class="aplication_form_item_second_child">
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Название компании</p>
                            <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Сфера деятельности</p>
                            <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Бизнес действующий или приостановлен</p>
                            <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Причина продажи</p>
                            <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Местонахождение</p>
                            <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                        </div>
                        {{--                            <div class="aplication_form_inputs_answers">--}}
                        {{--                                <p class="aplication_form_input_answer_title">Какие объекты находятся рядом</p>--}}
                        {{--                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>--}}
                        {{--                            </div>--}}
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Сайт, соцсети</p>
                            <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Цена</p>
                            <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                        </div>
                        <div class="aplication_form_inputs_answers">
                            <p class="aplication_form_input_answer_title">Фото</p>
                            <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                        </div>
                        <div class="aplication_form_inputs_answer_btn_wrapper">
                            <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                        </div>
                    </div>
                </div>
                <div class="mobile_aplication_form_items_wrapper">

                    <form class="mobile_aplication_form_item">
                        <p class="mobile_aplication_form_items_title">Общая информация</p>
                        <div class="aplication_form_item_first_child open-display1">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Название компании</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Сфера деятельности</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Бизнес действующий или приостановлен</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Причина продажи</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Местонахождение</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            {{--                            <div class="aplication_form_inputs_field">--}}
                            {{--                                <span class="aplication_form_input_title">Какие объекты находятся рядом</span>--}}
                            {{--                                <input type="text" class="aplication_form_input">--}}
                            {{--                            </div>--}}
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Сайт, соцсети</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Цена</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Фото</span>
                                <label for="fileinput_form2" class=" write_us_input file_label">

                                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17"
                                            stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z"
                                            stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    <span class="file_span">Добавить фотографии</span>
                                    <input type="file" id="fileinput_form2" hidden>
                                </label>
                            </div>

                        </div>
                        <div class="aplication_form_item_second_child  hide-display1">
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Название компании</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Сфера деятельности</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Бизнес действующий или приостановлен</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Причина продажи</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Местонахождение</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            {{--                            <div class="aplication_form_inputs_answers">--}}
                            {{--                                <p class="aplication_form_input_answer_title">Какие объекты находятся рядом</p>--}}
                            {{--                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>--}}
                            {{--                            </div>--}}
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Сайт, соцсети</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Цена</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Фото</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answer_btn_wrapper">
                                <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                            </div>
                        </div>
                    </form>
                    <form class="mobile_aplication_form_item">
                        <p class="mobile_aplication_form_items_title">Сведения о деятельности</p>
                        <div class="aplication_form_item_first_child">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Организационно правовая форма</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Основные направления деятельности предприятия, виды выпускаемой продукции, оказываемых услуг</span>
                                <textarea class="aplication_form_textarea_field"></textarea>
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Количество работников</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Количество руководящего персонала</span>
                                <input type="text" class="aplication_form_input">
                            </div>

                        </div>
                        <div class="aplication_form_item_second_child">
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Название компании</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Сфера деятельности</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Бизнес действующий или приостановлен</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Причина продажи</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Местонахождение</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            {{--                            <div class="aplication_form_inputs_answers">--}}
                            {{--                                <p class="aplication_form_input_answer_title">Какие объекты находятся рядом</p>--}}
                            {{--                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>--}}
                            {{--                            </div>--}}
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Сайт, соцсети</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Цена</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Фото</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answer_btn_wrapper">
                                <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                            </div>
                        </div>
                    </form>
                    <form class="mobile_aplication_form_item">
                        <p class="mobile_aplication_form_items_title">Сведения об объекте</p>
                        <div class="aplication_form_item_first_child">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Аренда/собственность</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Жилое/нежилое</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Этаж</span>
                                <input type="text" class="aplication_form_input">
                            </div>

                        </div>
                        <div class="aplication_form_item_second_child">
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Название компании</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Сфера деятельности</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Бизнес действующий или приостановлен</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Причина продажи</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Местонахождение</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            {{--                            <div class="aplication_form_inputs_answers">--}}
                            {{--                                <p class="aplication_form_input_answer_title">Какие объекты находятся рядом</p>--}}
                            {{--                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>--}}
                            {{--                            </div>--}}
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Сайт, соцсети</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Цена</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Фото</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answer_btn_wrapper">
                                <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                            </div>
                        </div>
                    </form>
                    <form class="mobile_aplication_form_item">
                        <p class="mobile_aplication_form_items_title">Сведения об имуществе</p>

                        <div class="aplication_form_item_first_child">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Перечень объектов недвижимости, которые находятся в собственности</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Общая  площадь (м²)</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                            <span class="aplication_form_input_title">Перечень оборудования,
                                передаваемого при продаже</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Наличие лицензий, сертификатов</span>
                                <input type="text" class="aplication_form_input">
                            </div>

                        </div>
                        <div class="aplication_form_item_second_child">
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Название компании</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Сфера деятельности</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Бизнес действующий или приостановлен</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Причина продажи</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Местонахождение</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            {{--                            <div class="aplication_form_inputs_answers">--}}
                            {{--                                <p class="aplication_form_input_answer_title">Какие объекты находятся рядом</p>--}}
                            {{--                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>--}}
                            {{--                            </div>--}}
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Сайт, соцсети</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Цена</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Фото</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answer_btn_wrapper">
                                <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                            </div>
                        </div>
                    </form>
                    <form class="mobile_aplication_form_item">
                        <p class="mobile_aplication_form_items_title">Финансовая информация</p>
                        <div class="aplication_form_item_first_child">
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Средний оборот в месяц, руб.</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Фонд заработной платы, руб.</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                            <span class="aplication_form_input_title">
                                Стоимость аренды</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Стоимость коммунальных платежей</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Операционные расходы, руб.</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Чистая прибыль в месяц, руб.</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Срок окупаемости бизнеса</span>
                                <input type="text" class="aplication_form_input">
                            </div>
                            <div class="aplication_form_inputs_field">
                                <span class="aplication_form_input_title">Наличие задолжностей, штрафов</span>
                                <input type="text" class="aplication_form_input">
                            </div>

                            <div class="aplication_form_btn_wrapper">
                                <button class="aplication_form_save_btn">Сохранить</button>
                            </div>
                        </div>
                        <div class="aplication_form_item_second_child">
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Средний оборот в месяц, руб.</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Фонд заработной платы, руб.</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Стоимость аренды</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Стоимость коммунальных платежей</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Операционные расходы, руб.</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Чистая прибыль в месяц, руб.</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Срок окупаемости бизнеса</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answers">
                                <p class="aplication_form_input_answer_title">Наличие задолжностей, штрафов</p>
                                <p class="aplication_form_input_answer_info">Lorem Ipsum</p>
                            </div>
                            <div class="aplication_form_inputs_answer_btn_wrapper">
                                <button class="aplication_form_inputs_answer_btn">Редактировать</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</main>

@include('include.footer')
<script src="{{ asset('website/js/form.js') }}"></script>
<script src="{{ asset('website/js/jquery.tagsinput.js' )}}"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
{{--<script>--}}
{{--    $('.btn_step1').click(function (){--}}
{{--        let name = $('#name').val();--}}
{{--        let category = $('#category').val();--}}
{{--        let status_business = $('#status_business').val();--}}
{{--        let reason_for_sale = $('#reason_for_sale').val();--}}
{{--        let location = $('#location').val();--}}
{{--        let objects_are_nearby = $('#objects_are_nearby').val();--}}
{{--        let site = $('#site').val();--}}
{{--        let price = $('#price').val();--}}

{{--        $.ajax({--}}
{{--            url: "{{ route('create_survey') }}",--}}
{{--            type: "POST",--}}
{{--            data: {--}}
{{--                name:name,--}}
{{--                category:category,--}}
{{--                status_business:status_business,--}}
{{--                reason_for_sale:reason_for_sale,--}}
{{--                location:location,--}}
{{--                objects_are_nearby:objects_are_nearby,--}}
{{--                site:site,--}}
{{--                price:price,--}}
{{--                step:'step1',--}}
{{--            },--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            },--}}
{{--            success: (data) => {--}}
{{--                if(data.error){--}}
{{--                    if(data.error['name']){ $('#name').css('border', '1px solid #c34d4d') }--}}
{{--                    else if(data.error['category']){ $('#category').css('border', '1px solid #c34d4d') }--}}
{{--                    else if(data.error['status_business']){ $('#status_business').css('border', '1px solid #c34d4d') }--}}
{{--                    else if(data.error['reason_for_sale']){ $('#reason_for_sale').css('border', '1px solid #c34d4d') }--}}
{{--                    else if(data.error['location']){ $('#location').css('border', '1px solid #c34d4d') }--}}
{{--                    else if(data.error['objects_are_nearby']){ $('#objects_are_nearby').css('border', '1px solid #c34d4d') }--}}
{{--                    else if(data.error['site']){ $('#site').css('border', '1px solid #c34d4d') }--}}
{{--                    else if(data.error['price']){ $('#price').css('border', '1px solid #c34d4d') }--}}
{{--                }--}}
{{--                else{--}}
{{--                    $("#opn1").removeClass('active')--}}
{{--                    $("#opn2").addClass('afit')--}}
{{--                    $("#opn2").addClass('active')--}}
{{--                    $("#open_form2").addClass('open')--}}
{{--                    $("#open_form1").removeClass('open')--}}
{{--                    $("#open_form1 .aplication_form_item_first_child").css('display','none')--}}
{{--                    $("#open_form1 .aplication_form_item_second_child").css('display','block')--}}

{{--                }--}}
{{--            }--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}
<script type="text/javascript">
    $(function () {

        $('#tags_3').tagsInput({
            width: '100px',
        });
        $('#tags_2').tagsInput({
            width: '100px',
        });
    });
    $('.check_label1').on('click',function (){
            $('.form_inp').toggleClass('active')

    })
    // $(".check_label").on('click',function (){
    //     if ($(".form_inp1 .active")[0]){
    //         alert("Check box in Checked");
    //     } else {
    //         alert("Check box is Unchecked");
    //     }
    // })
     $(".check_label").on('click',function (){

    if($('.area_check_input').is(":checked")){
        $('.area_check_input').attr('value',0)
    }else{
        $('.area_check_input').attr('value',1)
    }
     })
    $(".check_label1").on('click',function (){
        if($('.area_check_input1').is(":checked")){
            $('.area_check_input1').attr('value',0)
        }else{
            $('.area_check_input1').attr('value',1)
        }
    })


</script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $('.aplication_form_inputs_answer_btn').on('click', function () {
            $(this).parents('.aplication_form_item').find('.aplication_form_item_first_child').show()
            $(this).parents('.aplication_form_item_second_child').hide()
        })
        // $('.aplication_form_inputs_answer_btn').on('click',function (){
        //     $(this).parents('.aplication_form_item').find('.aplication_form_item_first_child').show()
        //     $(this).parents('.aplication_form_item_second_child').hide()
        // })
        let images = [];
        let imagesPreview = function (input, placeToInsertImagePreview) {

            if (input.files) {
                let filesAmount = input.files.length;
                if (filesAmount < 10) {
                    for (let i = 0; i < filesAmount; i++) {
                        let reader = new FileReader();

                        reader.onload = function (event) {
                            let image = '<a class="delete" data-value=' + (i++) + '><img class="images" src=' + event.target.result + '><span class="cl_span">&#10006;</span></a>';
                            $($.parseHTML(image))
                                .appendTo(placeToInsertImagePreview);
                            // $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);

                        }

                        reader.readAsDataURL(input.files[i]);
                        images.push(input.files[i]);
                    }
                } else {
                    alert('Maximum 10 image')
                }

            }

        }

        $('#fileinput_form_photo').on('change', function () {
            if (images.length <= 10) {
                imagesPreview(this, 'div.gallery');
            }
        });

        $("div.gallery").on('click', '.delete', function (e) {

            images.splice(e, 1);
            $(this).remove();

        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#multi-file-upload-ajax').submit(function (event) {
            //console.log(new FormData(this))
            event.preventDefault();
            let textData = new FormData(this)
            textData.delete('images1');
            // textData.set('images',images);
            for(let i of images){
                textData.append('images[]',i)
            }
            $.ajax({
                url: "{{ route('create_survey') }}",
                method: "POST",
                data: textData,
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    if (data.error) {
                        if (data.error['name']) {
                            $('#name').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['category']) {
                            $('#category').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['status_business']) {
                            $('#status_business').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['reason_for_sale']) {
                            $('#reason_for_sale').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['location']) {
                            $('#location').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['objects_are_nearby']) {
                            $('#objects_are_nearby').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['site']) {
                            $('#site').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['price']) {
                            $('#price').css('border', '1px solid #c34d4d')
                        }
                    } else {

                        $("#opn1").removeClass('active')
                        $("#opn2").addClass('afit')
                        $("#opn2").addClass('active')
                        $("#open_form2").addClass('open')
                        $("#open_form1").removeClass('open')
                        $("#open_form1 .aplication_form_item_first_child").css('display', 'none')
                        $("#open_form1 .aplication_form_item_second_child").css('display', 'block')

                        $('#business_info_name').text(data.input.name)
                        $('#business_info_category').text(data.input.category)
                        $('#business_info_status_business').text(data.input.status_business)
                        $('#business_info_reason_for_sale').text(data.input.reason_for_sale)
                        $('#business_info_location').text(data.input.location)
                        $('#business_info_site').text(data.input.site)
                        $('#business_info_price').text(data.input.price)

                    }
                }
            });
        });
        $('#ajax_step2').submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('create_survey') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    if (data.error) {
                        if (data.error['organizational_legal_form']) {
                            $('#organizational_legal_form').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['description']) {
                            $('#description').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['employee_count']){
                            $('#employee_count').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['count_management_personnel']){
                            $('#count_management_personnel').css('border', '1px solid #c34d4d')
                        }
                    } else {
                        $("#opn2").removeClass('active')
                        $("#opn3").addClass('afit')
                        $("#opn3").addClass('active')
                        $("#open_form3").addClass('open')
                        $("#open_form2").removeClass('open')
                        $("#open_form2 .aplication_form_item_first_child").css('display', 'none')
                        $("#open_form2 .aplication_form_item_second_child").css('display', 'block')

                        $('#business_info_organizational_legal_form').text(data.input.organizational_legal_form)
                        $('#business_info_description').text(data.input.description)
                        $('#business_info_employee_count').text(data.input.employee_count)
                        $('#business_info_count_management_personnel').text(data.input.count_management_personnel)
                    }
                }
            });
        });
        $('#ajax_step3').submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('create_survey') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    if (data.error) {
                        if (data.error['area']) {
                            $('#area').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['residential_nonresidential']) {
                            $('#residential_nonresidential').css('border', '1px solid #c34d4d')
                        }
                        if (data.error['root']) {
                            $('#floor').css('border', '1px solid #c34d4d')
                        }
                    } else {
                        $("#opn3").removeClass('active')
                        $("#opn4").addClass('afit')
                        $("#opn4").addClass('active')
                        $("#open_form4").addClass('open')
                        $("#open_form3").removeClass('open')
                        $("#open_form3 .aplication_form_item_first_child").css('display', 'none')
                        $("#open_form3 .aplication_form_item_second_child").css('display', 'block')

                        $('#business_info_area').text(data.input.area)
                        $('#business_info_residential_nonresidential').text(data.input.residential_nonresidential)
                        $('#business_info_floor').text(data.input.floor)
                    }
                }
            });
        });
        $('#ajax_step4').submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('create_survey') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    if (data.error) {
                        if (data.error['subject']) {
                            $('#subject').css('border', '1px solid #c34d4d')
                        } else {
                            $('#subject').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['area_m2']) {
                            $('#area_m2').css('border', '1px solid #c34d4d')
                        } else {
                            $('#area_m2').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['equipment']) {
                            $('#equipment').css('border', '1px solid #c34d4d')
                        } else {
                            $('#equipment').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['licenses']) {
                            $('#licenses').css('border', '1px solid #c34d4d')
                        } else {
                            $('#licenses').css('border', '1px solid #9b8e6c')
                        }
                    } else {
                        $("#opn4").removeClass('active')
                        $("#opn5").addClass('afit')
                        $("#opn5").addClass('active')
                        $("#open_form5").addClass('open')
                        $("#open_form4").removeClass('open')
                        $("#open_form4 .aplication_form_item_first_child").css('display', 'none')
                        $("#open_form4 .aplication_form_item_second_child").css('display', 'block')

                        $('#business_info_subject').text(data.input.subject)
                        $('#business_info_area_m2').text(data.input.area_m2)
                        $('#business_info_equipment').text(data.input.equipment)
                        $('#business_info_licenses').text(data.input.licenses)
                    }
                }
            });
        });
        $('#ajax_step5').submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('create_survey') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    if (data.error) {
                        if (data.error['avg_monthly']) {
                            $('#avg_monthly').css('border', '1px solid #c34d4d')
                        } else {
                            $('#avg_monthly').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['wage_fund']) {
                            $('#wage_fund').css('border', '1px solid #c34d4d')
                        } else {
                            $('#wage_fund').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['rent_price']) {
                            $('#rent_price').css('border', '1px solid #c34d4d')
                        } else {
                            $('#rent_price').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['cost_utility_bills']) {
                            $('#cost_utility_bills').css('border', '1px solid #c34d4d')
                        } else {
                            $('#cost_utility_bills').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['operating_expenses']) {
                            $('#operating_expenses').css('border', '1px solid #c34d4d')
                        } else {
                            $('#operating_expenses').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['net_profit_month']) {
                            $('#net_profit_month').css('border', '1px solid #c34d4d')
                        } else {
                            $('#net_profit_month').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['business_payback_period']) {
                            $('#business_payback_period').css('border', '1px solid #c34d4d')
                        } else {
                            $('#business_payback_period').css('border', '1px solid #9b8e6c')
                        }
                        if (data.error['debts_fines']) {
                            $('#debts_fines').css('border', '1px solid #c34d4d')
                        } else {
                            $('#debts_fines').css('border', '1px solid #9b8e6c')
                        }

                    } else {

                    }
                }
            });
        });
    });
</script>
