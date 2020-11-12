$(document).ready(function() {
    $('.user-info').click(function() {
        var userid = $(this).data('id');
        $('.details tr').remove();

        $.ajax({
            url: 'bus_info',
            type: 'post',
            data: { userid: userid },
            success: function(response) {
                // console.log('hi');
                // console.log(response);
                var myObj, x, txt = "";
                myObj = JSON.parse(response);
                // console.log(myObj);
                for (x in myObj) {
                    txt += "<tr>";
                    txt += "<td>" + myObj[x].stop_name + "</td>";
                    txt += "<td>" + myObj[x].time + "</td>";
                    txt += "</tr>";
                }

                $('.details').append(txt);
                // $('#exampleModal').modal('show');
            }
        });
    });
    $('.boat-info').click(function() {
        var userid = $(this).data('id');
        $('.details tr').remove();

        $.ajax({
            url: 'boat_info',
            type: 'post',
            data: { userid: userid },
            success: function(response) {
                // console.log('hi');
                // console.log(response);
                var myObj, x, txt = "";
                myObj = JSON.parse(response);
                // console.log(myObj);
                for (x in myObj) {
                    txt += "<tr>";
                    txt += "<td>" + myObj[x].stop_name + "</td>";
                    txt += "<td>" + myObj[x].time + "</td>";
                    txt += "</tr>";
                }

                $('.details').append(txt);
                // $('#exampleModal').modal('show');
            }
        });
    });
    $("#source").autocomplete({
        // 'autoFill': true,
        focus: function(event, ui) {
            $('#source').val(ui.item.value);
        },
        select: function(event, ui) {
            $('#source').val(ui.item.label);
            // $('#source-id').val(ui.item.value);
            return false;
        },
        change: function(event, ui) {
            if (!ui.item) {
                $('#source').val("");
                return false;
            }
        },
        source: function(request, response) {
            $.ajax({
                url: "index.php/bus/autocomplete",
                type: 'post',
                dataType: "json",
                data: {
                    search: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        }
    });
    $("#destination").autocomplete({
        'autoFill': true,
        select: function(event, ui) {
            $('#destination').val(ui.item.label);
            // $('#destination-id').val(ui.item.value);
            return false;
        },
        change: function(event, ui) {
            if (!ui.item) {
                $('#destination').val("");
                return false;
            }
        },
        source: function(request, response) {
            $.ajax({
                url: "index.php/bus/autocomplete",
                type: 'post',
                dataType: "json",
                data: {
                    search: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        }
    });
    $("#stop").autocomplete({
        'autoFill': true,
        select: function(event, ui) {
            $('#stop').val(ui.item.label);
            return false;
        },
        change: function(event, ui) {
            if (!ui.item) {
                $('#stop').val("");
                return false;
            }
        },
        source: function(request, response) {
            $.ajax({
                url: "index.php/bus/autocomplete",
                type: "post",
                dataType: "json",
                data: { search: request.term },
                success: function(data) {
                    response(data);
                }
            });
        }
    });
    $("#boat_source").autocomplete({
        // 'autoFill': true,
        focus: function(event, ui) {
            $('#boat_source').val(ui.item.value);
        },
        select: function(event, ui) {
            $('#boat_source').val(ui.item.label);
            // $('#source-id').val(ui.item.value);
            return false;
        },
        change: function(event, ui) {
            if (!ui.item) {
                $('#boat_source').val("");
                return false;
            }
        },
        source: function(request, response) {
            $.ajax({
                url: "index.php/bus/boat_autocomplete",
                type: 'post',
                dataType: "json",
                data: {
                    search: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        }
    });
    $("#boat_destination").autocomplete({
        'autoFill': true,
        select: function(event, ui) {
            $('#boat_destination').val(ui.item.label);
            // $('#destination-id').val(ui.item.value);
            return false;
        },
        change: function(event, ui) {
            if (!ui.item) {
                $('#boat_destination').val("");
                return false;
            }
        },
        source: function(request, response) {
            $.ajax({
                url: "index.php/bus/boat_autocomplete",
                type: 'post',
                dataType: "json",
                data: {
                    search: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        }
    });
    $("#jetty").autocomplete({
        'autoFill': true,
        select: function(event, ui) {
            $('#jetty').val(ui.item.label);
            return false;
        },
        change: function(event, ui) {
            if (!ui.item) {
                $('#jetty').val("");
                return false;
            }
        },
        source: function(request, response) {
            $.ajax({
                url: "index.php/bus/boat_autocomplete",
                type: "post",
                dataType: "json",
                data: { search: request.term },
                success: function(data) {
                    response(data);
                }
            });
        }
    });
});