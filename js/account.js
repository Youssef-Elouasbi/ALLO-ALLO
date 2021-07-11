const ListUser = document.querySelector('.ListUser');
setInterval(function(){
    if(!inputSearch.classList.contains('active')){
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "PHP/user.php", true);
        xhr.onload = function(){
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                ListUser.innerHTML = data;
                }
            }
        }
        xhr.send();
    }
}, 500)