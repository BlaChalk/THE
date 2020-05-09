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
            <div class="contents_inner" id="contents_first">
                <h3 class="text">&emsp;&emsp;隨著科技發展演進，科技沉迷問題日益嚴重，台灣超過八成的青少年擁有自己專屬的手機，其中六成曾使用3C產品到半夜(兒童福利聯盟2019)，在使用網路族群中以學生族群比例最高，占 15.7%(國家發展委員會2017)，青少年們享受著科技帶來的好處，卻忽略了過度使用科技所帶來的身心理壓力，目前的解決方法除了訴諸專業治療管道、請學校加強教育，或請家長多注意孩子之外，我們想從青少年的角度出發，讓瞭解網路沉迷的青少年們，注意自己使用科技的行為，繼而約束自己或尋求應有的協助。<br><br>
                    &emsp;&emsp;  2019年台灣網路研究報告指出，在國內網路使用率中，有81.0%會透過網路學習，七成使用「網路檢索」學習，其次「收看網路影片」學習有 65.1%。將近九成認為網路學習有幫助。因此本團隊以網站作為乘載工具，打入青少年的生活圈，用動畫傳達網路成癮的相關知識，遊戲作為讓青少年了解科技相關產業且如何善加利用科技尋求學習資源，期望讓青少年了解網路成癮的危害，將科技轉化為幫助自己的「兵器」，而非抹滅人生的「凶器」！
                </h3>
            </div>
            <a href="#member" class="pagebtn">
                <svg enable-background="new 0 0 32 32" height="32px" class="arrow" id="arrow1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="arrow_x5F_down"><polygon points="2.002,10 16.001,24 30.002,10  "/></g></svg>
            </a>
        </section>

        <section class="section member_section" id="member">
            <div class="section_title">
                <div class="title">
                    <div class="title_name">組員介紹</div>
                </div>
            </div>

            <div class="contents_inner">
                <div class="member_box">
                    <div class="member_photo">
                        <img src="/img/Fang.png" alt="photo">
                    </div>
                    <div class="member_intro">
                        <div class="member_name">
                            <div class="btn name">方脩硯</div>
                        </div>
                        <h3 class="member_text">程式編寫<br>遊戲、網頁製作</h3>
                    </div>
                </div>
                <div class="member_box">
                    <div class="member_photo">
                        <img src="/img/Wang.png" alt="photo">
                    </div>
                    <div class="member_intro">
                        <div class="member_name">
                            <div class="btn name">王功彥</div>
                        </div>
                        <h3 class="member_text">主視覺設計<br>網頁UI/UX</h3>
                    </div>
                </div>
                <div class="member_box">
                    <div class="member_photo">
                        <img src="/img/Lin.png" alt="photo">
                    </div>
                    <div class="member_intro">
                        <div class="member_name">
                            <div class="btn name">林佑蓉</div>
                        </div>
                        <h3 class="member_text">遊戲美術<br>角色設計</h3>
                    </div>
                </div>
                <div class="member_box">
                    <div class="member_photo">
                        <img src="/img/Gao.png" alt="photo">
                    </div>
                    <div class="member_intro">
                        <div class="member_name">
                            <div class="btn name">高于涵</div>
                        </div>
                        <h3 class="member_text">企畫書撰寫<br>劇本設計</h3>
                    </div>
                </div>
            </div>
            <a href="#contact" class="pagebtn">
                <svg enable-background="new 0 0 32 32" height="32px" class="arrow" id="arrow2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="arrow_x5F_down"><polygon points="2.002,10 16.001,24 30.002,10  "/></g></svg>
            </a>
        </section>

        <section class="section contact_section" id="contact">
            <div class="section_title">
                <div class="title">
                    <div class="title_name">聯絡我們</div>
                </div>
            </div>
            <div class="contents_inner">
                <div class="contact_box" style="left: -30px">
                    <div class="contact_icon">
                        <img src="/img/phone.png" alt="">
                    </div>
                    <h3>+886 *********</h3>
                </div>
                <div class="contact_box">
                    <div class="contact_icon">
                        <img src="/img/FB.png" alt="">
                    </div>
                    <h3>T.H.E</h3>
                </div>
                <div class="contact_box">
                    <div class="contact_icon">
                        <img src="/img/mail.png" alt="">
                    </div>
                    <h3>THE@gmail.com</h3>
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
