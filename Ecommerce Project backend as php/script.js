const bar = document.getElementsById('bar');
const close = document.getElementsById('close');
const nav = document.getElementsById('navbar');

if (bar){
    bar.addEventListner('click',() =>{
        nav.classlist.add('active');
    })
}

    const bar:HTMLElement
if (close){
        close.addEventListner('click',() =>{
            nav.classlist.remove('active');
    })
}
