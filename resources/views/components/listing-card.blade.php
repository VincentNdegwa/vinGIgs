 @props(['item'])
 <a href="/list/{{ $item->id }}" class="item-holder">
     <div class="item-img">
         @php
             $userData = $item->userTable;
             
             if ($userData && isset($userData->profile_path)) {
                 $imagePath = asset('storage/' . $userData->profile_path);
             } else {
                 $imagePath = asset('images/product.jpeg');
             }
         @endphp

         <img src="{{ $imagePath }}" alt="">
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
