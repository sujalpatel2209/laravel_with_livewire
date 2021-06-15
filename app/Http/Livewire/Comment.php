<?php

namespace App\Http\Livewire;

use App\Models\CommentModel;
use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{

    public $newComment, $comments;

    public function addComment()
    {
        $this->validate([
            'newComment' => 'required|max:190'
        ]);

        $createdCommnet = CommentModel::create([
            'user_id' => 1,
            'body' => $this->newComment,
        ]);
        $this->comments->prepend($createdCommnet);
        $this->newComment = '';
    }

    public function remove($id)
    {
        dd($id);
    }

    public function mount()
    {
        $initialComment = CommentModel::latest()->get();
        $this->comments = $initialComment;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'newComment' => 'required|max:190'
        ]);
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
