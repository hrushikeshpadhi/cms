// JavaScript Document


// JavaScript Document
/*!
    * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    (function($) {
			  
		//<!-- jQuery Form Validation code -->	  
	// validation  
		$.validator.methods.checkEmail = function( value, element ) {
       // return this.optional( element ) || /[a-z]+@[a-z]+\.[a-z]+/.test( value );
          return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test( value );
        }	
		
		$.validator.methods.regex = function( value, element ) {
        return this.optional( element ) || /^(?=.*[A-Z])(?=.*[0-9])[A-Z0-9 _]*$/.test( value );
        }
		
		/*$.validator.methods.duration = function( value, element ) {
        return this.optional( element ) || /^(?=.*[1-9])\d*\.?\d*$/.test( value );
        }*/
		
		$.validator.methods.duration = function( value, element ) {


            var RE = /^\d*\.?\d{0,0}$/;
			if( !RE.test(value) ||  (value > 99)  || (value <= 0) ){
				  return false;
            }
            else
                return true;
			//return this.optional( element ) || /^(?=.[1-9])\d\.?\d*$/.test( value );
		}
	
		
		$.validator.methods.rate = function( value, element ) {
            if(!value || value == '')
               return true;
            if( (value > 100)  || (value <= 0) ){
            return false;
            }
            return this.optional( element ) || /^[$-]{0,2}\d{1,3}(?:,?\d{3})*(?:\.\d{0,2})?$/.test( value );
        }
		$.validator.methods.rate1 = function( value, element ) {           
            if( (value > 100)  || (value <= 0) ){
               return false;
            }
            return this.optional( element ) || /^[$-]{0,2}\d{1,3}(?:,?\d{3})*(?:\.\d{0,2})?$/.test( value );
        }
        $.validator.methods.rate2 = function( value, element ) {
            if( (value > 100)  || (value <= 0) ){
              return false;
            }
            return this.optional( element ) || /^[$-]{0,2}\d{1,3}(?:,?\d{3})*(?:\.\d{0,2})?$/.test( value );
        }
		
		$.validator.methods.midalphanumeric = function( value, element ) {
        return this.optional( element ) ||  /^[a-zA-Z0-9_]+$/.test( value );
        }
		
		$.validator.methods.tidalphanumeric = function( value, element ) {
        return this.optional( element ) ||  /^[a-zA-Z0-9_]+$/.test( value );
        }
		$.validator.methods.queryalphanumeric = function( value, element ) {
        return this.optional( element ) ||  /^[a-zA-Z0-9_]+$/.test( value );
        }
		
		$.validator.methods.notealphanumeric = function( value, element ) {
        return this.optional( element ) ||  /^[a-zA-Z0-9_]+$/.test( value );
        }

     $.validator.methods.fundrefalphanumeric = function( value, element ) {
        return this.optional( element ) ||  /^[a-zA-Z0-9_]+$/.test( value );
        }

		//  /^(?=.*[1-9])\d*\.?\d*$/
		//  /(^\d{5}$)|(^\d{5}-\d{5}$)/
		//  /^[$-]{0,2}\d{1,3}(?:,?\d{3})*(?:\.\d{0,2})?$/
		
		 $.validator.methods.required_if = function( value, element ) {
           var val = $('#queryagent').prop("checked");
           var submitdate = $('#submitdate').val(); 
            if(val && submitdate === '' ){
                return false;
            }else{
                return true; 
            }

            
        } 


        $.validator.methods.required_if = function( value, element ) {
           var val = $('#resolve').prop("checked");
           var collectiondate = $('#collectiondate').val(); 
            if(val && collectiondate === '' ){
                return false;
            }else{
                return true; 
            }

            
        } 
        $.validator.methods.checkpostcode = function( value, element){

            // Permitted letters depend upon their position in the postcode.
            var alpha1 = "[abcdefghijklmnoprstuwyz]";                       // Character 1
            var alpha2 = "[abcdefghklmnopqrstuvwxy]";                       // Character 2
            var alpha3 = "[abcdefghjkpmnrstuvwxy]";                         // Character 3
            var alpha4 = "[abehmnprvwxy]";                                  // Character 4
            var alpha5 = "[abdefghjlnpqrstuwxyz]";                          // Character 5
            var BFPOa5 = "[abdefghjlnpqrst]";                               // BFPO alpha5
            var BFPOa6 = "[abdefghjlnpqrstuwzyz]";                          // BFPO alpha6

            // Array holds the regular expressions for the valid postcodes
            var pcexp = new Array ();

            // BFPO postcodes
            pcexp.push (new RegExp ("^(bf1)(\\s*)([0-6]{1}" + BFPOa5 + "{1}" + BFPOa6 + "{1})$","i"));

            // Expression for postcodes: AN NAA, ANN NAA, AAN NAA, and AANN NAA
            pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "?[0-9]{1,2})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));

            // Expression for postcodes: ANA NAA
            pcexp.push (new RegExp ("^(" + alpha1 + "{1}[0-9]{1}" + alpha3 + "{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));

            // Expression for postcodes: AANA  NAA
            pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "{1}" + "?[0-9]{1}" + alpha4 +"{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));

            // Exception for the special postcode GIR 0AA
            pcexp.push (/^(GIR)(\s*)(0AA)$/i);

            // Standard BFPO numbers
            pcexp.push (/^(bfpo)(\s*)([0-9]{1,4})$/i);

            // c/o BFPO numbers
            pcexp.push (/^(bfpo)(\s*)(c\/o\s*[0-9]{1,3})$/i);

            // Overseas Territories
            pcexp.push (/^([A-Z]{4})(\s*)(1ZZ)$/i);  

            // Anguilla
            pcexp.push (/^(ai-2640)$/i);

            // Load up the string to check
            var postCode = value;

            // Assume we're not going to find a valid postcode
            var valid = false;

            // Check the string against the types of post codes
            for ( var i=0; i<pcexp.length; i++) {

            if (pcexp[i].test(postCode)) {

            // The post code is valid - split the post code into component parts
            pcexp[i].exec(postCode);

            // Copy it back into the original string, converting it to uppercase and inserting a space 
            // between the inward and outward codes
            postCode = RegExp.$1.toUpperCase() + " " + RegExp.$3.toUpperCase();

            // If it is a BFPO c/o type postcode, tidy up the "c/o" part
            postCode = postCode.replace (/C\/O\s*/,"c/o ");

            // If it is the Anguilla overseas territory postcode, we need to treat it specially
            if (value.toUpperCase() == 'AI-2640') {postCode = 'AI-2640'};

            // Load new postcode back into the form element
            valid = true;

            // Remember that we have found that the code is valid and break from loop
            break;
            }
            }
            // Return with either the reformatted valid postcode or the original invalid postcode
            if (valid) {return postCode;} else return false;
        }
		
		
		$.validator.methods.ukphoneno = function( value, element ) {


            // Convert into a string and check that we were provided with something
            var telnum = value + " ";
            if (telnum.length == 1)  {
                telNumberErrorNo = 1;
                return false
            }
            telnum.length = telnum.length - 1;
            
            // Don't allow country codes to be included (assumes a leading "+")
            var exp = /^(\+)[\s]*(.*)$/;
            if (exp.test(telnum) == true) {
                telNumberErrorNo = 2;
                return false;
            }
            
            // Remove spaces from the telephone number to help validation
            while (telnum.indexOf(" ")!= -1)  {
                telnum = telnum.slice (0,telnum.indexOf(" ")) + telnum.slice (telnum.indexOf(" ")+1)
            }
            
            // Remove hyphens from the telephone number to help validation
            while (telnum.indexOf("-")!= -1)  {
                telnum = telnum.slice (0,telnum.indexOf("-")) + telnum.slice (telnum.indexOf("-")+1)
            }  
            
            // Now check that all the characters are digits
            exp = /^[0-9]{10,11}$/;
            if (exp.test(telnum) != true) {
                telNumberErrorNo = 3;
                return false;
            }
            
            // Now check that the first digit is 0
            exp = /^0[0-9]{9,10}$/;
            if (exp.test(telnum) != true) {
                telNumberErrorNo = 4;
                return false;
            }

            // Disallow numbers allocated for dramas.

            // Array holds the regular expressions for the drama telephone numbers
            var tnexp = new Array ();
            tnexp.push (/^(0113|0114|0115|0116|0117|0118|0121|0131|0141|0151|0161)(4960)[0-9]{3}$/);
            tnexp.push (/^02079460[0-9]{3}$/);
            tnexp.push (/^01914980[0-9]{3}$/);
            tnexp.push (/^02890180[0-9]{3}$/);
            tnexp.push (/^02920180[0-9]{3}$/);
            tnexp.push (/^01632960[0-9]{3}$/);
            tnexp.push (/^07700900[0-9]{3}$/);
            tnexp.push (/^08081570[0-9]{3}$/);
            tnexp.push (/^09098790[0-9]{3}$/);
            tnexp.push (/^03069990[0-9]{3}$/);

            for (var i=0; i<tnexp.length; i++) {
                if ( tnexp[i].test(telnum) ) {
                telNumberErrorNo = 5;
                return false;
                }
            }
            
            // Finally check that the telephone number is appropriate.
            exp = (/^(01|02|03|05|070|071|072|073|074|075|07624|077|078|079)[0-9]+$/);
            if (exp.test(telnum) != true) {
                telNumberErrorNo = 5;
                return false;
            }
            
            // Telephone number seems to be valid - return the stripped telehone number  
            return true;
        }
		


    $("#financeForm").validate({

       rules: {
        txtfinanceagentname: {
                required: true  
            },
       txtfinacepayid: {
                required: true  
            },
            txtfinancecat:{
				 required: true
				},
        txtfinancefundrefno:{
                required: true, 
                fundrefalphanumeric: true,
                maxlength:10
            }
            
       },
        messages: {
           txtfinanceagentname: {
                required: "Please select a value from dropdown"  
            },
          txtfinacepayid: {
                required: "Please Enter value"  
            },
          txtfinancecat:{
				 required:  "Please Select value"
				},
         txtfinancefundrefno:{
                required: "This Field is Required", 
                fundrefalphanumeric: " format not valid",
                maxlength: "maximum 10 character"
            },
             
       }

    });

 		// validation rules
         $("#queryForm").validate({

            rules: {
             txtcollectiondate:{
                     required_if: true,
     
                 },
                 
                 txtqueryagentname: {
                     required: true  
                 },
                  txtcustquery: {
                     required: true  
                 },
     
            },
             messages: {
               txtcollectiondate:{
                     required: "Please select collectiondate" ,
                     required_if: "Please select collectiondate" 
                 },
                  txtqueryagentname: {
                     required: "Please Select Agent Name"  
                 },
                 txtcustquery: {
                     required: "Please Enter Customer Query" 
                 },
            }
     
         });


		
		 $("#myForm").validate({
							   
		 rules: {
			  
			 txtagentname: {
                required: true  
            },
            txttrad: {
                required: true  
            },
			txtappdetailsprovider: {
                 required: true
           
            },
			txtleadsource: {
                required: true
               
            },
			txttradaddress: {
                required: true
               
            },
			txtziptrad: {
                required: true,
                checkpostcode:true,
				//minlength: 5,
				//regex:true
				//maxlength: 5,
                //digits: true,
				//regex:  /(^\d{5}$)|(^\d{5}-\d{5}$)/   
               
            },
			txthomeaddress: {
                required: true
               
            },
			txtziphome: {
                required: true,
				//minlength: 5,
                //regex:true,
                checkpostcode:true,
				//maxlength: 5,
               // digits: true,
				//regex:  /(^\d{5}$)|(^\d{5}-\d{4}$)/
            },
			txtfirstname: {
                required: true
               
            },
			
			txtlastname: {
                required: true
               
            },
			
			txtemail: {
                 required: true,
                 checkEmail: true
               
            },
			
			txtappinfo: {
                 required: true
   
            },
			/*txtmobno:{
				required: true,
				number :true,
				minlength:5,
				maxlength:15
			},*/
			txtmobno:{
                required: true,
                number :true,
                ukphoneno :true,
            },
            txtphone:{
				number :true,
				maxlength:12
			},
			
			txtterminaltype: {
                 required: true 
            },
			
			txtrental: {
                 required: true 
            },
			txtrate: {
                 required: false,
				 rate: true
            },
            txtrate1: {
                required: true,
                rate1: true
            },
            txtrate2: {
                required: true,
                rate2: true
            },
			txtagentradio: {
                 required: true 
            },
			txtappdata: {
                 required: true
				
            },
			
			txtduration: {
                 required: true,
  				 duration:true,
  				 maxlength:3
            },
			
			/*txtqueryagent: {
                required: true 
            },*/
			txtdropevostatus: {
                required: true 
            },
			/*txtmid: {
                required: true ,
				midalphanumeric: true,
				maxlength:15
	            
            },*/
			/*txttid: {
                required: true ,
				tidalphanumeric: true,
				maxlength:9
            },*/
			
			txtlantecquery: {

                //required: true,
				queryalphanumeric: true,
				maxlength:60
            },
			
			/*txtnote: {
                required: true,
				         notealphanumeric: true,
				maxlength:60
            },*/
			txtsubmitdate:{
                required_if: true,

            },
      
			evoselect: {
                 required: true
   
            },
			
			appdetailsprovider: {
                 required: true
   
            },
			
			spireselect: {
                 required: true
   
            },
			
			financeselect: {
                 required: true
   
            },
			
			txtproviderstatus: {
                 required: true
   
            }
			/*txtterminalord: {
                  required: true
   
            },
			txtletersend: {
                  required: true
   
            }*/
           
		},
		
	    // Specify the validation error messages
        messages: 
		{
			 txtagentname: {
                 required: "Please Select Agent Name"   
               },
            txttrad: {
                required: "Please Enter Trading Name" 
            },
			txtleadsource: {
              required: "Please Select Lead Source" 
               
            },
			txtappdata: {
                 required: " Select one value"
				
            },
			
			txtappinfo: {
                  required: "  Select one "
   
            },
			spireselect: {
                required: "  Select one "
   
            },
			txtappdetailsprovider: {
               required: "Please Select  value from dropdown"
           
           },
			financeselect: {
                 required: "  Select one "
   
            },
			appdetailsprovider: {
                 required: "Please Select  value from dropdown"
   
            },
           evoselect: {
                  required: " Select one "
   
            },
			txtproviderstatus: {
                 required: "Please Select  value from dropdown"
   
            },
			
			/*txtterminalord: {
                 required: "Please Select  value from dropdown"
   
            },
			
			txtletersend: {
                 required: "Please Select  value from dropdown"
   
            },*/
			
			
			txttradaddress: {
                required: "Please Enter Trading Address" 
            },
			txtziptrad: {
                required: "Please Enter Trading ZIP Code", 
				//minlength: "Your Postal Code must be 5 numbers!",
               // regex:"Enter a valid UK ZIP code with Capital Letter"
                checkpostcode:  "Invalid Post code" 
				//maxlength: "Your Postal Code must be 5 numbers!"
               // digits: "Your Postal Code must be numbers!"
               
            },
			txthomeaddress: {
                 required: "Please Enter Your Home Address" 
               
            },
			txtziphome: {
                required: "Please Enter Your Home ZIP Code",
				//minlength: "Your Postal Code must be 5 numbers!",
				//maxlength: "Your Postal Code must be 5 numbers!"
               // regex:"Enter a valid USA ZIP code with Capital Letter"
                checkpostcode:  "Invalid Post code" 
               
            },
			txtfirstname: {
                required: "Please Enter Your First Name" 
               
            },
			txtlastname: {
                required: "Please Enter Your Last Name" 
               
            },
			txtemail: {
                required: "Please Enter Your Email Address",
				checkEmail:"Please Enter Valid Email Address"
               
            },
			/*txtmobno: {
                 required: "Please Enter Your Mobile Number" 
               
            },*/
			txtmobno: {
                 required: "Please Enter Your Mobile Number" ,
                 ukphoneno: "Invalid MobileNo",
               
            },
            txtphone:{
				number :"Must be a Number",
				maxlength:"Maximum 12 number is allowed"
			},
			txtterminaltype: {
                 required: "Please Select Terminal Type" 
            },
			txtrental: {
                 required: "Please Select Rental" 
            },
			txtrate: {
                  required: "Please Enter Rate" ,
				  rate:"Rate should be a decimal num and it not be ZERO or negative number "
            },
            txtrate1: {
                //required: "Please Enter Rate" ,
                rate1:"Rate should be a decimal num and it not be ZERO or negative number "
            },
            txtrate2: {
                //required: "Please Enter Rate" ,
                rate2:"Rate should be a decimal num and it not be ZERO or negative number "
            },
            
			txtduration: {
                required: "Please Enter Contract Duration(Months)",
				duration: "Duration should between 1 and 99"
				//maxlength: "Your Enter Maximum 3 digit number"
            },
			txtagentradio: {
                 required: "Please Select one Value" 
            },
		
			/*txtqueryagent: {
                 required: "Please select query" 
            },*/
			txtdropevostatus: {
                 required: "Please select EVO Status"  
            },
			txtmid: {
                 required: "Please Enter MID" ,
				 midalphanumeric: "MID format not valid",
				 maxlength: "maximum 15 character"
	            // rangelength: "MID should be 15 character"
            },
			txttid: {
                required: "Please Enter TID" ,
				tidalphanumeric: "TID format not valid",
				maxlength: "maximum 9 character"
            },
			txtlantecquery: {
               // required: "Please Enter Lantec Query",  
				queryalphanumeric: "Lantec Query format not valid",
				maxlength: "maximum 60 character"
            },
			/*txtnote: {
                required: "Please Enter Notes" ,
				notealphanumeric: "Notes format not valid",
				maxlength: "maximum 60 character"
				
            },*/
			txtsubmitdate:{
                required: "Please select submitdate" ,
                required_if: "Please select submitdate" 
            },
       
      
			
		}
    });


    $('#savefinancebtn').click( function() { 
         
          $("#financeForm").valid();
         // alert('hii');
      });

    $('#savequerybtn').click( function() { 
         
          $("#queryForm").valid();
          //alert('hii');
      });
		 
    $('#savebtn').click( function() { 
          $("#myForm").valid(); // test the form for validity
          
      });
	  
	  
	 // validation end 
	 
		  
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

(function ( $ ) {
  $.fn.multiStepForm = function(args) {
      if(args === null || typeof args !== 'object' || $.isArray(args))
        throw  " : Called with Invalid argument";
      var form = this;
      var tabs = form.find('.tab');
      var d_tabs = form.find('.d-tab');
      var steps = form.find('.step');
      steps.each(function(i, e){
        $(e).on('click', function(ev){
          form.navigateTo(i);
        });
      });
      form.navigateTo = function (i) {
        tabs.removeClass('current').eq(i).addClass('current');
        d_tabs.removeClass('current').eq(i).addClass('current');
        // Show only the navigation buttons that make sense for the current section:
        form.find('.previous').toggle(i > 0);
        atTheEnd = i >= tabs.length - 1;
        atTheEnd = i >= d_tabs.length - 1;
        form.find('.next').toggle(!atTheEnd);
        // console.log('atTheEnd='+atTheEnd);
        form.find('.submit').toggle(atTheEnd);
        fixStepIndicator(curIndex());
        return form;
      }
      function curIndex() {
        /Return the current index by looking at which section has the class 'current'/
        return tabs.index(tabs.filter('.current'));
        return d_tabs.index(d_tabs.filter('.current'));
      }
      function fixStepIndicator(n) {
        steps.each(function(i, e){
          i == n ? $(e).addClass('active') : $(e).removeClass('active');
        });
      }
      /* Previous button is easy, just go back */
      form.find('.previous').click(function(e) {
		  e.preventDefault();
      //alert('find data');
      // fetchformdata();
        form.navigateTo(curIndex() - 1);
      });

      /* Next button goes forward iff current block validates */
      form.find('.next').click(function(e) {
	    	e.preventDefault();
       //alert('hii data fetch called');
        //fetchformdata();
		if ($("#myForm").valid()) {
        form.navigateTo(curIndex() + 1);
    }
       
		
      });
      form.find('.submit').on('click', function(e){
        if(typeof args.beforeSubmit !== 'undefined' && typeof args.beforeSubmit !== 'function')
          args.beforeSubmit(form, this);
               
        if(typeof args.submit === 'undefined' || (typeof args.submit === 'boolean' && args.submit)){
          form.submit();
        }
        return form;
      });
      /By default navigate to the tab 0, if it is being set using defaultStep property/
      typeof args.defaultStep === 'number' ? form.navigateTo(args.defaultStep) : null;

      form.noValidate = function() {
        
      }
      return form;
  };
  // customer query accordion Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
          $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
          $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
          $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
		
		
		
}( jQuery ));

      $(document).ready(function(){
            $("#myForm").multiStepForm(
            {
                // defaultStep:0,
                beforeSubmit : function(form, submit){
                    console.log("called before submiting the form");
                    console.log(form);
                    console.log(submit);
                },
            }
            ).navigateTo(0);
			//$('select').selectpicker();
        });
	  
	  
	  