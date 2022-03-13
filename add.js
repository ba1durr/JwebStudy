//script for dynamically changing the typeSwitcher

function changeMarkup(value){
    var arr = { "DVD": "makeDVD", "Book": "makeBook", "Furniture": "makeFurniture" };
    
    if (arr[value]) { 
      window[arr[value]](); 
    }

}


function makeDVD(){

    var dynamic = document.getElementById("dynamic");

    while (dynamic.hasChildNodes()) {
        dynamic.removeChild(dynamic.firstChild);
      }

    var DVDLabel = document.createElement("Label");
      DVDLabel.innerHTML = "Size: ";

    var ErrorLabel = document.createElement("Label");
      ErrorLabel.setAttribute("id", "Error_Size");
      ErrorLabel.setAttribute("style", "color:red;")

    var breakLine1 = document.createElement("br");
    

    var OBJ = document.createElement("input");
        OBJ.setAttribute("type", "text");
        OBJ.setAttribute("name", "Size");
        OBJ.setAttribute("placeholder", "Size: ");
        OBJ.setAttribute("id", "Size");

        dynamic.append(DVDLabel);
        dynamic.append(OBJ);
        dynamic.append(breakLine1);
        dynamic.append(ErrorLabel);

}

function makeBook(){
    
    var dynamic = document.getElementById("dynamic");
    
    while (dynamic.hasChildNodes()) {
        dynamic.removeChild(dynamic.firstChild);
      }

    var BookLabel = document.createElement("Label");
      BookLabel.innerHTML = "Weight: ";

    var ErrorLabel = document.createElement("Label");
      ErrorLabel.setAttribute("id", "Error_Weight");
      ErrorLabel.setAttribute("style", "color:red;")

    var breakLine1 = document.createElement("br");

    var OBJ = document.createElement("input");
        OBJ.setAttribute("type", "text");
        OBJ.setAttribute("name", "Weight");
        OBJ.setAttribute("placeholder", "Weight: ");
        OBJ.setAttribute("id", "Weight");
 
        dynamic.append(BookLabel);
        dynamic.append(OBJ);
        dynamic.append(breakLine1);
        dynamic.append(ErrorLabel);

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

    var ErrorHeight = document.createElement("Label");
    ErrorHeight.setAttribute("id", "Error_Height");
    ErrorHeight.setAttribute("style", "color:red;")

    var ErrorWidth = document.createElement("Label");
    ErrorWidth.setAttribute("id", "Error_Width");
    ErrorWidth.setAttribute("style", "color:red;")

    var ErrorLength = document.createElement("Label");
    ErrorLength.setAttribute("id", "Error_Length");
    ErrorLength.setAttribute("style", "color:red;")

    var breakLine1 = document.createElement("br");
    var breakLine2 = document.createElement("br");
    var breakLine3 = document.createElement("br");
    var breakLine4 = document.createElement("br");
    var breakLine5 = document.createElement("br");
    var breakLine6 = document.createElement("br");
    var breakLine7 = document.createElement("br");

    var OBJ = document.createElement("input");
        OBJ.setAttribute("type", "text");
        OBJ.setAttribute("name", "Height");
        OBJ.setAttribute("placeholder", "Height: ");
        OBJ.setAttribute("id", "Height");


    var OBJ1 = document.createElement("input");
        OBJ1.setAttribute("type", "text");
        OBJ1.setAttribute("name", "Width");
        OBJ1.setAttribute("placeholder", "Width: ");
        OBJ1.setAttribute("id", "Width");

    var OBJ2 = document.createElement("input");
        OBJ2.setAttribute("type", "text");
        OBJ2.setAttribute("name", "Length");
        OBJ2.setAttribute("placeholder", "Length: ");
        OBJ2.setAttribute("id", "Length");
       
        dynamic.append(HeightLabel);
        dynamic.append(OBJ);
        dynamic.append(breakLine1);
        dynamic.append(ErrorHeight);
        dynamic.append(breakLine2);
        dynamic.append(WidthLabel);
        dynamic.append(OBJ1);
        dynamic.append(breakLine3);
        dynamic.append(ErrorWidth);
        dynamic.append(breakLine4);
        dynamic.append(LengthLabel);
        dynamic.append(OBJ2);
        dynamic.append(breakLine5);
        dynamic.append(ErrorLength);
        dynamic.append(breakLine6);

        

    }


