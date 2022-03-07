//script for dynamically changing the typeSwitcher



function changeMarkup(value){
    
    var arr = { "DVD": "makeDVD", "Book": "makeBook", "Furniture": "makeFurniture" };
    
    window[arr[value]]();
}


function makeDVD(){

    var dynamic = document.getElementById("dynamic");

    while (dynamic.hasChildNodes()) {
        dynamic.removeChild(dynamic.firstChild);
      }

    var DVDLabel = document.createElement("Label");
      DVDLabel.innerHTML = "Size: ";

    var OBJ = document.createElement("input");
        OBJ.setAttribute("type", "text");
        OBJ.setAttribute("name", "Size");
        OBJ.setAttribute("placeholder", "Size: ");

        dynamic.append(DVDLabel);
        dynamic.append(OBJ);

}

function makeBook(){
    
    var dynamic = document.getElementById("dynamic");
    
    while (dynamic.hasChildNodes()) {
        dynamic.removeChild(dynamic.firstChild);
      }

    var BookLabel = document.createElement("Label");
      BookLabel.innerHTML = "Weight: ";

    var OBJ = document.createElement("input");
        OBJ.setAttribute("type", "text");
        OBJ.setAttribute("name", "Weight");
        OBJ.setAttribute("placeholder", "Weight: ");
 
        dynamic.append(BookLabel);
        dynamic.append(OBJ);

}

function makeFurniture(){

    var dynamic = document.getElementById("dynamic");

    while (dynamic.hasChildNodes()) {
        dynamic.removeChild(dynamic.firstChild);
      }

    var HeightLabel = document.createElement("Label");
    HeightLabel.innerHTML = "Height: ";

    var WidthLabel = document.createElement("Label");
    WidthLabel.innerHTML = "Width: ";

    var LengthLabel = document.createElement("Label");
    LengthLabel.innerHTML = "Length: ";

    var breakLine = document.createElement("br");
    var breakLinee = document.createElement("br");

    var OBJ = document.createElement("input");
        OBJ.setAttribute("type", "text");
        OBJ.setAttribute("name", "Height");
        OBJ.setAttribute("placeholder", "Height: ");
        
    var OBJ1 = document.createElement("input");
        OBJ1.setAttribute("type", "text");
        OBJ1.setAttribute("name", "Width");
        OBJ1.setAttribute("placeholder", "Width: ");

    var OBJ2 = document.createElement("input");
        OBJ2.setAttribute("type", "text");
        OBJ2.setAttribute("name", "Length");
        OBJ2.setAttribute("placeholder", "Length: ");
       
        dynamic.append(HeightLabel);
        dynamic.append(OBJ);
        dynamic.append(breakLine);
        dynamic.append(WidthLabel);
        dynamic.append(OBJ1);
        dynamic.append(breakLinee);
        dynamic.append(LengthLabel);
        dynamic.append(OBJ2);

        
}