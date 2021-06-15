<div class="max-w-xs mx-auto mt-10">
    <div class="bg-white p-5 modal__content rounded">
        <div class="modal__header mb-4">
            <div class="p-2 rounded-full bg-purple-lightest inline-block">
                <i class="fas fa-comments text-2xl text-purple-dark"></i>
            </div>
        </div>
        <div class="modal__body">
            <p class="text-grey-darkest font-medium mb-1 text-base"> Leave a Comment</p>
            <small class="text-grey-dark tracking-wide font-light"> Type your Comment Below</small>
            <form wire:submit.prevent="addComment">
                <div class="mt-4 border border-grey w-full border-1 rounded p-2 mb-2 relative focus:border-red">
                    <input type="text"
                           class="pl-8 text-grey-dark font-light w-full text-sm font-medium tracking-wide"
                           placeholder="Type your commnet..." wire:model.lazy="newComment">

                </div>
                <div class="text-right">
                    <button type="submit" class="bg-purple text-white border-2 border-purple p-3 rounded text-sm font-semi hover:bg-purple-dark hover:border-purple-dark">
                        Submit
                    </button>
                </div>
            </form>
            <div class="mt-6  border"></div>
            @foreach($comments as $comment)
                <div class="flex relative mt-6">
                    <i class="fas fa-globe text-grey-dark"></i>
                    <div class=" ml-2 ">
                        <p class="font-medium text-sm text-grey-darkest font-semibold">{{ $comment->user->name }}</p>
                        <small class="text-grey-dark text-xs ">{{ $comment->body }}</small><br>
                        <small>{{ $comment->created_at->diffForHumans() }}</small>
                    </div>
                    <i class="fas fa-toggle-on fa-2x ml-auto text-blue"></i>
                </div>
            @endforeach
        </div>
        <div class="modal__footer mt-6">

        </div>
    </div>
</div>

