function bmrCalculate(){
let h=Number(document.getElementById('height').value);
let w=Number(document.getElementById('weight').value);
let res=document.getElementById('result');
let stat=document.getElementById('status');


let metre;
let kg;
let result;
metre=h/100;
console.log(metre);
kg=w/2.2046;
console.log(kg);
result=kg/(metre*metre);
console.log(result);
res.innerText=result;

if(result>0 && result<20){
    stat.innerText="bad";
}

else if(result>=20 && result<=30){
    stat.innerText="not bad";
}

else{
    stat.innerText="good";
}












}