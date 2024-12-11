document.getElementById("bookingForm").addEventListener("submit", function (event) {
    event.preventDefault();
  
    const service = document.getElementById("service").value;
    const name = document.getElementById("name").value;
    const contact = document.getElementById("contact").value;
    const address = document.getElementById("address").value;
  
    const confirmationMessage = `
      Thank you, ${name}! Your booking for ${service} has been received.
      Our service provider will contact you shortly at ${contact}.
    `;
  
    document.getElementById("confirmationMessage").textContent = confirmationMessage;
    document.getElementById("confirmationMessage").classList.remove("hidden");
  
    // Clear the form
    document.getElementById("bookingForm").reset();
  });
  