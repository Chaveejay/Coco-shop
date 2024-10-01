let iconCart = document.querySelector('.icon-cart');
let closeCart = document.querySelector('.close');
let body = document.querySelector('body');

iconCart.addEventListener('click', () =>{
    body.classList.toggle('showCart')
})

closeCart.addEventListener('click', () =>{
    body.classList.toggle('showCart')
})

item-boxHTML.addEventListener.addEventListener('click',(event) =>{
    let positionClick = event.target;
    if(positionClick.classList.contains('add')){
        alert('1');
    }
})