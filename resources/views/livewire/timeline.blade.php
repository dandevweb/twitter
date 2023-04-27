<div class="mt-10 text-lg text-white">

    @foreach ($tweets as $tweet)
        <div>
            {{ $loop->index }} . {{ $tweet->body }}
        </div>
    @endforeach

    <div x-data="{
        infinityScroll() {
            const observer = new IntersectionObserver((items) => {
                items.forEach((item) => {
                    if (item.isIntersecting) {
                        @this.loadMore();
                    }
                }, {
                    threshhold: 0.5, //0....1
                    rootMargin: '100px'
                })
            })
            observer.observe($el)
        }
    }" x-init="infinityScroll()">

    </div>

</div>
