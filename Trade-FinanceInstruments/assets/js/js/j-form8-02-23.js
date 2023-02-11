$(document).ready(function () {

    //Disable Enter in form
    $("form").keypress(function (e) {
        if (e.which == 13) {
            return false;
        }
    });

    //Checkbox value getting and validation

    $(function () {

        // $("#Others").click(function () {
        //     if ($(this).prop("checked")) {
        //         $('#OtherCategory').show();
        //         $('#OtherCategory').rules('add', {
        //             required: true
        //         });
        //         $('#Category').rules('add', {
        //             required: false
        //         });
        //     }
        //     else {
        //         $('#OtherCategory').hide();
        //         $('#OtherCategory').rules('add', {
        //             required: false
        //         });
        //         $('#Category').rules('add', {
        //             required: true
        //         });
        //     }
        // });


        // $(".Category").click(function () {
        //     if ($(".Category").is(":checked")) {
        //         var categoryArray = [];
        //         $("input:checkbox.Category:checked").each(function () {
        //             categoryArray.push($(this).val());
        //         });
        //         var categoryValues = categoryArray.join();
        //         $('#Category').val(categoryValues);
        //     }
        //     else {
        //         $('#Category').val('');
        //     }
        // });

        // $(".Instruments").click(function () {
        //     if ($(".Instruments").is(":checked")) {
        //         var instrumentArray = [];
        //         $("input:checkbox.Instruments:checked").each(function () {
        //             instrumentArray.push($(this).val());
        //         });
        //         var instrumentValues = instrumentArray.join();
        //         $('#Instruments').val(instrumentValues);
        //     }
        //     else {
        //         $('#Instruments').val('');
        //     }
        // });


    });
    $("#j-forms").validate({
        errorClass: "error-view",
        validClass: "success-view",
        errorElement: "span",
        onkeyup: !1,
        onclick: !1,
        rules: {
            'first_name': { required: !0, lettersonlyandspace: !0 },
            'last_name': { required: !0, lettersonlyandspace: !0 },
            '00N5h00000F5tZD': { required: !0 },
            'email': { required: !0, emailCheck: !0 },
            'phone': { required: !0 , mobilenumber: !0 },
            '00N5h00000F5lu0': { required: !0 },
            'company': { required: !0, },
            // 'Turnover-of-your-Company': { required: !0, },
            '00N5h00000F5lu0': { required: !0 },
            '00N5h00000F5lu5': { required: !0 },
            '00N5h00000F5luA': { required: !0 },
            '00N5h00000F5kD4': { required: !0 },
            '00N5h00000F5kD9': { required: !0 },
            '00N5h00000F5kBX': { required: !0 },
            // 'Under-which-category-you-wants-us-to-recognise': { required: !0 },
            '00N5h00000F5tZD': { required: !0 },
            
            // 'What-type-of-instruments-does-your-business-need-normally': { required: !0 },
            // 'What-is-the-average-value-of-the-instruments-that-your-business-requires': { required: !0 },
            // 'How-soon-you-want-this-instruments-to-be-issued': { required: !0 },
            // 'Referred-by': { required: !0 },
            // 'terms': { required: !0 },
        },
        messages: {
            //'terms': { required: "Hey this is required" },
             'first_name': { required: "First Name is required" },
            'last_name': { required: "Last Name is required" },
            '00N5h00000F5tZD': { required: "Designation is required" },
            'email': { required: "Email is required", emailCheck: "Please enter a valid email address" },
            'phone': { required: "Mobile No. is required" },
            'company': { required: "Company Name is required" },
            //'Turnover-of-your-Company': { required: "Turn Over is required" },
            '00N5h00000F5lu0': { required: "Please select a country" },
            '00N5h00000F5lu5': { required: "Please select a State" },
            '00N5h00000F5luA': { required: "Please enter a city" },
            //'Under-which-category-you-wants-us-to-recognise': { required: "Category is required" },
            //'Other-Category': { required: "Please enter the category" },
            '00N5h00000F5kD4': { required: "Please select Instruments" },
            '00N5h00000F5kD9': { required: "Please select Instrument Value" },
            '00N5h00000F5kBX': { required: "Please select Lead Category" },
            // '00N5h00000F5tZD': { required: "Please enter a Designation" },
            'description': { required: "Please enter a Description" },
            // 'How-soon-you-want-this-instruments-to-be-issued': { required: "Please select Instrument Time" },
            // 'Referred-by': { required: "This field is required" },
        },
        // highlight: function (e, s, t) {
        //     $(e).closest(".input").removeClass(t).addClass(s), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(t).addClass(s);
        // },
        // unhighlight: function (e, s, t) {
        //     $(e).closest(".input").removeClass(s).addClass(t), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(s).addClass(t);
        // },
        // errorPlacement: function (e, s) {
        //     $(s).is(":checkbox") || $(s).is(":radio") ? $(s).closest(".check").append(e) : $(s).closest(".unit").append(e);
        // },
        // submitHandler: function () {
        //     var today = new Date();
        //     var date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
        //     var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        //     var dateTime = date+' '+time;
        //     $("#j-forms").ajaxSubmit({
        //         url: 'https://script.google.com/macros/s/AKfycbyEbeXd7a4kEkzuZq65gVqnrZBAHq8abn4YumuTJIKS-Q_MGtY3VIFD4_nCNYv51MJ2aw/exec?Timestamp='+ dateTime +'',
        //         type: 'POST',
        //         crossDomain: true,
        //         dataType: "json",
        //         target: "#j-forms #response",
        //         error: function (e) {
        //             $("#j-forms #response").html("An error occured: " + e.status + " - " + e.statusText);
        //         },
        //         beforeSubmit: function () {
        //             var checkBox = document.getElementById("terms");
        //             if(checkBox.checked == false){
                   
        //             $('#required_message').show();
        //             return false;
        //             }
        //             else{
        //                 $('#required_message').hide(); 
                  
                      

        //             $('#j-forms button[type="submit"]').attr("disabled", !0).addClass("processing");}
        //         },
        //         success: function () {
        //             return request2();
        //             function request2(){
        //                 $("#j-forms").ajaxSubmit({
        //                 type :"POST",
        //                // url : "https://test.euroeximbank.com/Trade_Finance_Instruments/thankyou.html",
        //                 success: function(){ 
        //                     $('#j-forms button[type="submit"]').attr("disabled", !1).removeClass("processing");
        //                     window.location.href = 'thankyou.html';  
        //                     $("#j-forms .input").removeClass("success-view error-view"),
        //                     $("#j-forms .check").removeClass("success-view error-view"),
        //                     $("#j-forms .success-message").length &&
        //                     ($("#j-forms").resetForm(),
        //                         $('#j-forms button[type="submit"]').attr("disabled", !0),
        //                         $("#j-forms .multi-prev-btn").attr("disabled", !0),
        //                         setTimeout(function () {
        //                             $("#j-forms #response").removeClass("success-message").html(""),
        //                                 $('#j-forms button[type="submit"]').attr("disabled", !1),
        //                                 $("#j-forms .multi-prev-btn").attr("disabled", !1),
        //                                 $("#j-forms .multi-prev-btn").css("display", "none"),
        //                                 $("#j-forms .multi-submit-btn").css("display", "none"),
        //                                 $("#j-forms fieldset").removeClass("active-fieldset"),
        //                                 $("#j-forms fieldset").eq(0).addClass("active-fieldset"),
        //                                 $("#j-forms .multi-next-btn").css("display", "block");
        //                         }, 5e3));              
        //                 }           
        //             });
        //             }
        // },
        //     });
        // },
    }),
        $("form.j-multistep").length &&
        $("form.j-multistep").each(function () {
            var e = $(this).attr("id"),
                s = $("#" + e + " fieldset").length,
                t = $("#" + e + " .step").length,
                i = $("#" + e + " .multi-next-btn"),
                r = $("#" + e + " .multi-prev-btn"),
                a = $("#" + e + " .multi-submit-btn");
            $("#" + e + " fieldset")
                .eq(0)
                .addClass("active-fieldset"),
                t &&
                $("#" + e + " .step")
                    .eq(0)
                    .addClass("active-step"),
                $("#" + e + " fieldset")
                    .eq(0)
                    .hasClass("active-fieldset") && (a.css("display", "none"), r.css("display", "none")),
                i.on("click", function () {
                    return 1 != $("#" + e).valid()
                        ? !1
                        : ($("#" + e + " fieldset.active-fieldset")
                            .removeClass("active-fieldset")
                            .next("fieldset")
                            .addClass("active-fieldset"),
                            t &&
                            $("#" + e + " .step.active-step")
                                .removeClass("active-step")
                                .addClass("passed-step")
                                .next(".step")
                                .addClass("active-step"),
                            r.css("display", "block"),
                            $("#" + e + " fieldset")
                                .eq(s - 1)
                                .hasClass("active-fieldset") && (a.css("display", "block"), i.css("display", "none")),
                            void 0);
                }),
                r.on("click", function () {
                    $("#" + e + " fieldset.active-fieldset")
                        .removeClass("active-fieldset")
                        .prev("fieldset")
                        .addClass("active-fieldset"),
                        t &&
                        $("#" + e + " .step.active-step")
                            .removeClass("active-step")
                            .prev(".step")
                            .removeClass("passed-step")
                            .addClass("active-step"),
                        $("#" + e + " fieldset")
                            .eq(0)
                            .hasClass("active-fieldset") && r.css("display", "none"),
                        $("#" + e + " fieldset")
                            .eq(s - 2)
                            .hasClass("active-fieldset") && (a.css("display", "none"), i.css("display", "block"));
                });
        });
});
