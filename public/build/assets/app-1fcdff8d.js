const s='<img src="/img/main/arrow-prev.png">',o='<img src="/img/main/arrow-next.png">',n='<img src="/img/main/arrow-prev-dark.png">',a='<img src="/img/main/arrow-next-dark.png">',t=document.querySelector(".spinner"),i=document.querySelectorAll(".upload-resume__desc"),l=$(".companies-carousel"),c=$(".gallery-carousel");function m(){t.classList.add("spinner--visible")}i.forEach(r=>{r.addEventListener("change",e=>{e.target.files.length>0&&(m(),e.target.closest(".upload-resume").submit())})});l.owlCarousel({loop:!0,margin:20,nav:!0,navText:[s,o],dots:!1,responsive:{0:{items:2},769:{items:5}}});c.owlCarousel({loop:!0,margin:12,nav:!0,navText:[n,a],dots:!1,responsive:{0:{items:1},769:{items:2}}});
