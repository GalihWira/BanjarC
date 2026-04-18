const btn = document.querySelector('.bayar-air')

if (btn) {
  btn.addEventListener('click', () => {
    window.location.href = "{{ route('bayarair') }}"
  })
}