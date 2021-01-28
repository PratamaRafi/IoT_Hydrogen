var item;
function show(){
    if(item == 0)
        {
            document.getElementById("data").style.display="none";
            return item = 1;
        }
    else
        {
            document.getElementById("data").style.display="inline";
            return item = 0;
        }

}