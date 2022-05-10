const answersList = document.querySelectorAll('ol.answers li');

answersList.forEach(li => li.addEventListener('click', checkClickedAnswer));

//正しい答え
const correctAnswers = {
    question1: 'B',

    question2: 'A',

    question3: 'B',

    question4: 'C',
};

function checkClickedAnswer(event) {

    //クリックされた答えの要素(liタグ)
    const clickedAnswerElement = event.currentTarget;
    console.log(clickedAnswerElement.dataset.answer);

    //選択した答え
    const selectedAnswer = clickedAnswerElement.dataset.answer;

    const questionId = clickedAnswerElement.closest('ol.answers').dataset.id;
    //正しい答え
    const correctAnswer = correctAnswers[questionId];

    //メーセージ用変数
    let message;
    //カラーコード用変数
    let answerColorCode;

    //答えが正しいか判定
    if (selectedAnswer === correctAnswer) {
        //正しかった時
        message = '正解です！ おめでとう！';
        answerColorCode = '';
    } else {

        //間違った答えだった時
        message = 'ざんねん！ 不正解です！';
        answerColorCode = '#f05959';
    }
    alert(message);

    document.querySelector('span#correct-answer').style.color ='#f05959';
    //答え全体を表示
    document.querySelector('div#section-correct-answer').style.display = 'block';
}