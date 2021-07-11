const form = document.querySelector('.fPassword form'),
    submitBtn = document.querySelector(".fPassword form input[type = 'submit']"),
    error = document.querySelector(".error");

form.addEventListener('submit', function(e){
    e.preventDefault();
})

submitBtn.addEventListener('click', function(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "PHP/fPassword.php", true);
    xhr.onload = function(){
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == 'changed'){
                    location.href = 'Signin.php'
                } else {
                    error.style.display = 'block';
                    error.textContent = data;
                }
                
            }
        }
        
    }
    let formData = new FormData(form);
    xhr.send(formData);
})