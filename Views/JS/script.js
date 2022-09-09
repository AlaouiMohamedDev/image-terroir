let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}

function goBack() {
  window.history.back();
}

$('document').ready(function(){

  $('.trigger').click(()=>{
    $('#user').toggleClass('d-n');
    $('#bell').addClass('d-n');
    
  })
  $('.bx-bell').click(()=>{
    $('#user').addClass('d-n');
    $('#bell').toggleClass('d-n');
    
  })
});

let bb = document.querySelector('.body');

bb.addEventListener('click', function(){
  var b =document.getElementsById('bell');
  b.classList.remove('d-n');
});