function checkform (form)
{
    var postMessage = true;
    if (form.naam.value == ""){
        document.getElementById("name") .style.borderColor='red';
        document.getElementById("name_input") .innerHTML = 'name: is verplicht in te vullen';
        postMessage = false;

    } else{
        document.getElementById("name_input").innerHTML = 'name';
        document.getElementById("naam").style.borderColor='#666';


    }
    if (form.voornaam.value == "") {
        document.getElementById("name").style.borderColor='red';
        document.getElementById("name_input").innerHTML = 'voornaam is verplicht in te vullen';
        postMessage = false;
    } else {
        document.getElementById("name").style.borderColor='#666'; 
         document.getElementById("name_input").innerHTML = 'name:';
    }

    if (form.email.value == "") {
        document.getElementById("email").style.borderColor='red';
        document.getElementById("email_input").innerHTML = 'email: is verplicht in te vullen' ;
        postMessage = false ; 
    }  else {
        document.getElementById("email").style.borderColor='#666'; 
        document.getElementById("email_input").innerHTML = 'email:';
    }

    if(form.email.value != ""){
        var str=form.email.value; 
        var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
        if (filter.test(str)){
            document.getElementById("email_input").innerHTML = 'email:'; 
            document.getElementById("email").style.borderColor='#666';

        }else {
            document.getElementById("email_input").innerHTML = 'email: je moet een geldig emailadres invullen';
            document.getElementById("email").style.borderColor='red';
            postMessage = false;
        }
    }
    return postMessage
}