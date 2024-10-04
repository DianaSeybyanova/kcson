const el = document.querySelector(".header__nav")
const observer = new IntersectionObserver(
    ([e]) => e.target.classList.toggle("is-pinned", e.intersectionRatio < 1), {
    threshold: [1]
}
);

observer.observe(el);
