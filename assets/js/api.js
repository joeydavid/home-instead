$(function() {
    
    var markup = `<div id="postCodeMarker" class="mt-5"> 
                    <div class="row bg-primary py-2 px-2 text-white rounded-0 postcode-details">
                        <div class="col-sm-12 mb-3">
                            <h4>
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                <span id="national">National Office Contact Info</span> 
                            </h4>
                        </div>
                        <div class="col-sm-6">
                            <a href="tel:1300 008 018" class="btn btn-light"><i class="fas fa-phone" aria-hidden="true"></i> 1300 008 018</a>
                        </div>
                        <div class="col-sm-6">
                            <h5>Service Hours</h5>
                            <i class="fa fa-clock" aria-hidden="true"></i> Open 24 hrs
                        </div>
                        <div class="col-sm-12">
                            <h5 class="mt-4">Contact Information</h5>
                            info@homeinstead.com.au
                        </div>
                    </div>
                </div>`;

    $("#inputGetPostCode").on("change",function(){

    $(".lds-ellipsis").show();
    $("#postCodeMarker").html("");

    $.getJSON("https://homeinstead.com.au/wp-json/postcode/"+$(this).val(), function(data){

        var markup1 = `<div class="row bg-primary py-2 px-2 text-white rounded-0 postcode-details">
                            <div class="col-sm-12 mb-3">
                                <h4>
                                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i> ${data.name}
                                </h4>
                            </div>
                            <div class="col-sm-6">
                                <a href="${data.phone}" class="btn btn-light"><i class="fas fa-phone" aria-hidden="true"></i> ${data.phone}</a>
                            </div>
                            <div class="col-sm-6">
                                <h5>Service Hours</h5>
                                <i class="fa fa-clock" aria-hidden="true"></i> Open 24 hrs
                            </div>
                            <div class="col-sm-12">
                                <h5 class="mt-4">Contact Information</h5>
                                ${data.address_line_1} ${data.address_line_2}  ${data.state} ${data.postcode}
                            </div>
                        </div>`;
        if ($("#inputGetPostCode").val() == 0) { 
            // console.log("#inputGetPostCode");
            $("#postCodeMarker").append(markup);
            $(".lds-ellipsis").hide();
            // alert("Post code must be 4 numbers!");
            return false;
        } else {
            $("#postCodeMarker").append(markup1);
            $(".lds-ellipsis").hide();
            return true;
        }
        })
        .fail(function() {
            // $("#postCodeMarker").html("");
            $("#postCodeMarker").append(markup);
            $(".lds-ellipsis").hide();
        })
    })
});