// Check Sidemenu Active
var url = window.location.href;
$('.side-menu-item a').filter(function(){   
	var this_link = $(this).attr('href');
	if(this_link == url){
		$(this).closest('.side-menu-item').addClass('active');
	    var group_id = $(this).closest('.side-menu').attr('id');

	    check_link_group(group_id);
	} 

});

function check_link_group(id){
	$('.side-menu [data-toggle="collapse"]').filter(function(){
		var this_target = $(this).attr('href').replace('#','');;
		if(this_target == id){
			$(this).closest('li').addClass('active');
		}
	});
}

function sweetWarning(){
  swal({
    title: 'Are you sure?',
    text: "Do you want to force delete?",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#cc0520',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
      swal(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
    }
  })
}

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}


function toastrUpdateSuccess(){
	toastr.success('Update successful!');
}
function toastrCreateSuccess(){
	toastr.success('Success create successful!');
}
function toastrDeleteSuccess(){
	toastr.success('Success delete success!');
}
function toastrForceDeleteSuccess(){
	toastr.success('Success force delete success!');
}
function toastrSelectItem(){
	toastr.warning('Please select at least one item to delete!');
}
function toastrIncorrectData(){
	toastr.error('Error Incorrect data!');
}

// typeahead product

// ***** Lorem DATA *****
var dataProducts = [
    {
        name : 'PS PLUS MEMBERSHIP (3 MONTH)(R3)(CODE)',
        image : 'http://www.ngin.co.th/data/product/161221081830_prod_125.jpg',
        platform : 'PS4-G',
        external_code : 'TS-0000001',
        srp : '1250',
        barcode : ['0000000000080', '0000000000082', '0000000000083'],
    },
    {
        name : 'HATSUNE MIKU: PROJECT DIVA X (R1)(EN)',
        image : 'http://www.ngin.co.th/data/product/161221081830_prod_125.jpg',
        platform : 'SWITCH-G',
        external_code : '010086632101',
        srp : '950',
        barcode : ['010086611182', '010086611182'],
    },
    {
        name : 'SONIC BOOM: FIRE & ICE (R1)(EN)',
        image : 'http://www.ngin.co.th/data/product/161221081830_prod_125.jpg',
        platform : '3DS-G',
        external_code : '010086632002',
        srp : '870',
        barcode : ['010086632002'],
    },
    {
        name : 'MONSTER HUNTER GENERATIONS (R1)(EN)',
        image : 'http://www.ngin.co.th/data/product/161221081830_prod_125.jpg',
        platform : 'XBOX360-G',
        external_code : '010086632057',
        srp : '2280',
        barcode : ['010086632002', '010086632040'],
    },
    {
        name : 'VALKYRIA CHRONICLES REMASTERED (R1)(EN)',
        image : 'http://www.ngin.co.th/data/product/161221081830_prod_125.jpg',
        platform : 'PS3-G',
        external_code : '010086632057',
        srp : '2280',
        barcode : ['010086632002', '010086632040'],
    },
    {
        name : 'YAKUZA 0 (R1)(EN)',
        image : 'http://www.ngin.co.th/data/product/161221081830_prod_125.jpg',
        platform : 'PS3-G',
        external_code : '010086632101',
        srp : '1180',
        barcode : ['010086632040'],
    },
    {
        name : 'PUYO PUYO TETRIS (R1)(EN)',
        image : 'http://www.ngin.co.th/data/product/161221081830_prod_125.jpg',
        platform : 'PS3-G',
        external_code : '010086770025',
        srp : '3200',
        barcode : ['010086620078'],
    },
];

var productSearch = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    limit: 10,
    local: dataProducts   
});
productSearch.initialize();



// **** Fetch Data Form API *******
// var productSearch = new Bloodhound({
//     datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
//     queryTokenizer: Bloodhound.tokenizers.whitespace,
//     remote: {
//         url: '//api.swiftype.com/api/v1/public/engines/search?q=',
//         replace: function(url, query) {
//             return url + query + "&engine_key=VdyvTho_MpwQbhzSC6kD";
//         },
//         transform: function(response) {
//             return response.records.page;
//         },
//         ajax: {
//             type: "POST",
//             data: {
//                 q: function() {
//                     return $('[data-action="typeaheadProduct"]').val()
//                 }
//             }
//         }
//     }
// });

// var loremBarcode = ['8-8888-88888-88-8', '8-8888-999999-88-8', '4-3388-55555-00-9'];

var productTemplate = function(data) {
    var barcodeItemArr = [];
    var barcodeCounter = data.barcode.length;
    var barcodeContentClass;
    if(barcodeCounter > 1){
        barcodeContentClass = 'has-scroll';
    }
    console.log('count : '+ barcodeCounter, 'class' + barcodeContentClass);
    var allBarcode = $.each(data.barcode, function(key, val) {
        barcodeItemArr.push('<li class="list-item">' + val + '</li>');
    });

    var barcodeItem = barcodeItemArr.toString().replace(/,/g, '');    
        
    if (data.image) {
        return  '<div class="product-search-item">' + 
                    '<div class="product-search-image">' +
                        '<img class="image" src="' + data.image + '"/>' +
                    '</div>' +
                    '<div class="product-search-body">' +
                        '<ul class="product-search-header">' +
                            '<li class="text-left">' + data.platform + '</li>'+
                            '<li class="text-right">' + data.external_code+ '</li>'+
                        '</ul>' +
                        '<h4 class="product-search-title">' + data.name + '</h4>' + 
                        '<div class="product-search-footer">' +
                            '<div class="left-column">' + 
                                '<span class="product-search-price">SRP : ' + data.srp + ' THB</span>' +
                            '</div>' +
                            '<div class="right-column">' + 
                                '<div class="barcode-group">' + 
                                    '<div class="barcode-label">' + 
                                        'BARCODE<span class="barcode-gutter">:</span>' + 
                                    '</div>' +
                                    '<div class="barcode-content'+ ' ' + barcodeContentClass +'">' + 
                                        '<ul class="list">' +
                                            barcodeItem +
                                        '</ul>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>';
    }
    else {
        return  '<div class="product-search-item">' + 
                    '<div class="product-search-body">' +
                        '<ul class="product-search-header">' +
                            '<li class="text-left">' + data.platform + '</li>'+
                            '<li class="text-right">' + data.external_code+ '</li>'+
                        '</ul>' +
                        '<h4 class="product-search-title">' + data.name + '</h4>' + 
                        '<div class="product-search-footer">' +
                            '<div class="left-column">' + 
                                '<span class="product-search-price">SRP : ' + data.srp + 'THB</span>' +
                            '</div>' +
                            '<div class="right-column">' + 
                                '<div class="barcode-group">' + 
                                    '<div class="barcode-label">' + 
                                        'BARCODE<span class="barcode-gutter">:</span>' + 
                                    '</div>' +
                                    '<div class="barcode-content">' + 
                                        '<ul class="list">' +
                                            barcodeItem +
                                        '</ul>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>';
    }
}


$('[data-action="typeaheadProduct"]').typeahead(null, {
    name: 'product-search',
    hint: true,
    display: 'name',
    limit: 7,
    highlight: true,
    source: productSearch.ttAdapter(),
    templates: {
      notFound: '<div class="product-search-item"><h4 class="product-search-title">not found</h4></div>',
      suggestion: productTemplate
    }
});

// END typeahead product

// typeahead customer

var customerSearch = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        url: '//api.swiftype.com/api/v1/public/engines/search?q=',
        replace: function(url, query) {
            return url + query + "&engine_key=VdyvTho_MpwQbhzSC6kD";
        },
        transform: function(response) {
            return response.records.page;
        },
        ajax: {
            type: "POST",
            data: {
                q: function() {
                    return $('[data-action="typeaheadCustomer"]').val()
                }
            }
        }
    }
});


var loremAddress = 'No. 18, kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong, Bangrak Bangkok 10500';

var customerTemplate = function(data) {        
    if (data.image) {
        return  '<div class="search-item">' + 
                    '<div class="search-item-image">' +
                        '<img src="' + data.image + '"/>' +
                    '</div>' +
                    '<div class="search-item-body">' +
                        '<h4 class="search-item-title">' + data.title + '</h4>' + 
                        '<p class="search-item-subtitle">' + loremAddress + '</p>' +
                    '</div>' +
                '</div>';
    }
    else {
        return  '<div class="search-item">' + 
                    '<div class="search-item-body">' +
                        '<h4 class="search-item-title">' + data.title + '</h4>' + 
                        '<p class="search-item-subtitle">' + loremAddress + '</p>' +
                    '</div>' +
                '</div>';
    }
}

$('[data-action="typeaheadCustomer"]').typeahead(null, {
    name: 'customer-search',
    display: 'title',
    limit: 10,
    highlight: true,
    source: customerSearch,
    templates: {
      notFound: '<div class="search-item"><h4 class="search-item-title">not found</h4></div>',
      suggestion: customerTemplate
    }
});