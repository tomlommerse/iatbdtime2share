let boxes = document.getElementsByClassName("box");
let list_of_products = document.getElementsByTagName("li");
let k;
let reset;

const profileOwned = document.querySelector('.profileProductsOwned');
const profileBorrowed = document.querySelector('.profileProductsBorrowed');
const profileReturned = document.querySelector('.profileProductsReturned');

const modal = document.querySelector('#logout-modal');

displayConfirmModal = () =>{
    modal.style.display = "block";
}

closeModal = () =>{
    modal.style.display = "none";
}


//sorteren van de categorieen, categorieen kunnen worden toegevoegd zonder dit te veranderen
sort = () =>{
    for(let i = 0; i < boxes.length; i++){
        k = 0;
        for(let j = 0; j < list_of_products.length; j++){

            //maak producten zichtbaar en ondzichtbaar
            if(list_of_products[j].dataset.cat === boxes[i].id && boxes[i].checked){
                list_of_products[j].style.display = 'block'; 
            }
            if(list_of_products[j].dataset.cat === boxes[i].id && !boxes[i].checked){
                list_of_products[j].style.display = 'none';
            }

            //check of alle producten ontzichtbaar zijn
            if(list_of_products[j].style.display === 'none'){
                k++
                if(k === list_of_products.length){
                    reset = 1;
                }
            }
        }
    }
    //als niks zichtbaar is dan word alles zichtbaar
    if(reset === 1){
        console.log('reset');
        for(let l = 0; l < list_of_products.length; l++){
            list_of_products[l].style.display = 'block';
        }
        reset = 0;
    }
}

//wissel tussen de geleende en aangeboden/uitgeleende producten
swapProductsProfile = (action) =>{

    //kijk op welke knop er geklicked word en update de visability

    switch(action){
        case "offered":
            profileOwned.style.display = 'grid';
            profileBorrowed.style.display = 'none';
            profileReturned.style.display = 'none';
            break;
        case "lent":
            profileOwned.style.display = 'none';
            profileBorrowed.style.display = 'grid';
            profileReturned.style.display = 'none';
            break;
        case "returned":
            profileOwned.style.display = 'none';
            profileBorrowed.style.display = 'none';
            profileReturned.style.display = 'grid';
            break;
    }
}

//confirm message en submit producten
submitLeen = (formId) =>{
    const form = document.getElementById(formId);
    form.submit();
    alert('Bedankt voor het lenen van dit product.');
}
submitRetur = (formId) => {
    const form = document.getElementById(formId);
    form.submit();
    alert('Bedankt voor het terugbrengen van dit product.');
}

submitComment = () => {
    const form = document.querySelector('form[method="POST"]');
    form.submit();
    alert('Bedankt voor het plaatsen van een reactie.');
}