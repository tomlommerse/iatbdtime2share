let boxes = document.getElementsByClassName("box");
let list_of_products = document.getElementsByTagName("li");
let k;
let reset;

const profileOwned = document.querySelector('.profileProductsOwned');
const profileBorrowed = document.querySelector('.profileProductsBorrowed');

const modal = document.querySelector('#logout-modal');

displayConfirmModal = () =>{
    modal.style.display = "block";
}

closeModal = () =>{
    console.log("ffsfsfsfsfsfsf");
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

            //check of alle producten ondzichtbaar zijn
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
swapProductsProfile = () =>{
    console.log("switch");

    //als de owned producten zichtbaar zijn word deze ondzichtbaar en de borrowed producten zichtbaar, als dit niet zo is gebeurt het omgekeerde
    if (window.getComputedStyle(profileOwned).display === 'grid') {
        profileOwned.style.display = 'none';
        profileBorrowed.style.display = 'grid';
    } else {
        profileOwned.style.display = 'grid';
        profileBorrowed.style.display = 'none';
    }
}

// list_of_products[i].style.display = 'none';