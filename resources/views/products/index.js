const burger = document.querySelector('#burger');
const menu = document.querySelector('#menu');

burger.addEventListener('click', ()=>{
    if(menu.classList.contains('hidden')){
        menu.classList.remove('hidden');
    }else{
        menu.classList.add('hidden');
    }
})

const txt = document.querySelector('#text');
const btn = document.querySelector('#btn');

btn.addEventListener('click', ()=> {
    if(txt.classList.contains('hidden')){
        txt.classList.remove('hidden');
        btn.textContent = 'Hide';
    }else{
        txt.classList.add('hidden');
        btn.textContent = 'Show';
    }
})