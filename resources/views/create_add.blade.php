@include('include.header')
<link rel="stylesheet" href="{{ asset('/website/css/investment.css' )}}">
@if($addType == 'investment')
<main>
    <section class="personal_area">
        <form action="{{ route('investment.store') }}" class="personal_area_wrapper" method="post" enctype="multipart/form-data">
            @csrf
            <div class="personal_title_nav_wrapper">
                <h1 class="personal_are_title">Разместить объявление о поиске инвестиций</h1>
            </div>

            <div class="persoanl_area_image_info_btns_wrapper">
                <div class="personal_area_image_link_wrapper">
                    <div class="personal_area_images_wrapper">
                        <div class="personal_area_img1">
                            <img src="../images/peronsal_area_img2.png" alt="">
                        </div>
                        <div class="personal_area_img2">
                            <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">
                        </div>
                        <div class="personal_area_img3">
                            <img src="../images/sign_personal.png" alt="">
                        </div>
                    </div>
                    <div class="write_us_form_inputs_field">
                        <label for="fileinput" class=" write_us_input file_label">
                            <svg width="31" height="27" viewBox="0 0 31 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29 21H21" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M25 17V25" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="file_span">Добавить логотип</span>
                            <input type="file" id="fileinput" hidden name="company_logo">
                        </label>
                    </div>
                </div>
                <div class="personal_area_form_inputs_wrapper_second">
                    <div class="personal_area_form_items_wrapper">
                        <div class="personal_area_form_item first_item_area">
                            <div class="personal_area_form_input select_wrapper">
                                <select name="category" class="form_select">
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" selected>
                                        {{ $cat->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <div class="select_svg">
                                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                            <div class="personal_area_form_input">
                                <input type="text" placeholder="Название компании" value="{{ old('company_name') }}" name="company_name" class="area_form_input">
                                @if ($errors->has('company_name'))
                                    <div class="alert-error">
                                        {{$errors->first('company_name')}}
                                    </div>
                                @endif
                            </div>
                            <div class="personal_area_form_input">
                                <input type="text" placeholder="Необходимая сумма (руб.)" value="{{ old('am_required') }}" name="am_required" class="area_form_input">
                                @if ($errors->has('am_required'))
                                    <div class="alert-error ">
                                        {{$errors->first('am_required')}}
                                    </div>
                                @endif
                            </div>
                            <div class="perosnal_area_form_input">
                                <input type="text" placeholder="Процент от инвестиций" value="{{ old('percentage') }}" name="percentage" class="area_form_input">
                                @if ($errors->has('percentage'))
                                    <div class="alert-error ">
                                        {{$errors->first('percentage')}}
                                    </div>
                                @endif
                            </div>
                            <div class="personal_area_form_input_type_file mobile_area_div">
                                <label for="second_fileinput" class=" write_us_input_second file_label">

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

                                    <span class="file_span_second">Добавить фотографии</span>
                                    <input type="file" id="second_fileinput" maxlength="10" multiple="multiple" name="images1[]"
                                           value=""
                                           hidden accept="image/png, image/gif, image/jpeg">
                                </label>

                            </div>

                            <div class="personal_area_check_input mobile_area_div">
                                <input type="checkbox" class="area_check_input area_form_input"  hidden  name="urgently"
                                       id="check_input_">

                                <label for="check_input_" class="check_label"></label>
                                <span class="check_text">
                                       Добавить в срочные
                                </span>
                            </div>

                            <br>
                            <div class="personal_area_check_input mobile_area_div">
                                <input type="checkbox" class="area_check_input" name="share_progress" hidden
                                       id="check_input_1">
                                <label for="check_input_1" class="check_label"></label>
                                <span class="check_text">
                                                Я хочу делиться ходом работы  с инвесторами
                                            </span>
                            </div>

                        </div>
                        <div class="personal_area_form_item">
                            <div class="personal_area_form_textarea">
                                <textarea name="description" placeholder="Описание деятельности(*Не менее 100 символов)" value="{{ old('description') }}"></textarea>
                                @if ($errors->has('description'))
                                    <div class="alert-error">
                                        {{$errors->first('description')}}
                                    </div>
                                @endif
                            </div>
                            <div class="perosnal_area_form_input">
                                <input type="text" placeholder="Цели" name="objectives"  value="{{ old('objectives') }}" class="area_form_input">
                                @if ($errors->has('objectives'))
                                    <div class="alert-error ">
                                        {{$errors->first('objectives')}}
                                    </div>
                                @endif
                            </div>
                            <div class="hidden_div_second">
                                <div class="personal_area_form_input_type_file">
                                    <label for="second_fileinput" class=" write_us_input_second file_label">

                                        <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                        <span class="file_span_second">Добавить фотографии</span>
                                        <input type="file" id="second_fileinput" hidden name="">
                                    </label>
                                </div>
                                <div class="personal_area_check_input">
                                    <input type="checkbox" class="area_check_input" name="share_progress" hidden id="check_input_second">
                                    <label for="check_input_second" class="check_label"></label>
                                    <span class="check_text">
                                        Я хочу делиться ходом работы  с инвесторами
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="photo_view gallery">
                        <div class="by_count" style="color: #d2be8b;width: 100%;text-align: end;font-size: 16px;font-family: Inter, sans-serif;font-style: normal;margin-bottom: 18px;">
                            Добавлено фотографий <span class="count_img">0</span>/10
                            <div class="er"></div>
                        </div>
                    </div>
                    <div class="personal_area_form_btns_wrapper">
                        <button class="personal_area_form_btn first_area_btn"><a href="{{ url()->previous() }}">Отмена</a></button>
                        <button class="personal_area_form_btn">Сохранить</button>
                    </div>
                </div>


            </div>
        </form>
    </section>

</main>
@endif
{{--@elseif($addType == 'business')--}}
{{--<main>--}}
{{--    <section class="personal_area">--}}
{{--        <form action="{{ route('business.store') }}" class="personal_area_wrapper" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <div class="personal_title_nav_wrapper">--}}
{{--                <h1 class="personal_are_title">Разместить объявление о продаже бизнеса</h1>--}}
{{--            </div>--}}
{{--            <input type="hidden" name="add_type" value="{{ $addType }}">--}}

{{--            <div class="persoanl_area_image_info_btns_wrapper">--}}
{{--                <div class="personal_area_image_link_wrapper">--}}
{{--                    <div class="personal_area_images_wrapper">--}}
{{--                        <div class="personal_area_img1">--}}
{{--                            <img src="../images/peronsal_area_img2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="personal_area_img2">--}}
{{--                            <img src="{{ asset('website/images/avatardefault.svg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="personal_area_img3">--}}
{{--                            <img src="../images/sign_personal.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="write_us_form_inputs_field">--}}
{{--                        <label for="fileinputsecond" class=" write_us_input file_label">--}}

{{--                            <svg width="31" height="27" viewBox="0 0 31 27" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                <path d="M29 21H21" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                <path d="M25 17V25" stroke="#E5D6A0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                            </svg>--}}
{{--                            <span class="file_span">Добавить логотип</span>--}}
{{--                            <input type="file" id="fileinputsecond" name="company_logo" hidden>--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="personal_area_form_inputs_wrapper_second">--}}
{{--                    <div class="personal_area_form_items_wrapper">--}}
{{--                        <div class="personal_area_form_item first_item_area">--}}
{{--                            <div class="personal_area_form_input select_wrapper">--}}
{{--                                <select name="category" class="form_select">--}}
{{--                                    @foreach($categories as $cat)--}}
{{--                                        <option value="{{ $cat->id }}" selected>--}}
{{--                                            {{ $cat->name }}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                <div class="select_svg">--}}
{{--                                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path d="M1 1L9 9L17 1" stroke="#E5D6A0" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    </svg>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="personal_area_form_input ps">--}}
{{--                                @if ($errors->has('company_name'))--}}
{{--                                    <span class="error_text er">--}}
{{--                                        {{$errors->first('company_name')}}--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                                    <input type="text" placeholder="Название компании" class="area_form_input" name="company_name">--}}
{{--                            </div>--}}
{{--                            <div class="personal_area_form_input ps">--}}
{{--                                <input type="text" placeholder="Стоимость (руб.)" class="area_form_input" name="cost">--}}
{{--                                @if ($errors->has('cost'))--}}
{{--                                    <span class="error_text er">--}}
{{--                                        {{$errors->first('cost')}}--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            <div class="perosnal_area_form_input ps">--}}
{{--                                <input type="text" placeholder="Средний доход в месяц (руб.)" class="area_form_input" name="monthly_income">--}}
{{--                                @if ($errors->has('monthly_income'))--}}
{{--                                    <span class="error_text er">--}}
{{--                                        {{$errors->first('monthly_income')}}--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            <div class="personal_area_form_input_type_file mobile_area_div">--}}
{{--                                <label for="second_fileinput" class=" write_us_input_second file_label">--}}

{{--                                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    </svg>--}}

{{--                                    <span class="file_span_second">Добавить фотографии</span>--}}
{{--                                    <input type="file" id="second_fileinput" hidden name="images[]" multiple>--}}
{{--                                </label>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="personal_area_form_item">--}}

{{--                            <div class="perosnal_area_form_input ps">--}}
{{--                                <input type="text" placeholder="Город"  class="area_form_input" name="city">--}}
{{--                                @if ($errors->has('city'))--}}
{{--                                    <span class="error_text er">--}}
{{--                                        {{$errors->first('city')}}--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}

{{--                            <div class="personal_area_form_textarea ps">--}}
{{--                                <textarea wrap="soft" name="description" id="textarea_second" placeholder="Описание деятельности"></textarea>--}}
{{--                                @if ($errors->has('description'))--}}
{{--                                    <span class="error_text er">--}}
{{--                                        {{$errors->first('description')}}--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            <div class="personal_area_form_input_type_file hidden_div_second">--}}
{{--                                <label for="second_fileinput" class=" write_us_input_second file_label">--}}

{{--                                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path d="M25 13V6.55556C25 5.96619 24.7701 5.40095 24.361 4.98421C23.9518 4.56746 23.3968 4.33333 22.8182 4.33333H18.4545L16.2727 1H9.72727L7.54545 4.33333H3.18182C2.60316 4.33333 2.04821 4.56746 1.63904 4.98421C1.22987 5.40095 1 5.96619 1 6.55556V18.7778C1 19.3671 1.22987 19.9324 1.63904 20.3491C2.04821 20.7659 2.60316 21 3.18182 21H17" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        <path d="M13 17C15.2091 17 17 15.2091 17 13C17 10.7909 15.2091 9 13 9C10.7909 9 9 10.7909 9 13C9 15.2091 10.7909 17 13 17Z" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        <path d="M29 21H21" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        <path d="M25 17V25" stroke="#D2BE8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    </svg>--}}

{{--                                    <span class="file_span_second">Добавить фотографии</span>--}}
{{--                                    <input type="file" id="second_fileinput" hidden multiple name="images[]">--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="personal_area_check_input mobile_area_div">--}}
{{--                                <input type="checkbox" checked class="area_check_input" name="urgently" hidden id="check_input_">--}}
{{--                                <label for="check_input_" class="check_label"></label>--}}
{{--                                <span class="check_text">--}}
{{--                                       Добавить в срочные--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="personal_area_form_btns_wrapper">--}}
{{--                        <button class="personal_area_form_btn first_area_btn"> <a href="{{ url()->previous() }}">Отмена</a></button>--}}
{{--                        <button class="personal_area_form_btn">Сохранить</button>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </form>--}}
{{--    </section>--}}

{{--</main>--}}
{{--@endif--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('website/js/confirm.js') }}"></script>
<script>
    if($('.area_check_input').is(":checked")){
        $('.area_check_input').attr('value',1)
    }
    $(function () {

        // Multiple images preview in browser
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

                }

            }

        }

        $('#second_fileinput').on('change', function () {
            if (images.length < 10){
                imagesPreview(this, 'div.gallery');
            }
            $('.count_img').html(images.length)

        });

        $("div.gallery").on('click', '.delete', function (e) {

            images.splice(e, 1);
            $('.count_img').html(images.length)
            $(this).remove();

        });

        $('.personal_area_wrapper').on('submit', function (event) {
            event.preventDefault()
            let textData = new FormData(this)
            textData.delete('images1');
            // textData.set('images',images);
            for(let i of images){
                textData.append('images[]',i)
            }
            $('.error_text_input').remove()
            $.ajax({
                url: "{{ route('investment.store') }}",
                type: "POST",
                data: textData,
                contentType: false,
                processData: false,
                cache: false,
                success: (data) => {
                    console.log(data)
                    if(data){
                        window.location.href=data
                    }
                },
                error: (data) =>{

                },
                statusCode: {
                    422: function (response) {
                       const er = response.responseJSON.errors
                        for(let i in er){
                            $('[name='+i+']').closest("div").append(`<div class='error_text_input'>${er[i][0]}</div>`)

                        }
                    }}
            });

        })




        // setInterval(function() {
        //     $('.count_img').html(images.length)
        // }, 1000);

    })

    // if('div.gallery' == 1){
    //     $("input[type='file']").prop('disabled', true)
    //     console.log(images.length)
    // }
</script>
@include('include.footer')

