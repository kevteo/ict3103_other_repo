var DefaultDatatableTransactionsM = function() {
    var e = function(t) {
        var a = $("#m_datatable_console_userRequest").append(t + "\t\n");
        $(a).scrollTop(a[0].scrollHeight - $(a).height())
    };
    return {
        init: function() {
            var t;
            t = $(".customertransactionsM").mDatatable({
                data: {
                    type: "remote",
                    source: {
                        read: {
                            url: "customertransactions_json.php" 
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
                    },
                    
                    

                    {
                        field: "type",
                        title: "Type",
                        template: function(t) {
                            var a = {
                                "transfer": {
                                    title: "Transfer",
                                    class: " m-badge--brand"
                                },
                                "charge": {
                                    title: "Charge",
                                    class: " m-badge--metal"
                                },
                                "deposit": {
                                    title: "Deposit",
                                    class: " m-badge--accent"
                                },
                                "withdraw": {
                                    title: "Withdraw",
                                    class: " m-badge--danger"
                                }
                            };
                            return '<span class="m-badge ' + a[t.type].class + ' m-badge--wide">'  + a[t.type].title+ "</span>"
                        }
                    },
                    {
                        field: "amount",
                        title: "Amount",
                        sortable: "asc"
                    },
                    {
                        field: "datetime",
                        title: "Date",
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
                        var urlView = "customerTransactionDetails.php?transactionID="+t.transactionID+"&type="+t.type;
						if(t.type!="charge"){
                            return '\t\t\t\t\t\t\t\<a href="'+urlView+'" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View">\t\t\t\t\t\t\t<i class="la la-eye"></i>\t\t\t\t\t\t</a>&nbsp';
                        }
                        else{
                            return '\t\t\t\t\t\t\t&nbsp&nbsp&nbsp-'
                        }
                        
						                        
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
    DefaultDatatableTransactionsM.init()
});