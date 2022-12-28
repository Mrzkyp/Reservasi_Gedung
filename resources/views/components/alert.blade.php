
@if(Session::get('sukses'))
<script>
    const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 8000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: "{{session('sukses')}}"
})
</script>

@elseif(Session::get('gagal'))
<script>
  const Toast = Swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 8000,
timerProgressBar: true,
didOpen: (toast) => {
  toast.addEventListener('mouseenter', Swal.stopTimer)
  toast.addEventListener('mouseleave', Swal.resumeTimer)
}
})

Toast.fire({
icon: 'error',
title: "{{session('gagal')}}"
})
</script>



@endif