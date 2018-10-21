var WizardDemo = function() {
    $("#m_wizard");
    var i, e, n = $("#m_form");
    return {
        init: function() {
            var r;
            $("#m_wizard"), n = $("#m_form"), (e = new mWizard("m_wizard", {
                startStep: 1
            })).on("beforeNext", function(e) {
                !0 !== i.form() && e.stop()
            }), e.on("change", function(e) {
                mApp.scrollTop()
            }), i = n.validate({
                ignore: ":hidden",
                rules: {
                    name: {
                        required: !0
                    },
                    nric: {
                        required: !0,
                    },
                    email: {
                        required: !0,
                        email: !0
                    },
                    phone: {
                        required: !0
                    },
                    address1: {
                        required: !0
                    },
                    address2: {
                        required: !1
                    },
                    postalcode: {
                        required: !0
                    },
                    account_username: {
                        required: !0
                    },
                    account_password: {
                        required: !0
                    },
                    account_salary: {
                        required: !0
                    },
                    account_type: {
                        required: !0
                    }
                },
                invalidHandler: function(e, r) {
					console.log('error');
                    mApp.scrollTop(), swal({
                        title: "",
                        text: "There are some errors in your submission. Please correct them.",
                        type: "error",
                        confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                    })
                },
                submitHandler: function(e) {}
            }), (r = n.find('[data-wizard-action="submit"]')).on("click", function(e) {
                e.preventDefault(), i.form() && (mApp.progress(r), n.ajaxSubmit({
                    success: function() {
						console.log('success');
						
						var name = document.getElementById("name").value;
						document.getElementById("nameCheck").innerHTML = name;
						
						var nric = document.getElementById("nric").value;
						document.getElementById("nricCheck").innerHTML = nric;
						
						var email = document.getElementById("email").value;
						document.getElementById("emailCheck").innerHTML = email;
						
						var phone = document.getElementById("phone").value;
						document.getElementById("phoneCheck").innerHTML = phone;
						
						var address1 = document.getElementById("address1").value;
						document.getElementById("address1Check").innerHTML = address1;
						
						var address2 = document.getElementById("address2").value;
						document.getElementById("address2Check").innerHTML = address2;
						
						var postalcode = document.getElementById("postalcode").value;
						document.getElementById("postalcodeCheck").innerHTML = postalcode;
						
						var password1 = document.getElementById("password").value;
						document.getElementById("passwordCheck").innerHTML = password1;
						
						var salary = document.getElementById("salary");
						var salaryCheck = salary.options[salary.selectedIndex].text;
						document.getElementById("salaryCheck").innerHTML = salaryCheck;
						
						var accounttype = document.getElementById("accounttype");
						var accounttypeCheck = accounttype.options[accounttype.selectedIndex].text;
						document.getElementById("accounttypeCheck").innerHTML = accounttypeCheck;
						
						
						
						console.log(name);
						
						var user = JSON.stringify({ name: name, nric: nric, mobileNumber: phone, password1: password1,role: "customer", email: email , address: address1 +" "+ address2 +" Singapore "+ postalcode, account: "024-61993-1",salary: salaryCheck ,balance: "0", status1: "0", isActive: "1", requestToggleActive: "0", isTerminated: "0"});
						
						console.log(user);
						
						
						
						$.ajax({
							url:"../model/Registration.php", //the page containing php script
							type: "post", //request type,
							dataType: 'json',
						    data: {user: user}
						 });
						
						
						
						
                        mApp.unprogress(r), swal({
                            title: "",
                            text: "The application has been successfully submitted! Directing you to login.",
                            type: "success",
                            confirmButtonClass: "btn btn-secondary m-btn m-btn--wide invisible"
                        })
						window.location = "login.php";
						
						console.log('success');
                    }
                }))
            })
        }
    }
}();
jQuery(document).ready(function() {
    WizardDemo.init()
});