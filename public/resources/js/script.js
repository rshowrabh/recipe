$(document).ready(function() {
    $("#parameter,#festivals").select2();
    $("#tags").select2();

    $('#category').change(function() {
        var catId = $(this).val();
        if (catId) {
            $.ajax({
                type: "GET",
                url: "/get-sub-category?category_id=" + catId,
                success: function(res) {
                    if (res) {
                        $("#sub_category").empty();
                        $("#sub_category").append('<option>Select</option>');
                        $.each(res, function(key, value) {
                            $("#sub_category").append('<option value="' + key + '">' + value + '</option>');
                        });


                    } else {
                        $("#sub_category").empty();
                    }
                }
            });
        } else {
            $("#sub_category").empty();
        }
    });

    $('#sub_category').change(function() {
        var catId = $(this).val();
        if (catId) {
            $.ajax({
                type: "GET",
                url: "/get-sub-sub-category?sub_category_id=" + catId,
                success: function(res) {
                    if (res) {
                        $("#sub_sub_category").empty();
                        $("#sub_sub_category").append('<option>Select</option>');
                        $.each(res, function(key, value) {
                            $("#sub_sub_category").append('<option value="' + key + '">' + value + '</option>');
                        });

                    } else {
                        $("#sub_sub_category").empty();
                    }
                }
            });
        } else {
            $("#sub_sub_category").empty();
        }
    });
    $('#cuisine_type').change(function() {
        var catId = $(this).val();
        if (catId) {
            $.ajax({
                type: "GET",
                url: "/get-region?cusine_id=" + catId,
                success: function(res) {
                    if (res) {
                        $("#region").empty();
                        $("#region").append('<option>Select</option>');
                        $.each(res, function(key, value) {
                            $("#region").append('<option value="' + key + '">' + value + '</option>');
                        });

                    } else {
                        $("#region").empty();
                    }
                }
            });
        } else {
            $("#region").empty();
        }
    });




});