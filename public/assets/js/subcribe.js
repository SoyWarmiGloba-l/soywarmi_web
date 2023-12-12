function sendSub()
{
    let inputEmail = document.getElementById("email");
    let alerta = document.getElementById("alert_subcribe");
    fetch("https://soywarmi.rda-consultores.com/api/subscribe", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",            
        },
        body: JSON.stringify({
            email: inputEmail.value,            
        }),
    })
        .then((response) => response.json())
        .then((data) => {            
            if(data.status){
                alert_subcribe.style.display = 'block';
                setTimeout(()=>{
                    $('#exampleModal').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                }, 3000);
            }
        });
}