const section = document.querySelector("#projects");
const scrollContainer = section.querySelector(".horizontal-scroll");
let isInSection = false;
const scrollSpeed = 3; // Adjust this value to make the scroll faster or slower
const delay = 10000; // Delay in milliseconds before switching scroll direction
let switchTimeout;
let startX,
  scrollLeft,
  isTouching = false;

section.addEventListener("mouseenter", () => {
  isInSection = true;
});

section.addEventListener("mouseleave", () => {
  isInSection = false;
});

window.addEventListener(
  "wheel",
  function (e) {
    if (isInSection) {
      const maxScrollLeft =
        scrollContainer.scrollWidth - scrollContainer.clientWidth;
      let newScrollLeft = scrollContainer.scrollLeft + e.deltaY * scrollSpeed;

      if (newScrollLeft >= maxScrollLeft) {
        scrollContainer.scrollLeft = maxScrollLeft;
        clearTimeout(switchTimeout);
        switchTimeout = setTimeout(() => {
          isInSection = false;
        }, delay);
      } else if (newScrollLeft <= 0) {
        scrollContainer.scrollLeft = 0;
        clearTimeout(switchTimeout);
        switchTimeout = setTimeout(() => {
          isInSection = false;
        }, delay);
      } else {
        scrollContainer.scrollLeft = newScrollLeft;
        e.preventDefault();
        clearTimeout(switchTimeout);
      }
    }
  },
  { passive: false }
);

const scrollAmount = 315; // Adjust this value to scroll by one card width
const scrollLeftButton = document.querySelector(".scroll-button.left");
const scrollRightButton = document.querySelector(".scroll-button.right");

scrollLeftButton.addEventListener("click", () => {
  scrollContainer.scrollBy({
    left: -scrollAmount,
    behavior: "smooth",
  });
});

scrollRightButton.addEventListener("click", () => {
  scrollContainer.scrollBy({
    left: scrollAmount,
    behavior: "smooth",
  });
});
