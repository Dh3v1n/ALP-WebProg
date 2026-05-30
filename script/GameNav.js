const nav = document.querySelector('.navbar');
fetch('navs/GameWikiNav.php')
.then(res=>res.text())
.then(data=>{
    nav.innerHTML=data
});

const foot = document.querySelector('.footer');
fetch('navs/footer.php')
.then(res=>res.text())
.then(data=>{
    foot.innerHTML=data
});

