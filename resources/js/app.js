import './bootstrap';


function ChangeColor() {
    const peers = document.querySelectorAll('.peer');
    const texts = document.querySelectorAll('.textpeer');

    peers.forEach((peer, index) => {
        peer.addEventListener('change', function () {
            texts.forEach(text => {
                text.classList.remove('text-white');
                text.classList.add('text-text');
            });
            
            if (peer.checked) {
                texts[index].classList.remove('text-text');
                texts[index].classList.add('text-white');
            }
        });
    });
}


document.addEventListener('DOMContentLoaded', function() {
    ChangeColor();
});
