//References
let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let countOfQuestion = document.querySelector(".number-of-question");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");
let questionCount;
let scoreCount = 0;
let count = 11;
let countdown;

//Questions and Options array

const quizArray = [
    {
        id: "0",
        question: "Dari keempat pernyataan berikut, manakah yang merupakan sifat-sifat bangun persegi?",
        options: ["Mempunyai tiga buah sisi", "Mempunyai dua diagonal yang saling berpotongan tegak lurus", "Mempunyai empat titik sudut", "Mempunyai satu simetri putar"],
        correct: "Mempunyai empat titik sudut",
    },
    {
        id: "1",
        question: "Luas bangun persegi panjang adalah 135 cm2. Jika perbandingan panjang dan lebarnya adalah 3 : 5, keliling persegi panjang tersebut adalah...",
        options: ["12 cm", "24 cm", " 36 cm", " 48 cm"],
        correct: " 48 cm",
    },
    {
        id: "2",
        question: "Luas belah ketupat 96 cm2 dan panjang salah satu diagonal adalah 24 cm. Panjang diagonal lainnya adalah",
        options: ["8 cm", "  9 cm", "12 cm", "16 cm"],
        correct: "8 cm",
    },
    {
        id: "3",
        question: " Diketahui luas belah ketupat ABCD = 480 cm2. Jika panjang diagonal AC = 20 cm, keliling belah ketupat ABCD adalah",
        options: ["120 cm", "104 cm", " 96 cm", " 48 cm"],
        correct: "104 cm",
    },
    {
        id: "4",
        question: "Ibu membeli jeruk 300 g, semangka 4 kg, dan 2.000 g apel. Jika diubah ke dalam kg, maka total berat belanjaan Ibu adalah...",
        options: ["3.3kg", "4.3kg", "5.3kg", "6.3kg"],
        correct: "6.3kg",
    },
    {
        id: "5",
        question: "Winata mengikuti karya wisata yang selama 2 minggu 6 hari. Maka, berapa hari lama karya wisata tersebut",
        options: ["19 hari", "20 hari", "21 hari", "22 hari"],
        correct: "20 hari",
    }, {
        id: "6",
        question: "Ayah membuat pagar menggunakan bambu dengan panjang 50 m. Jika Ayah membuat 8 pagar, maka berapa total panjang bambu yang dibutuhkan",
        options: ["4m", "400m", "40m", "4000m"],
        correct: "400m",
    },
    {
        id: "7",
        question: "Ibu membeli 3 pon bawang putih dan 5 pon bawang merah. Maka, berapa ons bawang putih dan bawang merah yang di beli Ibu?",
        options: ["15ons", "20ons", "30ons", "40ons"],
        correct: "40ons",
    },
    {
        id: "8",
        question: "500 cm + 5.100 m = ... dm",
        options: ["51.050", "51.100", "51.150", "51.200"],
        correct: "51.050",
    },
    {
        id: "9",
        question: "2500 kuintal + 5000 kg = ... ton",
        options: ["25", "27", "29", "30"],
        correct: "30",
    },
    {
        id: "10",
        question: "Jarak rumah Deni ke sekolah 1,5 km dan 250 dam. Berarti jarak rumah Deni ke sekolah adalah ... meter.",
        options: ["3000", "5000", "4000", "1.75"],
        correct: "4000",
    },
    {
        id: "11",
        question: "3 tahun - 24 minggu = ... bulan",
        options: ["30", "34", "38", "42"],
        correct: "30",
    },
    {
        id: "12",
        question: "1 kodi + 1 lusin = ... satuan.",
        options: ["24", "26", "32", "30"],
        correct: "32",
    },
];

//Restart Quiz
restart.addEventListener("click", () => {
    initial();
    displayContainer.classList.remove("hide");
    scoreContainer.classList.add("hide");
});

//Next Button
nextBtn.addEventListener(
    "click",
    (displayNext = () => {
        //increment questionCount
        questionCount += 1;
        //if last question
        if (questionCount == quizArray.length) {
            //hide question container and display score
            displayContainer.classList.add("hide");
            scoreContainer.classList.remove("hide");
            //user score
            userScore.innerHTML =
                "Your score is " + scoreCount + " out of " + questionCount;
        } else {
            //display questionCount
            countOfQuestion.innerHTML =
                questionCount + 1 + " of " + quizArray.length + " Question";
            //display quiz
            quizDisplay(questionCount);
            count = 11;
            clearInterval(countdown);
            timerDisplay();
        }
    })
);

//Timer
const timerDisplay = () => {
    countdown = setInterval(() => {
        count--;
        timeLeft.innerHTML = `${count}s`;
        if (count == 0) {
            clearInterval(countdown);
            displayNext();
        }
    }, 1000);
};

//Display quiz
const quizDisplay = (questionCount) => {
    let quizCards = document.querySelectorAll(".container-mid");
    //Hide other cards
    quizCards.forEach((card) => {
        card.classList.add("hide");
    });
    //display current question card
    quizCards[questionCount].classList.remove("hide");
};

//Quiz Creation
function quizCreator() {
    //randomly sort questions
    quizArray.sort(() => Math.random() - 0.5);
    //generate quiz
    for (let i of quizArray) {
        //randomly sort options
        i.options.sort(() => Math.random() - 0.5);
        //quiz card creation
        let div = document.createElement("div");
        div.classList.add("container-mid", "hide");
        //question number
        countOfQuestion.innerHTML = 1 + " of " + quizArray.length + " Question";
        //question
        let question_DIV = document.createElement("p");
        question_DIV.classList.add("question");
        question_DIV.innerHTML = i.question;
        div.appendChild(question_DIV);
        //options
        div.innerHTML += `
    <button class="option-div" onclick="checker(this)">${i.options[0]}</button>
     <button class="option-div" onclick="checker(this)">${i.options[1]}</button>
      <button class="option-div" onclick="checker(this)">${i.options[2]}</button>
       <button class="option-div" onclick="checker(this)">${i.options[3]}</button>
    `;
        quizContainer.appendChild(div);
    }
}

//Checker Function to check if option is correct or not
function checker(userOption) {
    let userSolution = userOption.innerText;
    let question =
        document.getElementsByClassName("container-mid")[questionCount];
    let options = question.querySelectorAll(".option-div");

    //if user clicked answer == correct option stored in object
    if (userSolution === quizArray[questionCount].correct) {
        userOption.classList.add("correct");
        scoreCount++;
    } else {
        userOption.classList.add("incorrect");
        //For marking the correct option
        options.forEach((element) => {
            if (element.innerText == quizArray[questionCount].correct) {
                element.classList.add("correct");
            }
        });
    }

    //clear interval(stop timer)
    clearInterval(countdown);
    //disable all options
    options.forEach((element) => {
        element.disabled = true;
    });
}

//initial setup
function initial() {
    quizContainer.innerHTML = "";
    questionCount = 0;
    scoreCount = 0;
    count = 11;
    clearInterval(countdown);
    timerDisplay();
    quizCreator();
    quizDisplay(questionCount);
}

//when user click on start button
startButton.addEventListener("click", () => {
    startScreen.classList.add("hide");
    displayContainer.classList.remove("hide");
    initial();
});

//hide quiz and display start screen
window.onload = () => {
    startScreen.classList.remove("hide");
    displayContainer.classList.add("hide");
};