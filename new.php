<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Latest</title>
<style>
:root{
  --gap:12px;
  --thumb-height:140px;
  --bg:#0f1724;
  --card:#fff;
}
*{box-sizing:border-box}

body{
  font-family:system-ui,-apple-system,Segoe UI,Roboto,'Helvetica Neue',Arial;
  background:var(--bg);
  color:#e6eef8;
  margin:0;
  min-height:100vh;
  display:flex;
  align-items:flex-start;
  justify-content:center;
  padding:28px;
}

.container{width:100%;max-width:1100px}
h1{margin:0 0 18px;font-size:20px;font-weight:600;color:var(--card)}

/* Gallery */
.gallery{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:var(--gap);
}
@media (max-width:900px){.gallery{grid-template-columns:repeat(2,1fr)}}
@media (max-width:520px){.gallery{grid-template-columns:repeat(1,1fr)}}

/* Thumbnails */
.thumb{
  background:linear-gradient(180deg,rgba(255,255,255,0.02),rgba(255,255,255,0.01));
  border-radius:10px;
  overflow:hidden;
  box-shadow:0 2px 8px rgba(2,6,23,0.6);
  cursor:pointer;
  transition:transform .16s ease,box-shadow .16s ease;
  height:var(--thumb-height);
  display:block;
  position:relative;
}
.thumb:hover{
  transform:translateY(-6px) scale(1.01);
  box-shadow:0 8px 20px rgba(2,6,23,0.75);
}
.thumb img{
  width:100%;height:100%;object-fit:cover;display:block;
}

.caption{
  position:absolute;
  left:8px;right:8px;bottom:8px;
  background:linear-gradient(180deg,rgba(0,0,0,0),rgba(0,0,0,0.45));
  color:#fff;
  padding:6px 8px;
  border-radius:8px;
  font-size:12px;
  backdrop-filter:blur(2px);
}

/* Modal */
.modal{
  position:fixed;
  inset:0;
  display:none;
  align-items:center;
  justify-content:center;
  background:rgba(5,7,11,0.7);
  z-index:9999;
  padding:28px;
}
.modal.open{display:flex}

.viewer{
  max-width:1100px;
  width:100%;
  max-height:90vh;
  display:flex;
  flex-direction:column;
  gap:12px;
  align-items:center;
}
.viewer img{
  max-width:100%;
  max-height:78vh;
  border-radius:12px;
  box-shadow:0 14px 40px rgba(2,6,23,0.8);
}

.meta{
  display:flex;
  align-items:center;
  justify-content:space-between;
  width:100%;
}
.controls{display:flex;gap:8px}
.btn{
  background:rgba(255,255,255,0.06);
  border:1px solid rgba(255,255,255,0.1);
  padding:8px 10px;
  border-radius:8px;
  color:#fff;
  cursor:pointer;
}
.btn:active{transform:translateY(1px)}

.sr-only{
  position:absolute;height:1px;width:1px;overflow:hidden;
  clip:rect(1px,1px,1px,1px);white-space:nowrap;
}
</style>
</head>

<body>
<div class="container">
  <h1>Latest</h1>

  <div class="gallery" id="gallery">

    <!-- Your thumbnails – no change except fixing typos -->
    <!-- (I will not repeat comments to keep code clean) -->

    <a class="thumb" data-full="IMG0.jpg" data-title="image 1">
      <img src="IMG0.jpg" alt="image 1">
      <div class="caption">image 1</div>
    </a>

    <a class="thumb" data-full="IMG1.jpg" data-title="image 2">
      <img src="IMG1.jpg" alt="image 2">
      <div class="caption">image 2</div>
    </a>

    <a class="thumb" data-full="IMG2.jpg" data-title="image 3">
      <img src="IMG2.jpg" alt="image 3">
      <div class="caption">image 3</div>
    </a>

    <a class="thumb" data-full="IMG3.jpg" data-title="image 4">
      <img src="IMG3.jpg" alt="image 4">
      <div class="caption">image 4</div>
    </a>

    <a class="thumb" data-full="IMG4.jpg" data-title="image 5">
      <img src="IMG4.jpg" alt="image 5">
      <div class="caption">image 5</div>
    </a>

    <a class="thumb" data-full="IMG5.jpg" data-title="image 6">
      <img src="IMG5.jpg" alt="image 6">
      <div class="caption">image 6</div>
    </a>

    <a class="thumb" data-full="IMG6.jpg" data-title="image 7">
      <img src="IMG6.jpg" alt="image 7">
      <div class="caption">image 7</div>
    </a>

    <a class="thumb" data-full="IMG7.jpg" data-title="image 8">
      <img src="IMG7.jpg" alt="image 8">
      <div class="caption">image 8</div>
    </a>

    <a class="thumb" data-full="IMG8.jpg" data-title="image 9">
      <img src="IMG8.jpg" alt="image 9">
      <div class="caption">image 9</div>
    </a>

    <a class="thumb" data-full="IMG9.jpg" data-title="image 10">
      <img src="IMG9.jpg" alt="image 10">
      <div class="caption">image 10</div>
    </a>

    <a class="thumb" data-full="IMG10.jpg" data-title="image 11">
      <img src="IMG10.jpg" alt="image 11">
      <div class="caption">image 11</div>
    </a>

    <a class="thumb" data-full="IMG11.jpg" data-title="image 12">
      <img src="IMG11.jpg" alt="image 12">
      <div class="caption">image 12</div>
    </a>

    <a class="thumb" data-full="IMG12.jpg" data-title="image 13">
      <img src="IMG12.jpg" alt="image 13">
      <div class="caption">image 13</div>
    </a>

    <a class="thumb" data-full="IMG13.jpg" data-title="image 14">
      <img src="IMG13.jpg" alt="image 14">
      <div class="caption">image 14</div>
    </a>

    <a class="thumb" data-full="IMG14.jpg" data-title="image 15">
      <img src="IMG14.jpg" alt="image 15">
      <div class="caption">image 15</div>
    </a>

    <a class="thumb" data-full="IMG15.jpg" data-title="image 16">
      <img src="IMG15.jpg" alt="image 16">
      <div class="caption">image 16</div>
    </a>

    <a class="thumb" data-full="IMG16.jpg" data-title="image 17">
      <img src="IMG16.jpg" alt="image 17">
      <div class="caption">image 17</div>
    </a>

    <a class="thumb" data-full="IMG17.jpg" data-title="image 18">
      <img src="IMG17.jpg" alt="image 18">
      <div class="caption">image 18</div>
    </a>

    <a class="thumb" data-full="IMG18.jpg" data-title="image 19">
      <img src="IMG18.jpg" alt="image 19">
      <div class="caption">image 19</div>
    </a>

    <a class="thumb" data-full="IMG19.jpg" data-title="image 20">
      <img src="IMG19.jpg" alt="image 20">
      <div class="caption">image 20</div>
    </a>

    <a class="thumb" data-full="IMG20.jpg" data-title="image 21">
      <img src="IMG20.jpg" alt="image 21">
      <div class="caption">image 21</div>
    </a>

    <a class="thumb" data-full="IMG21.jpg" data-title="image 22">
      <img src="IMG21.jpg" alt="image 22">
      <div class="caption">image 22</div>
    </a>

    <a class="thumb" data-full="IMG22.jpg" data-title="image 23">
      <img src="IMG22.jpg" alt="image 23">
      <div class="caption">image 23</div>
    </a>

    <a class="thumb" data-full="IMG23.jpg" data-title="image 24">
      <img src="IMG23.jpg" alt="image 24">
      <div class="caption">image 24</div>
    </a>

    <a class="thumb" data-full="IMG24.jpg" data-title="image 25">
      <img src="IMG24.jpg" alt="image 25">
      <div class="caption">image 25</div>
    </a>

    <a class="thumb" data-full="IMG25.jpg" data-title="26">
      <img src="IMG25.jpg" alt="26">
      <div class="caption">26</div>
    </a>

    <a class="thumb" data-full="IMG26.jpg" data-title="27">
      <img src="IMG26.jpg" alt="27">
      <div class="caption">27</div>
    </a>

    <a class="thumb" data-full="IMG27.jpg" data-title="28">
      <img src="IMG27.jpg" alt="28">
      <div class="caption">28</div>
    </a>

    <a class="thumb" data-full="IMG28.jpg" data-title="29">
      <img src="IMG28.jpg" alt="29">
      <div class="caption">29</div>
    </a>

    <a class="thumb" data-full="IMG29.jpg" data-title="30">
      <img src="IMG29.jpg" alt="30">
      <div class="caption">30</div>
    </a>

    <a class="thumb" data-full="IMG30.jpg" data-title="31">
      <img src="IMG30.jpg" alt="31">
      <div class="caption">31</div>
    </a>

    <a class="thumb" data-full="IMG31.jpg" data-title="32">
      <img src="IMG31.jpg" alt="32">
      <div class="caption">32</div>
    </a>

    <a class="thumb" data-full="IMG32.jpg" data-title="33">
      <img src="IMG32.jpg" alt="33">
      <div class="caption">33</div>
    </a>

    <a class="thumb" data-full="IMG33.jpg" data-title="34">
      <img src="IMG33.jpg" alt="34">
      <div class="caption">34</div>
    </a>

    <a class="thumb" data-full="IMG34.jpg" data-title="35">
      <img src="IMG34.jpg" alt="35">
      <div class="caption">35</div>
    </a>

    <a class="thumb" data-full="IMG35.jpg" data-title="36">
      <img src="IMG35.jpg" alt="36">
      <div class="caption">36</div>
    </a>

    <a class="thumb" data-full="IMG36.jpg" data-title="37">
      <img src="IMG36.jpg" alt="37">
      <div class="caption">37</div>
    </a>

    <a class="thumb" data-full="IMG37.jpg" data-title="38">
      <img src="IMG37.jpg" alt="38">
      <div class="caption">38</div>
    </a>

    <a class="thumb" data-full="IMG38.jpg" data-title="39">
      <img src="IMG38.jpg" alt="39">
      <div class="caption">39</div>
  </a>

    <a class="thumb" data-full="su1.jpg" data-title="40">
      <img src="su1.jpg" alt="40">
      <div class="caption">40</div>
    </a>

    <a class="thumb" data-full="su2.jpg" data-title="41">
      <img src="su2.jpg" alt="41">
      <div class="caption">41</div>
    </a>

    <a class="thumb" data-full="su3.jpg" data-title="42">
      <img src="su3.jpg" alt="42">
      <div class="caption">42</div>
    </a>

    <a class="thumb" data-full="su4.jpg" data-title="43">
      <img src="su4.jpg" alt="43">
      <div class="caption">43</div>
    </a>
    
    <a class="thumb" data-full="su5.jpg" data-title="44">
      <img src="su5.jpg" alt="44">
      <div class="caption">44</div>
    </a>

    <a class="thumb" data-full="su6.jpg" data-title="45">
      <img src="su6.jpg" alt="45">
      <div class="caption">45</div>
    </a>

    <a class="thumb" data-full="su7.jpg" data-title="46">
      <img src="su7.jpg" alt="46">
      <div class="caption">46</div>
    </a>

    <a class="thumb" data-full="su8.jpg" data-title="47">
      <img src="su8.jpg" alt="47">
      <div class="caption">47</div>
        </a>

    <a class="thumb" data-full="su9.jpg" data-title="48">
      <img src="su9.jpg" alt="48">
      <div class="caption">48</div>
    </a>

    <a class="thumb" data-full="su10.jpg" data-title="49">
      <img src="su10.jpg" alt="49">
      <div class="caption">49</div>
    </a>

    <a class="thumb" data-full="su11.jpg" data-title="50">
      <img src="su11.jpg" alt="50">
      <div class="caption">50</div>
    </a>

    <a class="thumb" data-full="su12.jpg" data-title="51">
      <img src="su12.jpg" alt="51">
      <div class="caption">51</div>
    </a>
<a class="thumb" data-full="su13.jpg" data-title="52">
      <img src="su5.jpg" alt="52">
      <div class="caption">52</div>
    </a>

    <a class="thumb" data-full="su14.jpg" data-title="53">
      <img src="su14.jpg" alt="53">
      <div class="caption">53</div>
    </a>

    <a class="thumb" data-full="su15.jpg" data-title="54">
      <img src="su15.jpg" alt="54">
      <div class="caption">54</div>
    </a>

    <a class="thumb" data-full="su16.jpg" data-title="55">
      <img src="su16.jpg" alt="55">
      <div class="caption">55</div>
    </a>
    

    <a class="thumb" data-full="su17.jpg" data-title="56">
      <img src="su17.jpg" alt="56">
      <div class="caption">56</div>
    </a>

    <a class="thumb" data-full="su18.jpg" data-title="57">
      <img src="su18.jpg" alt="57">
      <div class="caption">57</div>
    </a>

    <a class="thumb" data-full="su19.jpg" data-title="58">
      <img src="su19.jpg" alt="58">
      <div class="caption">58</div>
    </a>

    <a class="thumb" data-full="su20.jpg" data-title="59">
      <img src="su20.jpg" alt="59">
      <div class="caption">59</div>
    </a>
    
    <a class="thumb" data-full="su21.jpg" data-title="60">
      <img src="su21.jpg" alt="60">
      <div class="caption">60</div>
    </a>

    <a class="thumb" data-full="su22.jpg" data-title="61">
      <img src="su22.jpg" alt="61">
      <div class="caption">61</div>
    </a>

    <a class="thumb" data-full="su23.jpg" data-title="62">
      <img src="su23.jpg" alt="62">
      <div class="caption">62</div>
    </a>

    <a class="thumb" data-full="su24.jpg" data-title="63">
      <img src="su24.jpg" alt="63">
      <div class="caption">63</div>
        </a>

    <a class="thumb" data-full="su25.jpg" data-title="64">
      <img src="su25.jpg" alt="64">
      <div class="caption">64</div>
    </a>

    <a class="thumb" data-full="su26.jpg" data-title="65">
      <img src="su26.jpg" alt="65">
      <div class="caption">65</div>
    </a>

    <a class="thumb" data-full="su27.jpg" data-title="66">
      <img src="su27.jpg" alt="66">
      <div class="caption">66</div>
    </a>

    <a class="thumb" data-full="su28.jpg" data-title="67">
      <img src="su28.jpg" alt="67">
      <div class="caption">67</div>
    </a>
<a class="thumb" data-full="su29.jpg" data-title="68">
      <img src="su29.jpg" alt="68">
      <div class="caption">68</div>
    </a>
  </div>
</div>

<!-- Modal -->
<div class="modal" id="modal" aria-hidden="true">
  <div class="viewer">
    <img id="modalImg" src="" alt="">
    <div class="meta">
      <div class="title" id="modalTitle"></div>

      <div class="controls">
        <button class="btn" id="prevBtn">◀</button>
        <button class="btn" id="nextBtn">▶</button>
        <button class="btn" id="closeBtn">✕</button>
      </div>
    </div>
  </div>
</div>

<script>
(function(){

  const thumbs = Array.from(document.querySelectorAll('.thumb'));
  const modal = document.getElementById('modal');
  const modalImg = document.getElementById('modalImg');
  const modalTitle = document.getElementById('modalTitle');
  const closeBtn = document.getElementById('closeBtn');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  let currentIndex = -1;

  function openAt(index){
    const t = thumbs[index];
    if(!t) return;

    modalImg.src = t.dataset.full;
    modalTitle.textContent = t.dataset.title || '';
    currentIndex = index;

    modal.classList.add('open');
    modal.setAttribute('aria-hidden','false');
    closeBtn.focus();
  }

  function closeModal(){
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden','true');
    modalImg.src = '';
    currentIndex = -1;
  }

  function showNext(delta){
    if(currentIndex === -1) return;
    let idx = currentIndex + delta;

    if(idx < 0) idx = thumbs.length - 1;
    if(idx >= thumbs.length) idx = 0;

    openAt(idx);
  }

  thumbs.forEach((t,i)=>{
    t.setAttribute('tabindex','0');

    t.addEventListener('click', ()=> openAt(i));

    t.addEventListener('keydown', e=>{
      if(e.key === 'Enter' || e.key === ' '){
        e.preventDefault();
        openAt(i);
      }
    });

    // pre-load full image
    t.addEventListener('pointerenter', ()=>{
      const img = new Image();
      img.src = t.dataset.full;
    });
  });

  closeBtn.addEventListener('click', closeModal);
  prevBtn.addEventListener('click', ()=> showNext(-1));
  nextBtn.addEventListener('click', ()=> showNext(1));

  modal.addEventListener('click', e=>{
    if(e.target === modal) closeModal();
  });

  document.addEventListener('keydown', e=>{
    if(!modal.classList.contains('open')) return;

    if(e.key === 'Escape') closeModal();
    if(e.key === 'ArrowRight') showNext(1);
    if(e.key === 'ArrowLeft') showNext(-1);
  });

})();
</script>

</body>
  </html>
  
