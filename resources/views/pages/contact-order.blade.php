@extends('layouts.page')

@section('content')
    @dump($errors)
    {{-- Секция для формы "Заявка на позицию волонтёра" --}}
    <section class="forms-volunteer">
        <div class="container">
            <h3 class="text-center">
                Заявка на позицию волонтёра
            </h3>
            <form action="{{ route('contact-order') }}" method="POST">
                @csrf
                <div class="row forms-volunteer-content">
                    <div class="col-sm-12 col-md-8 col-lg-8 forms-volunteer__data">
                        <label for="fio">ФИО</label>
                        <input type="text" name="fio" id="fio" class="form-control">
                        <label for="birthday">Дата рождения</label>
                        <input type="text" name="birthday" id="birthday" class="form-control">
                        <label for="email">Электронная почта</label>
                        <input type="text" name="email" id="email" class="form-control">
                        <label for="nationality">Национальность</label>
                        <input type="text" name="nationality" id="nationality" class="form-control">
                        <label for="languages">Знание языков</label>
                        <input type="text" name="languages" id="languages" class="form-control">
                        <div class="google-Captcha">
                            <img src="/images/Google-Captcha.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 forms-volunteer__img">
                        <input type="file" class="custom-file-input d-none" id="customFile">
                        <label title="загрузить CV" for="customFile">
                            <h5>CV</h5>
                            <img src="/images/placeholder.png" alt="" class="img-fluid img-pointer">
                        </label>
                    </div>
                    <div class="form-check forms-volunteer__check">
                        <div class="check__checkbox">
                            <input class="form-check-input" type="checkbox" data-color="default" value="" id="invalidCheck" required>
                        </div>
                        <div class="check__text">
                            <label class="form-check-label" for="invalidCheck">
                                Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-danger button-all">Подать заявку</button>
                </div>
            </form>
            <div class="empty"></div>
        </div>
    </section>
@endsection
