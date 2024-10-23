<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quize</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
        /* background: #a8c0ff; */
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
        background:white
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
    } */

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

    /* input:invalid+label {
        background: #fff;
    } 

    input:invalid+label:hover {
        background: linear-gradient(to right, #d8d9da 10%, #ffffff 80%);
    }

    input:valid+label {
        color: #fff;
        pointer-events: none
    } */

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
/* 
    #game-over {
        background: linear-gradient(rgb(28, 22, 49), rgba(18, 18, 25, 0.9)), repeating-linear-gradient(0, transparent, transparent 2px, black 3px, black 3px);
        font-family: 'Bungee', cursive;
       
        width: 100%;
        height: 100vh;
    } */

    /* .game-over-content {
        display: grid;
        justify-items: center;
        width: 80%;
        margin: 0 auto;
        padding: 120px 0;
    } */

    /* #game-over h1 {
        background: url("https://res.cloudinary.com/dvhndpbun/image/upload/e_brightness:-20/v1588605696/01-01_web_designers_code_ld_img_dgytil.png");
        -webkit-background-clip: text;
        color: transparent;
        background-size: contain;
        font-size: 5rem;
        line-height: 1.2;
        margin: 0;
        position: relative;
    } */

    /* h1::before {
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
    } */

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
        stroke-dasharray: 565.48;
        /* Circumference of the circle */
        stroke-dashoffset: 565.48;
        transition: stroke-dashoffset 1s linear;
        transform: rotate(-90deg);
        transform-origin: 50% 50%;
    }
</style>

<body>

    @foreach ($users as $index => $user)
        {{-- @foreach ($users as $index => $user) --}}
        <section>
            <div class="timer-container">
                <div class="inner-circle"></div>
                <svg>
                    <circle class="progress-ring" id="progress-ring-1" r="90" cx="100" cy="100"></circle>
                    <text class="timer-number" id="timer-number-1" x="100" y="110" text-anchor="middle"
                        alignment-baseline="middle">50</text>
                </svg>
            </div>
            <main>
                <div class="container mt-3">
                    {{-- <h2>Checkboxes</h2> --}}
                    <div class="text-container">
                        <p> {{ $user['question'] }}</p>

                    </div>
                    <form action="">
                        {{-- @csrf --}}
                       
                        <div class="quiz-options" data-correct-answer="{{ $user['correctAnswer'] }}">
                            <input type="hidden" name="qid" value="{{$user->id}}">
                            
                            <input type="radio" class="input-radio one-a " id="one-a"
                                name="yes-1" value="a">
                                {{-- <input type="hidden" name="qid" value="{{$user->id}}"> --}}
                            <label class="radio-label " for="one-a">
                                <span class="alphabet">A</span> {{ $user['option1'] }} 
                            </label>

                            <input type="radio" class="input-radio one-b " id="one-b"
                                name="yes-1" value="b">
                            <label class="radio-label " for="one-b">
                                <span class="alphabet">B</span> {{ $user['option2'] }} 
                            </label>

                            <input type="radio" class="input-radio one-c " id="one-c"
                                name="yes-1" value="c">
                            <label class="radio-label " for="one-c">
                                <span class="alphabet">C</span>{{ $user['option3'] }}
                            </label>

                            <input type="radio" class="input-radio one-d " id="one-d"
                                name="yes-1" value="d">
                            <label class="radio-label " for="one-d">
                                <span class="alphabet">D</span>{{ $user['option4'] }}<
                            </label>
                            
                        </div>


                    </form>
                </div>
                {{-- </main>
        </section> --}}
    @endforeach
    @if ($users->hasMorePages())
        <a id="btn" onclick="window.location.href='#game-over'" href="{{ $users->nextPageUrl() }}"
            class="btn btn-primary mt-3">Next</a>
    @else
        <a id="btn" href="#" class="btn btn-primary mt-3 disabled">Submit</a>
    @endif
    </main>
    </section>

    {{-- //  game over --}}
    {{-- <div class="score-counter">
        <p class="score-text">CORRECT:</p>
    </div> --}}
    <!-- GAME OVER PAGE -->
    {{-- <section id="game-over">
        <div class="game-over-content">
            <div class="over-text-cont">
                <h1 data-heading="Game Over">Game Over</h1>
                <h2>Total Score:</h2>
                <a id="btn" type="submit" onclick="window.location.href='#refresh'">Play Again</a>
            </div>
        </div>
    </section> --}}
    <!-- REFRESH PAGE SECTION -->
    {{-- <section id="refresh">
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
                <path class="cls-1" d="M341.23,149.33V0L291.09,50.13A169.56,169.56,0,0,0,170.56,0C76.27,0,.11,76.37.11,170.67S76.27,341.33,170.56,341.33c79.47,0,146-54.4,164.91-128H291.09A127.94,127.94,0,1,1,170.56,42.67c35.31,0,67,14.72,90.13,37.86l-68.8,68.8Z" transform="translate(-0.11)" />
            </svg>
            <h2>Refresh/Reload this page to continue</h2>
        </div>
    </section> --}}
    {{-- end game over --}}


</body>

</html>

{{-- matching correct answer from the server or databased response --}}

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script>
    
    // function checkAnswer() {
    //     const selectedOption = document.querySelector('input[name="answer"]:checked');
    //     console.log(selectedOption);
    //     if (selectedOption) {
    //         const userAnswer = selectedOption.value;

    //         // Send answer to server for verification
    //         $.ajax({
    //             url: '', // Your server endpoint
    //             method: 'GET',
    //             data: {
    //                 questionIndex: currentQuestionIndex,
    //                 answer: userAnswer
    //             },
    //             success: function(response) {
    //                 // Server returns whether the answer is correct
    //                 if (response.correct) {
    //                     document.getElementById("result").textContent = "Correct!";
    //                 } else {
    //                     document.getElementById("result").textContent =
    //                         `Wrong! The correct answer is ${response.correctAnswer}`;
    //                 }
    //             }
    //         });
    //     } else {
    //         document.getElementById("result").textContent = "Please select an option!";
    //     }
    // }
    $(document).ready(function(){

            $('input[type=radio]').click(function(){
                var selectvalue = $('input[name="yes-1"]:checked').val();
                var questionid=$('input[name="qid"]').val();

            //    console.log(questionid);

            var data={
                'questionid' : questionid,
                'answer' :selectvalue,
            }
            $.ajax({
                type:"GET",
                url:"{{route('checkanswer')}}",
                data:data,
                success:function(response){
                     console.log(response); 
                    var selectedLabel = $('input[name="yes-1"]:checked').next('label');
                    // console.log(selectedLabel);
                    
                   if(response.status=='success'){
                    selectedLabel.css('background-color', 'green')
                    }
                    else {
                    selectedLabel.css('background-color', 'red');
                }
                   $('input[name="yes-1"]').not(':checked').attr('disabled',true);
                     
                }
                
            });
    });
});

</script>
{{-- end matching answer      --}}


{{-- timer --}}
<script>
    var timeLimit = 5; // Total time in seconds
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
    var count = 0;
    var countdown = setInterval(function() {
        if (timeLeft >= 0) {
            updateTimer(timeLeft); // Update timer display and progress
            timeLeft -= 1; // Decrease time
        } else {
            clearInterval(countdown);

            //  alert('Time is up! Go to next section'); // End of the quiz
            // You can add quiz submission logic here
            // goToNextSection();
            var selectedAnswer = document.querySelector('input[name="yes-1"]:checked');

            // check if answer is selected
            if (selectedAnswer) {
                if (selectedAnswer.value === "correct") {
                    // Auto-select the correct answer in section 2
                    var lable = document.getElementById('one-a').checked =
                        true; // Assuming two-c is the correct answer for section 2


                    // Move to section 2
                    // alert('Answer is correct! Go to next section');
                    window.location.href = '#section-2';
                } else {
                    alert("Wrong answer! Please try again.");
                }

            } else {
                alert("Please select an answer before proceeding.");
            }
            // if answer is not selected

            window.location.href = '#section-2'; // Redirect to the next section

        }
    }, 1000); // Timer updates every second (1000ms)
    // window.location.href = 'next-section-url.html';
    //  goToNextSection(); // Custom function to handle this

    function goToNextSection() {
        // Hide the current section (assume it has an ID 'current-section')
        // document.getElementById('quiz1').style.display = 'none';

        // Show the next section (assume it has an ID 'next-section')
        // document.getElementById('quiz1').style.display = 'block';

        document.getElementsByClassName('section-2').style.display = 'none';

        document.getElementsByClassName('section-2').style.display = 'block';
    }
</script>
