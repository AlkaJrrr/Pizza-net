console.log('caca')


console.log('meow')

const pizzaOne = document.querySelector('.pizza_form')
const popUp = document.querySelector('#pop_up')
const corps = document.querySelector('#body')
pizzaOne.addEventListener('click', function (event){
     console.log('ca fonctionne sheeesh')


    popUp.style.display = "block";
    let id = pizzaOne.dataset.id
   

});

 
popUp.addEventListener('click',function(e){
    popUp.style.backgroundColor = "red"
    
})

window.onclick = function(event) {
    if (event.target == corps) {
      popUp.style.display = "none";
    }
  }