function calculate(value){
  
let num1= Number(document.getElementById('txt1').value);
let num2= Number(document.getElementById('txt2').value);
let result=0;
// alert(result);
// let add=document.getElementById("btn1");
// let sub=document.getElementById("btn2");
// let mul=document.getElementById("btn3");
// let div=document.getElementById("btn4");

if(value=="+"){
   result=num1+num2;
   
}

else if(value=="-"){
    result=num1-num2;

}

else if(value=="*"){

    result=num1*num2;
   
   

}

else{
    result=num1/num2;
   
   



}

document.getElementById('lbl1').innerText=result;




}