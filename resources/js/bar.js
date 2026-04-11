document.addEventListener('scroll', () => {
  document.querySelector('header').classList.toggle('scrolled', window.scrollY > 0)
})

document.querySelector('.hum-bar').addEventListener('click', () => {
  document.querySelector('.side-bar').classList.toggle('hidden')
})

document.querySelector('.out-bar').addEventListener('click', () => {
  document.querySelector('.side-bar').classList.toggle('hidden')
})

document.querySelector('.edit-bar').addEventListener('click', () => {
  document.querySelector('.edit-side').classList.toggle('hidden')
})

document.querySelector('.valid-bar').addEventListener('click', () => {
  document.querySelector('.valid-side').classList.toggle('hidden')
})
