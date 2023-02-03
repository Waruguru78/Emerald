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

$('.products').submit(function(event){

event.preventDefault()

const product =  $('.product').val();
const name =  $('.name').val();
const orders =  $('.orders').val();
const price =  $('.price').val();

$.post('server.php',{ add_product:true, product:product, name:name, orders:orders, price:price})
.done((response)=>{

    console.log(response)

    // this will automatically reload the page once new data is added
    window.location.reload() 
    
})
.fail((response)=>{
    console.log(response)
})
});