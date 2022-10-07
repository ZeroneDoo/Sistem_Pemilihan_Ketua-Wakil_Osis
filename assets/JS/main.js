// Dark Mode 
let y = document.getElementById('mode');
let body = document.querySelector("body");
y.addEventListener ("click", function(){
    y.classList.toggle("mode");
    document.getElementById("btn").classList.toggle("dank");
    if(y.classList.contains("mode")){
        y.innerHTML = "light_mode"
        document.getElementById("img_change").src = "assets/img/darkimg.png"; 
    }else{
        y.innerHTML = "dark_mode"
        document.getElementById("img_change").src = "assets/img/Graphic chart_Monochromatic 1.png"; 
    }
    body.classList.toggle("dark");
})
// DOM Array main
function myFunction(x) {
    x.classList.toggle("change");
    if(x.classList.contains("change")){
        x.innerHTML = "expand_less"
    }else{
        x.innerHTML = "expand_more"
    }
}