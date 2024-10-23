<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    
</head>
<body>
    <!-- QUIZ ONE 1-->
<section class="section-1 d-flex" id="section-1">
    <div class="timer-container">
        <div class="inner-circle"></div>
        <svg>
            <circle class="progress-ring" r="90" cx="100" cy="100"></circle>
            <text class="timer-number" id="timer-1" x="100" y="110" text-anchor="middle" alignment-baseline="middle">50</text> 
        </svg>
    </div>
    <main>
        <div class="text-container">
            <h3>Pure CSS Quiz</h3>
            <p>QUESTION 1 OF 5</p>
            <p>What does CSS stand for?</p>
        </div>
        <form onsubmit="return false;"> <!-- Prevent default form submission -->
            <div class="quiz-options">
                <!-- Radio button inputs... -->
            </div>
            <button type="button" class="next-btn" onclick="goToNextSection(1)">Next</button>
        </form>
    </main>
</section>

<!-- Repeat similar structure for sections 2, 3, 4, and 5, updating IDs accordingly -->
<section class="section-2 d-flex" id="section-2">
    <div class="timer-container">
        <div class="inner-circle"></div>
        <svg>
            <circle class="progress-ring" r="90" cx="100" cy="100"></circle>
            <text class="timer-number" id="timer-1" x="100" y="110" text-anchor="middle" alignment-baseline="middle">50</text> 
        </svg>
    </div>
    <main>
        <div class="text-container">
            <h3>Pure CSS Quiz</h3>
            <p>QUESTION 2 OF 5</p>
            <p>What does CSS stand for?</p>
        </div>
        <form onsubmit="return false;"> <!-- Prevent default form submission -->
            <div class="quiz-options">
                <!-- Radio button inputs... -->
            </div>
            <button type="button" class="next-btn" onclick="goToNextSection(1)">Next</button>
        </form>
    </main>
</section>

   
</div>
</body>
</html>


<script>
    let currentSection = 1; // Keep track of the current section
const timeLimit = 50; // Time limit in seconds

function startTimer(sectionNumber) {
    let timeLeft = timeLimit;
    const timerDisplay = document.getElementById(`timer-${sectionNumber}`);
    const circle = document.getElementsByClassName('progress-ring')[sectionNumber - 1];
    const circumference = circle.getTotalLength();
    
    // Set the stroke-dasharray and initial stroke-dashoffset
    circle.style.strokeDasharray = circumference;
    circle.style.strokeDashoffset = circumference;

    const countdown = setInterval(() => {
        if (timeLeft > 0) {
            timerDisplay.textContent = timeLeft; // Update timer display
            const offset = circumference - (timeLeft / timeLimit) * circumference;
            circle.style.strokeDashoffset = offset; // Update the progress ring
            timeLeft -= 1; // Decrease time
        } else {
            clearInterval(countdown);
            alert('Time is up!'); // You can add logic to handle the end of the quiz
            goToNextSection(sectionNumber); // Automatically move to the next section
        }
    }, 1000); // Timer updates every second (1000ms)
}

function goToNextSection(sectionNumber) {
    // Hide the current section
    document.getElementById(`section-${sectionNumber}`).style.display = 'none';

    // Increment section number and show the next section
    const nextSection = sectionNumber + 1;
    if (document.getElementById(`section-${nextSection}`)) {
        document.getElementById(`section-${nextSection}`).style.display = 'block';
        startTimer(nextSection); // Start the timer for the next section
    } else {
        alert('Quiz completed!'); // Handle end of quiz scenario
        // Optionally, you can reset or redirect
    }
}

// Start the timer for the first section
startTimer(currentSection);

</script>