
   $.ajaxSetup({
     type: 'POST',
     url: '/sendData.php',
     data: 'json'
   });


$(function(){
    $('#formData').on('submit', function(e){
        e.preventDefault();
        var $that = $(this),
            formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
        $.ajax({
            contentType: false, // важно - убираем форматирование данных по умолчанию
            processData: false, // важно - убираем преобразование строк по умолчанию
            data: formData,
            success: function(json){
                if(json){
                    $('#formData')[0].reset(); // очищаем поля

                }
            }
        }).done(function () {
            alert('Данные успешно записанны')
        });
    });
});