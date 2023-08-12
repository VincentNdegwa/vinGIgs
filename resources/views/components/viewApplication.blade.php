 @props(['application'])

 @if ($application)
     <div class="overlay-applicants">
         <button onclick="CloseOverlay()" class="exit-btn">Exit</button>

         <div class="overlay-holder applicants-details">
             @foreach ($application as $item)
                 <div class="peronal-details">
                     <div class="detials-item">
                         <span>
                             Job Role
                         </span>
                         <p>{{ $item->job_tittle }}</p>
                     </div>

                     <div class="detials-item">
                         <span>
                             Date Applied
                         </span>
                         <p>{{ $item->created_at->diffForHumans() }}</p>
                     </div>

                     <div class="detials-item">
                         <span>
                             Job Applicant
                         </span>
                         <div class="job-names">
                             <span>
                                 <p>Name: {{ $item->name }}</p>
                             </span>
                             <span>
                                 <p>Email: {{ $item->email }}</p>
                             </span>
                         </div>
                     </div>

                     <div class="detials-item">
                         <span>
                             APplicant's CV
                         </span>
                         <p>
                             <a class="cv-applicant" href="{{ asset('storage/' . $item->cv_path) }}"
                                 download="{{ $item->name . '-' . $item->job_tittle }}">Download CV</a>

                         </p>
                     </div>

                     <div class="detials-item">
                         <span>
                             Job Status
                         </span>
                         <p>{{ $item->status }}</p>
                     </div>
                 </div>

                 <div class="applicant-text">
                     <span>Letter From Applicant</span>
                     <p>{{ $item->text }}</p>
                 </div>

                 <div class="application-functions">
                     <div class="detials-item">
                         <span>
                             Job Tags
                         </span>
                         <div class="job-data">
                             @foreach (explode(',', $item->tags) as $tag)
                                 <span>
                                     <p>{{ $tag }}</p>
                                 </span>
                             @endforeach
                         </div>
                     </div>
                     <div class="detials-item">
                         <span>
                             Job Description
                         </span>
                         <p class="job-description">{{ $item->description }}</p>
                     </div>


                     <div class="detials-item application-btns-holder">

                         <button class="application-btns reject"><a href="/application/reject/{{ $item->application_id }}">Reject</a></button>
                         <button class="application-btns accept"><a href="/application/accept/{{ $item->application_id }}">Accept</a></button>

                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 @endif
