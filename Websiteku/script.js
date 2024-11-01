var tombolMenu =document.getElementByClassName('tombol-menu')[0];
var menu= document.getElementByClassName('menu')[0];

tombolMenu.onclick = function(){
    menu.classList.toggle(active);
}

menu.onclick = function(){
    menu.classList.toggle('active')
}