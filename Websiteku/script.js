var tombolMenu =document.getElementByClassName('tombol-menu')[0];
var menu= document.getElementByClassName('menu')[0];

tombolMenu.oncliclk = function(){
    menu.classList.toggle(active);
}

menu.oncliclk = function(){
    menu.classList.toggle('active')
}