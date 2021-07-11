/*Search Bar*/
const inputSearch = document.querySelector('.search input');
const buttonSearch = document.querySelector('.search button');
// const ListUser = document.querySelector('.ListUser');


buttonSearch.addEventListener('click', function(){
    inputSearch.classList.toggle('active');
    buttonSearch.classList.toggle('active');
    inputSearch.focus();
    inputSearch.value = '';
})

inputSearch.addEventListener('keyup', function(){
    let nameSearch = inputSearch.value;
    // if(nameSearch != ""){
    //     inputSearch.classList.add('active');
    // } else {
    //     inputSearch.classList.remove('active');
    // }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "PHP/nameSearch.php", true);
    xhr.onload = function(){
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                ListUser.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("nameSearch=" + nameSearch);
})