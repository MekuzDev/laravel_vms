$(function(e) {


	var deletebtn = document.querySelectorAll('.delete-btn');


	deletebtn.forEach(function(btn){
		btn.addEventListener('click',function(e){
			e.preventDefault()
			var href =  btn.getAttribute('href');
			$('body').removeClass('timer-alert');
		swal({
		  title: "Are you sure?",
		  text: "NB: Deletion of this record might affect related tables",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn btn-danger",
		  confirmButtonText: "Yes, delete it!",
		  closeOnConfirm: false
		},
		function(){
		   var deleteForm = document.getElementById('delete-form')
		   deleteForm.setAttribute('action',href)
		   deleteForm.submit();
		  swal("Deleted!", "please wait while page redirects", "success");
		});
		})
	})

	// Datepicker
	$('.fc-datepicker').datepicker({
		showOtherMonths: true,
		selectOtherMonths: true
	});

	var datePicker = document.getElementById('datepicker-date')



	//Date picker
	$('#datepicker-date').bootstrapdatepicker({
		format: "dd-mm-yyyy",
		viewMode: "date",
		multidate: false,
		multidateSeparator: "-",
		todayHighlight: true,
		startDate: '01-01-1910',
		endDate :'0d'
	})
})	
