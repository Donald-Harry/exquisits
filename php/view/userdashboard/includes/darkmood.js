
function changemode(){
    // var atag = document.querySelectorAll('a');
    // var ptag = document.querySelectorAll('p');
    // var spantag = document.querySelectorAll('span');
    // var card = document.querySelectorAll('.card');
    // var header = document.getElementById('header');
    // var footer = document.getElementById('footer');
    // var body = document.querySelector('body');
    // var deznav = document.getElementById('deznav');
    // var navstart = document.getElementById('nav-header');
    // var h1tag = document.querySelectorAll('h1');
    // var h4tag = document.querySelectorAll('h4');
    // var myicon = document.getElementById('myicon');
if (myicon.classList == 'flaticon-381-off') {
    myicon.classList.remove('flaticon-381-off');
    myicon.classList.add('flaticon-381-on');
    document.querySelector('body').classList.add('dark');
    // header.classList.add('dark');
    // footer.classList.add('dark');
    // body.classList.add('dark');
    // deznav.classList.add('dark');
    // navstart.classList.add('dark');

    // atag.forEach(element => {
    //     element.classList.add('text-white');
    // });
    // ptag.forEach(element => {
    //     element.classList.add('text-white');
    // });
    // h4tag.forEach(element => {
    //     element.classList.remove('text-black');
    //     element.classList.add('text-white');
    // });
    // spantag.forEach(element => {
    //     element.classList.remove('text-black');
    //     element.classList.add('text-white');
    // });
    // card.forEach(element => {
    //     element.classList.add('dark');
    // });
}else{
    myicon.classList.remove('flaticon-381-on');
    myicon.classList.add('flaticon-381-off');
    document.querySelector('body').classList.remove('dark');
    // header.classList.remove('dark');
    // footer.classList.remove('dark');
    // body.classList.remove('dark');
    // deznav.classList.remove('dark');
    // navstart.classList.remove('dark');

    // atag.forEach(element => {
    //     element.classList.remove('text-white');
    // });
    // ptag.forEach(element => {
    //     element.classList.remove('text-white');
    // });
    // spantag.forEach(element => {
    //     element.classList.add('text-black');
    //     element.classList.remove('text-white');
    // });
    // card.forEach(element => {
    //     element.classList.remove('dark');
    // });
}
}