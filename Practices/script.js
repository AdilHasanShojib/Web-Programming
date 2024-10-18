function BillGenerate() {
  let quantity = Number(document.getElementById("pineapple").value);
  let tips = Number(document.getElementById("tips").value);
  let hd = document.getElementById("yes").checked;
  let loc = document.getElementById("loc").value;
  let bill;

  bill = quantity * 12.5;

  if (quantity >= 1 && quantity <= 9) {
    bill = bill * 0.95;
  } else if (quantity >= 10 && quantity <= 19) {
    bill = bill * 0.9;
  } else {
    bill = bill * 0.85;
  }

  bill=bill+tips;

  if(hd==true){
    bill=bill+40;
  }

  if(loc=='d'){
    bill=bill*1.20;
  }

 if(loc=='r'){
    bill=bill*1.15;
 }

 document.getElementById('level').innerText=bill;

}
