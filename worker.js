var i=0;
function countNumbers(){

	if(i<10000){
		i=i+1;
		postMessage(i);
	}

setTimeout("countNumbers()",1000);
}

countNumbers();
