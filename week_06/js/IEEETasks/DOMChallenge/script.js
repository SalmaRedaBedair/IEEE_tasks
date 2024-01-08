// style
const styleElement = document.createElement("style");
document.head.appendChild(styleElement);

const rule = `
  body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
  }

  :root {
    --primary-color: #19986f;
    --secondary-color: #edeced;
    --text-color: #b5b4b5;
  }

  .myheader {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    color: white;
  }

  .myheader h2 {
    margin: 0;
    color: var(--primary-color);
  }

  ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
  }

  li {
    margin: 0 10px;
    color:var(--text-color);        
  }

  .main-content {
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
    background-color: var(--secondary-color);
  }

  .card {
    background-color: white;
    margin: 10px;
    width: calc(33.33% - 20px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items:center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .card-content {
    padding: 20px;
  }

  .card h2 {
    margin: 0;
    font-size: 36px;
    align-items: center;
    display: flex;
    justify-content: center;
}

  .product {
    margin: 10px 0 0 0;
    color: var(--text-color);
  }
  footer{
    background-color: var(--primary-color);
    color: white;
  }
  footer p{
    padding: 20px;
    align-items: center;
    display: flex;
    justify-content: center;
    margin: 0px;
  }
`;
styleElement.innerText = rule;

// menu
const arr = ["Home", "About", "Service", "Contact"];
let mymenu = document.createElement("div");
let unorderdList = document.createElement("ul");
arr.forEach((element) => {
  let listelement = document.createElement("li");
  let home = document.createTextNode(element);
  let paragraph = document.createElement("p");
  paragraph.appendChild(home);
  listelement.appendChild(paragraph);
  unorderdList.appendChild(listelement);
});

let myheader = document.createElement("div");

// heading
let myheaderH2 = document.createElement("h2");
let headerText = document.createTextNode("Elzero");

myheaderH2.className = "myheaderH2";
myheader.className = "myheader";

// main-content
let mainContent = document.createElement("div");
mainContent.className = "main-content";

for (let i = 1; i <= 15; i++) {
  let productText = document.createTextNode("Product");
  let product = document.createElement("p");
  product.appendChild(productText);
  product.className = "product";
  let card = document.createElement("div");
  let cardcontent = document.createElement("div");
  let h2 = document.createElement("h2");
  let number = document.createTextNode(i);
  h2.appendChild(number);
  cardcontent.appendChild(h2);
  cardcontent.appendChild(product);
  card.appendChild(cardcontent);
  mainContent.appendChild(card);
  card.className = "card";
  cardcontent.className = "card-content";
}

// footer
let myfooter=document.createElement("footer");
let footerText=document.createTextNode("Copyright 2021");
let footerp=document.createElement("p");
footerp.appendChild(footerText);
myfooter.appendChild(footerp);

mymenu.appendChild(unorderdList);
myheaderH2.appendChild(headerText);
myheader.appendChild(myheaderH2);
myheader.appendChild(mymenu);
document.body.appendChild(myheader);
document.body.appendChild(mainContent);
document.body.appendChild(myfooter);
