const showPassword = () => {
    let img = document.querySelector('#userPass');
    let input = document.querySelector('#inputPass');

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