//서치 버튼 표시

const searchBtn = document.querySelector(".section_search_button")
let i = 0;

searchBtn.addEventListener("click", (e)=>{
    e.preventDefault();
    if(i==0){
        document.querySelector("#board_search").style.display="block";
        i++;
    } else{
        document.querySelector("#board_search").style.display="none";
        i--;
    }
})