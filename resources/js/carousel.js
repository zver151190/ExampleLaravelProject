const pageWidth = document.body.clientWidth;
const mobileWidth = 1024;

if (pageWidth > mobileWidth) {
  let slideIndex = 0;
  let slideIndexCurrent = 0;
  showSlides();

  function currentSlide(n) {
    showSlidesCurrent((slideIndexCurrent = n));
  }

  function showSlidesCurrent(n) {
    let i;
    let slides = document.getElementsByClassName("carousel__item");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndexCurrent = 1;
    }

    if (n < 0) {
      slideIndexCurrent = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndexCurrent - 1].style.display = "block";
    dots[slideIndexCurrent - 1].className += " active";
    slideIndexCurrent++;
  }

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("carousel__item");
    let dots = document.getElementsByClassName("dot");

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";

    setTimeout(showSlides, 5000); // Change image every x seconds
  }
}
// console.log(document.getElementsByClassName("carousel__item")[0])
// /* Устанавливаем индекс слайда по умолчанию */
// let slideIndex = 1;
// showSlides(slideIndex);

// /* Увеличиваем индекс на 1 — показываем следующий слайд*/
// function nextSlide() {
//     showSlides(slideIndex += 1);
// }

// /* Уменьшает индекс на 1 — показываем предыдущий слайд*/
// function previousSlide() {
//     showSlides(slideIndex -= 1);
// }

// /* Устанавливаем текущий слайд */
// function currentSlide(n) {
//     showSlides(slideIndex = n);
// }

// /* Функция перелистывания */
// function showSlides(n) {
//     let i;
//     let slides = document.getElementsByClassName("carousel__item");

//     if (n > slides.length) {
//       slideIndex = 1
//     }
//     if (n < 1) {
//         slideIndex = slides.length
//     }

//   /* Проходим по каждому слайду в цикле for */
//     for (let slide of slides) {
//         slide.style.display = "none";
//     }
//     slides[slideIndex - 1].style.display = "block";
// }
