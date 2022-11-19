//burgger
const burger = document.querySelector('.burger')
const list = document.querySelector('.nav-list')
const close = document.querySelector('.close')
console.log("burger");
burger.addEventListener('click',function(){
    list.classList.add('active')
    console.log(PointerEvent);
})

close.addEventListener('click',function(){
    list.classList.remove('active')
})