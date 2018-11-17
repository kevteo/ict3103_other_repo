var FormControls = {
    init: function() {
        $("#adminCreateManager").validate({
            rules: {
            },
            invalidHandler: function(e, r) {
                mApp.scrollTo("#adminCreateManager"), swal({
                    title: "",
                    text: "There are some errors in your submission. Please correct them.",
                    type: "error",
                    confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                })
            }
        }),$("#editProfileForm").validate({
            rules: {
            },
            invalidHandler: function(e, r) {
                mApp.scrollTo("#editProfileForm"), swal({
                    title: "",
                    text: "There are some errors in your submission. Please correct them.",
                    type: "error",
                    confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                })
            }
        }),$("#editCustProfileForm").validate({
            rules: {
            },
            invalidHandler: function(e, r) {
                mApp.scrollTo("#editCustProfileForm"), swal({
                    title: "",
                    text: "There are some errors in your submission. Please correct them.",
                    type: "error",
                    confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                })
            }
        })
    }
};
jQuery(document).ready(function() {
    FormControls.init()
});