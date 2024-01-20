const showPassword = (id) => {
    let img = document.getElementById(id);
    let input = img.parentElement.querySelector('input');

    let infosImg = img.getAttribute('src').split('/');
    let sizeInfosImg = infosImg.length;

    if(infosImg[sizeInfosImg-1] === 'showInformation.svg') {
        infosImg[sizeInfosImg-1] = 'hiddenInformation.svg';
        input.setAttribute('type', 'text');
        
    }else {
        infosImg[sizeInfosImg-1] = 'showInformation.svg';
        input.setAttribute('type', 'password');
    }

    infosImg = infosImg.join('/');
    img.setAttribute('src', infosImg);
}


const checkPass = () => {
    let userPass = document.getElementById('inputCreatePass');
    let checkPass = document.getElementById('inputConfirmePass');
    let parentCheckPass = checkPass.parentElement;
    
    if(checkPass.value !== '') {
        if(userPass.value === checkPass.value) {
            if(parentCheckPass.classList.contains('inputError'))
                parentCheckPass.classList.remove('inputError')            
        }else {
            if(!parentCheckPass.classList.contains('inputError'))
                parentCheckPass.classList.add('inputError')
        }
    }
}