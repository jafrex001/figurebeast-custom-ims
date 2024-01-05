const list: HTMLElement | null = document.getElementById("past-orders-list") as HTMLUListElement;
const orderForm: HTMLFormElement | null = document.getElementById("order-form") as HTMLFormElement;
const formVisibilityButton: HTMLElement | null = document.getElementById("create-order-button") as HTMLButtonElement;
const formSubmitButton: HTMLButtonElement | null = document.getElementById("form-submit-button") as HTMLButtonElement;
const productName: HTMLInputElement | null = document.getElementById("product-name") as HTMLInputElement;
const productQuantity: HTMLInputElement | null = document.getElementById("product-quantity") as HTMLInputElement;
const successMessage: HTMLElement | null = document.getElementById("success-message") as HTMLDivElement;
const failureMessage: HTMLElement | null = document.getElementById("failure-message") as HTMLDivElement;
const editButton: HTMLElement | null = document.getElementById("edit-icon") as HTMLDivElement;
const deleteButton: HTMLElement | null = document.getElementById("delete-icon") as HTMLDivElement;

formVisibilityButton?.addEventListener("click", () => {
  orderForm.style.display = orderForm.style.display === "flex" ? "none" : "flex";
  successMessage.style.display = "none";
  failureMessage.style.display = "none";
});

