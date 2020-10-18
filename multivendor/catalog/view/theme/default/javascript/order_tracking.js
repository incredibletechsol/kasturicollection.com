  
  $('#check-order-status-window').on('hidden.bs.modal', function () {
        var form = $("#order_status_form_1");
        $(form).find("input").val("");
        $(form).find(".result").removeClass("alert alert-danger").empty();

    });

  $(function(){
    $("check-order-status-btn").on('click', check_oder_status($("#order_status_form_1")));
  });
function check_oder_status(form) {
  var order_id_or_email = form.find(".order_id-or-email").val(),
        result = $("#check-order-status-window").find(".result");
    var captcha = $("#order_status_form_1").find("input[name='captcha']").val();
    $.ajax({
        type: "POST",
        url: 'index.php?route=extension/module/order_tracking/get_status',
        data: {
            "order_id_or_email" : order_id_or_email,captcha : captcha ,
        },
        dataType: 'json',
        success: function(json) {  
            if(json) {
                // Some validation error
                if(json.error) {
                    result.addClass("alert alert-danger").html(json.error)

                // Show orders statuses
                } else {
                    var total_orders = json.result.length,
                        current_order_number = 1;

                    if(total_orders){
                      result.append('<br><b><u>'+json.heading+'</u></b>');
                    } else{
                      result.append('<br><b><u>'+json.message+'</u></b>');
                    }
          
                    // Print info about orders
                    $.each(json.result, function (index, order) {
                        var order_info = "<div class='order'>";
            
                        order_info += '<b>Order ID</b>: ' + order.order_id;
                        order_info += '<br><b>Order status</b>: ' + order.order_status;
                        order_info += '<br><b>Date filled</b>: '+ order.date_added;

                        // Add split line if here more than 1 orders
                        if (total_orders > 1 && current_order_number != total_orders) {
                            order_info += "<span class='order-split-line'/>"
                        }

                        order_info += "</div>";

                        result.append(order_info);
                        current_order_number++;
                    });
                }
            }
    },
        beforeSend: function() {
            result.html("").removeClass("alert alert-danger").show();
        },
    });
}
