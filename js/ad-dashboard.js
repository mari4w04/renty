$('#add-bike').click(function(){
    console.log('hello')
    $("#overlay-form").css("display", "block");
});

$(".close-btn").click(function(){
    $("#overlay-form").css("display", "none");
    $("#overlay-edit-form").css("display", "none");
});
let sThisBikeIdEdit

$('.edit-bike').click(function(){
    console.log('hello')
    sThisBikeIdEdit = $(this).data('id');
    $("#bikeidforediting").text(sThisBikeIdEdit);
    $("#overlay-edit-form").css("display", "block");
});


$('.delete-bike').click(function(){
    let sThisBikeId = $(this).data('id');
    swal({
        title: "Remove a bike",
        text: "Are you sure you want to remove this bike?",
        buttons: {
            cancel: true,
            confirm: true,
          },
        icon: "warning",
    }).then((res) => {
        if(res){
            $.ajax({
                method : "GET",
                url : 'apis/api-delete-bike',
                data : {
                    "bikeid": sThisBikeId
                    },
                cache: false,
                dataType:"JSON"
                }).
                done(function(jData){
                if(jData.status == 1){
                    console.log('*************')
                    console.log(jData)
                    // swal({
                    //     title: "Congrats",
                    //     text: "You have logged in",
                    //     icon: "success",
                    // })
                    location.reload()
            
                }
                if(jData.status == 0){
                    console.log('*************')
                    console.log(jData)
                    // location.reload()
            
                    
                }
                }).fail(function(){
                    console.log('fatal error')
                })
                    return false;
        }else {
            console.log('cancel');
        }
    });
    
    
    // .then(function(){
    //     
    // });
});

$('#frmAddBike').submit(function(e){
    // e.preventDefault();
    $.ajax({
        method: "POST",
        url: 'renty/../apis/api-add-bike.php',
        //key: whatever is in the form - convert the form to code that php will understand
        data: $('#frmAddBike').serialize(),
        //return what? as json
        dataType: "JSON"
    }).
    done(function(jData){
        console.log(jData)
        if(jData.status == 1){
            
            // swal({
            //     title: "Thank you!",
            //     text: "Your account has been created!",
            //     type: "success",
            //     button: "Login to vote",
            // }).then(function() {
            //     window.location = "login";
            // });
            location.reload();
            
            console.log("you have registered the bike")
            
        }

        if(jData.status == 0){
            console.log("something went wrong")
            return
        }
    }).
    fail(function(jData){
        console.log('error')
       
    })
    return false
});


$('#frmEditBike').submit(function(e){
    // e.preventDefault();
    $.ajax({
        method: "POST",
        url: 'renty/../apis/api-edit-bike.php',
        //key: whatever is in the form - convert the form to code that php will understand
        data: $('#frmEditBike').serialize()+"&bikeid="+sThisBikeIdEdit,
        //return what? as json
        dataType: "JSON"
    }).
    done(function(jData){
        console.log(jData)
        if(jData.status == 1){
            
            // swal({
            //     title: "Thank you!",
            //     text: "Your account has been created!",
            //     type: "success",
            //     button: "Login to vote",
            // }).then(function() {
            //     window.location = "login";
            // });
            location.reload();
            
            console.log("you have registered the bike")
            
        }

        if(jData.status == 0){
            console.log("something went wrong")
            return
        }
    }).
    fail(function(jData){
        console.log('error')
       
    })
    return false

    
});
