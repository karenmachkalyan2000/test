/*!
* Start Bootstrap - Agency v7.0.11 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


  var x = document.querySelectorAll(".tyr1");
  
  x[0].classList.remove('btton-secondary')
         
x[0].classList.add('active_page')

        







const inptext=document.querySelector('.inp1')

    inptext.onkeyup=(w)=>{

  var iinp1=inptext.value
  var data=new FormData()
  data.append('taxi1',iinp1)
  fetch('action.php',{
    method:'POST',
    body:data
  }).then((response)=>{
    return response.text()
  }).then((data)=>{
   document.querySelector('.tpich').innerHTML=data
  })



    }






var t=0
const inpFile=document.querySelectorAll('.flio')



inpFile.forEach(function (element) {
    element.onchange=(l)=>{

var diver=document.querySelectorAll('.xc1')
var valer=document.querySelectorAll('.vvv1')


var trip=element.getAttribute('data-trip')

var fd=new FormData();
fd.append('tr',trip);

fd.append('flo',element.files[0]);



fetch('action.php',{
    method:'POST',
    body:fd
}).then((respon)=>{
    return respon.text()
}).then((dating)=>{






        if (trip!='carousel') {

           l.target.parentElement.querySelector('.bor').innerHTML=`<img src='assets/img/${trip}/${dating.trim()}' width = '100%'>`
            l.target.parentElement.querySelector('.vv1').value=dating.trim()


        }else {
            diver[t].innerHTML=`<img src='assets/img/${trip}/${dating.trim()}' width = '100%'>`
            valer[t].value=dating.trim()
            t++
        }

})

  



}


})





const delBtn=document.querySelectorAll('.del')
delBtn.forEach( function(element) {
    element.onclick=(e)=>{
    console.log(e)
  var id=e.target.id
  var gg=e.target.parentElement.parentElement.querySelector('img').getAttribute('src')
  var gel=element.getAttribute('data-name')

  e.target.parentElement.parentElement.style.display="none";


     var dato=new FormData()
  dato.append('id_port',id)
  dato.append('img_path',gg)
  dato.append('data_name',gel)
  fetch('action.php',{
    method:'POST',
    body:dato
  })

    }
});




$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,

  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})






const try1=document.querySelectorAll('.tyr1')
try1.forEach( function(element) {


    element.onclick=(z)=>{
    try1.forEach(function (argument) {
        argument.classList.remove('active_page')
    })
    element.classList.add('active_page')

    console.log(z)
 var ghq=element.innerHTML*3-3


 var dater=new FormData()
   dater.append('tax1',ghq)
  fetch('action.php',{
    method:'POST',
    body:dater
  }).then((responw)=>{
    return responw.text()
}).then((dater)=>{
document.querySelector('.tpich').innerHTML = dater

})

  

  
    }
});




const yess=document.querySelectorAll('.yes')

yess.forEach(function (ban) {
    ban.checked=true
})




const sendBtn=document.querySelectorAll('.jkol1')
sendBtn.forEach( function(element) {
    element.onclick=(t)=>{
    
  
    var rrt=document.querySelector('#name').value
    var trrt=document.querySelector('#email').value
    var trtr=document.querySelector('#phone').value
    var rtrt=document.querySelector('#message').value

     var dati=new FormData()

  dati.append('nam1',rrt)
  dati.append('nam2',trrt)
  dati.append('nam3',trtr)
  dati.append('nam4',rtrt)

 
if (rrt.length<=1) {
    document.querySelector('#name').classList.add('jnglo')
  }else if (trrt.length<=1) {
    document.querySelector('#email').classList.add('jnglo')
  }else if (trtr.length<=1) {
    document.querySelector('#phone').classList.add('jnglo')
  }else if (rtrt.length<=1) {
    document.querySelector('#message').classList.add('jnglo')
  }else{
    
    document.querySelector('#name').classList.remove('jnglo')
    document.querySelector('#email').classList.remove('jnglo')
    document.querySelector('#phone').classList.remove('jnglo')
    document.querySelector('#message').classList.remove('jnglo')


  fetch('action.php',{
    method:'POST',
    body:dati
  }).then((responwe)=>{
    return responwe.text()
}).then((dati)=>{
    if(dati=='success'){
        document.querySelector('.ddx').style.display = 'block'
    }  
      if(dati=='error'){
        document.querySelector('.ddx').style.display = 'block'
    }
    
    // alert(dati)

})

    }


  }

});








const orderBtn=document.querySelectorAll('.fgo1')
orderBtn.forEach( function(element) {
    element.onclick=(j)=>{
    
  
    var ham=document.querySelector('.hamar11').value
    var firm=document.querySelector('.avto-firma').value
    var mass=document.querySelector('.mas-anun').value
    var qan=document.querySelector('.qan').value
    var hasc=document.querySelector('.hasc').value

     var datio=new FormData()

  datio.append('hamar1',ham)
  datio.append('avtoifirma',firm)
  datio.append('masianun',mass)
  datio.append('qanak',qan)
  datio.append('hasce',hasc)

 
if (ham.length<=1) {
    document.querySelector('.hamar11').classList.add('jnglo')
  }else if (firm.length<=1) {
    document.querySelector('.avto-firma').classList.add('jnglo')
  }else if (mass.length<=1) {
    document.querySelector('.mas-anun').classList.add('jnglo')
  }else if (qan.length<1) {
    document.querySelector('.qan').classList.add('jnglo')
  }else if (hasc.length<=1) {
    document.querySelector('.hasc').classList.add('jnglo')
  }else{
    
    document.querySelector('.hamar11').classList.remove('jnglo')
    document.querySelector('.avto-firma').classList.remove('jnglo')
    document.querySelector('.mas-anun').classList.remove('jnglo')
    document.querySelector('.qan').classList.remove('jnglo')
    document.querySelector('.hasc').classList.remove('jnglo')

 document.querySelector('.dsfr').style.display = 'block'
 document.querySelector('.fgro1').style.display = 'block'
  document.querySelector('.agr').style.display = 'block'


document.querySelector('.zakazing').innerHTML = `
<div class='sucessfully'><div class='fhji'><img src='admin/ok.png' width="100%"></div></div>
Phone Number-${ham}
<br>
Car Name-${firm}
<br>
Car Part-${mass}
<br>
Quantity-${qan}
<br>
Address-${hasc} 

<input type="hidden" value='${ham}' name="vle1">
<input type="hidden" value='${firm}' name="vle2">
<input type="hidden" value='${mass}' name="vle3">
<input type="hidden" value='${qan}' name="vle4">
<input type="hidden" value='${hasc}' name="vle5">




 `



    }


  }

});




const gelBtn=document.querySelectorAll('.gel')
gelBtn.forEach( function(element) {
    element.onclick=(b)=>{
    console.log(b)
  var iid=b.target.id
  var gell=element.getAttribute('data-name')

b.target.parentElement.parentElement.style.display='none'
     var datoa=new FormData()
  datoa.append('iid_port',iid)
  datoa.append('daata_name',gell)
  fetch('action.php',{
    method:'POST',
    body:datoa
  })

    }
});






const button = document.getElementById('slide');

button.onclick = () => {
  document.querySelector('.dfg1').scrollLeft += 40;
};

const buttonn = document.getElementById('slideer');

buttonn.onclick = () => {
  document.querySelector('.dfg1').scrollLeft -= 40;
};



const zak = document.querySelector('.dfre');

zak.onclick = () =>{
    document.querySelector('.fgro1').style.display = 'block'

}



const iqs = document.querySelector('.iqs');

iqs.onclick = () =>{
    document.querySelector('.fgro1').style.display = 'none'

}





function jndrgo() {
  document.querySelector(".zakazing").innerHTML = "";

  document.querySelector('.dsfr').style.display = 'none'
  document.querySelector('.agr').style.display = 'none'

  document.querySelector('.hamar11').value = ''
  document.querySelector('.qan').value = ''
  document.querySelector('.hasc').value = ''
}



function jndrgo2() {
  

 document.querySelector('.sucessfully').style.display = 'block'
  document.querySelector('.dsfr').style.display = 'none'
  document.querySelector('.agr').style.display = 'none'

}






const gdf1=document.querySelectorAll('.gfd1')
gdf1.forEach( function(element) {


    element.onclick=(g)=>{
   

   

 var gello=element.getAttribute('data-type')

// alert (gello)

 var daterio=new FormData()
   daterio.append('tax11',gello)
  fetch('action.php',{
    method:'POST',
    body:daterio
  }).then((responwio)=>{
    return responwio.text()
}).then((daterio)=>{
document.querySelector('.tpich').innerHTML = daterio

})

  

  
    }
});





