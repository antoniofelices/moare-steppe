/**
 * Add class to anchor elements that contain images.
 */
document.querySelectorAll("a > img").forEach((img) => {
  img.parentElement.classList.add("contains-image")
})

/**
 * Add class to main header on scroll.
 */
const msHeader = document.querySelector(".ms-site-header")

if (msHeader) {
  document.addEventListener("scroll", () => {
    msHeader.classList.toggle(
      "scrolled",
      window.scrollY > msHeader.offsetHeight,
    )
  })
}
