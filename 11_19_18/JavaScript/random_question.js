 //this is for index.php
    
    //go to reandom question
   document.getElementById("rand q").onclick = function () {

        const i = Math.floor(Math.random() * rowcount_questions) + 1  

        location.href = "PHP/questions_cat.php?QuestionNumber=\""+questions[i][0]+"\"";
    };

    //generate links to all questions
    document.getElementById("all q").onclick = function () {
    let k;
    let my_array = [];
    var link;
        for (k = 0; k < rowcount_questions; k++) { 
            link='PHP/questions_cat.php?QuestionNumber='+"\""+questions[k][0]+"\"";
            my_array[k]= `<li><a href=${link}> <h5>Question ${questions[k][0]}</h5></a></li>`;
        }
        document.getElementById('questions').innerHTML = my_array.join("");
    };

    //generate links to all quizes
    //same code as above but with link inside the line for my_array. No difference.
    document.getElementById("category quizes").onclick = function () {
    var k;
    let my_array = [];
        for (k = 0; k < rowcount_quizes; k++) { 
            my_array[k] = `<l><a href=PHP/questions_cat.php?category0="${quizes[k][0].replace(" ","%20")}"> <h5>${quizes[k][0]}Quiz </h5></a></li>`;
        }
        document.getElementById('Quizes by Category').innerHTML = my_array.join("");
    };