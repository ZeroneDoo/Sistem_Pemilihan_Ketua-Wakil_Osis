// DOM Array main
function myFunction(x) {
    x.classList.toggle("change");
    if(x.classList.contains("change")){
        x.innerHTML = "expand_less"
    }else{
        x.innerHTML = "expand_more"
    }
}