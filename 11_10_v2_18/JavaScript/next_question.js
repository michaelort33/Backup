
 // note that this java script assumes questions between 1-55.
 //this is for questions.php



 document.getElementById("next q").onclick = function () {

 		const i = Math.floor(Math.random() * 55) + 1  

        location.href = "questions.php?question="+i;
    };
