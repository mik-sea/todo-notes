$(".box-list").on('click',function(){
    $(".isi").removeClass("hide");
    $(".isi").addClass(" show");
})
function list(idjudul){
    $.ajax({
        type:"GET",
        url:"http://localhost:8080/room/"+idjudul,
        success:function(done){
            $(".judul-show").text(done["data"].judul+" - "+done["email"].email)
            $(".isi").html('<textarea name="Ntext" id="Ntext" cols="100" rows="21">'+done["data"].isi+'</textarea>')
            deletes(idjudul);
        },
        error:function(err){
            console.log(err)
        }
    })
}
function deletes(id){
    $(".deletes").html("<div class='delete'><a class='btn btn-danger' href='/Todo/deleteList/"+id+"'>delete</a></div>")
}