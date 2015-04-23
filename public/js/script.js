$(function(){
    $("[data-role=submit]").click(function(){
        $(this).closest("form").submit();
    });
});

$(function(){
    $("[data-role=newlemari]").click(function(e){
		e.preventDefault();
        $(this).closest("form").submit();
		
    });
});

$(function(){
    $("[data-role=newodner]").click(function(e){
		e.preventDefault();
        $(this).closest("form").submit();
		
    });
});

$(function(){
    $("[data-role=newuser]").click(function(e){
		e.preventDefault();
        $(this).closest("form").submit();
		
    });
});

$(function(){
    $("[data-role=simpan]").click(function(e){
		e.preventDefault();
        $(this).closest("form").submit();
		
    });
});

$(function(){
    $("[data-role=update]").click(function(e){
		e.preventDefault();
        $(this).closest("form").submit();
		
    });
});

$(function(){
    $("[data-role=delete]").click(function(e){
		e.preventDefault();
        $(this).closest("form").submit();
		
    });
});

$(function(){
    $("[data-role=updatelemari]").click(function(e){
		e.preventDefault();
        $(this).closest("form").submit();
		
    });
});

$(function(){
    $("[data-role=deletelemari]").click(function(e){
		e.preventDefault();
        $(this).closest("form").submit();
		
    });
});


$(function(){
    $("[data-role=cancel]").click(function(e){
		e.preventDefault();
        window.location='http://10.16.107.77/arsip/user/U_Dashboard/archives';
		
    });
});

$(function(){
    $("[data-role=cancellemari]").click(function(e){
		e.preventDefault();
        window.location='http://10.16.107.77/arsip/admin/dashboard/wardrobe';
		
    });
});

$(function () {
	$('#tanggalsurat').fdatepicker({
		format: 'dd-mm-yyyy'
	});
});

$(function () {
	$('#datesurat').fdatepicker({
		format: 'dd-mm-yyyy'
	});
});

$(function() {
	$(".open-popup").fullScreenPopup({
		bgColor: '#ffffff'
	});
});


		$(document).ready(function() {

				$("#lemari").change(function() {
					var idlemari = $("#lemari").val();
					$.ajax({
						type: "POST",
						url: "http://10.16.107.77/arsip/user/proses/getOdner/",
						data: "lemari="+idlemari,
						async: true,
						success: function(result4) 
						{
							$('#odner option').each(function(i, option){ $(option).remove();});
							$.each(jQuery.parseJSON(result4), function() {
								$('#odner').append("<option value='"+this.id+"'>Lemari  : "+this.no_lemari+" --- Odner : "+this.no_odner+"</option>");
							});

							console.log(result4);
						}
					});
				});
	
				$("#numsurat").prop('disabled', true);
				$("#halsurat").prop('disabled', true);
				$("#datesurat").prop('disabled', true);
				$("#kdodner").prop('disabled', true);
				$("#keterangans").prop('disabled', true);

				$("#carifil").change(function() {

				$("#numsurat").prop('disabled', true);
				$("#halsurat").prop('disabled', true);
				$("#datesurat").prop('disabled', true);
				$("#kdodner").prop('disabled', true);
				$("#keterangans").prop('disabled', true);

					$('#pencarian').find('input, select').each(function(){
						$(this).val('');
						if($(this).attr('id')==$("#carifil").val()){
							var el = $("#carifil").val();
							$('#'+el).prop('disabled', false);
						}
					   //console.log( $(this).attr('id'));
					});


				});



		   //$("#findarsip").click(function(e){
			//  e.preventDefault();
			//		$("#dialog").dialog('open');
			//		return false;
			  /*
			  $.ajax({
				 type:       "POST",
				 url:        "ajax_dialog/user_settings.php",
				 dataType:   'html',
				 success:    function(data){
					$('#dialog').html(data);
				 }
			  });
			  */
		   //});
		
		
		});