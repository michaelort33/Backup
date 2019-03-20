
 // note that this java script assumes questions between 1-55.
 //this is for index.php
 document.getElementById("rand q").onclick = function () {

 		const i = Math.floor(Math.random() * 55) + 1  

        location.href = "PHP/questions.php?question="+i;
    };

 document.getElementById("all q").onclick = function () {
 	var k;
 	const output = [];
		for (k = 1; k <= Object.keys(questions).length; k++) { 
    		output[k]=(questions[k]);
    	}
    	document.getElementById("questions").innerHTML = output.join("");


    };