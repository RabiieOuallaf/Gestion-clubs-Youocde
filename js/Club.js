// Clear the placeholder while focusing 

const Search = document.getElementById("search");



Search.addEventListener("click" , _ => {

    Search.setAttribute("placeholder" , "");
    
});

Search.addEventListener("blur" , _ => {
    
    Search.setAttribute("placeholder", "Recherch un club");

}); 





