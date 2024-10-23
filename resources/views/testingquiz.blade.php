<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz with Timer</title>
    <style>
        .timer-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .progress-ring {
            transition: stroke-dashoffset 1s linear;
        }
        section {
            display: none;
        }
    </style>
</head>
<body>

    <div id="quiz-container">
        @foreach ($users as $index => $question)
            <section id="section-{{ $index + 1 }}">
                <h2>{{ $question['question'] }}</h2>
                <div class="timer-container">
                    <svg width="200" height="200">
                        <circle class="progress-ring" id="progress-ring-{{ $index + 1 }}" r="90" cx="100" cy="100" stroke="blue" stroke-width="10" fill="transparent"></circle>
                        <text class="timer-number" id="timer-number-{{ $index + 1 }}" x="100" y="110" text-anchor="middle" alignment-baseline="middle">20</text>
                    </svg>
                </div>
                @foreach ($question['options'] as $optIndex => $option)
                    <input type="radio" name="answer-{{ $index }}" value="{{ $optIndex }}"> {{ $option }}<br>
                @endforeach
                <button onclick="submitAnswer({{ $index }})">Submit Answer</button>
            </section>
        @endforeach
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const timeLimit = 20; // Total time in seconds for each question
            const sections = document.querySelectorAll('section'); // Select all sections
            let currentSectionIndex = 0; // Keep track of the current section

            function startTimerForSection(sectionIndex) {
                let timeLeft = timeLimit; // Reset time for new section
                const timerDisplay = document.querySelector(`#timer-number-${sectionIndex + 1}`); // Dynamic ID
                const circle = document.querySelector(`#progress-ring-${sectionIndex + 1}`); // Dynamic ID
                const circumference = 2 * Math.PI * circle.r.baseVal.value; // Calculate circumference

                circle.style.strokeDasharray = circumference;
                circle.style.strokeDashoffset = circumference; // Start with full circle

                // Countdown timer function
                const countdown = setInterval(function() {
                    if (timeLeft >= 0) {
                        updateTimer(timerDisplay, circle, timeLeft, circumference);
                        timeLeft -= 1; // Decrease time
                    } else {
                        clearInterval(countdown); // Stop the timer when time is up
                        submitAnswer(sectionIndex); // Move to the next section when time is up
                    }
                }, 1000); // Timer updates every second
            }

            function updateTimer(timerDisplay, circle, timeLeft, circumference) {
                timerDisplay.textContent = timeLeft; // Update the text content
                const offset = circumference - (timeLeft / timeLimit) * circumference;
                circle.style.strokeDashoffset = offset;
            }

            function goToNextSection() {
                if (currentSectionIndex < sections.length - 1) {
                    sections[currentSectionIndex].style.display = 'none'; // Hide current section
                    currentSectionIndex++;
                    sections[currentSectionIndex].style.display = 'block'; // Show next section
                    startTimerForSection(currentSectionIndex); // Start timer for next section
                } else {
                    alert('Quiz is complete!'); // Handle end of the quiz
                }
            }

            window.submitAnswer = function(questionIndex) {
                const selectedAnswer = document.querySelector(`input[name="answer-${questionIndex}"]:checked`);

                if (selectedAnswer) {
                    // Send answer to the server
                    const formData = new FormData();
                    formData.append('question_index', questionIndex);
                    formData.append('answer', selectedAnswer.value);

                    fetch("{{ route('quiz.answer') }}", {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for Laravel
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.result === 'correct') {
                            alert('Correct answer!');
                        } else {
                            alert('Wrong answer!');
                        }
                        goToNextSection(); // Move to the next section
                    });
                } else {
                    alert("Please select an answer!");
                }
            }

            // Initialize the first section and timer
            sections.forEach((section, index) => {
                if (index !== 0) section.style.display = 'none'; // Hide all sections except the first one
            });

            // Start the timer for the first section
            startTimerForSection(0);
        });
    </script>
</body>
</html>
