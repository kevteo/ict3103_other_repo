var DefaultDatatableManagerDash = function() {
    var e = function(t) {
        var a = $("#m_datatable_console_managerDash").append(t + "\t\n");
        $(a).scrollTop(a[0].scrollHeight - $(a).height())
    };
    return {
        init: function() {
            var t;
            t = $(".manager_dashboard").mDatatable({
                data: {
                    type: "remote",
                    source: {
                        read: {
                            url: "managerDashboard_json.php" 
                        }
                    },
                    pageSize: 5,
                    serverPaging: !1,
                    serverFiltering: !1,
                    serverSorting: !1
                },
                layout: {
                    theme: "default",
                    class: "",
                    scroll: !0,
                    height: "auto",
                    footer: !1
                },
                sortable: !0,
                toolbar: {
                    placement: ["bottom"],
                    items: {
                        pagination: {
                            pageSizeSelect: [5, 10, 20, 30, 50]
                        }
                    }
                },
                search: {
                    input: $("#generalSearch")
                },
                columns: [
				{
                    field: "userID",
                    title: "User ID",
                    sortable: "asc"
                },
				{
                    field: "username",
                    title: "Username",
                    sortable: "asc"
                },
				{
                    field: "nric",
                    title: "NRIC",
                    sortable: "asc"
                },{
                    field: "name",
                    title: "Name",
                    sortable: "asc"
                }, {
                    field: "mobileNumber",
                    title: "Mobile Number",
                    sortable: "asc"
                },{
                    field: "email",
                    title: "Email",
                    sortable: "asc"
                },{
                    field: "balance",
                    title: "Balance",
                    sortable: "asc"
                },
				{
                    field: "Actions",
                    width: 110,
                    title: "Actions",
                    sortable: !1,
					filterable: !1,
                    overflow: "visible",
                    template: function(t, a, e) {
                        var stringUser = "'" + t.userID + "'";
						var url = "managerViewCustomerDetails.php?user_id="+t.userID;
						var url2 = "managerEditCustomerDetails.php?user_id="+t.userID;
					
						return '\t\t\t\t\t\t\t\<a href="'+url+'" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View">\t\t\t\t\t\t\t<i class="la la-eye"></i>\t\t\t\t\t\t</a>&nbsp<a href="'+url2+'" class="btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">\t\t\t\t\t\t\t<i class="la la-edit"></i>\t\t\t\t\t\t</a>';
                    }
                }]
            }), $("#m_datatable_clear").on("click", function() {
                $("#m_datatable_console").html("")
            }), $("#m_datatable_reload").on("click", function() {
                t.reload()
            }), $(".m_datatable").on("m-datatable--on-init", function() {
                e("Datatable init")
            }).on("m-datatable--on-layout-updated", function() {
                e("Layout render updated")
            }).on("m-datatable--on-ajax-done", function() {
                e("Ajax data successfully updated")
            }).on("m-datatable--on-ajax-fail", function(t, a) {
                e("Ajax error")
            }).on("m-datatable--on-goto-page", function(t, a) {
                e("Goto to pagination: " + a.page)
            }).on("m-datatable--on-update-perpage", function(t, a) {
                e("Update page size: " + a.perpage)
            }).on("m-datatable--on-reloaded", function(t) {
                e("Datatable reloaded")
            }).on("m-datatable--on-check", function(t, a) {
                e("Checkbox active: " + a.toString())
            }).on("m-datatable--on-uncheck", function(t, a) {
                e("Checkbox inactive: " + a.toString())
            }).on("m-datatable--on-sort", function(t, a) {
                e("Datatable sorted by " + a.field + " " + a.sort)
            })
        }
    }
}();

jQuery(document).ready(function() {
    DefaultDatatableManagerDash.init()
});