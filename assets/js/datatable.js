function init_Datatable(url,table='#datatable',orderable=true,searchable=true,order_column=0,order_by='asc') {
	table = $(table).DataTable({
		"oLanguage": {
	        "sEmptyTable": "<img src='https://cdn.dribbble.com/users/888330/screenshots/2653750/empty_data_set.png' width='30%'>"
	    },
		searching : searchable,
		ordering : orderable,
		order : [order_column,order_by],
		serverSide : true,
		"ajax": {
	      	"url": url,
	      	"type": "POST",
	    },
	    "columnDefs": [{ 
        	"targets": [0],
        	"orderable": true
    	}]    
	});

}