var limit = parseInt(prompt('Enter the Fibonnaci Sequence limit'));

var num1 = 0, num2 = 1 ,temp = 0;//first 2 numbers of fibo

var fiboString ='';
var arr =[];

for (var i = 0; i < limit; i++) {
	fiboString = fiboString + num1 +" ";
	arr[i] = num1;
	temp = num2;
	num2 = num1+num2;//fibo algo
	num1 = temp;
}
console.log(fiboString);//fibo on console as a STRING
console.log(arr);//fibo on console as ARRAY

document.querySelector('#fiboSeq').textContent = fiboString;//on Window a String

document.querySelector('#fiboSeqArray').textContent = arr;//on window array



