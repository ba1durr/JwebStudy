//validating 

function validateType(value){

    if (!value){

        document.getElementById('Error_Type').innerHTML = "Type must be chosen";

    } else {

        document.getElementById('Error_Type').innerHTML = "";

    }


}

