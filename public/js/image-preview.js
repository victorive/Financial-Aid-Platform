let source = document.querySelector('#image-upload');
source.addEventListener('change', readFile);

function readFile(e){

    let file = e.currentTarget.files[0];
    let displayfield = document.querySelector('#image-preview');

    reader = new FileReader();

    reader.onload = function(){
        displayfield.style.backgroundImage = 'url(' + reader.result + ')';
    }

    reader.readAsDataURL(file);
    displayfield.getElementsByTagName('span')[0].classList.add('hidden');
}
