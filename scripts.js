const menuToggle = document.querySelector(".menu-toggle");
const navLinks = document.querySelector("#navLinks");
const bookingForm = document.querySelector("#bookingForm");
const formMessage = document.querySelector("#formMessage");
const year = document.querySelector("#year");
const testimonialTrack = document.querySelector(".testimonial-track");
const testimonialCards = document.querySelectorAll(".testimonial-card");
const prevBtn = document.querySelector(".testimonial-nav.prev");
const nextBtn = document.querySelector(".testimonial-nav.next");
const dots = document.querySelectorAll(".testimonial-dots .dot");
let testimonialIndex = 0;
let testimonialTimer;

if (year) {
  year.textContent = new Date().getFullYear();
}

if (menuToggle && navLinks) {
  menuToggle.addEventListener("click", () => {
    const isOpen = navLinks.classList.toggle("open");
    menuToggle.classList.toggle("active", isOpen);
    menuToggle.setAttribute("aria-expanded", String(isOpen));
  });

  navLinks.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navLinks.classList.remove("open");
      menuToggle.classList.remove("active");
      menuToggle.setAttribute("aria-expanded", "false");
    });
  });
}

function updateTestimonials(index) {
  if (!testimonialTrack || !testimonialCards.length) return;

  testimonialIndex = (index + testimonialCards.length) % testimonialCards.length;
  testimonialTrack.style.transform = `translateX(-${testimonialIndex * 100}%)`;

  dots.forEach((dot, dotIndex) => {
    dot.classList.toggle("active", dotIndex === testimonialIndex);
  });
}

function startTestimonialAutoPlay() {
  stopTestimonialAutoPlay();
  testimonialTimer = window.setInterval(() => updateTestimonials(testimonialIndex + 1), 4500);
}

function stopTestimonialAutoPlay() {
  if (testimonialTimer) window.clearInterval(testimonialTimer);
}

if (prevBtn) {
  prevBtn.addEventListener("click", () => {
    updateTestimonials(testimonialIndex - 1);
    startTestimonialAutoPlay();
  });
}

if (nextBtn) {
  nextBtn.addEventListener("click", () => {
    updateTestimonials(testimonialIndex + 1);
    startTestimonialAutoPlay();
  });
}

dots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    updateTestimonials(index);
    startTestimonialAutoPlay();
  });
});

if (testimonialTrack && testimonialCards.length) {
  updateTestimonials(0);
  startTestimonialAutoPlay();
}

if (bookingForm && formMessage) {
  bookingForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const formData = new FormData(bookingForm);
    const name = formData.get("name");
    const destination = formData.get("destination");

    formMessage.textContent = `Thank you, ${name}. Your quote request for ${destination} has been received. Our team will contact you soon.`;
    bookingForm.reset();
  });
}
