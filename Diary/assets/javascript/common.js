//스크롤 값에 따라 변경할 클래스 및 효과
const header = document.querySelector(".header")
const scrollUp = document.querySelector(".btn_scroll_top")
const profileClose = document.querySelector(".profile_cont_close")

// let switcher = 0;
function scroll() {
    let scrollTop = window.pageYoffest || document.documentElement.scrollTop || window.screenY;
    
    if (scrollTop >= 100) {
        header.classList.add("header_ctrl");
        scrollUp.style.transform = "scale(1) translatex(180px)";
        profileClose.style.transform = "scale(1) translatex(-180px)";
        
    } else {
        header.classList.remove("header_ctrl");
        scrollUp.style.transform = "scale(0) translatex(0)";
        profileClose.style.transform = "scale(0) translatex(0)";
    }
    requestAnimationFrame(scroll);
}
scroll(); //함수 호출