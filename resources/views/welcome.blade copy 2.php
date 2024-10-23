<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizgame</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  {{-- <link rel="stylesheet" type="text/css" href="{{ assets('css/style.css') }}"> --}}

    {{-- <link rel="stylesheet" href="{{ mix('css/style.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> --}}
    {{-- <link rel="stylesheet" href="css/style.css"> --}}

</head>
<style>
    html {
    box-sizing: border-box;
}

*,
*:before,
*:after {
    box-sizing: inherit;
}

html,
body {
    overflow: hidden;
    position: relative;
    height: 100%;
}

body {
    background: #a8c0ff;
    font-family: 'Comfortaa', cursive;
    color: #fff;
    user-select: none;
    margin: 0;
    padding: 0;
    counter-reset: points;
}

a {
    text-decoration: none;
    color: inherit;
}

section {
    background: #a8c0ff;
    background: -webkit-linear-gradient(to right, #3f2b96, #a8c0ff);
    background: linear-gradient(to right, #3f2b96, #a8c0ff);
    padding-top: 80px;
    overflow-y: hidden;
}

main {
    background: rgba(217, 214, 228, 0.12);
    border-radius: 10px;
    padding: 5px 20px 50px;
    width: 95%;
    max-width: 500px;
    margin: 0 auto 214px;
}

.text-container {
    text-align: center;
}

.quiz-options {
    margin: 60px 0;
}

[type=radio] {
    border: 0;
    height: 0.0625rem;
    width: 0.0625rem;
    position: absolute;
}

label {
    display: flex;
    align-items: center;
    border-radius: 5px;
    background: rgba(255, 5, 5, 0.72);
    margin-bottom: 15px;
    padding: 6px 0;
    position: relative;
    width: 100%;
    color: #000;
}

label:hover .alphabet {
    background: #000;
    color: #fff;
}

label .alphabet {
    border-radius: 5px;
    border: solid 1px #000;
    padding: .4rem .5rem .4rem;
    width: 2.3rem;
    margin: 0 1.3rem 0 .7rem;
    display: flex;
    justify-content: center;
    color: #000;
}

label .icon {
    height: auto;
    position: absolute;
    left: 92%;
    top: 12px;
}

label .jfdedgwfzexf4hjin {
    width: 18px;
}

label .jdsjkefkefkefefexco {
    width: 22px;
}

.jshdgdgwgdwfdfwdwjfdjwwdwdco:checked+label {
    background: rgb(76, 245, 194);
    font-weight: bold;
    text-transform: uppercase;
    -webkit-text-stroke: .6px #fff;
}

.jshdgdgwgdwfdfwdwjfdjwwdwdco:checked+label .alphabet {
    background: #000000;
    color: #FFF;
}

.jshdgdgwgdwfdfwdwjfdjwwdwdin:checked+label {
    font-weight: bold;
    text-transform: uppercase;
    -webkit-text-stroke: .6px #fff;
}

.jshdgdgwgdwfdfwdwjfdjwwdwdin:checked+label .alphabet {
    background: #000;
    color: #fff;
}

.one-a:valid+label,
.two-c:valid+label,
.three-c:valid+label,
.four-b:valid+label,
.five-a:valid+label {
    animation: flash 0.6s infinite;
}

@keyframes flash {
    0% {
        background-color: #4cf5c2;
    }

    49% {
        background-color: #4cf5c2;
    }

    50% {
        background-color: #000;
    }

    99% {
        background-color: #000;
    }

    100% {
        background-color: #4cf5c2;
    }
}

input:invalid+label {
    background: #fff;
}

input:invalid+label:hover {
    background: linear-gradient(to right, #d8d9da 10%, #ffffff 80%);
}

input:valid+label {
    color: #fff;
    pointer-events: none
}

#btn {
    border: 1px solid #000;
    border-radius: 50px;
    background: rgb(247, 206, 206);
    color: #000;
    display: block;
    font-size: 1.1rem;
    font-weight: 600;
    width: 57%;
    margin: 0 auto;
    outline: none;
    padding: 11px 0;
    text-align: center;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}

#btn:hover {
    background: rgba(255, 255, 255, 0.671);
    color: rgba(0, 0, 0, 0.749);
    border: 1px solid #000;
}

form:invalid #btn {
    pointer-events: none;
    background: rgba(248, 214, 214, 0.767);
}

.btn:hover {
    background: #000;
    color: #fff;
}

.score-counter {
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    width: 210px;
    height: 9%;
    background: rgba(0, 0, 0, 0.749);
    border: 4px solid #000;
    position: fixed;
    top: 5px;
    right: 10px;
    box-shadow: inset 2px -2px 9px #020202, inset -2px 2px 9px #d2d2d2;
}

.score-text {
    margin: 0 20px;
}

.score-counter::after {
    content: counter(points) "/5";
}

.one-a:checked,
.two-c:checked,
.three-c:checked,
.four-b:checked,
.five-a:checked {
    counter-increment: points;
}

#game-over {
    background: linear-gradient(rgb(28, 22, 49), rgba(18, 18, 25, 0.9)), repeating-linear-gradient(0, transparent, transparent 2px, black 3px, black 3px);
    font-family: 'Bungee', cursive;
    /* position: absolute; */
    width: 100%;
    height: 100vh;
}

.game-over-content {
    display: grid;
    justify-items: center;
    width: 80%;
    margin: 0 auto;
    padding: 120px 0;
}

#game-over h1 {
    background: url("https://res.cloudinary.com/dvhndpbun/image/upload/e_brightness:-20/v1588605696/01-01_web_designers_code_ld_img_dgytil.png");
    -webkit-background-clip: text;
    color: transparent;
    background-size: contain;
    font-size: 5rem;
    line-height: 1.2;
    margin: 0;
    position: relative;
}

h1::before {
    content: attr(data-heading);
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    background: linear-gradient(45deg, rgba(255, 255, 255, 0) 45%, rgba(255, 255, 255, 0.8) 50%, rgba(255, 255, 255, 0) 55%, rgba(255, 255, 255, 0) 100%);
    -webkit-background-clip: text;
    color: transparent;
    mix-blend-mode: screen;
    animation: shine 1s infinite;
    background-size: 200%;
    text-shadow: 2px 2px 10px rgba(#000, 0.2), -2px 2px 10px rgba(#000, 0.2), -2px -2px 10px rgba(#000, 0.2);
}

@keyframes pulse {
    0% {
        opacity: 1;
    }

    49% {
        opacity: 9;
    }

    50% {
        opacity: .8;
    }

    99% {
        opacity: .5;
    }

    100% {
        opacity: .3;
    }
}

@keyframes shine {
    0% {
        background-position: -100%;
    }

    100% {
        background-position: 100%;
    }
}

.over-text-cont {
    text-align: center;
}

.over-text-cont h2 {
    font-family: 'Sirin Stencil', cursive;
}

.over-text-cont h2::after {
    content: counter(points) "0/50";
    margin-left: 15px;
}

#refresh {
    color: #fff;
    position: relative;
    height: 100vh;
}

.refresh-content {
    display: grid;
    font-size: 1.2rem;
    place-items: center;
    width: 70%;
    line-height: 2;
    margin: 0 auto;
    text-align: center;
}

.refresh-content svg {
    width: 50px;
    height: auto;
    animation: pulse 1s infinite;
}


/* MEDIA QUERY */

@media (max-width: 420px) {
    body {
        font-size: .8rem;
    }

    main {
        width: 92%;
    }

    section {
        background: linear-gradient(to right, #3f2b96, #1f0961);
    }

    label {
        font-size: .71rem;
    }

    label .alphabet {
        margin: 0 .9rem 0 .7rem;
    }

    .jshdgdgwgdwfdfwdwjfdjwwdwdco:checked+label {
        -webkit-text-stroke: .1px #fff;
    }

    label .jdsjkefkefkefefexco {
        width: 16px;
    }

    label .jfdedgwfzexf4hjin {
        width: 14px;
    }

    #game-over h1 {
        font-size: 3rem;
    }

    .score-counter {
        width: 120px;
        height: 5%;
        font-size: .7rem;
    }

    .score-text {
        margin: 0 20px 0 0;
    }

    .over-text-cont h2 {
        margin-bottom: 40px;
    }

    .over-text-cont #btn {
        padding: 3px 0;
    }

    .refresh-content {
        width: 90%;
    }

    .refresh-content {
        display: grid;
        font-size: .8rem;
    }
}

@media (max-width: 325px) {

    label {
        font-size: .63rem;
    }

    label .alphabet {
        margin: 0 .55rem 0 .7rem;
    }

    label .jdsjkefkefkefefexco {
        width: 14px;
    }

    label .jfdedgwfzexf4hjin {
        width: 12px;
    }
/* timer code */
    #timer {
        font-size: 24px;
        font-weight: bold;
        color: #ff0000; /* Red color for urgency */
    }

}

</style>
<style>
    .timer-container {
        position: relative;
        width: 200px;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .inner-circle {
        position: absolute;
        width: 160px;
        height: 160px;
        background-color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .timer-number {
        font-size: 48px;
        font-weight: bold;
    }

    svg {
        position: absolute;
        top: 0;
        left: 0;
        width: 200px;
        height: 200px;
    }

    circle {
        fill: none;
        stroke: #00aaff;
        stroke-width: 12;
        stroke-dasharray: 565.48; /* Circumference of the circle */
        stroke-dashoffset: 565.48;
        transition: stroke-dashoffset 1s linear;
        transform: rotate(-90deg);
        transform-origin: 50% 50%;
    }
</style>
<body>

    
  
     {{-- <div id="timer">
        <span id="countdown">30</span> seconds remaining
    </div>
       --}}
    
    <!-- QUIZ ONE -->
  <section class="section-1 d-flex" id="section-1">
    <div class="timer-container">
        <div class="inner-circle">
            {{-- <div id="timer-number">30</div> <!-- Timer Number --> --}}
            {{-- <text id="timer-text" x="100" y="110" text-anchor="middle" alignment-baseline="middle">30</text>  --}}
        </div>
        <svg>
            <circle class="progress-ring" r="90" cx="100" cy="100"></circle> <!-- Circular Progress -->
            <text class="timer-number" x="100" y="110" text-anchor="middle" alignment-baseline="middle" id="quiz1">50</text> 
        </svg>
    </div>

    <main>
       
        <div class="text-container">
            <h3>Pure CSS Quiz</h3>
            <p>QUESTION 1 OF 5</p>
            <p>What does CSS stand for?</p>
        </div>
        
        <form>
            <div class="quiz-options">
                <input type="radio" class="input-radio one-a jshdgdgwgdwfdfwdwjfdjwwdwdco" id="one-a" name="yes-1" required>
                <label class="radio-label jsjwjdwjdwjdwco" for="one-a">
                    <span class="alphabet">A</span> Cascading Style Sheets 
                   {{--  <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg" alt=""> --}}
                </label>
                <input type="radio" class="input-radio one-b jshdgdgwgdwfdfwdwjfdjwwdwdin" id="one-b" name="yes-1">
                <label class="radio-label jsjwjdwjdwjdwin" for="one-b">
                    <span class="alphabet">B</span> Creative Screen Styling <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
                <input type="radio" class="input-radio one-c jshdgdgwgdwfdfwdwjfdjwwdwdin" id="one-c" name="yes-1">
                <label class="radio-label jsjwjdwjdwjdwin" for="one-c">
                    <span class="alphabet">C</span> Cascading Style Screen <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
            </div>
            <a id="btn" type="submit" onclick="window.location.href='#section-2'">Next</a>
        </form>
    </main>
</section>

<!-- QUIZ TWO -->
<section class=" section-2 d-flex" id="section-2" >
    <div class="timer-container">
        <div class="inner-circle">
            {{-- <div id="timer-number">30</div> <!-- Timer Number --> --}}
            {{-- <text id="timer-text" x="100" y="110" text-anchor="middle" alignment-baseline="middle">30</text>  --}}
        </div>
        <svg>
            <circle class="progress-ring" r="90" cx="100" cy="100"></circle> <!-- Circular Progress -->
            <text class="timer-number" x="100" y="110" text-anchor="middle" alignment-baseline="middle">50</text> 
        </svg>
    </div>
    <main>
        <div class="text-container">
            <h3>Pure CSS Quiz</h3>
            <p>QUESTION 2 OF 5</p>
            <p>To specify the transparency of an element, you can use?</p>
        </div>
        <form>
            <div class="quiz-options">
                <input type="radio" class="input-radio two-a jshdgdgwgdwfdfwdwjfdjwwdwdin" id="two-a" name="no-2" required="">
                <label class="radio-label jsjwjdwjdwjdwin" for="two-a">
                    <span class="alphabet">A</span> trans-parency <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
                <input type="radio" class="input-radio two-b jshdgdgwgdwfdfwdwjfdjwwdwdin" id="two-b" name="no-2" required="">
                <label class="radio-label jsjwjdwjdwjdwin" for="two-b">
                    <span class="alphabet">B</span> color: 0; <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
                <input type="radio" class="input-radio two-c jshdgdgwgdwfdfwdwjfdjwwdwdco" id="two-c" name="no-2" required="">
                <label class="radio-label jsjwjdwjdwjdwco" for="two-c">
                    <span class="alphabet">C</span> opacity <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg">
                </label>
            </div>
            <a id="btn" type="submit" onclick="window.location.href='#section-3'">Next</a>
        </form>
    </main>
</section>
<!-- QUIZ THREE -->
<section class="section-3 d-flex" id="section-3">
    <div class="timer-container">
        <div class="inner-circle">
            {{-- <div id="timer-number">30</div> <!-- Timer Number --> --}}
            {{-- <text id="timer-text" x="100" y="110" text-anchor="middle" alignment-baseline="middle">30</text>  --}}
        </div>
        <svg>
            <circle class="progress-ring" r="90" cx="100" cy="100"></circle> <!-- Circular Progress -->
            <text class="timer-number" x="100" y="110" text-anchor="middle" alignment-baseline="middle">50</text> 
        </svg>
    </div>
    <main>
        <div class="text-container">
            <h3>Pure CSS Quiz</h3>
            <p>QUESTION 3 OF 5</p>
            <p>which of these is not a category of CSS selectors?</p>
        </div>
        <form>
            <div class="quiz-options">
                <input type="radio" class="input-radio three-a jshdgdgwgdwfdfwdwjfdjwwdwdin" id="three-a" name="no-3" required="">
                <label class="radio-label jsjwjdwjdwjdwin" for="three-a">
                    <span class="alphabet">A</span> Pseudo-class selectors <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
                <input type="radio" class="input-radio three-b jshdgdgwgdwfdfwdwjfdjwwdwdin" id="three-b" name="no-3" required="">
                <label class="radio-label jsjwjdwjdwjdwin" for="three-b">
                    <span class="alphabet">B</span> Simple selectors <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
                <input type="radio" class="input-radio three-c jshdgdgwgdwfdfwdwjfdjwwdwdco" id="three-c" name="no-3" required="">
                <label class="radio-label jsjwjdwjdwjdwco" for="three-c">
                    <span class="alphabet">C</span> Layout-selector <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg">
                </label>
            </div>
            <a id="btn" type="submit" onclick="window.location.href='#section-4'">Next</a>
        </form>
    </main>
</section>
<!-- QUIZ FOUR -->
<section class="section-4 d-flex" id="section-4">
    <div class="timer-container">
        <div class="inner-circle">
            {{-- <div id="timer-number">30</div> <!-- Timer Number --> --}}
            {{-- <text id="timer-text" x="100" y="110" text-anchor="middle" alignment-baseline="middle">30</text>  --}}
        </div>
        <svg>
            <circle class="progress-ring" r="90" cx="100" cy="100"></circle> <!-- Circular Progress -->
            <text class="timer-number" x="100" y="110" text-anchor="middle" alignment-baseline="middle">50</text> 
        </svg>
    </div>
    <main>
        <div class="text-container">
            <h3>Pure CSS Quiz</h3>
            <p>QUESTION 4 OF 5</p>
            <p>The browser vertical scrollbar can be hidden by using which of the following property?</p>
        </div>
        <form>
            <div class="quiz-options">
                <input type="radio" class="input-radio four-a jshdgdgwgdwfdfwdwjfdjwwdwdin" id="four-a" name="no-4" required="">
                <label class="radio-label jsjwjdwjdwjdwin" for="four-a">
                    <span class="alphabet">A</span> scrollbar: disable; <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
                <input type="radio" class="input-radio four-b jshdgdgwgdwfdfwdwjfdjwwdwdco" id="four-b" name="no-4" required="">
                <label class="radio-label jsjwjdwjdwjdwco" for="four-b">
                    <span class="alphabet">B</span> overflow-y: hidden; <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg">
                </label>
                <input type="radio" class="input-radio four-c jshdgdgwgdwfdfwdwjfdjwwdwdin" id="four-c" name="no-4" required="">
                <label class="radio-label jsjwjdwjdwjdwin" for="four-c">
                    <span class="alphabet">C</span> overflow-x: hidden <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
            </div>
            <a id="btn" type="submit" onclick="window.location.href='#section-5'">Next</a>
        </form>
    </main>
</section>
<!-- QUIZ FIVE -->
<section class="section-5 d-flex" id="section-5">
    <div class="timer-container">
        <div class="inner-circle">
        </div>
        <svg>
            <circle class="progress-ring" r="90" cx="100" cy="100"></circle> <!-- Circular Progress -->
            <text class="timer-number" x="100" y="110" text-anchor="middle" alignment-baseline="middle">50</text> 
        </svg>
    </div>
    <main>
        <div class="text-container">
            <h3>Pure CSS Quiz</h3>
            <p>QUESTION 5 OF 5</p>
            <p>What does HTML stand for?</p>
        </div>
        <form>
            <div class="quiz-options">
                <input type="radio" class="input-radio five-a jshdgdgwgdwfdfwdwjfdjwwdwdco" id="five-a" name="yes-5" required>
                <label class="radio-label jsjwjdwjdwjdwco" for="five-a">
                    <span class="alphabet">A</span> Hypertext Markup Language <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg" alt="">
                </label>
                <input type="radio" class="input-radio five-b jshdgdgwgdwfdfwdwjfdjwwdwdin" id="five-b" name="yes-5">
                <label class="radio-label jsjwjdwjdwjdwin" for="five-b">
                    <span class="alphabet">B</span> Hypertext Transform Markup Language <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
                <input type="radio" class="input-radio five-c jshdgdgwgdwfdfwdwjfdjwwdwdin" id="five-c" name="yes-5">
                <label class="radio-label jsjwjdwjdwjdwin" for="five-c">
                    <span class="alphabet">C</span> Hypertext Machine Language <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
            </div>
            <a id="btn" type="submit" onclick="window.location.href='#game-over'">Next</a>
        </form>
    </main>
    <!-- SCORE COUNTER -->
</section>
<div class="score-counter">
    <p class="score-text">CORRECT:</p>
</div>
<!-- GAME OVER PAGE -->
<section id="game-over">
    <div class="game-over-content">
        <div class="over-text-cont">
            <h1 data-heading="Game Over">Game Over</h1>
            <h2>Total Score:</h2>
            <a id="btn" type="submit" onclick="window.location.href='#refresh'">Play Again</a>
        </div>
    </div>
</section>
<!-- REFRESH PAGE SECTION -->
<section id="refresh">
    <div class="refresh-content">
        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 341.12 341.33">
            <defs>
                <style>
                    .cls-1 {
                        fill: #fff;
                    }
                </style>
            </defs>
            <title>multimedia2</title>
             <a href=""  onclick="window.location.href='#section-1'">
            <path class="cls-1" d="M341.23,149.33V0L291.09,50.13A169.56,169.56,0,0,0,170.56,0C76.27,0,.11,76.37.11,170.67S76.27,341.33,170.56,341.33c79.47,0,146-54.4,164.91-128H291.09A127.94,127.94,0,1,1,170.56,42.67c35.31,0,67,14.72,90.13,37.86l-68.8,68.8Z" transform="translate(-0.11)" />
             </a>
        </svg>
        <h2>Refresh/Reload this page to continue</h2>
    </div>
</section>
</body>
</html>


{{-- timer code --}}
{{-- <script>
    // document.getElementById('quizForm').submit();

    var timeLeft = 30; // Time in seconds
    var timerElement = document.getElementById('countdown');

    var countdownTimer = setInterval(function() {
        if (timeLeft <= 0) {
            clearInterval(countdownTimer);
            // Perform an action when the timer reaches 0, like submitting the quiz automatically
            alert('Time is up!');
            // You could also submit the form here, e.g., document.getElementById('quizForm').submit();
        } else {
            timerElement.textContent = timeLeft;
        }
        timeLeft -= 1;
    }, 1000); // 1000 milliseconds = 1 second
</script> --}}

{{-- timer  --}}
<script>
    var timeLimit = 50; // Total time in seconds
    var timeLeft = timeLimit; // Time remaining
    var timerDisplay = document.getElementsByClassName('timer-number')[0];
    // var timerDisplay = document.getElementById('timer-number');
    // var circle = document.getElementById('progress-ring');
    var circle = document.getElementsByClassName('progress-ring')[0];
    var circumference = circle.getTotalLength(); // Total length of the circle's stroke

    // Set the stroke-dasharray and initial stroke-dashoffset
    circle.style.strokeDasharray = circumference;
    circle.style.strokeDashoffset = circumference;

    // Update the timer number and circle stroke as time progresses
    function updateTimer(timeLeft) {
        // Update timer number in the center
        timerDisplay.textContent = timeLeft;

        // Calculate the new stroke-dashoffset to reduce the circle
        var offset = circumference - (timeLeft / timeLimit) * circumference;
        circle.style.strokeDashoffset = offset;
    }

    // Countdown timer function
    // var count = 0;
    var countdown = setInterval(function() {
        if (timeLeft >= 0) {
            updateTimer(timeLeft); // Update timer display and progress
            timeLeft -= 1; // Decrease time
        } else {
            clearInterval(countdown);

           alert('Time is up! Go to next section'); // End of the quiz
            // You can add quiz submission logic here
            // goToNextSection();
        }
    }, 1000); // Timer updates every second (1000ms)
    // window.location.href = 'next-section-url.html';
    //  goToNextSection(); // Custom function to handle this

function goToNextSection() {
    // Hide the current section (assume it has an ID 'current-section')
    document.getElementById('quiz1').style.display = 'none';

    // Show the next section (assume it has an ID 'next-section')
    document.getElementById('quiz1').style.display = 'block';

    document.getElementsByClassName('section-2').style.display = 'none';

    document.getElementsByClassName('section-2').style.display = 'block';
}

</script>



{{-- <div class="timer-container">
    <div class="inner-circle"> --}}
        {{-- <div id="timer-number">30</div> <!-- Timer Number --> --}}
        {{-- <text id="timer-text" x="100" y="110" text-anchor="middle" alignment-baseline="middle">30</text>  --}}
    {{-- </div> --}}
    {{-- <svg>
        <circle id="progress-ring" r="90" cx="100" cy="100"></circle> <!-- Circular Progress -->
        <text id="timer-number" x="100" y="110" text-anchor="middle" alignment-baseline="middle">30</text> 
    </svg> --}}
{{-- </div> --}}