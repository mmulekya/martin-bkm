<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>oldies</title>

<style type=text/css>
:root {
  --gap: 12px;
  --thumb-h: 110px;
  --modal-bg: rgba(0,0,0,0.85);
}

html, body {
  height: 100%;
  margin: 0;
  font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
}

.container {
  max-width: 1100px;
  margin: 28px auto;
  padding: 0 16px;
}

h1 {
  font-size: 20px;
  margin: 0 0 12px;
}

/* GRID — 3 columns */
.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--gap);
}

.item {
  overflow: hidden;
  border-radius: 8px;
  background: #fafafa;
  cursor: pointer;
  display: block;
}

.item img {
  width: 100%;
  height: var(--thumb-h);
  object-fit: cover;
  transition: transform .25s ease;
}

.item:hover img { transform: scale(1.05); }

.caption {
  padding: 8px 10px;
  font-size: 13px;
  color: #333;
}

/* Modal */
.modal {
  position: fixed;
  inset: 0;
  display: none;
  align-items: center;
  justify-content: center;
  background: var(--modal-bg);
  z-index: 1000;
  padding: 18px;
}
.modal.open { display: flex; }

.modal-content {
  max-width: 1100px;
  width: 100%;
  max-height: 90vh;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.modal-img {
  max-width: 100%;
  max-height: 78vh;
  border-radius: 8px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.6);
}

.modal-row {
  width: 100%;
  display: flex;
  justify-content: space-between;
  margin-top: 12px;
  color: #fff;
}

.modal-info { font-size: 15px; }

.btn, .nav-btn, .close {
  background: transparent;
  border: 0;
  cursor: pointer;
  color: #fff;
}

.nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 32px;
  padding: 18px;
}

.nav-left { left: 6px; }
.nav-right { right: 6px; }

.close {
  position: absolute;
  right: 8px;
  top: 8px;
  font-size: 28px;
}

/* Responsive */
@media (max-width: 900px) {
  .grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 520px) {
  .grid { grid-template-columns: repeat(1, 1fr); }
  :root { --thumb-h: 150px; }
}
</style>
</head>
<body>

<div class="container">
<h1>Beautiful.</h1>

<div class="grid" id="gallery">

<!-- All 18 corrected items -->

<a class="item" data-index="0"><img src="166.jpg" alt="Photo 1"><div class="caption">Photo 1</div></a>
<a class="item" data-index="1"><img src="167.jpg" alt="Photo 2"><div class="caption">Photo 2</div></a>
<a class="item" data-index="2"><img src="168.jpg" alt="Photo 3"><div class="caption">Photo 3</div></a>
<a class="item" data-index="3"><img src="169.jpg" alt="Photo 4"><div class="caption">Photo 4</div></a>
<a class="item" data-index="4"><img src="170.jpg" alt="Photo 5"><div class="caption">Photo 5</div></a>
<a class="item" data-index="5"><img src="171.jpg" alt="Photo 6"><div class="caption">Photo 6</div></a>
<a class="item" data-index="6"><img src="172.jpg" alt="Photo 7"><div class="caption">Photo 7</div></a>
<a class="item" data-index="7"><img src="173.jpg" alt="Photo 8"><div class="caption">Photo 8</div></a>
<a class="item" data-index="8"><img src="174.jpg" alt="Photo 9"><div class="caption">Photo 9</div></a>
<a class="item" data-index="9"><img src="175.jpg" alt="Photo 10"><div class="caption">Photo 10</div></a>
<a class="item" data-index="10"><img src="176.jpg" alt="Photo 11"><div class="caption">Photo 11</div></a>
<a class="item" data-index="11"><img src="177.jpg" alt="Photo 12"><div class="caption">Photo 12</div></a>
<a class="item" data-index="12"><img src="178.jpg" alt="Photo 13"><div class="caption">Photo 13</div></a>
<a class="item" data-index="13"><img src="179.jpg" alt="Photo 14"><div class="caption">Photo 14</div></a>
<a class="item" data-index="14"><img src="180.jpg" alt="Photo 15"><div class="caption">Photo 15</div></a>
<a class="item" data-index="15"><img src="181.jpg" alt="Photo 16"><div class="caption">Photo 16</div></a>
<a class="item" data-index="16"><img src="182.jpg" alt="Photo 17"><div class="caption">Photo 17</div></a>
<a class="item" data-index="17"><img src="183.jpg" alt="Photo 18"><div class="caption">Photo 18</div></a>

</div>
</div>

<!-- Modal -->
<div class="modal" id="modal">
<button class="nav-btn nav-left" id="prevBtn">❮</button>

<div class="modal-content">
<button class="close" id="closeBtn">✕</button>
<img id="modalImage" class="modal-img">
<div class="modal-row">
<div class="modal-info" id="modalCaption"></div>
<button class="btn" id="downloadBtn">⬇ Download</button>
</div>
</div>

<button class="nav-btn nav-right" id="nextBtn">❯</button>
</div>

<script>
(function(){
const items = [...document.querySelectorAll(".item")];
const modal = document.getElementById("modal");
const modalImage = document.getElementById("modalImage");
const modalCaption = document.getElementById("modalCaption");
const closeBtn = document.getElementById("closeBtn");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const downloadBtn = document.getElementById("downloadBtn");

const largeUrls = [
"166.jpg","167.jpg","168.jpg","169.jpg","170.jpg","171.jpg",
"172.jpg","173.jpg","174.jpg","175.jpg","176.jpg","177.jpg",
"178.jpg","179.jpg","180.jpg","181.jpg","182.jpg","183.jpg"
];

let current = 0;

function openModal(i){
  current = i;
  modalImage.src = largeUrls[i];
  modalCaption.textContent = items[i].querySelector(".caption").textContent;
  modal.classList.add("open");
  document.body.style.overflow="hidden";
}

function closeModal(){
  modal.classList.remove("open");
  document.body.style.overflow="";
}

function showNext(d=1){
  current = (current + d + items.length) % items.length;
  openModal(current);
}

items.forEach((el,i)=>el.addEventListener("click",()=>openModal(i)));

closeBtn.onclick = closeModal;
prevBtn.onclick = ()=>showNext(-1);
nextBtn.onclick = ()=>showNext(1);

modal.addEventListener("click",e=>{
  if(e.target===modal) closeModal();
});

document.addEventListener("keydown",e=>{
  if(!modal.classList.contains("open")) return;
  if(e.key==="Escape") closeModal();
  if(e.key==="ArrowRight") showNext(1);
  if(e.key==="ArrowLeft") showNext(-1);
});

downloadBtn.addEventListener("click",()=>{
  const a=document.createElement("a");
  a.href = modalImage.src;
  a.download = modalCaption.textContent.replace(/\s+/g,"-")+".jpg";
  a.click();
});
})();
</script>

</body>
  </html>
