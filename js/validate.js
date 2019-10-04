$('#frmPayment').submit( function(){

    $.ajax({
        method:"POST",
        url:"apis/api-payment.php",
        data: $('#frmPayment').serialize(),
        dataType:"JSON"
    }).done(function(jData){
        console.log(jData)
        if(jData.status == 1){
            location.href = 'scan.php';
            // swal({
            //     title: "Payment success",
            //     text: "You can login now",
            //     icon: "success",
            //     buttons: {
            //         backToLogin: {
            //           text: "Close",
            //           value: "backToLogin",
            //         },
            //       },
            // })
            // .then(function() {
            //     location.href = 'login';
            //   }) 
        }else{
            swal({
                title: jData.message,
                // text: "Please re-type it",
                icon: "warning",
            });
        }
    }).fail(function(){
        console.log('API does not work')
    });

    return false
})