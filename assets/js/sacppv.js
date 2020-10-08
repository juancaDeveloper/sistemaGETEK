$(document).on("click", "#add", function (e) {
  e.preventDefault();

  var nombre = $("#nombre").val();
  var email = $("#email").val();
  

  if( nombre=="" || email==""){
    alert("campos requeridos xX");

  }else{

    $.ajax({
      url: baseurl + "Sacppv/insert",
      type: "post",
      dataType: "json",
      data: {
        nombre: nombre,
        email: email,
      },
      success: function (data) {
        fetch();
  
        
  
        if (data.responce == "success") {
          toastr["success"](data.message);
  
          toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-right",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
          }
          $("#exampleModal").modal("hide");
        } else {
          toastr["error"](data.message);
  
          toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-right",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
          };
        }

        
  
        //console.log(data);
      },
    });
  }

  //alert(nombre);

  

  $("#form")[0].reset();
});

function fetch() {
  $.ajax({
    url: baseurl + "Sacppv/fetch",
    type: "post",
    dataType: "json",
    success: function (data) {
      //console.log(data);
      var tbody = "";
      var i = "1";

      for (var key in data) {
        tbody += "<tr>";
        tbody += "<td>" + i++ + "</td>";
        tbody += "<td>" + data[key]["nombre"] + "</td>";
        tbody += "<td>" + data[key]["email"] + "</td>";
        tbody += `<td>
                    <a href="#" id="del" class="btn btn-danger"  value="${data[key]["id"]}"><i class="fas fa-trash-alt"></i></a>
                    <a href="#" id="edit" class="btn btn-info" value="${data[key]["id"]}"><i class="fas fa-edit"></i></a>
                    </td>`;
      }
      $("#tbody").html(tbody);
    },
  });
}
fetch();

$(document).on("click", "#del", function (e) {
  e.preventDefault();
  //alert("delete");

  var del_id = $(this).attr("value");
  //alert(del_id);

  if (del_id == "") {
    alert("eliminar es requerido");
  } else {
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: "btn btn-success",
        cancelButton: "btn btn-danger",
      },
      buttonsStyling: false,
    });

    swalWithBootstrapButtons
      .fire({
        title: "Estas Seguro?",
        text: "No podras Revertir esta Operacion!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, Eliminar!",
        cancelButtonText: "No, cancelar!",
        reverseButtons: true,
      })
      .then((result) => {
        if (result.value) {
          $.ajax({
            url: baseurl + "Sacppv/eliminar",
            type: "post",
            dataType: "json",
            data: {
              del_id: del_id,
            },

            success: function (data) {
              fetch();
              //console.log(data);
              if (data.responce == "success") {
                swalWithBootstrapButtons.fire(
                  "Eliminado!",
                  "Tu Archivo fue Eliminado Permanentemente.",
                  "Ok :)"
                );
              }
            },
          });
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            "Cancelado",
            "La operacion Fallo :p :)",
            "error"
          );
        }
      });
  }
});

$(document).on("click", "#edit", function (e) {
  e.preventDefault();
  var edit_id = $(this).attr("value");
  //alert(edit_id);

  if (edit_id == "") {
    alert("El id es requerido");
  } else {
    $.ajax({
      url: baseurl + "Sacppv/editar",
      type: "post",
      dataType: "json",
      data: {
        edit_id: edit_id,
      },
      success: function (data) {
        //console.log(data);
        if (data.responce == "success") {
          $("#editModal").modal("show");
          $("#edit_modal_id").val(data.post.id);
          $("#edit_name").val(data.post.nombre);
          $("#edit_email").val(data.post.email);
        } else {
          toastr["error"](data.message);

          toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-right",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
          };
        }
      },
    });
  }
});

$(document).on("click", "#editar",function (e) {
  e.preventDefault();
  var edit_id = $("#edit_modal_id").val();
  var edit_name = $("#edit_name").val();
  var edit_email = $("#edit_email").val();

  if (edit_id == "" || edit_name == "" || edit_email == "") {
    alert(" filas requeridas");
  } else {
    $.ajax({
      url: baseurl + "Sacppv/modificar",
      type: "post",
      dataType: "json",
      data: {
        edit_id: edit_id,
        edit_name: edit_name,
        edit_email: edit_email
      },
      success: function(data) {
        //console.log(data);
        fetch();
        if(data.responce == "success"){
          $('#editModal').modal('hide');
          toastr["success"](data.message);

          toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-right",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
          };

        } else{
          toastr["error"](data.message);

          toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-right",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
          };
        }
      },
    });
  }
});
