@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Контакты</h1>
        <div class="line1"></div>
        <div class="contact">
            <div class="contact__social">
                <ul class="contact__list">
                    <li><a href="#">vk</a></li>
                    <li><a href="#">facebook</a></li>
                    <li><a href="#">twitter</a></li>
                    <li><a href="#">instagram</a></li>
                </ul>
            </div>
            <div class="contact__form">
                <form action="#">
                    <h2 class="contact__title">Задать вопрос:</h2>
                    <label for="name" class="contact__label">Как к вам обращаться?</label>
                    <input type="text" id="name" placeholder="Введите ваше имя" class="contact__input">
                    <label for="email" class="contact__label">Электронная почта</label>
                    <input type="text" id="email" placeholder="Введите электренную почту" class="contact__input">
                    <label for="message" class="contact__label">Электронная почта</label>
                    <textarea rows="6" type="text" id="message" placeholder="Текст вашего сообщения..." class="contact__input"></textarea>
                    <button class="contact__submit" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
