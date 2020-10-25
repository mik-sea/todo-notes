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
            $(".isi").html('<form action="/Todo/updateList/'+idjudul+'" method="post"><textarea name="Ntext" id="Ntext" cols="100" rows="21">'+done["data"].isi+'</textarea><div class="setline"><button class="btn btn-success mr-3">Done</button></form><a class="btn btn-danger" href="/Todo/deleteList/'+idjudul+'">Delete</a></div>')
            // deletes(idjudul);
        },
        error:function(err){
            console.log(err)
        }
    })
}
function deletes(id){
    $(".btn-deletes").html("<div class='delete'><a class='btn btn-danger mr-3' href='/Todo/deleteList/"+id+"'>Delete</a></div>")
}