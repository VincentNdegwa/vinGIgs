<article>
    <form action="/search" method="POST" class="search_form">
         @csrf
        <label>
            <input type="text" placeholder="title,description,tag" name="listing_search">
            <i class='bx bx-search-alt'></i>
        </label>
    </form>
    <script src="{{ asset('/js/search.js') }}"></script>
</article>
