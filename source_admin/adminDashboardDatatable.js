var DefaultDatatableAdminDash = function() {
    var e = function(t) {
        var a = $("#m_datatable_console_adminDash").append(t + "\t\n");
        $(a).scrollTop(a[0].scrollHeight - $(a).height())
    };
    return {
        init: function() {
            var t;
            t = $(".admin_dashboard").mDatatable({
                data: {
                    type: "remote",
                    source: {
                        read: {
                            url: "adminDashboard_json.php" 
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
                    field: "username",
                    title: "Username",
                    sortable: "asc"
                },{
                    field: "nric",
                    title: "NRIC",
                    sortable: "asc"
                },
				{
                    field: "lastActive",
                    title: "Last Active",
                    sortable: "asc"
                },
				{
                    field: "isActive",
                    title: "Status",
                    template: function(t) {
                        var a = {
                            1: {
                                title: "Active",
                                class: " m-badge--accent"
                            },
                            0: {
                                title: "Inactive",
                                class: " m-badge--danger"
                            }
                        };
                        return '<span class="m-badge ' + a[t.isActive].class + ' m-badge--wide">' + a[t.isActive].title + "</span>"
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
    DefaultDatatableAdminDash.init()
});