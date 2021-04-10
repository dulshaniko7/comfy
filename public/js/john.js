const cartBtn = document.querySelector(".cart-btn");
const closeCartBtn = document.querySelector(".close-cart");
const clearCartBtn = document.querySelector(".clear-cart");
const cartDOM = document.querySelector(".cart");
const cartOverlay = document.querySelector(".cart-overlay");
const cartItems = document.querySelector(".cart-items");
const cartTotal = document.querySelector(".cart-total");
const cartContent = document.querySelector(".cart-content");
const productsDOM = document.querySelector(".products-center");


const getPro = document.querySelector('#getProduct')

let cart = []

const url = 'http://127.0.0.1:8000/products'

async function getProductNew() {
    const response = await fetch(url)
    const data = await response.json()
  let  products = data
    products = products.map(p => {
        const {title} = p.title
        const {price} =p.price
        return {title,price}
    })
}

getProductNew()



class Products {
  /*
   async getProducts() {
       try{
     await fetch(url)
            .then(response => response.json())
            .then(data => console.log(data))
    } catch(error){
       console.log(error)}



   }

   */
}



class UI {
}

class Storage {
}

document.addEventListener('DOMContentLoaded', () => {
    const ui = new UI()
    const product = new Products()

})

//my code
/*
getPro.addEventListener('click', function () {

})

promise = new Promise((resolve, reject) => {
reject()
})

promise.then(() => {
    console.log('finished')
})
promise.catch(() => {
    console.log('error')
})

let url = 'https://jsonplaceholder.typicode.com/posts/'

fetch(url)
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error =>console.log(error))
*/
