var list = document.getElementById("past-orders-list");
var orderForm = document.getElementById("order-form");
var formVisibilityButton = document.getElementById("create-order-button");
var formSubmitButton = document.getElementById("form-submit-button");
var productName = document.getElementById("product-name");
var productQuantity = document.getElementById("product-quantity");
var successMessage = document.getElementById("success-message");
var failureMessage = document.getElementById("failure-message");
var editButton = document.getElementById("edit-icon");
var deleteButton = document.getElementById("delete-icon");
formVisibilityButton === null || formVisibilityButton === void 0 ? void 0 : formVisibilityButton.addEventListener("click", function () {
    orderForm.style.display = orderForm.style.display === "flex" ? "none" : "flex";
    successMessage.style.display = "none";
    failureMessage.style.display = "none";
});
