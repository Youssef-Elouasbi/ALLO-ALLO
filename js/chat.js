const chatForm = document.querySelector('.send');
const chatFormBtn = document.querySelector('.send button');
const chatFormInput = document.querySelector('.send .inputSent');
const box = document.querySelector('.box');

chatForm.addEventListener('submit', function(e){
    e.preventDefault();
})


box.addEventListener('mouseenter', function(){
    box.classList.add('active');
})
box.addEventListener('mouseleave', function(){
    box.classList.remove('active');
})
chatFormBtn.addEventListener('click', function(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "PHP/sent.php", true);
    xhr.onload = function(){
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                chatFormInput.value = '';
                toBottom();
            }
        }        
    }
    let formChat = new FormData(chatForm);
    xhr.send(formChat);
});
setInterval(function(){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "PHP/get.php", true);
        xhr.onload = function(){
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                // console.log(data);
                box.innerHTML = data;

                const para = document.querySelectorAll('.out p');
                para.forEach(function(p){
                    p.addEventListener('click', function(e){
                        let msg = e.target;
                        let btn = msg.previousElementSibling;
                        btn.classList.toggle('remove');
                    })    
                });

                const deleteBtn = document.querySelectorAll('.delete');
                deleteBtn.forEach(function (btn) {
                    btn.addEventListener('click', function (e) {
                        const deleteP = e.target.nextElementSibling.id;
                        let xhr = new XMLHttpRequest();
                        xhr.open("POST", "PHP/deleteMsg.php", true);
                        xhr.onload = function () {
                            if (xhr.readyState === XMLHttpRequest.DONE) {
                                if (xhr.status === 200) {
                                }
                            }
                        }
                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhr.send("idP=" + deleteP);
                    })
                })

                if(!box.classList.contains('active')){
                    toBottom();
                }
                }
            }
        }
        let formChat = new FormData(chatForm);
        xhr.send(formChat);
}, 1500);


function toBottom(){
    box.scrollTop = box.scrollHeight;
}





