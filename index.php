<div class="container">
<div class="row">

<button type="button" class="obl" id="switchMap">Россия</button>

<section class="secMapOblast">
    <div class="row text-center">


	         <h1>Московская область</h1>



        <div class="col-md-2 col-md-offset-1">
            <ul>
               <li id="name_msk">Москва (11)</li> 
               <li id="name_spb">Балашиха (3)</li>                
            </ul>                
        </div>    
        <div class="col-md-2">
            <ul>
               <li id="name_vol">Долгопрудный (1)</li> 
               <li id="name_tum">Химки (2)</li>    
            </ul>    
        </div>    
       <div class="col-md-2">
            <ul>
               <li id="name_vol"></li> 
               <li id="name_tum"></li>    
            </ul>    
        </div>    
       <div class="col-md-2">
            <ul>
               <li id="name_vol"></li> 
               <li id="name_tum"></li>    
            </ul>    
        </div>    

       <div class="col-md-2">
            <ul>
               <li id="name_vol"></li> 
               <li id="name_tum"></li>    
            </ul>    
        </div>    




<object class="mapSvg" data="assets/Moscow_Oblast.svg"></object>
<object class="mapSvg" id="mapSvgCityposition"  data="assets/Moscow_Oblast_goroda.svg"></object>



</div>
</div>
</section>



<section class="secMap">
    <div class="row text-center ">
     <div class="container">
         <h1>Наши салоны</h1>

        <div class="col-md-2 col-md-offset-1">
            <ul>
               <li id="name_msk">Москва (11)</li> 
               <li id="name_spb">Санкт-Петербург (3)</li>                
            </ul>                
        </div>    
        <div class="col-md-2">
            <ul>
               <li id="name_vol">Вологда (1)</li> 
               <li id="name_tum">Тюмень (2)</li>    
            </ul>    
        </div>    
       <div class="col-md-2">
            <ul>
               <li id="name_vol"></li> 
               <li id="name_tum"></li>    
            </ul>    
        </div>    
       <div class="col-md-2">
            <ul>
               <li id="name_vol"></li> 
               <li id="name_tum"></li>    
            </ul>    
        </div>    

       <div class="col-md-2">
            <ul>
               <li id="name_vol"></li> 
               <li id="name_tum"></li>    
            </ul>    
        </div>    

<div class="col-md-12 map hidden-xs hidden-sm">
    <svg id="msk" class="mapPoint" >
        <g title="4444" alt="4444">
           <circle  cx="25" cy="25" r="5" fill="slategrey">
             <animate attributeName="r" from="5" to="mouseout  " begin="mouseover" dur="1s"
              values="5;8;10;12;15;15;12;10;8;5;
                                           5;10;12;15;20;20;15;10;5;
                                                                    5;10;12;15;18;20;20;15;10;5"  />
            </cercle> 
        </g>
    </svg>

<svg id="spb" class="mapPoint" >
        <g title="4444" alt="4444">
           <circle  cx="25" cy="25" r="5" fill="slategrey">
             <animate attributeName="r" from="5" to="mouseout  " begin="mouseover" dur="1s"
              values="5;8;10;12;15;15;12;10;8;5;
                                           5;10;12;15;20;20;15;10;5;
                                                                    5;10;12;15;18;20;20;15;10;5"  />
            </cercle> 
        </g>
    </svg>

<svg id="vol" class="mapPoint" >
        <g title="4444" alt="4444">
           <circle  cx="25" cy="25" r="5" fill="slategrey">
             <animate attributeName="r" from="5" to="mouseout  " begin="mouseover" dur="1s"
              values="5;8;10;12;15;15;12;10;8;5;
                                           5;10;12;15;20;20;15;10;5;
                                                                    5;10;12;15;18;20;20;15;10;5"  />
            </cercle> 
        </g>
    </svg>

<svg id="tum" class="mapPoint" >
        <g title="4444" alt="4444">
           <circle  cx="25" cy="25" r="5" fill="slategrey">
             <animate attributeName="r" from="5" to="mouseout  " begin="mouseover" dur="1s"
              values="5;8;10;12;15;15;12;10;8;5;
                                           5;10;12;15;20;20;15;10;5;
                                                                    5;10;12;15;18;20;20;15;10;5"  />
            </cercle> 
        </g>
    </svg>

    <object data="assets/karta.svg">
</object>
   
</div>
</div>
</section>

</div>
</div>

<script>


  $('.mapPoint').hover(function(){
       var name = $('#name_'+this.id).text();
       var idName = $('#name_'+this.id).attr('id');
       //alert(idName);
      // $('#'+idName).css('color','red');
       //$('#'+this.id).after("<li id='MyTextItem'>Тест</li>");
       $('#'+idName).css('background-color','#FF6700');
       $('#'+idName).css('border-radius','10px');


  },
  function(){
    var idName = $('#name_'+this.id).attr('id');
     //$('#'+idName).css('color','black');
     $('#'+idName).css('background-color','#fff');

  }
    );


	  $('#switchMap').on('click', function(){

      if($('#'+this.id).hasClass('obl')){

		  $(".secMapOblast").fadeOut("slow");
		  $(".secMap").fadeIn("slow");
		  $('#'+this.id).text('Область');

		 $('#'+this.id).addClass('russia');
         $('#'+this.id).removeClass('obl');

	  }
	  else{
			$(".secMap").fadeOut("slow");
		  $(".secMapOblast").fadeIn("slow");

		  $('#'+this.id).text('Москва');

		 $('#'+this.id).removeClass('russia');
         $('#'+this.id).addClass('obl');
	  }
   });


jQuery(window).load(function () { // Нам нужно дождаться, пока вся графика 
                                  //(и наша карта тоже) загрузится, поэтому используем window.onload,
  var svgobject = document.getElementById('mapSvgCityposition'); // Находим тег <object>
  if ('contentDocument' in svgobject) {              // У нас действительно там что-то есть?
       //alert("ddddddd");
	  var svgdom = jQuery(svgobject.contentDocument);  // Получаем доступ к объектной модели SVG-файла
       // Теперь делаем свою работу, например:
    $(".fil2", svgdom).hover(
           function(){alert("4444")},
           function(){alert("4444")}
	);

  }	
});


</script>
