$('.contact').submit(function(event){

    event.preventDefault()

    const name =  $('.name').val();
    const message =  $('.message').val();
    const email =  $('.email').val();

    $.post('server.php',{ add_message:true, name:name, message:message, email:email})
    .done((response)=>{

        console.log(response)

        // this will automatically reload the page once new data is added
        //window.location.reload() 
        
    })
    .fail((response)=>{
        console.log(response)
    })
});