$('.order').submit(function(event){

    event.preventDefault()

    const name =  $('.name').val();
    const email =  $('.email').val();
    const contact =  $('.contact').val();
    const address =  $('.address').val();
    const city =  $('.city').val();

    $.post('server.php',{ add_order:true, name:name, email:email, contact:contact, address:address, city:city})
    .done((response)=>{

        console.log(response)

        // this will automatically reload the page once new data is added
        window.location.reload() 
        
    })
    .fail((response)=>{
        console.log(response)
    })
});

$('.contact').submit(function(event){

event.preventDefault()

const name =  $('.name').val();
const email =  $('.email').val();
const message =  $('.message').val();


$.post('server.php',{ contact_us:true, name:name, email:email, message:message})
.done((response)=>{

    console.log(response)

    // this will automatically reload the page once new data is added
    window.location.reload() 
    
})
.fail((response)=>{
    console.log(response)
})
});