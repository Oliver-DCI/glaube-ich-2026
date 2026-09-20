const contactForm = document.querySelector("#contactForm");
const contactSuccess = document.querySelector("#contactSuccess");

if (contactForm && contactSuccess) {

  contactForm.addEventListener("submit", function (event) {

    event.preventDefault();

    contactSuccess.hidden = false;

    contactSuccess.scrollIntoView({
      behavior: "smooth",
      block: "nearest"
    });

  });

}