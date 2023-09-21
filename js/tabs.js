const pages = [
    '/',
    '/about',
    '/contacts',
    '/login',
];
const tab = document.querySelectorAll('.tab');
const link = document.querySelectorAll('.link');
let url = window.location.pathname;
//console.log(url);
pages.forEach((pagesItem, pagesIndex) =>{
    if(url == pagesItem){
        //console.log(`You location ${pagesItem}`);
        link.forEach((linkItem, linkIndex)=>{
            if(linkIndex == pagesIndex){
                link[linkIndex].classList.add('link-active');
            }
        });
    
        tab.forEach((tabItem, tabIndex)=>{
            if(tabIndex == pagesIndex){
                tab[tabIndex].classList.add('tab-active');
            }
        });       
    }
})