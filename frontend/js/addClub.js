

let addBtn = document.querySelector("#btn_add");
let popUp = document.getElementById("pop_up");
let cancel = document.getElementById("cancel");


addBtn.addEventListener("click", () => {
    popUp.style.display = "block";
})
cancel.addEventListener("click", () => {
    popUp.style.display = "none";
})

// delete membre from DB
let deletMembre = document.querySelectorAll("#del_membre");

deletMembre.forEach(ele => {
    ele.addEventListener("click", delMembre);
})

function delMembre(e) {
    let row = e.target.parentElement.parentElement.parentElement;
        let rowId = row.getAttribute("num");

        row.remove();
}