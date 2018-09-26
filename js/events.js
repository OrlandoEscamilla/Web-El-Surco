$(window).load(function(){
	$(".load").delay(1000).fadeOut("slow");
});

$(document).ready(function(){





    $('#buttonMap').click(function(){
       $('#containerMap').slideToggle(900);
    
    });

    
    var valor = 1;
    $("#state").click(function(){ 
			if(valor == 1){
				$('.menuResponsiv').css('transform', 'translateX(0%)');
				valor = 2;
			}	
			else{
				$('.menuResponsiv').css('transform', 'translateX(100%)');
				valor = 1;
			}       
    });
});


var sectionOne = document.getElementById('sectionOne');
var altura = sectionOne.offsetTop;  /*offsetTop mide la distancia del top de la pagina hasta el elemento*/
window.addEventListener('scroll', function(){
	if(window.pageYOffset > altura){document.getElementById('footer').classList.add('footerClass');} 
	else{document.getElementById('footer').classList.remove('footerClass');}
});

var altura_section0 = document.getElementById('header').offsetTop;
var altura_section1 = document.getElementById('sectionOne').offsetTop;
var altura_section3 = document.getElementById('sectionThree').offsetTop;
var altura_section4 = document.getElementById('imageChange2').offsetTop;
var altura_section5 = document.getElementById('sectionFive').offsetTop;
var altura_section6 = document.getElementById('sectionSix').offsetTop;

window.addEventListener('scroll', function(){
if(window.pageYOffset >= altura_section0 &&  window.pageYOffset <= altura_section1){agregar('div_section1');}
else if(window.pageYOffset >= altura_section1 &&  window.pageYOffset <= altura_section3){agregar('div_section2');}
else if(window.pageYOffset >= altura_section3 &&  window.pageYOffset <= altura_section4){agregar('div_section3');}
else if(window.pageYOffset >= altura_section4 &&  window.pageYOffset <= altura_section5){agregar('div_section4');}
else if(window.pageYOffset >= altura_section5  &&  window.pageYOffset <= altura_section6){agregar('div_section5');}
});

function agregar(div){
for (var i = 1; i <= 5; i++){var string = 'div_section'+i;
	if(string == div){document.getElementById(div).classList.add('select');}
	else{document.getElementById(string).classList.remove('select');}
}
};












document.getElementById('container1').addEventListener("mouseover", function(){
document.getElementById('flecha').style.left="-1659px";
document.getElementById('image1').setAttribute("src", "img/img1.png");
});
document.getElementById('container1').addEventListener("mouseout", function(){
document.getElementById('image1').setAttribute("src", "img/image1.png");
});
document.getElementById('container2').addEventListener("mouseover", function(){
document.getElementById('flecha').style.left="-1356px";
document.getElementById('image2').setAttribute("src", "img/img2.png");
});
document.getElementById('container2').addEventListener("mouseout", function(){
document.getElementById('image2').setAttribute("src", "img/image2.png");
});
document.getElementById('container3').addEventListener("mouseover", function(){
document.getElementById('flecha').style.left="-1053px";
document.getElementById('image3').setAttribute("src", "img/img3.png");
});
document.getElementById('container3').addEventListener("mouseout", function(){
document.getElementById('image3').setAttribute("src", "img/image3.png");
});


