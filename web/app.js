$(document).ready(function(){
  $("span").mouseover(function() {
    console.log(this);
    console.log($("#familyPic").attr("src", "img/familyPic-" + this.innerHTML + ".jpg"))
  })
  $("span").mouseout(function() {
    $("#familyPic").attr("src", "img/familyPic.jpg")
  })
})
