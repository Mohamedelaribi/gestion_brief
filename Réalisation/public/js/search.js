let search_input = document.querySelector("#Search");

search_input.addEventListener("keyup", () =>{
        fetch("/search/" + search_input.value, {
            method: "GET"
        }).then((res) => {
            return res.text();
        }).then((data) => {
            console.log(data);
            document.getElementsByClassName('containerPromotion')[0].innerHTML = data;

        }
        )


}
)
