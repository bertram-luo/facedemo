$(function(){
    var files;
    $('input[type=file]').on('change', prepareUpload);
    $('form#demo').on('submit', uploadFiles);
    function prepareUpload(event){
        files = event.target.files;
    }
    function uploadFiles(event){

        $("#submit").val("detecting!");
        event.stopPropagation();
        event.preventDefault();
        var data = new FormData();
        $.each(files, function(key, value){
            data.append(key, value);
        });
        $.ajax({
            url: '/facedetect/process?files',
            beforeSend: function (request)
            {
                request.setRequestHeader("X-CSRF-TOKEN",$('input[name=_token]').val());
            },
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false,
            contentType: false,
            sucess:function(data, textStatus, jqXHR){
                console.log(data);
                if (typeof data.error === 'undefined'){
                    submitForm(event, data);
                } else {
                    console.log("Errors:" + data.error)
                }
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log('ERRORS:' + textStatus)
            }, 
            complete: function(data){
                $("#submit").val("fire!");
                $.each(data.responseJSON.files, function(key, value){
                    console.log(value);
                    $("#result").append('<img src='+value+' height="300px"> </img>');
                });
            }
        });
    }
    function submitForm(event, data){
        $form = $(event.target);
        var formData = $from.serialize();
        $.each(data.files, function(key, value){
            formData = formData + '&filenames[]=' + value;
        });

        $.ajax({
            url: '/demo/process',
            type:'POST',
            data: formData,
            cache: false,
            dataType: 'json',
            success: function(data, textStatus, jqXHR){
                if (typeof data.error === 'undefined'){
                    console.log('SUCCESS: ' + data.success);
                }else{
                    console.log('ERRORS: ' + data.error);
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                // Handle errors here
                console.log('ERRORS: ' + textStatus);
            },
            complete: function(data)
            {
                console.log(data.responseJSON.files);
            }
        })

    }
});
