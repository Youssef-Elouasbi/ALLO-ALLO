/*Password Show*/
const showPass = document.querySelector('.showPass');
const inputPass = document.querySelector('#Password');


showPass.addEventListener('click', function(){
    if(showPass.className == 'showPass far fa-eye'){
        showPass.className = 'showPass far fa-eye-slash';
        showPass.style.color = 'black';
        inputPass.type = 'text';

    }else {
        showPass.className = 'showPass far fa-eye';
        showPass.style.color = 'grey';
        inputPass.type = 'password';
    }
})

