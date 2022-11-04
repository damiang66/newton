const boton = document.getElementById('btnMenu');
const boton2=document.getElementById('btnMenu2')
const menu1= document.getElementById('menu1');
const menu2= document.getElementById('menu2');
const menu3= document.getElementById('menu3');
const menu4= document.getElementById('menu4');
const menu5= document.getElementById('menu5');
let c=0

boton.addEventListener('click',function(){
  //  alert("hola")
  

menu1.classList.remove("menu");
menu2.classList.remove("menu");
menu3.classList.remove("menu");
menu4.classList.remove("menu");
menu1.classList.add("menu1");
menu2.classList.add("menu1");
menu3.classList.add("menu1");
menu4.classList.add("menu1");
menu5.style.background="black";
//menu5.style.display="block";
c=1
alert(c);

})

boton2.addEventListener('click',function(){
    menu1.classList.remove("menu1");
    menu2.classList.remove("menu1");
    menu3.classList.remove("menu1");
    menu4.classList.remove("menu1");
    menu1.classList.add("menu");
    menu2.classList.add("menu");
    menu3.classList.add("menu");
    menu4.classList.add("menu");
})
