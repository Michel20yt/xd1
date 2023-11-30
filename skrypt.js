let text = document.getElementById('text');
let lisc = document.getElementById('lisc');
let gora1 = document.getElementById('gora1');
let gora4 = document.getElementById('gora4');
let gora5 = document.getElementById('gora5');

window.addEventListener('scroll', () => {
    let value = window.scrollY;
    
    text.style.marginTop = value * 2.5 + 'px';
    lisc.style.top= value * -1.5 + 'px';
    lisc.style.left= value * 1.5 + 'px';
    gora5.style.left= value * 1.5 + 'px';
    gora4.style.left= value * -1.5 + 'px';
    gora1.style.top= value * 1 + 'px';
    
});

