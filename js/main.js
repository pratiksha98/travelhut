
let btnScroll = document.getElementById("btnScroll");
btnScroll.addEventListener("click", function(){
    window.scrollTo({
        top:0,
        left:0,
        behavior:"smooth"
    });
})
