  var form  = "#form";
  var btn   = "#btnsave";

  $(document).ready(function() {
    get_id();
    form_serialize(form, btn);
  });

  function get_id() {
    $.ajax({
        url : index + "home/get_id",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $("#no").text(data.no);
            $('[name="id"]').val(data.id);
            $('[name="no"]').val(data.no);
            $("#sdp").text(data.sdp);
            $("#Y").val(data.bila_benar);
            $("#N").val(data.bila_salah);
        }
    });
  }

  function form_serialize(form, btn) {
    $(form).on('submit', function (event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        $(btn).attr('disabled', true);
        $.ajax({
            url: $(this).attr('action'),
            data: $(this).serialize(),
            type: "POST",
            success: function (response) {
              $(btn).removeAttr('disabled');
              if (response.status) {

                if (response.message) {
                  Swal.fire({
                   type: response.type,
                   title: response.message,
                   showCancelButton: true,
                   confirmButtonColor: '#3085d6',
                   cancelButtonColor: '#6c757d',
                   confirmButtonText: 'Ulangi',
                   cancelButtonText: 'Kembali',
                   reverseButtons: true,
                  }).then((result) => {
                   if (result.value) {
                     $(form)[0].reset();
                     get_id();
                   } else {
                     home();
                   }
                  })
                }

                if (response.id) {
                  var data = response.id;
                  $(form)[0].reset();
                  $("#no").text(data.no);
                  $('[name="id"]').val(data.id);
                  $('[name="no"]').val(data.no);
                  $("#sdp").text(data.sdp);
                  $("#Y").val(data.bila_benar);
                  $("#N").val(data.bila_salah);
                }

              } else {
                Swal.fire({
                  type: 'error',
                  title: response.required,
                  showConfirmButton: false,
                  timer: 1500
                });
              }
            }
        })
    });
  }

  function home() {
    window.location.href = index + "home";
  }