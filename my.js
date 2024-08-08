jQuery(document).ready(function(){
	jQuery("#applicationTelephone").inputmask("+7(999)999-99-99");//маска 
	var polomka_bool = new Array();
	var cena_tek = new Array();
	var cena_sum = 0;
	var polomka_otpr = 'Список поломок:<br>';
	var model_otpr = 'Модель:<br>';
	var cena_otpr = 'На сумму - <br>';
	var color_otpr = 'Цвет: <br>';
	var model = '';
	for(i=1;i<=30;i++){polomka_bool[i] = 0; cena_tek[i] = 0};
	var index_sel = 0;
	jQuery('.rem button').click(function(){
		jQuery('.bottom_form').fadeOut(500);
		jQuery('.right_price').fadeOut(500);
		for(i=1;i<=30;i++){polomka_bool[i] = 0};
		jQuery('.calc_container2').fadeOut(250);
		jQuery('.select_remont').fadeOut(250);
		jQuery('.rem_it').removeClass('rem_it_active');
		var destination = jQuery('#rem').offset().top;
		jQuery('body').stop().delay(250).animate( { scrollTop: destination }, 500 );
		jQuery('.rem button').fadeIn(250);
		jQuery(this).fadeOut(0);
		jQuery('.rem_items').fadeOut(0);
		jQuery(this).parent().children('.rem_items').fadeIn(250);
		jQuery('.calc_container2 .left .select_color .item').fadeOut(0);
	});
	jQuery('.rem_it').click(function(){
		jQuery('.bottom_form').fadeOut(500);
		jQuery('.right_price').fadeOut(500);
		model = jQuery(this).html();
		for(i=1;i<=30;i++){polomka_bool[i] = 0; cena_tek[i] = 0};
		jQuery('.calc_container2').fadeIn(250);
		jQuery('.select_remont').fadeOut(250);
		jQuery('.select_remont .item').fadeOut(0);
		jQuery('.select_color .item_item').removeClass('rem_it_active');
		jQuery('.select_color .item_item p').css('color','#666');		
		var color="#fff";
		var destination = jQuery('.calc_container2').offset().top;
		jQuery('body').stop().delay(250).animate( { scrollTop: destination }, 500 );
		jQuery('.rem_it').removeClass('rem_it_active');
		jQuery(this).addClass('rem_it_active');
		var item_index = jQuery(this).attr('id');
		var item_index_int = item_index.replace('apple','');
	 	item_index_int = parseInt(item_index_int);
	 	jQuery('.right_img').html('<img src="images/models/'+item_index_int+'.jpg">');
	 	if(item_index_int<21){
	 		jQuery('.calc_container2 .left .select_color h2').html('Выберите цвет:');
	 	}
	 	else {
	 		jQuery('.calc_container2 .left .select_color h2').html('Выберите модель:');
	 	};
	 	jQuery('.calc_container2 .left .select_color .item').fadeOut(0);
	 	var it=0;
	 	for(i=25;i<=108;i++){
	 		if(parent_id[i]==item_index_int){
	 			if(i>84){jQuery('.color').fadeOut(0);}
	 			else{jQuery('.color').fadeIn(0);};
	 			jQuery('.calc_container2 .left .select_color .item').eq(it).fadeIn(0);
	 			jQuery('.calc_container2 .left .select_color .item_item').eq(it).attr('id','apple'+i);
	 			jQuery('.calc_container2 .left .select_color .item p').eq(it).html(neme[i]);
	 			if(neme[i]=='White'){jQuery('.calc_container2 .left .select_color .item .color').eq(it).css('border','2px solid #dddddd').css('width','41px').css('height','41px')}
	 			else{jQuery('.calc_container2 .left select_color .item .color').eq(it).css('border','none').css('width','45px').css('height','45px')};
	 			if(neme[i]=='Black'){color='#000'}
	 			else if(neme[i]=='White'){color='#fff'}
	 			else if(neme[i]=='Silver'){color='#d4d6d5'}
	 			else if(neme[i]=='Gold'){color='#f0e0d0'}
	 			else if(neme[i]=='SE Gold'){color='#f0e0d0'}
	 			else if(neme[i]=='Rose Gold'){color='#e8aea5'}
	 			else if(neme[i]=='Pink'){color='#ff5055'}
	 			else if(neme[i]=='Yellow'){color='#f5eb4e'}
	 			else if(neme[i]=='Blue'){color='#7cbbff'}
	 			else if(neme[i]=='Green'){color='#93e464'}
	 			else if(neme[i]=='jetBlack'){color='linear-gradient(to top left, #727272, #000)'}
	 			else if(neme[i]=='Gray'){color='#7b7c80'};
	 			jQuery('.calc_container2 .left .select_color .item .color').eq(it).css('background',color);
	 			it++;
	 		}
	 	}
	});
	jQuery('.select_color .item_item').click(function(){
		jQuery('.bottom_form').fadeOut(500);
		jQuery('.right_price').fadeOut(500);
		for(i=1;i<=30;i++){polomka_bool[i] = 0; cena_tek[i] = 0};
		jQuery('.select_remont').fadeIn(250);
		jQuery('.select_remont .item').fadeOut(0);
		jQuery('.select_color .item_item').removeClass('rem_it_active');
		jQuery('.select_color .item_item p').css('color','#666');
		jQuery(this).addClass('rem_it_active');
		jQuery(this).children('p').css('color','#fff');
		var item_index = jQuery(this).attr('id');
		var item_index_int = item_index.replace('apple','');
	 	item_index_int = parseInt(item_index_int);	
	 	index_sel = item_index_int;
	 	if(item_index_int<=84){jQuery('.right_img').html('<img src="images/models/'+item_index_int+'.jpg" style="max-width:550px;">')};
	 	if(item_index_int>84){model += ' ' + jQuery(this).children('p').html()}	
	 		else{color_otpr = 'Цвет: '+ jQuery(this).children('p').html() +'<br>'};
	 	for(i=1;i<polomka[item_index_int].length;i++){
	 		jQuery('.select_remont .item_item p').eq(i-1).html(polomka[item_index_int][i]);
	 		jQuery('.select_remont .item').eq(i-1).fadeIn(0);
	 		jQuery('.select_remont .item_item').eq(i-1).attr('id','pol'+i);
	 	};
	 	for(i=1;i<=polomka[item_index_int].length;i++){
	 		jQuery('.select_remont .item_item').eq(i-1).removeClass('rem_it_active');
			jQuery('.select_remont .item_item p').eq(i-1).css('color','#666');
	 	};
	});
	jQuery('.select_remont .item_item').click(function(){
		cena_sum = 0;
		polomka_otpr = 'Список поломок:<br>'; 
		var item_index = jQuery(this).attr('id');
		var item_index_int = item_index.replace('pol','');
	 	item_index_int = parseInt(item_index_int);
	 	if(polomka_bool[item_index_int]==0){polomka_bool[item_index_int] = 1; cena_tek[item_index_int] = parseInt(cena[index_sel][item_index_int])}
	 		else{polomka_bool[item_index_int] = 0; cena_tek[item_index_int] = 0};
	 	for(i=1;i<=polomka[index_sel].length;i++){
	 		if(polomka_bool[i]==1){
	 			jQuery('.select_remont .item_item').eq(i-1).addClass('rem_it_active');
				jQuery('.select_remont .item_item p').eq(i-1).css('color','#fff');
				var polomka_tek = polomka[index_sel][i].replace('<br>',' ');
				polomka_otpr += polomka_tek + '<br>';
	 		}
	 		else{
	 			jQuery('.select_remont .item_item').eq(i-1).removeClass('rem_it_active');
				jQuery('.select_remont .item_item p').eq(i-1).css('color','#666');
	 		};
	 		cena_sum = cena_sum + cena_tek[i];
	 	};
	 	if(index_sel<43){model_otpr = 'Модель: iPad '+ model +'<br>'}
	 		else if(index_sel<85){model_otpr = 'Модель: iPhone '+ model +'<br>'}
	 		else{model_otpr = 'Модель: '+ model +'<br>'; color_otpr = 'Цвет: <br>'};
	 	cena_otpr = 'На сумму - '+cena_sum+'<br>';
	 	if(polomka_otpr != 'Список поломок:<br>'){
	 		jQuery('.bottom_form').fadeIn(500);
	 		jQuery('.bottom_form .left').html('Стоимость ремонта составляет '+cena_sum+' рублей<br>Возможна оплата банковской картой');
	 		jQuery('.right_price').fadeIn(500);
	 		jQuery('.right_price p').html('За '+cena_sum+' рублей');
	 	}
	 		else{jQuery('.bottom_form').fadeOut(500); jQuery('.right_price').fadeOut(500)};
	 	jQuery("#polomka").val(polomka_otpr);
	 	jQuery("#model").val(model_otpr);
	 	jQuery("#color").val(color_otpr);
	 	jQuery("#cena").val(cena_otpr);
	});
	jQuery("#form_rem").submit(function(){
		if(document.getElementById("applicationTelephone").value==""){ jQuery("#applicationTelephone").css("background","yellow"); return false;}
		else{
		var th = jQuery(this);
		jQuery.ajax({
			type: "POST",
			url: "send.php", //Change
			data: th.serialize()
		}).done(function() {
			jQuery(".popup_over").fadeIn(300);		
			setTimeout(function() {
				jQuery(".popup_over").fadeOut();
				th.trigger("reset");
			}, 5000);
		});
		return false;
	}
	});	
	jQuery('.popup_bg').click(function(){
		jQuery(".popup_over").fadeOut();
	});
})