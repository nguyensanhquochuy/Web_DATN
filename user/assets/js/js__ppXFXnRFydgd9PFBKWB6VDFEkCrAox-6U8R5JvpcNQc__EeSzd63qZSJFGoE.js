function selectText(element) //divID contains actual id of ‘div’ element
{ 
  if (window.getSelection) { //Browser compatibility
    window.getSelection().selectAllChildren(element);
  }else if (document.body.createTextRange) { // IE <=8
    var range = document.body.createTextRange();
    range.moveToElementText(element);
    range.select();
  }
}

(function ($) {
  Drupal.behaviors.blacasa_marketing = {
    attach: function (context, settings) {
      // trang marketing partner
      $('.list-tracking-marketing select').on('change', function() {
          var domain = $('.list-tracking-marketing .link-source').attr('data-domain');
          $('.link-source .actions').html('');
          $('.link-source .link').html('');
          var source_id = $(this).val();
          if(source_id != '') {
            $('#marketing-show-avata').html('<input type="checkbox" name="show_avata" value="1" > Hiển thị ảnh đại diện của bạn trên trang chia sẻ');
            $('.link-source .link').html(domain+'/dang-ky-gia-su?source_id='+ source_id );
            $('.link-source .actions').html('<div class="fb-share-button" data-href="/dang-ky-gia-su?source_id='+ source_id +'" data-layout="button" data-size="large" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='+domain+'/dang-ky-gia-su?source_id='+ source_id +'" class="fb-xfbml-parse-ignore">Chia sẻ</a></div><button class="copy-link">Copy link</button><br>');
            $('#marketing-show-avata input').click(function() {
              if ($(this).is(":checked")) {
                $('.link-source .link').html(domain+'/dang-ky-gia-su?source_id='+ source_id+'&s=1' );
                $('.link-source .actions').html('<div class="fb-share-button" data-href="/dang-ky-gia-su?source_id='+ source_id +'" data-layout="button" data-size="large" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='+domain+'/dang-ky-gia-su?source_id='+ source_id +'&s=1" class="fb-xfbml-parse-ignore">Chia sẻ</a></div><button class="copy-link">Copy link</button><br>');
              }
              else
              {
                $('.link-source .link').html(domain+'/dang-ky-gia-su?source_id='+ source_id );
                $('.link-source .actions').html('<div class="fb-share-button" data-href="/dang-ky-gia-su?source_id='+ source_id +'" data-layout="button" data-size="large" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='+domain+'/dang-ky-gia-su?source_id='+ source_id +'" class="fb-xfbml-parse-ignore">Chia sẻ</a></div><button class="copy-link">Copy link</button><br>');
              }
              $('.copy-link').click(function() {
                var temp_input = $("<input>");
                $("body").append(temp_input);
                temp_input.val($('.link-source .link').text()).select();
                selectText($('#link-share')[0]);
                document.execCommand("copy");
                temp_input.remove();
       
              });
            });
            $('.copy-link').click(function() {
              var temp_input = $("<input>");
              $("body").append(temp_input);
              temp_input.val($('.link-source .link').text()).select();
              selectText($('#link-share')[0]);
              document.execCommand("copy");
              temp_input.remove();
              
            });
            
            
          }
       });
    }
  }
}(jQuery));

;/*})'"*/
;/*})'"*/
$ = jQuery ;
function continue_ajax_load(){
	//alert("CHAY");
	$.ajax({
		type: "GET",
		url: "/ajax-update-profile",
		data: $('form').serialize(),
		
		success: function (result) {
			//console.log(result);
			//done_ajax_step(result);
			
		}
	});
}


function fileValidation(inputEvent,imgShow){
	var fileInput = document.getElementById(inputEvent);
	//console.log(imgShow);

    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    handleDrop = function(files){
            //dropTarget.removeClass('over');
            var file = files[0]; // Multiple files can be dropped. Lets only deal with the "first" one.
            if (file.type.match('image.*')) {
                resizeImage(file, 500, function(result) {
                    $('#'+imgShow).attr('src', result);
                    //$('.resultImageWrapper').show();
                });
            } else {
                alert("That file wasn't an image.");
            }
    };
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            
            fileInput.files[0].size = 411658;
            // var reader = new FileReader();
            // reader.onload = function(e) {
            //     $('#'+imgShow).attr('src', e.target.result);
            // };
            // reader.readAsDataURL(fileInput.files[0]);
            handleDrop(fileInput.files);
        }
        
    }
}

 $(function () {
      var counter;
      $('#update-profile-form #price_cost').popover({
        trigger: 'manual',
        animation: false,
        html: true,
        title: function () {
            return "Gợi ý!";
        },
        content: function () {
            return "Mức học phí phổ biến hiện nay là 100,000 - 150,000 đ/h";
        },
        container: 'body',
        placement: 'auto'
    }).on("mouseenter",function () {
        var _this = this; // thumbcontainer

        // clear the counter
        clearTimeout(counter);
        // Close all other Popovers
        $('#price_cost').not(_this).popover('hide');

        // start new timeout to show popover
        counter = setTimeout(function(){
            if($(_this).is(':hover'))
            {
                $(_this).popover("show");
            }
            $(".popover").on("mouseleave", function () {
                $('#price_cost').popover('hide');
            });
        }, 400);

    }).on("mouseleave", function () {
        var _this = this;

        setTimeout(function () {
            // if (!$(".popover:hover").length) {
            //     if(!$(this).is(':hover'))
            //     {
                    $(_this).popover('hide');
            //     }
            // }
        }, 200);
    });

});

function ajax_update_image(inputEvent,imgShow,sizeImage,ajaxLink){
	var fileInput = document.getElementById(inputEvent);
	var dataUrl = null;
    handleDrop = function(files){
            //dropTarget.removeClass('over');
            var file = files[0]; // Multiple files can be dropped. Lets only deal with the "first" one.
            if (file.type.match('image.*')) {
            	$("body").append( "<div class='loading'></div>" );
                resizeImage(file, sizeImage, function(result,fileImg) {
                    $('#'+imgShow).attr('src', result);
                    //$('.resultImageWrapper').show();
                    dataUrl = fileImg;

                    // if(inputEvent == "edit_avatar" || inputEvent == "edit_cover"){
                    //     $("body").append( "<div class='loading'></div>" );
                    // }else{
                    //     //$elem = $("#"+inputEvent).parent();
                    //     //$elem.append( "<div class='loading-small'></div>" );
                    //     $("body").append( "<div class='loading'></div>" );
                    // }
                    
                    var data = new FormData();                   
		            data.append('files', dataUrl);		            
		            $.ajax({
		                url: ajaxLink,
		                data: data,
		                dataType: 'json',
		                cache: false,
		                contentType: false,
		                processData: false,
		                type: 'POST',
		                success: function(result){
		                   
                            $(".action-form input").prop("disabled",false);
                            $(".action-form input").removeClass("input-disabled");
                            if($(".loading").size()){
                                $(".loading").remove();
                            }
                            if($(".loading-small").size()){
                                $(".loading-small").remove();
                            }
                            window.location.href = result.reload;
		                   
		                }
		            });
                    
                });
            } else {
                alert("Không có ảnh được chọn.");
            }
    };
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Chỉ được upload ảnh với các định dạng .jpeg/.jpg/.png/.gif .');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
        	
            handleDrop(fileInput.files);     
            //$(document).on("imageResized", function (event) {
                         
        }

    }
}


function update_galary(inputEvent){
	var fileInput = document.getElementById(inputEvent);
	var fileLength = fileInput.files.length;

	var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
	var data = new FormData();
    var count = 0;
    handleDrop = function(i,files){
            //dropTarget.removeClass('over');
            var file = files; // Multiple files can be dropped. Lets only deal with the "first" one.
            if (file.type.match('image.*')) {
                resizeImage(file, 500, function(result,fileImg) {                                
                    count++;   
                           
                    data.append('files'+i,fileImg);  
                    if(count == fileLength){
                        
                        data.append('sumFile',fileLength);
                        $.ajax({
                            type: "POST",
                            url: "/ajax-update-galary",
                            //data: $('#update-profile-form').serialize(),
                            data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                            dataType: 'json',
                            contentType: false,       // The content type used when sending data to the server.
                            cache: false,             // To unable request pages to be cached
                            processData:false,        // To send DOMDocument or non processed data file it is set to false
                            success: function (result) {
                                
                                $(".loading").remove();
                                location.reload();
                            },
                            error: function (error) {
                                alert('error; ' + eval(error));
                                $(".loading").remove();

                            }
                        });
                    }                                     
                   
                });
            } else {
                alert("Không có ảnh được chọn.");
            }
    };
	if(fileLength > 6 ){
		alert("Chỉ được chọn tối đa 6 ảnh!");
		return false;
	}
    $("body").append( "<div class='loading'></div>" );
	for(var i = 0; i< fileLength; i++){
		//console.log( $("#"+inputEvent).prop('files')[i],"PROP");
		if(!allowedExtensions.exec(fileInput.files[i]['name'])){
	        alert('Chỉ được tải ảnh với đinh dạng sau .jpeg/.jpg/.png/.gif .');
	        fileInput.value = '';
	        return false;
	    }else{

	    	var fileimage =  $("#"+inputEvent).prop('files')[i];
            
            handleDrop(i,fileimage);
            
            
	    }
	}
    
	
    //console.log(data['sumFile'],"dataUrl");
	//$("body").append( "<div class='loading'></div>" );
	// $.ajax({
	// 	type: "POST",
	// 	url: "/ajax-update-galary",
	// 	//data: $('#update-profile-form').serialize(),
	// 	data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
	// 	dataType: 'json',
 //        contentType: false,       // The content type used when sending data to the server.
	// 	cache: false,             // To unable request pages to be cached
	// 	processData:false,        // To send DOMDocument or non processed data file it is set to false
	// 	success: function (result) {
	// 		console.log(result,"result");
	// 		$(".loading").remove();
	// 		//location.reload();
	// 	},
	// 	error: function (error) {
	// 	    alert('error; ' + eval(error));
	// 	    $(".loading").remove();

	// 	}
	// });

	
}
function become_teacher(){
	$("body").append( "<div class='loading'></div>" );
	 $.ajax({
        url: "/ajax-become-teacher",
        type: 'GET',
        async: false,
        beforeSend: null,
        success:
            function (result) {
            	$(".loading").remove();
            	window.location.href = "https://www.blacasa.vn/user/profiles";
                

            }
    });
}

function ajaxloadPage(urlPage,type){
	var data = 'type='+ type;
	$("#ajax-content-user-load").append( "<div class='loading-user'></div>" );
	$.ajax({
        url: urlPage,
        type: 'POST',
        data: data,
        dataType: 'json',
        success:
            function (result) {
                $(".loading-user").remove();
                $("#ajax-user-load-page").empty();
                $("#ajax-user-load-page").append(result.html);
            }
    });
}
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
function changeStatusInput(){
    $(".action-form input").prop("disabled",false);
    $(".action-form input").removeClass("input-disabled");
}
(function ($) {
  Drupal.behaviors.blacasa_user_page= {
    attach: function (context, settings) {
        var inputMissing = ["#full_name","#number","#chung-minh-thu","#place","#address-detail",
                            "#birthday","#price_cost","#type_teacher_field"];
        for(var i = 0; i< inputMissing.length; i++){
            
            if($(inputMissing[i]).val() == "" || !$(inputMissing[i]).val() ){
                    $(inputMissing[i]).addClass("missing-value");
            }
            $(inputMissing[i]).on('change', function() {
                var value = $(this).val();
                
                if(!value){
                    $(this).addClass("missing-value");
                }else{
                    $(this).removeClass("missing-value");
                }
            })
        }
        if($("#mo-ta-ban-than").size() && $("#mo-ta-ban-than").val().trim() == ""){
            $("#mo-ta-ban-than").addClass("missing-value");
        }
         $("#mo-ta-ban-than").on('change', function() {
            var value = $(this).val().trim();
            
            if(!value){
                $("#mo-ta-ban-than").addClass("missing-value");
            }else{
                $("#mo-ta-ban-than").removeClass("missing-value");
            }
        });
        if($("#select-subject").size() && $("#select-subject").val()){
            $(".btn-group").removeClass("missing-value");
        }
        $("#select-subject").on('change', function() {
            var value = $(this).val();
            
            if(!value){
                $(".btn-group").addClass("missing-value");
            }else{
                $(".btn-group").removeClass("missing-value");
            }
        });
    	$( "#mo-ta-ban-than" ).change(function() {
			var length = $(this).val().length;
			if(length > 2000){
				alert("Bạn đã nhập quá 2000 ký tự. Vui lòng nhập lại...");
				$(this).val("");
                $(".action-form input").prop("disabled",true);
                $(".action-form input").addClass("input-disabled");
			}else{
                $(".action-form input").prop("disabled",false);
                $(".action-form input").removeClass("input-disabled");
            }
		})
		$( "#gioi-thieu-ban-than" ).change(function() {
			var length = $(this).val().length;
			if(length > 2000){
				alert("Bạn đã nhập quá 2000 ký tự. Vui lòng nhập lại...");
				$(this).val("");
                // $(".action-form input").prop("disabled",true);
                // $(".action-form input").addClass("input-disabled");
			}else{
                $(".action-form input").prop("disabled",false);
                $(".action-form input").removeClass("input-disabled");
            }
		})
        // DISABLE UPDATE ACTION
        $(".action-form input").prop("disabled",true);
        $(".action-form input").addClass("input-disabled");
        // ENABLE UPDATE ACTION
        var inputFields = ["#birthday","#select-subject","#place","#gioi-tinh","#type_teacher_field"];
        for(var i=0; i< inputFields.length; i++){
            $(inputFields[i]).on('change', function() {
                $(".action-form input").prop("disabled",false);
                $(".action-form input").removeClass("input-disabled");
            })
        }
        
        $("#offline-type").change(function() {
            $(".action-form input").prop("disabled",false);
            $(".action-form input").removeClass("input-disabled");        
        });
        $("#online-type").change(function() {
            
               // var returnVal = confirm("Are you sure?");
               $(".action-form input").prop("disabled",false);
               $(".action-form input").removeClass("input-disabled");
                   
        });
        $(".radio-calendar").change(function() {
            
            $(".action-form input").prop("disabled",false);
            $(".action-form input").removeClass("input-disabled");
                  
        });
        $(".gender-sex input").change(function() {
             $(".action-form input").prop("disabled",false);
             $(".action-form input").removeClass("input-disabled");
        });
        $(".subject-tag input").change(function() {
            
            $(".action-form input").prop("disabled",false);
            $(".action-form input").removeClass("input-disabled");
                  
        });
        $("#number").on('change', function() {
            var phone = $("#number").val();
            var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
            var phoneNUm2 = /^\(?([0-9]{4})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
            if(phone[0] != 0 ){
                alert("Định dạng không chính xác! Số điện thoại bắt đầu bằng số 0.");
                $(".action-form input").prop("disabled",true);
                $(".action-form input").addClass("input-disabled");
                $("#number").val("");
                $("#number").focus();
            }else{
                //if(phone.match(phoneNum) || phone.match(phoneNUm2)){
                $.ajax({
                    type: "GET",
                    url: "/ajax-validate-number/"+phone,                                                
                    success: function (result) {
                        
                        //done_ajax_step(result);
                        if(result.result == "error"){
                            $("#number").val("");
                            setTimeout(function() {
                                alert("Số điện thoại này đã được đăng ký trên hệ thống. Bạn vui lòng nhập số điện thoại khác !");
                            },10);                   
                        }else{
                            $(".action-form input").prop("disabled",false);
                            $(".action-form input").removeClass("input-disabled");
                        }
                    }
                });                    
                // }else{
                //     alert("Định dạng không chính xác! Số điện thoại từ 10-11 số, bắt đầu bằng số 0.");
                //     $(".action-form input").prop("disabled",true);
                //     $(".action-form input").addClass("input-disabled");
                //     $("#number").val("");
                //     $("#number").focus();
                // }
            }
            
        });
        $("#chung-minh-thu").on('change', function() {
        	var passport = $("#chung-minh-thu").val();
        	
        	$.ajax({
                type: "GET",
                url: "/ajax-validate-passport/"+passport,                                                
                success: function (result) {
                   
                    //done_ajax_step(result);
                    if(result.result == "error"){
                        alert("Số chứng minh thư này đã được đăng ký trên hệ thống. Vui lòng nhập số khác !");
                        $("#chung-minh-thu").val("");
                    }else{
           
                    }
                }
            });           
        });
        //Menu left user
      
        var Accordion = function(el, multiple) {
    		this.el = el || {};
    		this.multiple = multiple || false;
    		// Variables privadas
    		var links = this.el.find('.link');
    		// Evento
    		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    	}
    	Accordion.prototype.dropdown = function(e) {
    		var $el = e.data.el;
  			$this = $(this),
  			$next = $this.next();
    
    		$next.slideToggle();
    		$this.parent().toggleClass('open');
    
    		if (!e.data.multiple) {
    			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    		};
    	}	
    	var accordion = new Accordion($('#accordion'), false);

    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        }
    });
    // Hàm trả về tag theo môn học
    $(".duyet-giao-vien").click(function(){
        $("body").append( "<div class='loading'></div>" );
    });
    
   //ajax xoa anh
   $(".remover-image").on('click', function() {
      var $type = $(this).attr('type');
      var $account_id = $(this).attr('account_id');	
      var parent = $(this).parent('.image-info').attr('id');
      var reload = $(this).attr('reload');
  	  $.ajax({
          type: "POST",
          url: "/manage/delete/image", 
          data: {type: $type, account_id : $account_id},                                              
          success: function (data) {
            if(data.result){
               $('#'+parent).html(data.result); 
              // Drupal.attachBehaviors($('#'+$type));
               window.location.href = reload;
            }
          }
     });           
   });

  }//

  };
}(jQuery));

;/*})'"*/
;/*})'"*/
$ = jQuery;
$(function() {

    // var offset = $(".nav-profile").offset();
    // var topPadding = 52;
    
    // $(window).scroll(function() {
    //     if($(window).scrollTop() + $(window).height() != $(document).height()) {
    //         if ($(window).scrollTop() > offset.top) {
    //             $(".nav-profile").stop().animate({
                
    //                 marginTop: $(window).scrollTop() - offset.top + topPadding
                
    //             });
            
    //         } else {
    //             $(".nav-profile").stop().animate({
    //                 marginTop: 0               
    //             });
            
    //         }
    //     }   
        
     
    // });
    $('.nav-profile a').click(function(){  
        //Toggle Class
        $(".nav-tabs .active").removeClass("active");      
        $(this).closest('li').addClass("active");
        var theClass = $(this).attr("class");
        $('.'+theClass).parent('li').addClass('active');
        //Animate
        //alert($(this).attr('href'));

        $('html, body').stop().animate({
            scrollTop: $( $(this).attr('href') ).offset().top - 60
        },'slow');
        return false;
    });

});


;/*})'"*/
;/*})'"*/
