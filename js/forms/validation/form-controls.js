var FormControls = {
    init: function() {
        $("#adminCreateManager").validate({
            rules: {
            },
            invalidHandler: function(e, r) {
                mApp.scrollTo("#m_form_2"), swal({
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