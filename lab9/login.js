const password = document.querySelector('#spass');
const pass = document.querySelector('#pass');
pass.addEventListener('click' , () =>{
    if(pass.checked){
        password.type = 'text';
    }else{
        password.type = 'password';
    }
})
