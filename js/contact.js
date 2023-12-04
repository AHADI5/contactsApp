//Getting Data
var sendButton = document.querySelector(".action>button")
var contactForm = document.querySelector("form");
sendButton.addEventListener("click", (ev) => {
    ev.preventDefault();
    sendData(contactForm);
    console.log("Hello");
}) 

function sendData(form) {
    let data  = new FormData(form); 
    // problem !!!!!
    
    let xhr  = new XMLHttpRequest();
    xhr.onreadystatechange= function() {
        if((xhr.readyState==4)&& (xhr.status==200)){
            console.log("reponse",xhr.response,"end Answer");
            getData();
            
        } else {
            console.log("request failed");
        }

    }

    xhr.open('POST', '../controllers/registerContacts.php');
    xhr.send(data);  
}

function getData() {
    
    let phoneSections = document.querySelector(".phone-contacts");
    console.log(phoneSections);
    let xhr  = new XMLHttpRequest();
    xhr.onreadystatechange= function() {
        if((xhr.readyState==4)&& (xhr.status==200)){
            console.log("reponse",xhr.response,"end Answer");
            var reponse = xhr.response;
            phoneSections.innerHTML= reponse;
            
        } else {
            console.log("request failed");
        }
        var contacts = document.querySelectorAll(".items");
        contacts.forEach(contact => {contact.addEventListener("click" , (ev) => {
            let parent =  ev.currentTarget.parentElement;
            let currentElement = null ;
            const informations = parent.querySelectorAll(".others");
            for (let index = 0; index < informations.length; index++) {

                const element = informations[index];
             

                if (element.classList.contains("hidden-informations")) {
                    element.classList.remove("hidden-informations");
                    element.classList.add ("shown-informations");
                    
                    
                } else {
                    element.classList.add("hidden-informations");
                    element.classList.remove("shown-informations");

                }

                
               
                
            }
            
        

        })
 
})

console.log(contacts);

    }

    xhr.open('GET', '../controllers/getContacts.php');
    xhr.send(null);
}
getData();