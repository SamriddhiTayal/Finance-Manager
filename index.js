const balanceAmt = document.getElementById("balanceAmt");
const money_Add = document.getElementById("money-Add");
const money_Sub = document.getElementById("money-Sub");
const list = document.getElementById("list");
const form = document.getElementById("form");
const text = document.getElementById("label");
const amount = document.getElementById("amount");
//as we don't want an action for form create local storage
//string to object
const localStorageTransactions = JSON.parse(localStorage.getItem('transactions'));
let transactions = localStorage.getItem('transactions') !== null ? localStorageTransactions : [];

//function to add transaction be it income or expense
function add(e) {
  e.preventDefault();
  if (text.value.trim() === '' || amount.value.trim() === '') {
    alert('please add text and amount')
  } else {
    const transaction = {
      id: generateID(),
      text: text.value,
      amount: +amount.value
    }

    transactions.push(transaction);

    addDOM(transaction);
    updateBalance();
    updateLocalStorage();
    text.value = '';
    amount.value = '';
  }
}
//Generating Random ID
function generateID() {
  return Math.floor(Math.random() * 1000000000);
}
//function to add trasactions to DOM list
function addDOM(transaction) {
  //default + sign is given otherwise -
  const sign = transaction.amount < 0 ? "-" : "+";
  const item = document.createElement("li");

  //adding Class Based on Value
  item.classList.add(
    transaction.amount < 0 ? "money-Sub" : "money-Add"
  );

  item.innerHTML = `
    ${transaction.text} <span>${sign}${Math.abs(
    transaction.amount
  )}</span>
    <button class="delete-btn" onclick="deleteTransaction(${transaction.id})">-</button>
    `;
  list.appendChild(item);
}
//update the balance amount when income or expenditure is given
function updateBalance() {
  const amounts = transactions.map(
    (transaction) => transaction.amount
  );
  const total = amounts
    .reduce((acc, item) => (acc += item), 0)
    .toFixed(2);
  const income = amounts
    .filter((item) => item > 0)
    .reduce((acc, item) => (acc += item), 0)
    .toFixed(2);
  const expense =
    (amounts
      .filter((item) => item < 0)
      .reduce((acc, item) => (acc += item), 0) *
      -1).toFixed(2);

  balanceAmt.innerText = `₹${total}`;
  money_Add.innerText = `₹${income}`;
  money_Sub.innerText = `₹${expense}`;
}
//deleting a transaction
function deleteTransaction(id) {
  transactions = transactions.filter(transaction => transaction.id !== id);
  updateLocalStorage();
  Init();
}
//updating local storage transaction
function updateLocalStorage() {
  localStorage.setItem('transactions', JSON.stringify(transactions));
}
//function init to nullify the initial ul
function Init() {
  list.innerHTML = "";
  transactions.forEach(addDOM);
  updateBalance();
}
//calling init
Init();
//adding event listener on form submit and calling add function
form.addEventListener('submit', add);
