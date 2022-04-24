const slide = document.querySelector('.slider');
const slideBook = document.querySelectorAll('.booko');

const left = document.querySelector('.left');
const right = document.querySelector('.right');

let counter = 1;
const size = slideBook[0].clientWidth;

slide.style.transform = 'translateX(' + (-size * counter) + 'px)';


right.addEventListener("click",()=>{
    if(counter>=slideBook.length-1)return;
    slide.style.transition = 'transform 0.5s ease-in-out';
    counter++;
    slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});
left.addEventListener("click",()=>{
    if(counter<=0)return;
    slide.style.transition = 'transform 0.5s ease-in-out';
    counter--;
    slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

slide.addEventListener('transitionend',()=>{
    if(slideBook[counter].id==='lastClone'){
        slide.style.transition ='none';
        counter = slideBook.length-2;
        slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
    if(slideBook[counter].id==='firstClone'){
        slide.style.transition ='none';
        counter = slideBook.length-counter-1;
        slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }

});











