@extends('layouts.frontend')

<link rel="stylesheet" href="/css/app.css">

@section('content')

    <div class="container">

        <section class="section subject_section">
            <div class="section_title">
                <div class="title">
                    <div class="title_name">主旨目標</div>
                </div>
            </div>
            <div class="contents_inner">
                <h1 class="text">Hi 我在這裡</h1>
            </div>
        </section>

        <section class="section member_section">
            <div class="section_title">
                <div class="title">
                    <div class="title_name">組員介紹</div>
                </div>
            </div>

            <div class="contents_inner">
                <div class="member_box">
                    <div class="member_photo">
                        <img src="/img/headframe.png" alt="photo">
                    </div>
                    <div class="member_name">
                        <div class="btn name">方脩硯</div>
                    </div>
                </div>
                <div class="member_box">
                    <div class="member_photo">
                        <img src="/img/headframe.png" alt="photo">
                    </div>
                    <div class="member_name">
                        <div class="btn name">王功彥</div>
                    </div>
                </div>
                <div class="member_box">
                    <div class="member_photo">
                        <img src="/img/headframe.png" alt="photo">
                    </div>
                    <div class="member_name">
                        <div class="btn name">高于涵</div>
                    </div>
                </div>
                <div class="member_box">
                    <div class="member_photo">
                        <img src="/img/headframe.png" alt="photo">
                    </div>
                    <div class="member_name">
                        <div class="btn name">林佑蓉</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section contact_section">
            <div class="section_title">
                <div class="title">
                    <div class="title_name">聯絡我們</div>
                </div>
            </div>
            <div class="contents_inner">
                <div class="contact_box">
                    <div class="contact_icon">
                        <img src="/img/phone.png" alt="">
                    </div>
                    <h3>+886 98787878</h3>
                </div>
                <div class="contact_box">
                    <div class="contact_icon">
                        <img src="/img/FB.png" alt="">
                    </div>
                    <h3>FB搜尋: 啊啊8878787878</h3>
                </div>
                <div class="contact_box">
                    <div class="contact_icon">
                        <img src="/img/mail.png" alt="">
                    </div>
                    <h3>THE@gmail.com</h3>
                </div>
                <div class="contact_box">
                    <div class="contact_icon">
                        <img src="/img/IG.png" alt="">
                    </div>
                    <h3>T.H.E</h3>
                </div>
            </div>
        </section>

        <div class="THE">
            <div id="H">HUMAN
            <div id="T">TECONOLOGY</div>
            <div class="X1" id="X">X</div>
            <div class="X2" id="X">X</div>
            <div id="E">EVALUATE</div>
            </div>
        </div>

    </div>

@endsection
