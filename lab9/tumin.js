const myform = document.querySelector('#myform');
const Fname = document.querySelector('#First_name');
const Lname = document.querySelector('#Last_name');
const mailinput = document.querySelector('.mail');
const password = document.querySelector('.pass');
const Spass = document.querySelector('#spass');
const Show = document.querySelector('#show')
const info = document.querySelector('#personal');
const taste = document.querySelector('#taste');
const beginnerinput = document.querySelector('.begin');
const msg = document.querySelector('.msg');
console.log(myform);

myform.addEventListener('submit', (e) => {
    e.preventDefault();
    console.log(Fname.value);
    console.log(Lname.value);
    console.log(mailinput.value);
    console.log(password);
    console.log(info);
    console.log(taste.value);
    console.log(beginnerinput.value);

    if((Fname.value !== '' && Lname.value !== '' && mailinput.value !== '') ){
        e.target.submit()
        }
    else{      
         msg.classList.add('error');
    msg.innerHTML = 'please fill all the above fields';
    setTimeout(() => msg.innerHTML ="", 3000);
       
    }
   

});
Spass.addEventListener('click' , () =>{
    if(Spass.checked){
        password.type = 'text';
    }else{
        password.type = 'password';
    }
})
    
// })
// Show.addEventListener('onmouseover', ()=>{
//         password.type = 'text';

// })
// Show.addEventListener('onmouseout' ,()=>{
//     password.type = 'password'
// })