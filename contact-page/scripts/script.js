
// apskaiciuoja, kada bus plius puse metu
var maxDate = new Date();
var offset = 6;
maxDate.setMonth(maxDate.getMonth() + offset);

$(document).ready(function(){

    $('.datepicker').datepicker({
    	'format': 'yyyy-mm-dd',
    	'firstDay': 1,
    	'maxDate': maxDate,
    	'i18n': {
	        months: ["Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis", "Liepa", "Rugpjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis"],
	        monthsShort: ["Sausio", "Vasario", "Kovo", "Balandžio", "Gegužės", "Birželio", "Liepos", "Rugpjūčio", "Rugsėjo", "Spalio", "Lapkričio", "Gruodžio"],
	        weekdays: ["Sekmadienis","Pirmadienis", "Antradienis", "Trečiadienis", "Ketvirtadienis", "Penktadienis", "Šeštadienis"],
	        weekdaysShort: ["Sk.", "Pr.", "An.", "Tr.", "Kt.", "Pn.", "Št."],
	        weekdaysAbbrev: ["S", "P","A", "T", "K", "Pn", "Š"],
	        cancel:'Atšaukti',
	        clear:'Išvalyti',
	        done:'OK'
    	}
    });

    $('.timepicker').timepicker({
    	'twelveHour': false,
    	'i18n': {
	        cancel:'Atšaukti',
	        clear:'Išvalyti',
	        done:'OK'
    	}
    });

	$('select[required]').css({
	    display: 'inline',
	    position: 'absolute',
	    padding: 0,
	    margin: 0,
	    border: '1px solid rgba(255,255,255,0)',
	    height: 0, 
	    width: 0,
	    top: '3em',
	    left: '3em',
	    opacity: 0
	});

    $('select').formSelect({ 'classes': 'select-field'});

 	$('.parallax').parallax();

 	$('#form').on('submit', function(e){
        //Stop the form from submitting itself to the server.
        e.preventDefault();

        var vardas = $('#vardas').val();
        var email = $('#email').val();
        var telefonas = $('#telefonas').val();
  		var data = $('#datepicker').val();
		var laikas = $('#timepicker').val();

		var selectInstance = M.FormSelect.getInstance($("#select"));
		var sveciai = selectInstance.el.value;

        var zinute = $('#zinute').val();

        $.ajax({         
        	type: 'post',
            url: 'reservation.php',
			data: {vardas: vardas, email: email, telefonas: telefonas, data: data, laikas: laikas, sveciai: sveciai, zinute: zinute},
            success: function (result) {
            	if(result == 'success') {
            		alert('Rezervacija išsiųsta sėkmingai, susisieksime!');
            	} else if (result == 'error') {
            		alert('Ups! Kažkas nepavyko, bandykite dar kartą.');
            	} else if (result == 'duplicate') {
            		alert('Rezervaciją jau gavome, susisieksime!');
            	}
            }            
    	});

        $('#form')[0].reset();
	});
});