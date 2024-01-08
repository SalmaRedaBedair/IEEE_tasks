/*
  Loop Challenge
*/

let myAdmins = ["Ahmed", "Osama", "Sayed", "Stop", "Samera"];
let myEmployees = [
  "Amgad",
  "Samah",
  "Ameer",
  "Omar",
  "Othman",
  "Amany",
  "Samia",
  "Anwar",
];

for (let i = 0; i < myAdmins.length; i++) {
  if (myAdmins[i] == "Stop") {
    myAdmins = myAdmins.slice(0, i);
  }
}

document.write(`<div>We Have ${myAdmins.length} Admins</div>`);
document.write(`<br>`);
for (let i = 0; i < myAdmins.length; i++) {
  document.write(`<h3>The admin for team ${i + 1} is ${myAdmins[i]}</h3>`);
  for (let j = 0; j < myEmployees.length; j++) {
    if (myEmployees[j][0].toLowerCase() === myAdmins[i][0].toLowerCase())
    {
      // console.log(
      //   `${
      //     myEmployees[j][0].toLowerCase() + " " + myAdmins[i][0].toLowerCase()
      //   }`
      // );
      document.write(`<p>- ${myEmployees[j]}</p>`);
    }
  }
}
