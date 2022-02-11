console.log('caca')


console.log('meow')

const pizzaOne = document.querySelector('.pizza_form')

pizzaOne.addEventListener('click', function (event){
     console.log('ca fonctionne sheeesh')
    // console.log(event)
    pizzaOne.style.backgroundColor = 'blue'
    pizzaOne.innerHTML= "oui"
    pizzaOne.style.textAlign = 'center'
    pizzaOne.style.fontSize = '40px'
    alert('caca')
});
const popUp = document.querySelector('#pop_up')

popUp.addEventListener('click',function(e){
    popUp.style.backgroundColor = "red"
    popUp.fadeIn('500')
})
