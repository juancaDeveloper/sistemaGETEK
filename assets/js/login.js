function cargadito() {
  $(".rkediloader").fadeOut("slow")
}
$(window).on("load", cargadito);
toastr.options = {
  closeButton: true,
  debug: false,
  newestOnTop: true,
  progressBar: true,
  positionClass: "toast-top-right",
  preventDuplicates: false,
  onclick: null,
  showDuration: "8000",
  hideDuration: "1000",
  timeOut: "7000",
  extendedTimeOut: "3000",
  showEasing: "swing",
  hideEasing: "linear",
  showMethod: "fadeIn",
  hideMethod: "fadeOut"
};
