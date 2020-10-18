$.get("http://localhost:8080/Home/listed", function(data, status){
    let a = JSON.parse(data);
    console.log(a)
  });

$('.card-header').hover(function(){
    $('.img').removeClass("disabled")
    $(".img").on('click',function(){
        $(".judul").html(`<input type="text" class="form-control" focus>`)
    })
},function(){
    $('.img').addClass("disabled")
    $(".judul").html(`<h4>PROCCESS</h4>`)
})

$(".box-card").hover(function(){
    $('.img-edit').removeClass("disabled")
    $('.img-edit').on('click',function(){
        $('#modalIsi').modal('show')
    })
},function(){
    $('.img-edit').addClass("disabled")
})

$("#newList").on('click',function(){
    $("#modalNewList").modal('show')
})