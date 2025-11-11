function popup_open(elem) {
    const modal = document.querySelector('.' + elem).parentNode 
    modal.classList.toggle('open')
    
}