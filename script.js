const form = document.querySelector("form"),
  statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
  e.preventDefault(); // Prevent form submission
  statusTxt.style.color = "#0d6efd";
  statusTxt.style.display = "block";
  statusTxt.innerText = "Sending your message...";

  let xhr = new XMLHttpRequest(); // Create new XMLHttpRequest object
  xhr.open("POST", "message.php", true); // Send POST request to message.php
  xhr.onload = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      let response = xhr.response.trim();
      if (
        response.includes("field is required") ||
        response.includes("valid email address") ||
        response.includes("failed to send")
      ) {
        statusTxt.style.color = "red";
      } else {
        form.reset();
        setTimeout(() => (statusTxt.style.display = "none"), 3000);
      }
      statusTxt.innerText = response;
    }
  };
  let formData = new FormData(form); // FormData object for form data
  xhr.send(formData); // Send form data
};
