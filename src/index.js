import $ from 'jquery'

$(() => {
  $('.nav-trigger').click(() => {
    $('.navbar-menu').toggleClass('active')
  })
})
