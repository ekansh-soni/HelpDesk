const button = document.querySelector('#exit');
button.addEventListener("click",() =>{
    Notification.requestPermission().then(perm => {
        if (perm === "granted"){
            const notification = new Notification("Supervior",{
                body : "You got a Some work",
                icon : "logo.png"
            })

        }
    })
});