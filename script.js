
function addBox(){
    var input = document.getElementById("message");

    if (input.value != null && input.value.trim() != "") {
        var box = document.createElement("div");
        box.setAttribute("id", "box");
        box.innerHTML ="\<span\>&#8220;\</span\>" + input.value + "\<span\>&#8221;\</span\>";
        document.getElementById("Recommendation").appendChild(box);
        document.getElementById("message").value = "";
    }
}