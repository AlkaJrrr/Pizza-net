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
    this.getAttribute('id');
});
