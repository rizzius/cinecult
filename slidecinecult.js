// JavaScript Document
var arrayNomi= new Array ("img/cera_una_volta_in_america.jpg", "img/taxi_driver.jpg","img/apocalipse_now.jpg");
var immagineCorrente=0;


function precedente()
{ immagineCorrente=immagineCorrente-1;
if(immagineCorrente<0)
    immagineCorrente=arrayNomi.length-1;

 document.slide.src=arrayNomi[immagineCorrente];
}


function successiva()
{ immagineCorrente=(immagineCorrente+1)%arrayNomi.length;

    


document.slide.src=arrayNomi[immagineCorrente];
}