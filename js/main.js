
const slides = document.querySelectorAll('.slide');
const slidesContainer = document.querySelector('.slides');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
let index = 0;

function updateSlidePosition() {
    slidesContainer.style.transform = `translateX(-${index * 100}%)`;
}

next.addEventListener('click', () => {
    index = (index + 1) % slides.length;
    updateSlidePosition();
});

prev.addEventListener('click', () => {
    index = (index - 1 + slides.length) % slides.length;
    updateSlidePosition();
});

// Автопрокрутка (опционально)
setInterval(() => {
    index = (index + 1) % slides.length;
    updateSlidePosition();
}, 7000);


const userIcon = document.getElementById("user-icon");
const modal = document.getElementById("login-modal");
const closeBtn = document.querySelector(".close");

userIcon.addEventListener("click", () => {
    modal.style.display = "flex";
});

closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
    }
});





























// const slides = document.querySelectorAll('.slide');
// const prev = document.querySelector('.prev');
// const next = document.querySelector('.next');
// let index = 0;

// function showSlide(n) {
//   slides.forEach(slide => slide.classList.remove('active'));
//   slides[n].classList.add('active');
// }

// next.addEventListener('click', () => {
//   index = (index + 1) % slides.length;
//   showSlide(index);
// });

// prev.addEventListener('click', () => {
//   index = (index - 1 + slides.length) % slides.length;
//   showSlide(index);
// });

// // Автоматическая прокрутка
// setInterval(() => {
//   index = (index + 1) % slides.length;
//   showSlide(index);
// }, 7000);
