let myElement = document.createElement("div");
let myAttr = document.createAttribute("data-custom"); //data-custom => will know what is it latte
let myText = document.createTextNode("Product One");
let myComment = document.createComment("This is div");

myElement.className="product";
myElement.setAttributeNode(myAttr);
myElement.setAttribute("data-set","Testing");

// Append Comment To Element
myElement.appendChild(myComment);

// Append Text To Element
myElement.appendChild(myText);

// Append Element To Body
document.body.appendChild(myElement);
