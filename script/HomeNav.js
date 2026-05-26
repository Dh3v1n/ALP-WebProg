const nav = document.querySelector('.navbar');
fetch('navs/HomeNav.php')
.then(res=>res.text())
.then(data=>{
    nav.innerHTML=data
});

const card = document.querySelector('.gameCard');
fetch('navs/GameCard.php')
.then(res=>res.text())
.then(data=>{
    card.innerHTML=data
});

const foot = document.querySelector('.footer');
fetch('navs/footer.php')
.then(res=>res.text())
.then(data=>{
    foot.innerHTML=data
});

