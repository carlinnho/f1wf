const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");

const idusuario = document.getElementById("idusuario").value;
console.log(idusuario);

start_btn.onclick = ()=>{
    info_box.classList.add("activeInfo");
}

exit_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo");
}

continue_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo");
    quiz_box.classList.add("activeQuiz"); 
    showQuetions(0);
    queCounter(1);
}

let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;
let preguntas = [];
let preguntasalternativa = [];

const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");

fetch('F1apis/preguntasapi.php', {
    method: 'GET',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
    }
})
    .then(response => response.json())
    .then(data => {
        console.log('data');
        console.log(data);
        preguntasalternativa = data;
        preguntas = data.reduce((acc, current) => {
            const x = acc.find(item => item.pregunta === current.pregunta);
            if (!x) {
                return acc.concat([current]);
            } else {
                return acc;
            }
        }, []);

        console.log(preguntas);
    });


restart_quiz.onclick = ()=>{
    quiz_box.classList.add("activeQuiz");
    result_box.classList.remove("activeResult");
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuetions(que_count); 
    queCounter(que_numb); 
    clearInterval(counter); 
    next_btn.classList.remove("show");
}

quit_quiz.onclick = ()=>{
    window.location.reload();
}

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");

next_btn.onclick = ()=>{
    if(que_count < preguntas.length - 1){ 
        que_count++; 
        que_numb++; 
        showQuetions(que_count); 
        queCounter(que_numb); 
        clearInterval(counter); 
        next_btn.classList.remove("show");
    }else{
        showResult();
    }
}

function showQuetions(index){
    const que_text = document.querySelector(".que_text");
    const filteredData = preguntasalternativa.filter(item => item.id === index + 1);

    console.log('filteredData'+index);
    console.log(filteredData);
    
    let que_tag = '<span>'+ (index + 1 ) + ". " + filteredData[0].pregunta +'</span>';
    let option_tag = '';
    filteredData.forEach(item => {
        option_tag = option_tag + '<div class="option" onclick=optionSelected(this,'+item.id+','+item.escorrecto+')><span>'+ item.descripcion +'</span></div>';
    });

    que_text.innerHTML = que_tag; 
    option_list.innerHTML = option_tag; 
    
    /*
    const option = option_list.querySelectorAll(".option");
    for(i=0; i < option.length; i++){
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
    */
}

let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

function optionSelected(answer,pregunta,escorrecto){
    const filteredRespuesta = preguntasalternativa.filter(item => item.escorrecto === 1 && item.id === pregunta)[0].descripcion;

    console.log(filteredRespuesta);

    const allOptions = option_list.children.length;
    
    if(escorrecto === 1){ 
        userScore += 1; 
        answer.classList.add("correct"); 
        answer.insertAdjacentHTML("beforeend", tickIconTag);
        console.log("Correct Answer");
        console.log("Your correct answers = " + userScore);
    }else{
        answer.classList.add("incorrect"); 
        answer.insertAdjacentHTML("beforeend", crossIconTag); 
        console.log("Wrong Answer");

        for(i=0; i < allOptions; i++){
            if(option_list.children[i].textContent == filteredRespuesta){  
                option_list.children[i].setAttribute("class", "option correct");
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); 
                console.log("Auto selected correct answer.");
            }
        }
    }



    
    for(i=0; i < allOptions; i++){
        option_list.children[i].classList.add("disabled"); 
    }
    next_btn.classList.add("show"); 
}

function showResult(){
    info_box.classList.remove("activeInfo"); 
    quiz_box.classList.remove("activeQuiz"); 
    result_box.classList.add("activeResult"); 
    const scoreText = result_box.querySelector(".score_text");
    if (userScore > 3){
        let scoreTag = '<span> y  Felicidades! 🎉, Tienes <p>'+ userScore +'</p> de <p>'+ preguntas.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
    }
    else if(userScore > 1){
        let scoreTag = '<span> y  Muy bueno 😎, Tienes <p>'+ userScore +'</p> de  <p>'+ preguntas.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
    }
    else{ 
        let scoreTag = '<span> y Fallaste 😐, Tienes  <p>'+ userScore +'</p> de  <p>'+ preguntas.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
    }
    var objeto = {"idusuario":idusuario,"puntaje":userScore,"puntajemaximo":preguntas.length}
    fetch('F1apis/preguntasapi.php',{
        method: 'POST',
        body: JSON.stringify(objeto)
    })
        .then(response => response.text())
        .then(result => {
            if (result == 1)
                alert("El score fue registrado correctamente");
            else
                alert("El score NO fue registrado correctamente");
        });
}


function queCounter(index){
    let totalQueCounTag = '<span><p>'+ index +'</p> of <p>'+ preguntas.length +'</p> Preguntas</span>';
    bottom_ques_counter.innerHTML = totalQueCounTag; 
}