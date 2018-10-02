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