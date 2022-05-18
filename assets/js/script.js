var num;
var temp=0;
var speed=5000; /* this is set for 5 seconds, edit value to suit requirements */
var preloads=[];
var opacities=[];
var transiciones=[];

/* add any number of images here */

preload(
    'https://cdn0.bodas.com.mx/vendor/3003/3_2/960/jpg/vic-5558_5_143003-161913134790175.jpeg',
    'https://banquetesyeventosjatzibe.com/wp-content/uploads/2021/08/Banquetes-para-eventos-Guadalajara.jpg',
    'https://images.squarespace-cdn.com/content/v1/57460b30c2ea51d6d51bda20/1491566624850-6T08J4G7TPA0D5Y8M0DZ/Bodas_Banquetes_Acapulco_LAREKHI_23.jpg?format=1500w'
);

opaciti(
    '0.05',
    '0.05',
    '0.05'
);

transicion(
    'opacity 2s ease',
    'opacity 2s ease',
    'opacity 2s ease'
);

function preload(){
    for(var c=0;c<arguments.length;c++) {
        preloads[preloads.length]=new Image();
        preloads[preloads.length-1].src=arguments[c];
    }
}

function opaciti(){
    for(var c=0;c<arguments.length;c++) {
        // opacities[opacities.length]=new Image();
        opacities[opacities.length-1]=arguments[c];
        console.log(arguments);
    }
}

function transicion(){
    for(var c=0;c<arguments.length;c++) {
        // transiciones[transiciones.length]= new transition();
        transiciones[transiciones.length-1].trans = arguments[c];
        console.log(arguments);
    }
}

function rotateImages() {
   num=Math.floor(Math.random()*preloads.length);
    if(num==temp){
        rotateImages();
    }else {
        var hero = document.getElementById("hero");
        hero.style.backgroundImage='url('+preloads[num].src+')';
        hero.style.opacity = opacities[num];
        hero.style.transition = transiciones[num].trans;
        // document.body.style.backgroundImage='url('+preloads[num].src+')';
        temp=num;
        setTimeout(function(){rotateImages()},speed);
    }
}

if(window.addEventListener){
   window.addEventListener('load',rotateImages,false);
}else { 
    if(window.attachEvent){
        window.attachEvent('onload',rotateImages);
    }
}