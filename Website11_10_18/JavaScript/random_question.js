
 // note that this java script assumes questions between 1-55.
 //this is for index.php
 document.getElementById("rand q").onclick = function () {

 		const i = Math.floor(Math.random() * 55) + 1  

        location.href = "PHP/questions.php?question="+i;
    };