  $(document).on("click", "#purchased", function(e){
       //swal("You have ordered this item", "","success")
 swal({
   title: "Thank you for purchasing this Car!",
   text: "Your car will be delivered in 3 days.",
   icon: "success",
   button: "Okay",
 })

});