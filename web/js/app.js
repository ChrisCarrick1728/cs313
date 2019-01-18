$(document).ready(function(){
  $("span").mouseover(function() {
    $("#familyPic").attr("src", "img/familyPic-" + this.innerHTML + ".jpg")
  })
  $("span").mouseout(function() {
    $("#familyPic").attr("src", "img/familyPic.jpg")
  })
})
