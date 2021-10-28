var popped=0;
document.addEventListener('click',function(e){
    if(e.target.className==="ballon"){
        e.target.style.backgroundColor="white";
        e.target.textContent="POP!";
        popped++;
        checkAll();
    }
});
function checkAll(){
    if(popped===10){
        var ballondiv=document.querySelector('.ballon-div');
        ballondiv.innerHTML='';
        var noballondiv=document.querySelector('#no-ballons');
        noballondiv.style.display='block';
    }
}