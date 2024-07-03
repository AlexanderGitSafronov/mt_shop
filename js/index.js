// Отображение товаров в категории неделя и  хит
const newWeekDataWooman = document.querySelector('.swiper__new_week') 
const newWeekDataMan = document.querySelector('.swiper__new_week_man') 
const woomanHit = document.querySelector('.wooman_hit') 
const manHit = document.querySelector('.man_hit') 
let url = "https://market-nine-sepia.vercel.app/api/product?";
const getNewWeekDataWooman = ()=>{
    fetch(url + `new__week_wooman=new`)
    .then((resolve)=> resolve.json())
    .then((resolve)=> {
      resolveLength = resolve.length
      console.log(resolve.length)
      if(resolve.length === 0){
        paginationNextBtn.classList.add('disable')
        return
      }
     
  
      newWeekDataWooman.innerHTML = '';
        resolve.forEach((item)=>{
            newWeekDataWooman.innerHTML += `
    <div class="swiper-slide"><div class="card">
    <a href="./product.php?product=${item.id}" data-id="${item.id}">
        <div class="card__img">
          <img class="item__image1" src="${item.images}" alt="">
          <img class="item__image2" src="${item.images2}" alt="">
          <div class="card__img_info">
            <div class="new__info"><span>Новинка</span></div>
            <div class="new__info_sale">-20%</div>
          </div>
         
        </div>
      </a>
      <div class="card__desc">
        <p>${item.title}</p>
        <p><span>4 868 грн</span><span>${item.price} грн</span></p>
      </div>
    </div></div>
            `



            
            
        })

        slide2()
        
    })
    .catch((err)=>console.log(err))
}
const getNewWeekDataMan = ()=>{
    fetch(url + `new__week_man=new`)
    .then((resolve)=> resolve.json())
    .then((resolve)=> {
      resolveLength = resolve.length
      console.log(resolve.length)
      if(resolve.length === 0){
        paginationNextBtn.classList.add('disable')
        return
      }
     
  
      newWeekDataMan.innerHTML = '';
        resolve.forEach((item)=>{
            newWeekDataMan.innerHTML += `
    <div class="swiper-slide"><div class="card">
    <a href="./product.php?product=${item.id}" data-id="${item.id}">
        <div class="card__img">
          <img class="item__image1" src="${item.images}" alt="">
          <img class="item__image2" src="${item.images2}" alt="">
          <div class="card__img_info">
            <div class="new__info"><span>Новинка</span></div>
            <div class="new__info_sale">-20%</div>
          </div>
         
        </div>
      </a>
      <div class="card__desc">
        <p>${item.title}</p>
        <p><span>4 868 грн</span><span>${item.price} грн</span></p>
      </div>
    </div></div>
            `
        })
        slide2()
    })
    .catch((err)=>console.log(err))
}
const getWoomanHit= ()=>{
    fetch(url + `hit__woman=hit`)
    .then((resolve)=> resolve.json())
    .then((resolve)=> {
     
    
      woomanHit.innerHTML = '';
        resolve.forEach((item)=>{
            woomanHit.innerHTML += `
    <div class="swiper-slide"><div class="card">
    <a href="./product.php?product=${item.id}" data-id="${item.id}">
        <div class="card__img">
          <img class="item__image1" src="${item.images}" alt="">
          <img class="item__image2" src="${item.images2}" alt="">
          <div class="card__img_info">
            <div class="new__info"><span>Новинка</span></div>
            <div class="new__info_sale">-20%</div>
          </div>
         
        </div>
      </a>
      <div class="card__desc">
        <p>${item.title}</p>
        <p><span>4 868 грн</span><span>${item.price} грн</span></p>
      </div>
    </div></div>
            `
        })
        slide2()
    })
    .catch((err)=>console.log(err))
}
const getManHit= ()=>{
    fetch(url + `hit__man=hit`)
    .then((resolve)=> resolve.json())
    .then((resolve)=> {
     
    
        manHit.innerHTML = '';
        resolve.forEach((item)=>{
            manHit.innerHTML += `
    <div class="swiper-slide"><div class="card">
    <a href="./product.php?product=${item.id}" data-id="${item.id}">
        <div class="card__img">
          <img class="item__image1" src="${item.images}" alt="">
          <img class="item__image2" src="${item.images2}" alt="">
          <div class="card__img_info">
            <div class="new__info"><span>Новинка</span></div>
            <div class="new__info_sale">-20%</div>
          </div>
         
        </div>
      </a>
      <div class="card__desc">
        <p>${item.title}</p>
        <p><span>4 868 грн</span><span>${item.price} грн</span></p>
      </div>
    </div></div>
            `
        })
        slide2()
    })
    .catch((err)=>console.log(err))
}
getNewWeekDataWooman()
getNewWeekDataMan()
getWoomanHit()
getManHit()



function slide2(){

var screenWidth = window.innerWidth;
var slidesToShow = 5;
if(screenWidth < 1200 && screenWidth >= 992){
  slidesToShow = 4
} else if (screenWidth < 992 && screenWidth >= 576){
  slidesToShow = 3
} else if ( screenWidth < 576 ){
  slidesToShow = 2
}
var swiper2 = new Swiper(".mySwiper2", {
slidesPerView: slidesToShow,
spaceBetween: 0,
freeMode: true,
loop: true,
navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
});
}