$('.review').submit(function(event){

    event.preventDefault()

    const name =  $('.name').val();
    const review =  $('.review').val();
    const email =  $('.email').val();

    $.post('server.php',{ add_review:true, name:name, review:review, email:email})
    .done((response)=>{

        console.log(response)

        // this will automatically reload the page once new data is added
        window.location.reload() 
        
    })
    .fail((response)=>{
        console.log(response)
    })
});