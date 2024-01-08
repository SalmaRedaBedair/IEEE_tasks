var tasks = localStorage.getItem("Tasks") || [];
if (tasks.length > 0) tasks = tasks.split(",");

function show(element, index) {
  var showTaskDiv = document.createElement("div");
  showTaskDiv.classList.add("show-task");
  var cardDiv = document.createElement("div");
  cardDiv.classList.add("card");
  var pElement = document.createElement("p");
  pElement.textContent = element;
  var deleteButton = document.createElement("a");
  deleteButton.classList.add("btn", "btn-danger", index);
  deleteButton.textContent = "Delete";
  deleteButton.href = "";
  cardDiv.appendChild(pElement);
  cardDiv.appendChild(deleteButton);
  showTaskDiv.appendChild(cardDiv);
  document.body.querySelector(".container").appendChild(showTaskDiv);
}

let index = 0;
tasks.forEach((element) => {
  show(element, index++);
});

var myForm = document.querySelector("form");
myForm.addEventListener("submit", function (event) {
  console.log(event);
  event.preventDefault();
  var name = document.querySelector(".name").value;
  tasks.push(name);
  localStorage.setItem("Tasks", tasks);
  location.reload(true);
});

let deleteButtons = document.querySelectorAll(".btn-danger");
deleteButtons.forEach((element) => {
  element.addEventListener("click", function () {
    let i = element.classList[element.classList.length - 1];
    tasks = localStorage.getItem("Tasks").split(",");
    tasks.splice(i, 1);
    localStorage.setItem("Tasks", tasks);
    location.reload(true);
  });
});
