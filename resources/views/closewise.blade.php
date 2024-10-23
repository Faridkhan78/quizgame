<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clockwise Circular Timer</title>
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

        #timer-number {
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

<div class="timer-container">
    <div class="inner-circle">
        <div id="timer-number">30</div> <!-- Timer Number -->
    </div>
    <svg>
        <circle id="progress-ring" r="90" cx="100" cy="100"></circle> <!-- Circular Progress -->
    </svg>
</div>

<script>
    var timeLimit = 30; // Total time in seconds
    var timeLeft = timeLimit; // Time remaining
    var timerDisplay = document.getElementById('timer-number');
    var circle = document.getElementById('progress-ring');
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
    var countdown = setInterval(function() {
        if (timeLeft > 0) {
            updateTimer(timeLeft); // Update timer display and progress
            timeLeft -= 1; // Decrease time
        } else {
            clearInterval(countdown);
            alert('Time is up!'); // End of the quiz
            // You can add quiz submission logic here
        }
    }, 1000); // Timer updates every second (1000ms)
</script>

</body>
</html>
