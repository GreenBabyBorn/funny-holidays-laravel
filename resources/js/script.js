const headerBtn = document.querySelector(".header__btn");
const headerMenu = document.querySelector(".header__menu");
headerBtn?.addEventListener("click", () => {
    headerBtn.classList.toggle("active");
    headerMenu.classList.toggle("active");
});

const menuListsSub = document.querySelectorAll(".menu__item .menu__list-sub");

menuListsSub.forEach((e) => {
    e.parentElement.classList.contains("clicked")
        ? (e.parentElement.style.maxHeight =
              e.parentElement.scrollHeight + "px")
        : null;
    e.parentElement.classList.add("has-list-sub");
    e.parentElement
        .querySelector(".menu__link")
        ?.addEventListener("click", (ev) => {
            if (e.style.maxHeight) {
                e.style.maxHeight = null;
            } else {
                e.style.maxHeight = null;
                e.style.maxHeight = e.scrollHeight + "px";
            }
            e.parentElement.classList.toggle("clicked");
            e.classList.toggle("clicked");
        });
});

lightGallery(document.getElementById("static-thumbnails"), {
    licenseKey: "your_license_key",
    toggleThumb: true,
    pager: !1,
    plugins: [lgThumbnail],
    hash: !1,
    zoomFromOrigin: !1,
    allowMediaOverlap: !0,
    selector: ".lightgallery__link",
});

const elem = document?.getElementById("static-thumbnails");
const msnry = new Masonry(elem, {
    // options
    itemSelector: ".lightgallery__link",
    columnWidth: ".lightgallery__link",
    percentPosition: true,
    gutter: 0,
});
