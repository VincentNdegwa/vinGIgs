 @props(['item'])
 <a href="/list/{{ $item->id }}" class="item-holder">
     <div class="item-img">
         <img src="/images/product.jpeg" alt="">
     </div>
     <div class="list-item">
         <h6>{{ $item->title }}</h6>
         <div class="company-det">
             <p>{{ $item->company }}</p>
         </div>
         <div class="tag">
             <p class="tag-header">Tags</p>
             <p class="tag-header-desc">{{ $item->tags }}</p>
         </div>
     </div>
 </a>
