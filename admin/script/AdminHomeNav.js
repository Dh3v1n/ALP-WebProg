const nav = document.querySelector('.navbar');
fetch('navs/AdminHomeNav.php')
.then(res=>res.text())
.then(data=>{
    nav.innerHTML=data
});

const card = document.querySelector('.gameCard');
fetch('cards/AdminGameCard.php')
.then(res=>res.text())
.then(data=>{
    card.innerHTML=data
});