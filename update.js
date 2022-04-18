document.querySelectorAll('.btn-edit').forEach(function(btn){
    btn.addEventListener('click',function(event){
            let parent=event.target.closest('.contact');
            let id=parent.querySelector('.id').textContent;
            let userName=parent.querySelector('.username').textContent;
            let email=parent.querySelector('.email').textContent;
            let phone=parent.querySelector('.phone').textContent;
            let adress=parent.querySelector('.adress').textContent;
            console.log('test');

            document.querySelector('#editModal .id').value=id;
            document.querySelector('#editModal .username').value=userName;
            document.querySelector('#editModal .email').value=email;
            document.querySelector('#editModal .phone').value=phone;
            document.querySelector('#editModal .adress').value=adress;
    })
})