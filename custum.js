$(document).ready(function() {
    var base_url = $("#base_url").val();
    $("#search").keyup(function() {
        $.ajax({
            type: "POST",
            url: base_url + "stock/search_keyup",
            dataType: 'json',
            data: 'keyword=' + $(this).val(),
            beforeSend: function() {
                $("#search").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
            },
            success: function(data) {
                $("#stock_list").show();
                console.log(data);
                $("#stock_list").html(data.html);
                if (data.status == 'success') {
                    $("#stock_list").html(data.html);
                }
                $("#search").css("background", "#FFF");
            }
        });
    });
});
                                            /*  get spacific comapny details */
function select_comp(val) {
    var base_url = $("#base_url").val();
    $("#search").val($("#stock_" + val).text());
    $("#stock_list").hide();
    $.ajax({
        type: "POST",
        url: base_url + "stock/view_company",
        dataType: 'json',
        data: 'cmp_id=' + val,
        beforeSend: function() {
            $("#search").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data) {
            $("#stock_list").show();
            console.log(data);
            $("#stock_list").html(data.html);
            if (data.status == 'success') {
                $("#stock_list").html(data.html);
                $.each(data.html, function(key, data) {
                    console.log(key)
                    $.each(data, function(index, data) {
                        $("#" + index).text(data);
                    })
                })
                $("#result").show();
            }
            $("#search").css("background", "#FFF");
        }
    });
}