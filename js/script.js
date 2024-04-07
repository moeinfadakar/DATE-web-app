

let show = 1;
  let input = document.getElementById("input");
let open = document.getElementById("eyeopen");
let close = document.getElementById("eyeclose");


function change() {
      input.setAttribute("type" , "text");       
      input.style.color = "white";
      input.style.padding = "10px";
      
}    
function back(){
    input.setAttribute("type" , "password");  
    input.style.color = "white";
    input.style.padding = "10px";
}

