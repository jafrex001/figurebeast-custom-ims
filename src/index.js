const list = document.getElementById("past-orders-list");
const orderForm = document.getElementById("order-form");
const formVisibilityButton = document.getElementById("create-order-button");
const formSubmitButton = document.getElementById("form-submit-button");
const productName = document.getElementById("product-name");
const productQuantity = document.getElementById("product-quantity");
const successMessage = document.getElementById("success-message");
const failureMessage = document.getElementById("failure-message");

formVisibilityButton.addEventListener("click", () => {
  orderForm.style.display = orderForm.style.display === "flex" ? "none" : "flex";
  successMessage.style.display = "none";
  failureMessage.style.display = "none";
});

orderForm.addEventListener("submit", (event) => {
  event.preventDefault();

  if (productName.value.trim() !== "" && productQuantity.value.trim() !== "") {
    successMessage.style.display = "flex";
    failureMessage.style.display = "none";
    orderForm.style.display = "none";
    productName.value = "";
    productQuantity.value = "";
  } else {
    successMessage.style.display = "none";
    failureMessage.style.display = "flex";
  }
});


