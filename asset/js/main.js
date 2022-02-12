console.log('caca')
console.log('meow')

const fermeture = document.querySelector('.close')
const pizzaOne = document.querySelector('.pizza_form')
const corps = document.querySelector('#body')
const popUp = document.querySelector('#pop_up-45')

pizzaOne.addEventListener('click', function (event){

    console.log('ca fonctionne sheeesh')
    //popUp.style.display = "block";
    let dataId = $(this).attr("data-id");
              console.log("la data est = : " + dataId);

              let  modal = document.querySelector('#pop_up-' + dataId)
             modal.style.display = "block";
             
            
});

 
// popUp.addEventListener('click',function(e){
    
    
// })
fermeture.onclick = function(e){
    popUp.style.display = "none"
}
window.onclick = function(event) {
    if (event.target == corps) {
      popUp.style.display = "none";
    }
  }